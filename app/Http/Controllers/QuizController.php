<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 use Illuminate\Support\Facades\DB;
class QuizController extends Controller
{
    /**
     * Tampilkan quiz berdasarkan level
     */
    public function show(Level $level)
    {
        $user = Auth::user();

        // 🔐 KUNCI QUIZ JIKA MATERI BELUM DIBACA
        if (!$user->hasCompletedAllMaterials($level)) {
            return redirect("/level/{$level->id}")
                ->with('error', '❌ Selesaikan semua materi terlebih dahulu');
        }



        $quizzes = $level->quizzes;

        if ($quizzes->isEmpty()) {
            return back()->with('error', 'Quiz belum tersedia');
        }

        return view('quiz.show', compact('level', 'quizzes'));

        // 🔒 KUNCI JIKA QUIZ SUDAH PERFECT
        if ($user->hasPerfectQuiz($level)) {
            return redirect("/level/{$level->id}")
                ->with('success', '✅ Quiz sudah diselesaikan sempurna');
        }
    }

   


    public function submit(Request $request, Level $level)
{
    $user = Auth::user();
    $quizzes = $level->quizzes;

    $totalQuestions = $quizzes->count();
    $correct = 0;
    $wrong = 0;

    foreach ($quizzes as $quiz) {
        $answer = $request->input('quiz_' . $quiz->id);

        if (!$answer) {
            continue; // jaga-jaga
        }

        if (strtoupper($answer) === strtoupper($quiz->correct_answer)) {
            $correct++;
        } else {
            $wrong++;
        }
    }

    $score = $totalQuestions > 0
        ? round(($correct / $totalQuestions) * 100)
        : 0;

    $passed = $score >= 70;

    $user->levels()->syncWithoutDetaching([
        $level->id => [
            'score'        => $score,
            'quiz_passed'  => $passed,
            'completed_at' => $passed ? now() : null,
        ]
    ]);

    return redirect('/level')->with([
        $passed ? 'success' : 'error' =>
            $passed
                ? "🎉 Quiz Lulus! Score: {$score}"
                : "❌ Quiz Belum Lulus. Score: {$score}",

        'quiz_result' => [
            'correct' => $correct,
            'wrong'   => $wrong,
            'total'   => $totalQuestions,
            'score'   => $score,
        ]
    ]);
}




}

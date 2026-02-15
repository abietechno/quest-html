<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\{
    WelcomeController,
    DashboardController,
    LevelController,
    RunCodeController,
    ScoreController,
    AvatarController,
    AboutController,    
};

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/login', function () {
    return redirect('/auth/google');
})->name('login');

Route::get('/auth/google', [GoogleController::class, 'redirect']);
Route::get('/auth/google/callback', [GoogleController::class, 'callback']);
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout');

// Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware('auth')->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');



Route::get('/level', [LevelController::class, 'index'])->name('level.index');

Route::middleware('auth')->group(function () {

    Route::get('/level/{level}', [LevelController::class, 'show'])->name('level.show');
      
     Route::get('/levels', [LevelController::class, 'index'])
        ->name('levels.index');

    Route::get('/level/{level}/quiz', [QuizController::class, 'show'])
    ->name('quiz.show');
    Route::post('/level/{level}/quiz', [QuizController::class, 'submit'])
    ->name('quiz.submit'); 

    Route::get(
        '/level/{level}/material/{material}',
        [MaterialController::class, 'show']
    )->name('material.show');


    Route::post('/level/{level}/read-material', function (\App\Models\Level $level) {
        $user = auth()->user();


        return back()->with('success', '✅ Materi ditandai sudah dibaca');
    })->middleware('auth');


    Route::get('/scores', [ScoreController::class, 'index'])
        ->name('scores.index');
});


Route::post('/material/{material}/complete',
    [MaterialController::class, 'complete']
)->middleware('auth')->name('material.complete');


Route::get('/run-code', [RunCodeController::class, 'index'])->name('run-code.index');

Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::middleware('auth')->group(function () {
    Route::get('/avatar', [AvatarController::class, 'edit'])->name('avatar.edit');
    Route::post('/avatar', [AvatarController::class, 'update'])->name('avatar.update');
});

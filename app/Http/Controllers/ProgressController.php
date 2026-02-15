<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Support\Facades\Auth;

class ProgressController extends Controller
{

    public function complete(Level $level)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();


        if ($user->levels()->where('level_id', $level->id)->exists()) {
            return back()->with('info', 'Level sudah diselesaikan.');
        }

        $user->levels()->attach($level->id, [
            'score' => 100,
            'completed_at' => now(),
        ]);

        
        return redirect('/score')->with('success', 'Level selesai! Skor bertambah 🎉');
    }


    

}

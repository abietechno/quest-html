<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;
use Illuminate\Support\Facades\Auth;


class LevelController extends Controller
{
    public function index()
    {   
        /** @var \App\Models\User $user */
        $user = Auth::user()->load(['levels', 'materials']); 
        // Cache data Level & Materials selama 60 menit karena jarang berubah
        $levels = \Illuminate\Support\Facades\Cache::remember('levels_with_materials', 60 * 60, function () {
            return Level::with('materials')->orderBy('order')->get();
        });
        

        return view('level.index', compact('levels', 'user'));
    }


    public function show(Level $level)
    {
        abort_if(
            !auth()->user()->canAccessLevel($level),
            403,
            'Selesaikan level sebelumnya dulu 🔒'
        );

        return view('level.show', compact('level'));
    }




    


}

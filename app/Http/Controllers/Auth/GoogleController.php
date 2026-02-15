<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::where('email', $googleUser->email)->first();

        if ($user) {
            // User lama → JANGAN timpa avatar
            $user->update([
                'name' => $googleUser->name,
                'google_id' => $googleUser->id,
            ]);
        } else {
            // User baru → set avatar default lokal
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_id' => $googleUser->id,
                'avatar' => 'default.png', // avatar awal
            ]);
        }

        Auth::login($user);

        return redirect('/dashboard');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

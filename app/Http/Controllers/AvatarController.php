<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AvatarController extends Controller
{
    public function edit()
    {
        $avatars = [
            '1.png',
            '2.png',
            '3.png',
            '4.png',
            '5.png',
            '6.png',
            '7.png',
            '8.png',
            '9.png',
            '10.png',
            '11.png',
            '12.png',
            '13.png',
            '14.png',
            '15.png',
            '16.png',
            '17.png',
            '18.png',
            '19.png',
            '20.png',
            '21.png',
            '22.png',
            '23.png',
            '24.png',
            '25.png',
            '26.png',
            
        ];

        return view('avatar.edit', compact('avatars'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'avatar' => 'required|string',
            'name' => 'required|string|max:255',
        ]);

        /** @var User $user */
        $user = Auth::user();

        $user->update([
            'avatar' => $request->avatar,
            'name'   => $request->name,
        ]);

        return redirect('/dashboard')->with('success', 'Profil berhasil diperbarui 🎉');
    }
}

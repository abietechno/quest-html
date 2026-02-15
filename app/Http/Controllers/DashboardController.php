<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            // User login → progres permanen
            return view('dashboard', [
                'mode' => 'user'
            ]);
        }

        // Guest → progres sementara (session)
        return view('dashboard', [
            'mode' => 'guest'
        ]);
    }
}

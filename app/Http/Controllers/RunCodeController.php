<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RunCodeController extends Controller
{
    public function index()
    {
        return view('run-code.index');
    }
}

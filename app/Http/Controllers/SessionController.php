<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function logout()
    {
        auth()->logout();

        return redirect('/')->with('Logged out');
    }
}

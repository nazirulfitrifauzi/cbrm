<?php

namespace App\Http\Controllers;

use Auth;

class RedirectController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            return redirect('home');
        } else {
            return view('auth.login');
        }
    }
}

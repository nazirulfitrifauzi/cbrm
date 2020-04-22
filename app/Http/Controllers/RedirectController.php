<?php

namespace App\Http\Controllers;

use Auth;

class RedirectController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            if (auth()->user()->submit === '1') {
                return redirect('status');
            } else {
                return redirect('home');
            }
        } else {
            return view('auth.login');
        }
    }
}

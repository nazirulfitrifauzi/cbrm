<?php

namespace App\Http\Controllers;

use Auth;

class RedirectController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            if (auth()->user()->submit === '1' && auth()->user()->scheme_code == '1130') {
                return redirect('cbrm-status');
            } elseif (auth()->user()->submit === '1' && auth()->user()->scheme_code == '1131') {
                return redirect('mobile-status');
            } else {
                if (auth()->user()->scheme_code == '1130') {
                    return redirect('cbrm');
                } elseif (auth()->user()->scheme_code == '1131') {
                    return redirect('mobile');
                } elseif (is_null(auth()->user()->scheme_code)) {
                    return redirect('home');
                }
            }
        } else {
            return view('auth.login');
        }
    }

    public function home()
    {
        if (auth()->user()->scheme_code == '1130') {
            return redirect('cbrm');
        } elseif (auth()->user()->scheme_code == '1131') {
            return redirect('mobile');
        } elseif (is_null(auth()->user()->scheme_code)) {
            return view('landing');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Auth;

class RedirectController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            return redirect('home');
            //return redirect('https://fas.tekun.gov.my/tekunonline/pendaftaran/permohonanOnline/indexbaru.cfm?mode_produk=1');
        } else {
            return view('auth.login');
        }
    }
}

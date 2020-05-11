<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    protected function authenticated()
    {
        if (Auth::check()) {
            if (auth()->user()->ic_no == '000000000000') {
                return redirect('admin');
            } else {
                if (auth()->user()->submit === '1' && auth()->user()->scheme_code == '1130') {
                    return redirect('cbrm-status');
                } elseif (auth()->user()->submit === '1' && auth()->user()->scheme_code == '1131') {
                    return redirect('mobile-status');
                } else {
                    if (is_null(auth()->user()->scheme_code)) {
                        return redirect('home');
                    } elseif (auth()->user()->scheme_code == '1130') {
                        return redirect('cbrm');
                    } elseif (auth()->user()->scheme_code == '1131') {
                        return redirect('mobile');
                    }
                }
            }
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

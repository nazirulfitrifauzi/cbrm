<?php

namespace App\Http\Controllers;

use App\Mail\successfulApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $name = auth()->user()->name;
        $email = auth()->user()->email;
        Mail::to($email)->send(new successfulApplication($name));

        return 'Permohonan anda telah berjaya dihantar';
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\successfulApplication;
use App\Models\Peribadi;
use App\Models\Perniagaan;
use App\Models\Pinjaman;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        // $email = auth()->user()->email;
        // $url = 'https://fas.tekun.gov.my/tekunonline/pendaftaran/permohonanOnline/indexbaru.cfm?mode_produk=1&email=';
        // Auth::logout();

        // return redirect($url . '' . $email);

        return view('home');
    }

    public function store(Request $request)
    {
        $name = auth()->user()->name;
        $email = auth()->user()->email;
        Mail::to($email)->send(new successfulApplication($name));

        session()->flash('success');
        return view('status');
    }

    public function storePeribadi(Request $request)
    {
        //
    }

    public function storePerniagaan(Request $request)
    {
        $this->validate($request, [
            'business_name'       => ['required', 'string'],
            'business_activity'   => ['required'],
            'business_address1'   => ['required', 'string'],
            'business_postcode'   => ['required', 'numeric', 'min:5'],
            'business_city'       => ['required', 'string'],
            'business_state'      => ['required', 'string'],
            'business_phone_hp'   => ['required', 'numeric', 'min:10'],
            'business_premise'    => ['required'],
            'business_ownership'  => ['required'],
            'business_modal'      => ['required'],
            'business_open'       => ['required'],
            'business_closed'      => ['required']
        ]);

        $perniagaan = Perniagaan::updateOrCreate([
            'user_id'               => auth()->user()->id
        ], [
            'business_name'         => $request->get('business_name'),
            'business_activity'     => $request->get('business_activity'),
            'business_address1'     => $request->get('business_address1'),
            'business_address2'     => $request->get('business_address2'),
            'business_postcode'     => $request->get('business_postcode'),
            'business_city'         => $request->get('business_city'),
            'business_state'        => $request->get('business_state'),
            'business_phone'        => $request->get('business_phone'),
            'business_phone_hp'     => $request->get('business_phone_hp'),
            'business_premise'      => $request->get('business_premise'),
            'business_ownership'    => $request->get('business_ownership'),
            'business_modal'        => $request->get('business_modal'),
            'business_open'         => $request->get('business_open'),
            'business_closed'       => $request->get('business_closed')
        ]);

        $perniagaan->save();
        $id = auth()->user()->id;
        Perniagaan::where('user_id', $id)->update(['completed' => 1]);

        $this->checkCompleted();

        return redirect('home');
    }

    public function storePinjaman(Request $request)
    {
        $this->validate($request, [
            'purchase_price'        => ['required', 'numeric'],
            'reference_name'        => ['required', 'string'],
            'reference_address1'    => ['required', 'string'],
            'reference_postcode'    => ['required', 'numeric', 'min:5'],
            'reference_city'        => ['required', 'string'],
            'reference_state'       => ['required', 'string'],
            'reference_relation'    => ['required', 'string'],
            'reference_phone'       => ['required', 'numeric', 'min:10']
        ]);

        $pinjaman = Pinjaman::updateOrCreate([
            'user_id'               => auth()->user()->id
        ], [
            'purchase_price'        => $request->get('purchase_price'),
            'reference_name'        => $request->get('reference_name'),
            'reference_address1'    => $request->get('reference_address1'),
            'reference_address2'    => $request->get('reference_address2'),
            'reference_postcode'    => $request->get('reference_postcode'),
            'reference_city'        => $request->get('reference_city'),
            'reference_state'       => $request->get('reference_state'),
            'reference_relation'    => $request->get('reference_relation'),
            'reference_phone'       => $request->get('reference_phone')
        ]);

        $pinjaman->save();
        $id = auth()->user()->id;
        Pinjaman::where('user_id', $id)->update(['completed' => 1]);

        $this->checkCompleted();

        return redirect('home');
    }

    public function checkCompleted()
    {
        $id = auth()->user()->id;
        $peribadi = Peribadi::where('user_id', $id)->value('completed');
        $perniagaan = Perniagaan::where('user_id', $id)->value('completed');
        $pinjaman = Pinjaman::where('user_id', $id)->value('completed');

        if ($pinjaman == 1 && $peribadi == 1 && $perniagaan == 1) {
            User::where('id', $id)->update(['completed' => 1]);
        }
    }
}

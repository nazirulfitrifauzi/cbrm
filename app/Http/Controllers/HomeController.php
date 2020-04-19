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
use Storage;

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
        // dd($request->all());

        $this->validate($request, [
            "tekun_state"               => ['required'],
            "tekun_branch"              => ['required'],
            "business_status"           => ['required'],
            "business_type"             => ['required'],
            "business_sector"           => ['required'],
            "bank1"                     => ['required'],
            "bank1_acct"                => ['required', 'numeric'],
            "bank2"                     => ['required'],
            "bank2_acct"                => ['required', 'numeric'],
            "gambar"                    => ['mimes:jpeg,jpg,png'],
            "name"                      => ['required', 'string'],
            "ic_no"                     => ['required', 'numeric', 'min:12'],
            "gender"                    => ['required'],
            "religion"                  => ['required'],
            "birthdate"                 => ['required'],
            "race"                      => ['required'],
            "age"                       => ['required', 'numeric'],
            "marital"                   => ['required'],
            "dependent"                 => ['required', 'numeric'],
            "oku"                       => ['required'],
            "address1"                  => ['required', 'string'],
            "address2"                  => ['string'],
            "postcode"                  => ['required', 'numeric'],
            "city"                      => ['required', 'string'],
            "state"                     => ['required'],
            "phone_home"                => ['numeric'],
            "phone_hp"                  => ['required', 'numeric'],
            "email"                     => ['required'],
            "profession"                => ['required', 'string'],
            "income"                    => ['required', 'numeric'],
            "employer_phone"            => ['required', 'numeric'],
            "employer_address1"         => ['required', 'string'],
            "employer_postcode"         => ['required', 'numeric'],
            "employer_city"             => ['required', 'string'],
            "employer_state"            => ['required'],
            "spouse_type"               => ['required'],
            "spouse_name"               => ['required', 'string'],
            "spouse_ic_no"              => ['required', 'numeric', 'min:12'],
            "spouse_profession"         => ['required', 'string'],
            "spouse_employer_address1"  => ['required', 'string'],
            "spouse_employer_postcode"  => ['required', 'numeric'],
            "spouse_employer_city"      => ['required', 'string'],
            "spouse_employer_state"     => ['required']
        ]);

        $gambar = $request->file('gambar');
        $gambar_name = auth()->user()->ic_no . '_gambar.' . $gambar->getClientOriginalExtension();
        Storage::disk('local')->putFileAs('public/Pictures', $gambar, $gambar_name);

        $peribadi = Peribadi::updateOrCreate([
            'user_id'               => auth()->user()->id
        ], [
            "tekun_state"               => $request->get('tekun_state'),
            "tekun_branch"              => $request->get('tekun_branch'),
            "business_status"           => $request->get('business_status'),
            "business_type"             => $request->get('business_type'),
            "business_sector"           => $request->get('business_sector'),
            "bank1"                     => $request->get('bank1'),
            "bank1_acct"                => $request->get('bank1_acct'),
            "bank2"                     => $request->get('bank2'),
            "bank2_acct"                => $request->get('bank2_acct'),
            "gambar"                    => $gambar_name,
            "name"                      => $request->get('name'),
            "ic_no"                     => $request->get('ic_no'),
            "ic_old"                    => $request->get('ic_old'),
            "gender"                    => $request->get('gender'),
            "religion"                  => $request->get('religion'),
            "birthdate"                 => $request->get('birthdate'),
            "race"                      => $request->get('race'),
            "age"                       => $request->get('age'),
            "marital"                   => $request->get('marital'),
            "dependent"                 => $request->get('dependent'),
            "oku"                       => $request->get('oku'),
            "address1"                  => $request->get('address1'),
            "address2"                  => $request->get('address2'),
            "postcode"                  => $request->get('postcode'),
            "city"                      => $request->get('city'),
            "state"                     => $request->get('state'),
            "phone_home"                => $request->get('phone_home'),
            "phone_hp"                  => $request->get('phone_hp'),
            "email"                     => $request->get('email'),
            "facebook"                  => $request->get('facebook'),
            "instagram"                 => $request->get('instagram'),
            "profession"                => $request->get('profession'),
            "income"                    => $request->get('income'),
            "employer_phone"            => $request->get('employer_phone'),
            "employer_address1"         => $request->get('employer_address1'),
            "employer_address2"         => $request->get('employer_address2'),
            "employer_postcode"         => $request->get('employer_postcode'),
            "employer_city"             => $request->get('employer_city'),
            "employer_state"            => $request->get('employer_state'),
            "spouse_type"               => $request->get('spouse_type'),
            "spouse_name"               => $request->get('spouse_name'),
            "spouse_ic_no"              => $request->get('spouse_ic_no'),
            "spouse_profession"         => $request->get('spouse_profession'),
            "spouse_employer_address1"  => $request->get('spouse_employer_address1'),
            "spouse_employer_address2"  => $request->get('spouse_employer_address2'),
            "spouse_employer_postcode"  => $request->get('spouse_employer_postcode'),
            "spouse_employer_city"      => $request->get('spouse_employer_city'),
            "spouse_employer_state"     => $request->get('spouse_employer_state'),
        ]);

        $peribadi->save();
        $id = auth()->user()->id;
        Peribadi::where('user_id', $id)->update(['completed' => 1]);

        $this->checkCompleted();

        return redirect('home');
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
            'business_closed'     => ['required']
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

    public function deleteGambar($id)
    {
        $id = auth()->user()->id;
        $file = Peribadi::where('user_id', $id)->value('gambar');

        Peribadi::where('user_id', $id)->update(['gambar' => NULL]);
        unlink(storage_path('app/public/Pictures/' . $file));
    }
}

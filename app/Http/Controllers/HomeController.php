<?php

namespace App\Http\Controllers;

use App\Mail\successfulApplication;
use App\Models\Aktiviti;
use App\Models\Bank;
use App\Models\Cawangan;
use App\Models\Daftar;
use App\Models\Negeri;
use App\Models\Peribadi;
use App\Models\Perniagaan;
use App\Models\Pinjaman;
use App\Models\Sektor;
use App\User;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;
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

        if (auth()->user()->submit == "1") {
            return redirect('status');
        } else {
            return view('home', [
                'negeri' => Negeri::select(['kodnegeri', 'namanegeri'])
                    ->where('kod', '!=', '1')
                    ->orderby('namanegeri', 'ASC')
                    ->get(),

                'cawangan' => Cawangan::where('kodcawangan', '!=', '0000')
                    ->where('batal', '!=', '1')
                    ->orderby('namacawangan', 'ASC')
                    ->get(),

                'sektor' => Sektor::where(function ($q) {
                    $q->where('lain', '1')
                        ->orWhere('sektor', 'Peruncitan')
                        ->orWhere('sektor', 'Perkhidmatan')
                        ->orWhere('sektor', 'Pembuatan')
                        ->orWhere('sektor', 'Kontraktor Kecil')
                        ->orWhere('sektor', 'Tani');
                })->get(),

                'aktiviti' => Aktiviti::where('status', '1')
                    ->orderBy('aktiviti', 'ASC')
                    ->get(),

                'negerix' => Negeri::select(['kodnegeri', 'namanegeri'])
                    ->where('kod', '!=', '1')
                    ->orderby('namanegeri', 'ASC')
                    ->get(),

                'bank' => Bank::where('res', '0')
                    ->orderby('flag', 'DESC')
                    ->get(),
            ]);
        }
    }

    public function getCawangan(Request $request)
    {
        $html = '';
        $cawangan = Cawangan::where('kodnegeri', $request->negeri)->where('batal', '!=', '1')->where('kodcawangan', '!=', '1412')->orderBy('namacawangan', 'ASC')->get();

        $html = '<option value="">Sila Pilih Cawangan</option>';
        foreach ($cawangan as $cawanganx) {
            $html .= '<option value="' . $cawanganx->kodcawangan . '">' . $cawanganx->namacawangan . '</option>';
        }

        return response()->json(['html' => $html]);
    }

    public function getAktiviti(Request $request)
    {
        $html = '';
        $aktiviti = Aktiviti::where('idsektor', $request->sektor)->where('status', '=', '1')->orderBy('Aktiviti', 'ASC')->get();

        $html = '<option value="">Sila Pilih Aktiviti</option>';
        foreach ($aktiviti as $aktivitix) {
            $html .= '<option value="' . $aktivitix->idAktiviti . '">' . $aktivitix->Aktiviti . '</option>';
        }

        return response()->json(['html' => $html]);
    }

    public function store(Request $request)
    {
    }

    public function status()
    {
        if (auth()->user()->completed == 0) {
            return redirect('home');
        }

        if (auth()->user()->completed == 1 && auth()->user()->submit == 0) {
            $clientIP = request()->ip();
            $name = auth()->user()->name;
            $email = auth()->user()->email;
            Mail::to($email)->send(new successfulApplication($name));

            $mob = auth()->user()->peribadi->phone_hp;
            $valid_hp = str_replace('-', '', $mob);
            $valid_hp = '6' . $mob;
            $destination = urlencode($valid_hp);
            $message = 'TEKUN NASIONAL CBRM - Permohonan CBRM anda telah diterima dan sedang diproses.';
            $message = html_entity_decode($message, ENT_QUOTES, 'utf-8');
            $message = urlencode($message);
            $username = urlencode("JPDKTN2018");
            $password = urlencode("jpdkjpdk2018");
            $fp = "https://www.isms.com.my/isms_send.php";
            $fp .= "?un=$username&pwd=$password&dstno=$destination&msg=$message&type=1";
            $http = curl_init($fp);
            curl_setopt($http, CURLOPT_RETURNTRANSFER, TRUE);
            curl_exec($http);
            curl_getinfo($http, CURLINFO_HTTP_CODE);
            curl_close($http);

            session()->flash('success');
            $id = auth()->user()->id;
            User::where('id', $id)->update(['submit' => 1, 'status' => 1, 'client_ip' => $clientIP, 'submit_at' => now()]);

            return redirect('status');
        }

        if (auth()->user()->submit == 1) {
            if (auth()->user()->status == 7) {
                $catatan = User::select('users.*', 'tbl_daftar.catatan')
                    ->whereId(auth()->user()->id)
                    ->join('tbl_daftar', 'tbl_daftar.no_kp', '=', 'users.ic_no')
                    ->first();

                return view('status', compact('catatan'));
            } else {
                return view('status');
            }
        }
    }

    public function storePeribadi(Request $request)
    {
        if (is_null(auth()->user()->peribadi)) {
            $this->validate($request, [
                "tekun_state"               => ['required'],
                "tekun_branch"              => ['required'],
                "business_status"           => ['required'],
                "business_type"             => ['required'],
                "bank1"                     => ['required'],
                "bank1_acct"                => ['required', 'numeric'],
                "gambar"                    => ['required', 'mimes:jpeg,jpg,png'],
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
                "postcode"                  => ['required', 'numeric', 'digits:5'],
                "city"                      => ['required', 'string'],
                "state"                     => ['required', 'alpha'],
                "phone_hp"                  => ['required', 'numeric'],
                "education"                 => ['required'],
                "email"                     => ['required'],
                "profession"                => ['required', 'string'],
                "income"                    => ['required', 'numeric'],
                "employer_name"             => ['required', 'string'],
                "spouse_type"               => ['required'],
                "spouse_name"               => ['required', 'string'],
                "spouse_ic_no"              => ['required', 'numeric', 'min:12'],
                "spouse_profession"         => ['required', 'string']
            ]);
        } else {
            $this->validate($request, [
                "tekun_state"               => ['required'],
                "tekun_branch"              => ['required'],
                "business_status"           => ['required'],
                "business_type"             => ['required'],
                "bank1"                     => ['required'],
                "bank1_acct"                => ['required', 'numeric'],
                "gambar"                    => ['mimes:jpeg,jpg,png', Rule::requiredIf($request->user()->peribadi->gambar == NULL)],
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
                "postcode"                  => ['required', 'numeric', 'digits:5'],
                "city"                      => ['required', 'string'],
                "state"                     => ['required', 'alpha'],
                "phone_hp"                  => ['required', 'numeric'],
                "education"                 => ['required'],
                "email"                     => ['required'],
                "profession"                => ['required', 'string'],
                "income"                    => ['required', 'numeric'],
                "employer_name"             => ['required', 'string'],
                "profession"                => ['required', 'string'],
                "spouse_type"               => ['required'],
                "spouse_name"               => ['required', 'string'],
                "spouse_ic_no"              => ['required', 'numeric', 'min:12'],
                "spouse_profession"         => ['required', 'string']
            ]);
        }

        $ic = auth()->user()->ic_no;

        if (is_null(auth()->user()->peribadi)) { //xde data
            $gambar = $request->file('gambar');
            $gambar_name = auth()->user()->ic_no . '_gambar.' . $gambar->getClientOriginalExtension();
            Storage::disk('custom')->putFileAs('/' . $ic, $gambar, $gambar_name);
        } else { // ada data
            if (is_null(auth()->user()->peribadi->gambar)) { // xde data gambar
                $gambar = $request->file('gambar');
                $gambar_name = auth()->user()->ic_no . '_gambar.' . $gambar->getClientOriginalExtension();
                Storage::disk('custom')->putFileAs('/' . $ic, $gambar, $gambar_name);
            } else { // ade rekod
                $gambar_name = auth()->user()->peribadi->gambar;
            }
        }

        $birthdate = $request->get('birthdate');
        $newBirthdate = Carbon::createFromFormat('d/m/Y', $birthdate)->format('Y-m-d');

        $peribadi = Peribadi::updateOrCreate([
            'user_id'               => auth()->user()->id
        ], [
            "tekun_state"               => $request->get('tekun_state'),
            "tekun_branch"              => $request->get('tekun_branch'),
            "business_status"           => $request->get('business_status'),
            "business_type"             => $request->get('business_type'),
            "bank1"                     => $request->get('bank1'),
            "bank1_acct"                => $request->get('bank1_acct'),
            "gambar"                    => $gambar_name,
            "name"                      => $request->get('name'),
            "ic_no"                     => $request->get('ic_no'),
            "ic_old"                    => $request->get('ic_old'),
            "gender"                    => $request->get('gender'),
            "religion"                  => $request->get('religion'),
            "birthdate"                 => $newBirthdate,
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
            "education"                 => $request->get('education'),
            "email"                     => $request->get('email'),
            "facebook"                  => $request->get('facebook'),
            "instagram"                 => $request->get('instagram'),
            "profession"                => $request->get('profession'),
            "income"                    => $request->get('income'),
            "employer_name"             => $request->get('employer_name'),
            "employer_phone"            => $request->get('employer_phone'),
            "employer_address1"         => $request->get('employer_address1'),
            "employer_address2"         => $request->get('employer_address2'),
            "employer_postcode"         => $request->get('employer_postcode'),
            "employer_city"             => $request->get('employer_city'),
            "employer_state"            => $request->get('employer_state'),
            "spouse_type"               => $request->get('spouse_type'),
            "spouse_name"               => $request->get('spouse_name'),
            "spouse_ic_no"              => $request->get('spouse_ic_no'),
            "spouse_phone"              => $request->get('spouse_phone'),
            "spouse_profession"         => $request->get('spouse_profession'),
            "spouse_employer_address1"  => $request->get('spouse_employer_address1'),
            "spouse_employer_address2"  => $request->get('spouse_employer_address2'),
            "spouse_employer_postcode"  => $request->get('spouse_employer_postcode'),
            "spouse_employer_city"      => $request->get('spouse_employer_city'),
            "spouse_employer_state"     => $request->get('spouse_employer_state'),
        ]);

        $peribadi->save();

        $this->checkPeribadi();

        Session::flash('success', 'Data telah disimpan.');
        Session::flash('nextTab', 'tab2');

        return redirect('home'); //->with('success', 'Data telah disimpan.');
    }

    public function checkPeribadi()
    {
        $id = auth()->user()->id;
        $peribadiArr = Peribadi::select([
            "tekun_state",
            "tekun_branch",
            "business_status",
            "business_type",
            "bank1",
            "bank1_acct",
            "gambar",
            "name",
            "ic_no",
            "gender",
            "religion",
            "birthdate",
            "race",
            "age",
            "marital",
            "dependent",
            "oku",
            "address1",
            "postcode",
            "city",
            "state",
            "phone_hp",
            "education",
            "email",
            "profession",
            "income",
            "employer_name",
            "spouse_type",
            "spouse_name",
            "spouse_ic_no",
            "spouse_profession",
        ])->where('user_id', $id)->get()->toArray();

        $commaList = implode(', ', $peribadiArr[0]);
        $array = explode(' ', $commaList);

        if (in_array(',', $array)) {
            Peribadi::where('user_id', $id)->update(['completed' => 0]);
        } else {
            Peribadi::where('user_id', $id)->update(['completed' => 1]);
        }

        $this->checkCompleted();
    }

    public function storePerniagaan(Request $request)
    {
        $this->validate($request, [
            'business_name'         => ['required', 'string'],
            'business_no'           => ['required'],
            'business_sector'       => ['required'],
            'business_activity'     => ['required'],
            'business_address1'     => ['required', 'string'],
            'business_postcode'     => ['required', 'numeric', 'min:5'],
            'business_city'         => ['required', 'string'],
            'business_state'        => ['required', 'alpha'],
            'business_phone_hp'     => ['required', 'numeric', 'min:10'],
            'business_premise'      => ['required'],
            'business_ownership'    => ['required'],
            'business_modal'        => ['required_if:business_ownership,==,Sendirian Berhad'],
            'business_open'         => ['required'],
            'business_closed'       => ['required'],
            'business_income'       => ['required'],
            'partner_name'          => ['required_if:business_ownership,==,Perkongsian'],
            'partner_ic'            => ['required_if:business_ownership,==,Perkongsian'],
            'partner_address1'      => ['required_if:business_ownership,==,Perkongsian'],
            'partner_postcode'      => ['required_if:business_ownership,==,Perkongsian'],
            'partner_city'          => ['required_if:business_ownership,==,Perkongsian'],
            'partner_state'         => ['required_if:business_ownership,==,Perkongsian'],
        ]);

        $perniagaan = Perniagaan::updateOrCreate([
            'user_id'               => auth()->user()->id
        ], [
            'business_name'         => $request->get('business_name'),
            'business_no'           => $request->get('business_no'),
            'business_sector'       => $request->get('business_sector'),
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
            'business_closed'       => $request->get('business_closed'),
            'business_income'       => $request->get('business_income'),
            'partner_name'          => $request->get('partner_name'),
            'partner_ic'            => $request->get('partner_ic'),
            'partner_address1'      => $request->get('partner_address1'),
            'partner_address2'      => $request->get('partner_address2'),
            'partner_postcode'      => $request->get('partner_postcode'),
            'partner_city'          => $request->get('partner_city'),
            'partner_state'         => $request->get('partner_state'),
            'partner_phone'         => $request->get('partner_phone'),
        ]);

        $perniagaan->save();

        if (auth()->user()->perniagaan->business_ownership === 'Perkongsian') {
            Perniagaan::where('user_id', auth()->user()->id)->update([
                'business_modal' => NULL
            ]);
        } elseif (auth()->user()->perniagaan->business_ownership === 'Sendirian Berhad') {
            Perniagaan::where('user_id', auth()->user()->id)->update([
                'partner_name'      => NULL,
                'partner_ic'        => NULL,
                'partner_address1'  => NULL,
                'partner_address2'  => NULL,
                'partner_city'      => NULL,
                'partner_postcode'  => NULL,
                'partner_state'     => NULL,
                'partner_phone'     => NULL
            ]);
        } elseif (auth()->user()->perniagaan->business_ownership === 'Individu') {
            Perniagaan::where('user_id', auth()->user()->id)->update([
                'business_modal'    => NULL,
                'partner_name'      => NULL,
                'partner_ic'        => NULL,
                'partner_address1'  => NULL,
                'partner_address2'  => NULL,
                'partner_city'      => NULL,
                'partner_postcode'  => NULL,
                'partner_state'     => NULL,
                'partner_phone'     => NULL
            ]);
        } elseif (auth()->user()->perniagaan->business_ownership === 'Pemilikan Tunggal') {
            Perniagaan::where('user_id', auth()->user()->id)->update([
                'business_modal'    => NULL,
                'partner_name'      => NULL,
                'partner_ic'        => NULL,
                'partner_address1'  => NULL,
                'partner_address2'  => NULL,
                'partner_city'      => NULL,
                'partner_postcode'  => NULL,
                'partner_state'     => NULL,
                'partner_phone'     => NULL
            ]);
        }

        $this->checkPerniagaan();

        Session::flash('success', 'Data telah disimpan.');
        Session::flash('nextTab', 'tab3');

        return redirect('home');
    }

    public function checkPerniagaan()
    {
        $id = auth()->user()->id;
        $perniagaanArr = Perniagaan::select([
            'business_name',
            'business_no',
            'business_sector',
            'business_activity',
            'business_address1',
            'business_postcode',
            'business_city',
            'business_state',
            'business_phone_hp',
            'business_premise',
            'business_ownership',
            'business_open',
            'business_closed',
            'business_income'
        ])->where('user_id', $id)->get()->toArray();

        $commaList = implode(', ', $perniagaanArr[0]);
        $array = explode(' ', $commaList);

        if (in_array(',', $array)) {
            Perniagaan::where('user_id', $id)->update(['completed' => 0]);
        } else {
            Perniagaan::where('user_id', $id)->update(['completed' => 1]);
        }

        $this->checkCompleted();
    }

    public function storePinjaman(Request $request)
    {
        if (is_null(auth()->user()->pinjaman)) {
            $this->validate($request, [
                'purchase_price'        => ['required', 'numeric'],
                'duration'              => ['required', 'numeric'],
                'reference_name'        => ['required', 'string'],
                'reference_address1'    => ['required', 'string'],
                'reference_postcode'    => ['required', 'numeric', 'min:5'],
                'reference_city'        => ['required', 'string'],
                'reference_state'       => ['required', 'alpha'],
                'reference_relation'    => ['required', 'string'],
                'reference_phone'       => ['required', 'numeric', 'min:10'],
                "doc_ic_no"             => ['required', 'mimes:pdf'],
                "doc_ssm"               => ['required', 'mimes:pdf'],
                "doc_bank"              => ['required', 'mimes:pdf'],
                "doc_bil"               => ['required', 'mimes:pdf'],
            ]);
        } else {
            $this->validate($request, [
                'purchase_price'        => ['required', 'numeric'],
                'duration'              => ['required', 'numeric'],
                'reference_name'        => ['required', 'string'],
                'reference_address1'    => ['required', 'string'],
                'reference_postcode'    => ['required', 'numeric', 'min:5'],
                'reference_city'        => ['required', 'string'],
                'reference_state'       => ['required', 'alpha'],
                'reference_relation'    => ['required', 'string'],
                'reference_phone'       => ['required', 'numeric', 'min:10'],
                "doc_ic_no"             => ['mimes:pdf', Rule::requiredIf($request->user()->pinjaman->document_ic_no == NULL)],
                "doc_ssm"               => ['mimes:pdf', Rule::requiredIf($request->user()->pinjaman->document_ssm == NULL)],
                "doc_bank"              => ['mimes:pdf', Rule::requiredIf($request->user()->pinjaman->document_bank_statements == NULL)],
                "doc_bil"               => ['mimes:pdf', Rule::requiredIf($request->user()->pinjaman->document_utility == NULL)],
            ]);
        }

        $ic_no = auth()->user()->ic_no;

        if (is_null(auth()->user()->pinjaman)) { // pinjaman null
            $ic = $request->file('doc_ic_no');
            $ic_name = auth()->user()->ic_no . '_ic.' . $ic->getClientOriginalExtension();
            Storage::disk('custom')->putFileAs('/' . $ic_no, $ic, $ic_name);

            $ssm = $request->file('doc_ssm');
            $ssm_name = auth()->user()->ic_no . '_ssm.' . $ssm->getClientOriginalExtension();
            Storage::disk('custom')->putFileAs('/' . $ic_no, $ssm, $ssm_name);

            $bank = $request->file('doc_bank');
            $bank_name = auth()->user()->ic_no . '_bank.' . $bank->getClientOriginalExtension();
            Storage::disk('custom')->putFileAs('/' . $ic_no, $bank, $bank_name);

            $bil = $request->file('doc_bil');
            $bil_name = auth()->user()->ic_no . '_bilUtiliti.' . $bil->getClientOriginalExtension();
            Storage::disk('custom')->putFileAs('/' . $ic_no, $bil, $bil_name);
        } else { //pinjaman ade rekod

            if (is_null(auth()->user()->pinjaman->document_ic_no)) {
                $ic = $request->file('doc_ic_no');
                $ic_name = auth()->user()->ic_no . '_ic.' . $ic->getClientOriginalExtension();
                Storage::disk('custom')->putFileAs('/' . $ic_no, $ic, $ic_name);
            } else {
                $ic_name = auth()->user()->pinjaman->document_ic_no;
            }

            if (is_null(auth()->user()->pinjaman->document_ssm)) {
                $ssm = $request->file('doc_ssm');
                $ssm_name = auth()->user()->ic_no . '_ssm.' . $ssm->getClientOriginalExtension();
                Storage::disk('custom')->putFileAs('/' . $ic_no, $ssm, $ssm_name);
            } else {
                $ssm_name = auth()->user()->pinjaman->document_ssm;
            }

            if (is_null(auth()->user()->pinjaman->document_bank_statements)) {
                $bank = $request->file('doc_bank');
                $bank_name = auth()->user()->ic_no . '_bank.' . $bank->getClientOriginalExtension();
                Storage::disk('custom')->putFileAs('/' . $ic_no, $bank, $bank_name);
            } else {
                $bank_name = auth()->user()->pinjaman->document_bank_statements;
            }

            if (is_null(auth()->user()->pinjaman->document_utility)) {
                $bil = $request->file('doc_bil');
                $bil_name = auth()->user()->ic_no . '_bilUtiliti.' . $bil->getClientOriginalExtension();
                Storage::disk('custom')->putFileAs('/' . $ic_no, $bil, $bil_name);
            } else {
                $bil_name = auth()->user()->pinjaman->document_utility;
            }
        }

        $pinjaman = Pinjaman::updateOrCreate([
            'user_id'               => auth()->user()->id
        ], [
            'purchase_price'                => $request->get('purchase_price'),
            'duration'                      => $request->get('duration'),
            'reference_name'                => $request->get('reference_name'),
            'reference_address1'            => $request->get('reference_address1'),
            'reference_address2'            => $request->get('reference_address2'),
            'reference_postcode'            => $request->get('reference_postcode'),
            'reference_city'                => $request->get('reference_city'),
            'reference_state'               => $request->get('reference_state'),
            'reference_relation'            => $request->get('reference_relation'),
            'reference_phone'               => $request->get('reference_phone'),
            'document_ic_no'                => $ic_name,
            'document_ssm'                  => $ssm_name,
            'document_bank_statements'      => $bank_name,
            'document_utility'              => $bil_name
        ]);

        $pinjaman->save();

        $this->checkPinjaman();

        return redirect('home')->with('success', 'Data telah disimpan.');
    }

    public function checkPinjaman()
    {
        $id = auth()->user()->id;
        $pinjamanArr = Pinjaman::select([
            'purchase_price',
            'duration',
            'reference_name',
            'reference_address1',
            'reference_postcode',
            'reference_city',
            'reference_state',
            'reference_relation',
            'reference_phone',
            'document_ic_no',
            'document_ssm',
            'document_bank_statements',
            'document_utility'
        ])->where('user_id', $id)->get()->toArray();

        $commaList = implode(', ', $pinjamanArr[0]);
        $array = explode(' ', $commaList);

        if (in_array(',', $array)) {
            Pinjaman::where('user_id', $id)->update(['completed' => 0]);
        } else {
            Pinjaman::where('user_id', $id)->update(['completed' => 1]);
        }

        $this->checkCompleted();
    }

    public function checkCompleted()
    {
        $id = auth()->user()->id;
        $peribadi = Peribadi::where('user_id', $id)->value('completed');
        $perniagaan = Perniagaan::where('user_id', $id)->value('completed');
        $pinjaman = Pinjaman::where('user_id', $id)->value('completed');

        if ($pinjaman == 1 && $peribadi == 1 && $perniagaan == 1) {
            User::where('id', $id)->update(['completed' => 1]);
        } else {
            User::where('id', $id)->update(['completed' => 0]);
        }
    }

    public function deleteGambar($id)
    {
        $id = auth()->user()->id;
        $file = Peribadi::where('user_id', $id)->value('gambar');

        Peribadi::where('user_id', $id)->update(['gambar' => NULL]);
        unlink(public_path('storage/' . auth()->user()->ic_no . '/' . $file));

        $this->checkPeribadi();

        Session::flash('success', 'Gambar telah dipadam');
        Session::flash('Tab', 'tab1');
    }

    public function deleteKP($id)
    {
        $id = auth()->user()->id;
        $file = Pinjaman::where('user_id', $id)->value('document_ic_no');

        Pinjaman::where('user_id', $id)->update(['document_ic_no' => NULL]);
        unlink(public_path('storage/' . auth()->user()->ic_no . '/' . $file));

        $this->checkPinjaman();

        Session::flash('success', 'Fail Kad Pengenalan telah dipadam');
        Session::flash('Tab', 'tab3');
    }

    public function deleteSSM($id)
    {
        $id = auth()->user()->id;
        $file = Pinjaman::where('user_id', $id)->value('document_ssm');

        Pinjaman::where('user_id', $id)->update(['document_ssm' => NULL]);
        unlink(public_path('storage/' . auth()->user()->ic_no . '/' . $file));

        $this->checkPinjaman();

        Session::flash('success', 'Fail SSM telah dipadam');
        Session::flash('Tab', 'tab3');
    }

    public function deleteBank($id)
    {
        $id = auth()->user()->id;
        $file = Pinjaman::where('user_id', $id)->value('document_bank_statements');

        Pinjaman::where('user_id', $id)->update(['document_bank_statements' => NULL]);
        unlink(public_path('storage/' . auth()->user()->ic_no . '/' . $file));

        $this->checkPinjaman();

        Session::flash('success', 'Fail Penyata Bank telah dipadam');
        Session::flash('Tab', 'tab3');
    }

    public function deleteBil($id)
    {
        $id = auth()->user()->id;
        $file = Pinjaman::where('user_id', $id)->value('document_utility');

        Pinjaman::where('user_id', $id)->update(['document_utility' => NULL]);
        unlink(public_path('storage/' . auth()->user()->ic_no . '/' . $file));

        $this->checkPinjaman();

        Session::flash('success', 'Fail Bil Utiliti telah dipadam');
        Session::flash('Tab', 'tab3');
    }
}

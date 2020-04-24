@extends('layouts.app')

@push('js_head')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
@endpush

@section('content')
<div>
    <div class="bg-gray-800 pb-32">
        <nav x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-gray-800">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-20">
                <div class="border-b border-gray-700">
                    <div class="flex items-center justify-between h-16 px-4 sm:px-0">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-16 w-16" src="{{ asset('img') }}/logo_tekun.png" />
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline">
                                    <a href="#"
                                        class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Laman Utama
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="ml-auto ">
                            <div class="items-baseline">
                                <a href="#"
                                    class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">
                                    {{ substr(auth()->user()->ic_no,0,6) }}-{{ substr(auth()->user()->ic_no,6,2) }}-{{ substr(auth()->user()->ic_no,8,4) }}
                                </a>
                            </div>
                        </div>
                        <div class="block ml-2">
                            <span class="inline-flex rounded-md shadow-sm">
                                <a href="{{ route('logout') }}" type="button"
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition ease-in-out duration-150"
                                    onclick="event.preventDefault();getElementById('logout-form').submit();">
                                    <svg class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z"
                                            clip-rule="evenodd">
                                    </svg>
                                    Log Keluar
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    {{ csrf_field() }}
                                </form>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <header class="py-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-20">
                <h1 class="text-3xl leading-9 font-bold text-white">
                    Skim Pembiayaan Pemulihan Perniagaan Sektor Mikro (CBRM)
                </h1>
            </div>

            @if (Session::has('success'))
            <div
                class="fixed inset-0 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-20 sm:items-start sm:justify-end opacity-0 notification">
                <div class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto">
                    <div class="rounded-lg shadow-xs overflow-hidden">
                        <div class="p-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div class="ml-3 w-0 flex-1 pt-0.5">
                                    <p class="text-sm leading-5 font-medium text-gray-900">
                                        Berjaya!
                                    </p>
                                    <p class="mt-1 text-sm leading-5 text-gray-500">
                                        {{ Session::get('success') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if (count($errors) > 0 )
            <div class="fixed inset-0 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-20 sm:items-start sm:justify-end opacity-0 notification">
                <div class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto">
                    <div class="rounded-lg shadow-xs overflow-hidden">
                        <div class="p-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 text-red-400" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="ml-3 w-0 flex-1 pt-0.5">
                                    <p class="text-sm leading-5 font-medium text-gray-900">
                                        Ralat!
                                    </p>
                                    <p class="mt-1 text-sm leading-5 text-gray-500">
                                        Sila semak semula maklumat yang anda isi.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </header>
    </div>

    <main class="-mt-32">
        <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-20">
            <!-- Replace with your content -->
            <div class="bg-gray-100 rounded-lg shadow px-5 py-6 sm:px-6">
                <div 
                    @if ($errors->any())
                        @if (
                            $errors->has('tekun_state') || 
                            $errors->has('business_status') ||
                            $errors->has('business_type') ||
                            $errors->has('bank1') ||
                            $errors->has('bank1_acct') ||
                            $errors->has('name') ||
                            $errors->has('ic_no') ||
                            $errors->has('gender') ||
                            $errors->has('religion') ||
                            $errors->has('birthdate') ||
                            $errors->has('race') ||
                            $errors->has('age') ||
                            $errors->has('marital') ||
                            $errors->has('dependent') ||
                            $errors->has('oku') ||
                            $errors->has('address1') ||
                            $errors->has('postcode') ||
                            $errors->has('city') ||
                            $errors->has('state') ||
                            $errors->has('phone_hp') ||
                            $errors->has('email') ||
                            $errors->has('profession') ||
                            $errors->has('income') ||
                            $errors->has('spouse_type') ||
                            $errors->has('spouse_name') ||
                            $errors->has('spouse_ic_no') ||
                            $errors->has('spouse_profession') ||
                            $errors->has('education')
                        )
                            x-data="{ tab: 'tab1' }"
                        @elseif(
                            $errors->has('business_name') || 
                            $errors->has('business_sector') || 
                            $errors->has('business_activity') ||
                            $errors->has('business_address1') ||
                            $errors->has('business_postcode') ||
                            $errors->has('business_city') ||
                            $errors->has('business_state') ||
                            $errors->has('business_phone_hp') ||
                            $errors->has('business_premise') ||
                            $errors->has('business_ownership') ||
                            $errors->has('business_modal') ||
                            $errors->has('business_open') ||
                            $errors->has('business_closed') ||
                            $errors->has('business_no') ||
                            $errors->has('business_income')
                        ) 
                            x-data="{ tab: 'tab2' }"
                        @elseif(
                            $errors->has('purchase_price') || 
                            $errors->has('duration') || 
                            $errors->has('reference_name') ||
                            $errors->has('reference_address1') ||
                            $errors->has('reference_postcode') ||
                            $errors->has('reference_city') ||
                            $errors->has('reference_state') ||
                            $errors->has('reference_relation') ||
                            $errors->has('reference_phone') ||
                            $errors->has('doc_ic_no') ||
                            $errors->has('doc_ssm') ||
                            $errors->has('doc_bank') ||
                            $errors->has('doc_bil')
                        )
                            x-data="{ tab: 'tab3' }"
                        @endif
                    @else
                        @if (Session::has('nextTab'))
                            @if (Session::get("nextTab") === 'tab2' )
                                x-data="{ tab: 'tab2' }"
                            @elseif(Session::get("nextTab") === 'tab3')
                                x-data="{ tab: 'tab3' }"
                            @endif
                        @else
                            @if (Session::has('Tab'))
                                @if (Session::get("Tab") === 'tab1' )
                                    x-data="{ tab: 'tab1' }"
                                @elseif(Session::get("Tab") === 'tab3')
                                    x-data="{ tab: 'tab3' }"
                                @endif
                            @else
                                x-data="{ tab: 'tab1' }"
                            @endif
                        @endif
                    @endif
                    

                    @if ($errors->any())
                        @if (
                            $errors->has('tekun_state') || $errors->has('tekun_branch'))
                            tab1
                        @elseif($errors->has('business_ownership') || $errors->has('business_open') || $errors->has('business_closed')) 
                            tab2
                        @endif
                    @endif
                >
                
                    <div class="sm:hidden mb-4 flex justify-between">
                        <span class="inline-flex rounded-md shadow-sm">
                            <a href="{{ asset('img') }}/cbrm/FAQ_cbrm.pdf" target="_blank" type="button"
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                                <svg class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                FAQ
                            </a>
                        </span>
                        <span class="inline-flex rounded-md shadow-sm" x-data="{ open: false }">
                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition ease-in-out duration-150
                                    @if(auth()->user()->completed === '1')
                                    @else
                                        hidden
                                    @endif
                                    "
                                    @click.prevent="open = true">
                                <svg class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M2 10a4 4 0 004 4h3v3a1 1 0 102 0v-3h3a4 4 0 000-8 4 4 0 00-8 0 4 4 0 00-4 4zm9 4H9V9.414l-1.293 1.293a1 1 0 01-1.414-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 9.414V14z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Hantar Permohonan
                            </button>

                            {{-- modal penzahiran --}}
                            <div
                                class="fixed bottom-0 inset-x-0 px-4 pb-6 sm:inset-0 sm:p-0 sm:flex sm:items-center sm:justify-center" 
                                x-show="open"
                            >
                                <div class="fixed inset-0 transition-opacity"
                                    x-show="open"
                                    x-transition:enter="ease-out duration-300"
                                    x-transition:enter-start=" opacity-0"
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="ease-in duration-200"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                >
                                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                </div>

                                <div
                                    class="bg-white rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:max-w-xl sm:w-full sm:p-6"
                                    x-show="open" 
                                    x-transition:enter="ease-out duration-300""
                                    x-transition:enter-start=" opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                    x-transition:leave="ease-in duration-200"
                                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                >
                                    <div>
                                        <div class="text-center">
                                            <h3 class="text-xl leading-6 font-medium text-gray-900">
                                                Penzahiran
                                            </h3>
                                            <div class="mt-2 overflow-auto h-64">
                                                <p class="text-base leading-5 text-gray-700 mb-2">
                                                    Adalah dengan ini saya mengaku bahawa:
                                                </p>
                                                <table width="100%" class="table-auto">
                                                    <tr class="text-sm text-gray-600">
                                                        <td class="align-top px-2 py-1">1.</td>
                                                        <td class="text-left px-2 py-1">Pemohon dengan ini membenarkan <b>TEKUN Nasional</b> / atau pegawainya untuk menggunakan, mendedahkan, memberitahu apa-apa maklumat berhubung dengan akaun pembiayaan TEKUN / untuk tujuan atau berhubung dengan apa-apa tindakan atau prosiding diambil bagi tujuan penilaian kredit atau bayaran balik di bawah Terma dan Syarat ini</td>
                                                    </tr>
                                                    <tr class="text-sm text-gray-600">
                                                        <td class="align-top px-2 py-1">2.</td>
                                                        <td class="text-left px-2 py-1">Pemohon dengan ini membenarkan <b>TEKUN Nasional</b> / atau pegawainya untuk penzahiran apa-apa maklumat kredit individu yang berkaitan dengan kedudukan kredit, kemudahan atau butiran akaun pemohon kepada Experian Information Services (Malaysia) Sdn Bhd (dahulu dikenali sebagai RAMCI) ("Experian") dan / atau Credit Tip Off Service Sdn Bhd ("CTOS") serta pelanggan Experian / CTOS termasuk Bank, Institusi kewangan atau mana-mana agensi pelaporan kredit yang berkuat kuasa di Malaysia.</td>
                                                    </tr>
                                                    <tr class="text-sm text-gray-600">
                                                        <td class="align-top px-2 py-1">3.</td>
                                                        <td class="text-left px-2 py-1">Pemohon dengan ini memberi kebenaran kepada Experian dan / atau CTOS bagi pendedahan maklumat kredit, termasuk maklumat kredit perbankan kepada <b>TEKUN Nasional</b> / atau pegawainya bagi maksud yang berikut seperti yang dinyatakan di bawah seksyen 24, menurut Akta Pelaporan Kredit 2010. Persetujuan hendaklah kekal terpakai selagi pemohon mengekalkan akaun / pembiayaan / kredit / apa-apa transaksi dengan organisasi. </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                                        <span class="flex w-full rounded-md shadow-sm sm:col-start-2">
                                            <a href="{{ route('home.status') }}" type="button"
                                                class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-indigo-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                                Setuju & Hantar
                                            </a>
                                        </span>
                                        <span
                                            class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:col-start-1">
                                            <button type="button"
                                                class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                                @click.prevent="open = false"
                                            >
                                                Tidak setuju
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            {{-- end modal penzahiran --}}
                        </span>
                    </div>

                    <div class="sm:hidden">
                        <select class="form-select block w-full" @change="tab = $event.target.value">
                            <option value="opt_maklumatPeribadi" x-bind:value="'tab1'" selected>Maklumat Peribadi
                            </option>
                            <option value="opt_maklumatPerniagaan" x-bind:value="'tab2'">Maklumat Perniagaan
                            </option>
                            <option value="opt_maklumatPinjaman" x-bind:value="'tab3'">Maklumat Pinjaman</option>
                        </select>
                    </div>

                    <div class="hidden sm:block">
                        <nav class="flex">
                            <button
                                class="px-3 py-2 font-medium text-sm leading-5 rounded-md text-gray-500 hover:text-gray-700 focus:outline-none focus:text-indigo-600 focus:bg-indigo-50"
                                :class="{ 'text-indigo-700 bg-indigo-100 focus:outline-none focus:text-indigo-800 focus:bg-indigo-200' : tab === 'tab1' }"
                                @click="tab='tab1'">
                                Maklumat Peribadi
                            </button>
                            <button
                                class="ml-4 px-3 py-2 font-medium text-sm leading-5 rounded-md text-gray-500 hover:text-gray-700 focus:outline-none focus:text-indigo-600 focus:bg-indigo-50"
                                :class="{ 'text-indigo-700 bg-indigo-100 focus:outline-none focus:text-indigo-800 focus:bg-indigo-200' : tab === 'tab2' }"
                                @if(is_null(auth()->user()->peribadi))
                                @else
                                    @click="tab='tab2'"
                                @endif
                                >
                                Maklumat Perniagaan
                            </button>
                            <button
                                class="ml-4 px-3 py-2 font-medium text-sm leading-5 rounded-md text-gray-500 hover:text-gray-700 focus:outline-none focus:text-indigo-600 focus:bg-indigo-50"
                                :class="{ 'text-indigo-700 bg-indigo-100 focus:outline-none focus:text-indigo-800 focus:bg-indigo-200' : tab === 'tab3' }"
                                
                                @if(is_null(auth()->user()->perniagaan))
                                @else
                                    @click="tab='tab3'"
                                @endif
                                >
                                Maklumat Pinjaman
                            </button>

                            <div class="ml-auto">
                                <span class="inline-flex rounded-md shadow-sm">
                                    <a href="{{ asset('img') }}/cbrm/FAQ_cbrm.pdf" target="_blank" type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                                        <svg class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        FAQ
                                    </a>
                                </span>
                                <span class="inline-flex rounded-md shadow-sm" x-data="{ open: false }">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition ease-in-out duration-150
                                            @if(auth()->user()->completed === '1')
                                            @else
                                                hidden
                                            @endif
                                            "
                                            @click.prevent="open = true">
                                        <svg class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M2 10a4 4 0 004 4h3v3a1 1 0 102 0v-3h3a4 4 0 000-8 4 4 0 00-8 0 4 4 0 00-4 4zm9 4H9V9.414l-1.293 1.293a1 1 0 01-1.414-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 9.414V14z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Hantar Permohonan
                                    </button>

                                    {{-- modal penzahiran --}}
                                    <div
                                        class="fixed bottom-0 inset-x-0 px-4 pb-6 sm:inset-0 sm:p-0 sm:flex sm:items-center sm:justify-center" 
                                        x-show="open"
                                    >
                                        <div class="fixed inset-0 transition-opacity"
                                            x-show="open"
                                            x-transition:enter="ease-out duration-300"
                                            x-transition:enter-start=" opacity-0"
                                            x-transition:enter-end="opacity-100"
                                            x-transition:leave="ease-in duration-200"
                                            x-transition:leave-start="opacity-100"
                                            x-transition:leave-end="opacity-0"
                                        >
                                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                        </div>

                                        <div
                                            class="bg-white rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:max-w-xl sm:w-full sm:p-6"
                                            x-show="open" 
                                            x-transition:enter="ease-out duration-300""
                                            x-transition:enter-start=" opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave="ease-in duration-200"
                                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                        >
                                            <div>
                                                <div class="text-center">
                                                    <h3 class="text-xl leading-6 font-medium text-gray-900">
                                                        Penzahiran
                                                    </h3>
                                                    <div class="mt-2">
                                                        <p class="text-base leading-5 text-gray-700 mb-2">
                                                            Adalah dengan ini saya mengaku bahawa:
                                                        </p>
                                                        <table width="100%" class="table-auto">
                                                            <tr class="text-sm text-gray-600">
                                                                <td class="align-top px-2 py-1">1.</td>
                                                                <td class="text-left px-2 py-1">Pemohon dengan ini membenarkan <b>TEKUN Nasional</b> / atau pegawainya untuk menggunakan, mendedahkan, memberitahu apa-apa maklumat berhubung dengan akaun pembiayaan TEKUN / untuk tujuan atau berhubung dengan apa-apa tindakan atau prosiding diambil bagi tujuan penilaian kredit atau bayaran balik di bawah Terma dan Syarat ini</td>
                                                            </tr>
                                                            <tr class="text-sm text-gray-600">
                                                                <td class="align-top px-2 py-1">2.</td>
                                                                <td class="text-left px-2 py-1">Pemohon dengan ini membenarkan <b>TEKUN Nasional</b> / atau pegawainya untuk penzahiran apa-apa maklumat kredit individu yang berkaitan dengan kedudukan kredit, kemudahan atau butiran akaun pemohon kepada Experian Information Services (Malaysia) Sdn Bhd (dahulu dikenali sebagai RAMCI) ("Experian") dan / atau Credit Tip Off Service Sdn Bhd ("CTOS") serta pelanggan Experian / CTOS termasuk Bank, Institusi kewangan atau mana-mana agensi pelaporan kredit yang berkuat kuasa di Malaysia.</td>
                                                            </tr>
                                                            <tr class="text-sm text-gray-600">
                                                                <td class="align-top px-2 py-1">3.</td>
                                                                <td class="text-left px-2 py-1">Pemohon dengan ini memberi kebenaran kepada Experian dan / atau CTOS bagi pendedahan maklumat kredit, termasuk maklumat kredit perbankan kepada <b>TEKUN Nasional</b> / atau pegawainya bagi maksud yang berikut seperti yang dinyatakan di bawah seksyen 24, menurut Akta Pelaporan Kredit 2010. Persetujuan hendaklah kekal terpakai selagi pemohon mengekalkan akaun / pembiayaan / kredit / apa-apa transaksi dengan organisasi. </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                                                <span class="flex w-full rounded-md shadow-sm sm:col-start-2">
                                                    <a href="{{ route('home.status') }}" type="button"
                                                        class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-indigo-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                                        Setuju & Hantar
                                                    </a>
                                                </span>
                                                <span
                                                    class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:col-start-1">
                                                    <button type="button"
                                                        class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                                        @click.prevent="open = false"
                                                    >
                                                        Tidak setuju
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end modal penzahiran --}}
                                </span>
                            </div>
                        </nav>
                    </div>

                    {{-- card content --}}
                    @include('maklumatPeribadi')
                    @include('maklumatPerniagaan')
                    @include('maklumatPinjaman')
                    {{-- end content --}}
                </div>
            </div>
            <!-- /End replace -->
        </div>
    </main>
</div>
@endsection

@push('js')
@if (Session::has('success') || count($errors) > 0 )
<script>
    $(document).ready(function () {

        setTimeout(function () {
            $(".notification").animate({
                opacity: "1"
            });
        }, 1000);

        setTimeout(function () {
            $(".notification").animate({
                opacity: "0"
            });
        }, 10000);
        
    });
</script>
@endif
@endpush

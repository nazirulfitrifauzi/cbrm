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
                                        class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Laman
                                        Utama</a>
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <span class="inline-flex rounded-md shadow-sm">
                                <a href="{{ route('logout') }}" type="button"
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition ease-in-out duration-150"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
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
                    Program Pemulihan Perniagaan TEKUN NASIONAL
                </h1>
            </div>
        </header>
    </div>

    <main class="-mt-32">
        <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-20">
            <!-- Replace with your content -->
            <div class="bg-gray-100 rounded-lg shadow px-5 py-6 sm:px-6">
                <div>
                    <div class="sm:hidden">
                        <select class="form-select block w-full" id="selectPage" onchange="changePage()">
                            <option value="opt_maklumatPeribadi" selected>Maklumat Peribadi</option>
                            <option value="opt_maklumatPerniagaan">Maklumat Perniagaan</option>
                            <option value="opt_maklumatPinjaman">Maklumat Pinjaman</option>
                        </select>
                    </div>
                    <div class="hidden sm:block">
                        <form action="{{ route('home.store') }}" method="POST">
                            @csrf

                            <nav class="flex">
                                <a href="#" id="maklumatPeribadi"
                                    class="px-3 py-2 font-medium text-sm leading-5 rounded-md text-indigo-700 bg-indigo-100 focus:outline-none focus:text-indigo-800 focus:bg-indigo-200"
                                    onclick="changeClass1()">
                                    Maklumat Peribadi
                                </a>
                                <a href="#" id="maklumatPerniagaan"
                                    class="ml-4 px-3 py-2 font-medium text-sm leading-5 rounded-md text-gray-500 hover:text-gray-700 focus:outline-none focus:text-indigo-600 focus:bg-indigo-50"
                                    onclick="changeClass2()">
                                    Maklumat Perniagaan
                                </a>
                                <a href="#" id="maklumatPinjaman"
                                    class="ml-4 px-3 py-2 font-medium text-sm leading-5 rounded-md text-gray-500 hover:text-gray-700 focus:outline-none focus:text-indigo-600 focus:bg-indigo-50"
                                    onclick="changeClass3()">
                                    Maklumat Pinjaman
                                </a>

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
                                    <span class="inline-flex rounded-md shadow-sm">
                                        <button type="submit"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition ease-in-out duration-150">
                                            {{--add this to disable button: opacity-50 cursor-not-allowed --}}
                                            <svg class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M2 10a4 4 0 004 4h3v3a1 1 0 102 0v-3h3a4 4 0 000-8 4 4 0 00-8 0 4 4 0 00-4 4zm9 4H9V9.414l-1.293 1.293a1 1 0 01-1.414-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 9.414V14z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            Hantar Permohonan
                                        </button>
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
            </form>
            <!-- /End replace -->
        </div>
    </main>
</div>
@endsection

@push('js')
<script>
    var maklumatPeribadi = document.getElementById("maklumatPeribadi");
    var maklumatPeribadi_content = document.getElementById("maklumatPeribadi_content");
    var maklumatPerniagaan = document.getElementById("maklumatPerniagaan");
    var maklumatPerniagaan_content = document.getElementById("maklumatPerniagaan_content");
    var maklumatPinjaman = document.getElementById("maklumatPinjaman");
    var maklumatPinjaman_content = document.getElementById("maklumatPinjaman_content");

    function changePage() {
        var selectPage = document.getElementById("selectPage").value;

        if (selectPage == "opt_maklumatPeribadi") {
            maklumatPeribadi_content.classList.remove("hidden");
            maklumatPeribadi_content.classList.add("block");
            maklumatPerniagaan_content.classList.remove("block");
            maklumatPerniagaan_content.classList.add("hidden");
            maklumatPinjaman_content.classList.remove("block");
            maklumatPinjaman_content.classList.add("hidden");
        }

        if (selectPage == "opt_maklumatPerniagaan") {
            maklumatPerniagaan_content.classList.remove("hidden");
            maklumatPerniagaan_content.classList.add("block");
            maklumatPeribadi_content.classList.remove("block");
            maklumatPeribadi_content.classList.add("hidden");
            maklumatPinjaman_content.classList.remove("block");
            maklumatPinjaman_content.classList.add("hidden");
        }

        if (selectPage == "opt_maklumatPinjaman") {
            maklumatPinjaman_content.classList.remove("hidden");
            maklumatPinjaman_content.classList.add("block");
            maklumatPerniagaan_content.classList.remove("block");
            maklumatPerniagaan_content.classList.add("hidden");
            maklumatPeribadi_content.classList.remove("block");
            maklumatPeribadi_content.classList.add("hidden");
        }
    }

    function changeClass1() {
        maklumatPeribadi.classList.remove("text-gray-500", "hover:text-gray-700", "focus:outline-none",
            "focus:text-indigo-600", "focus:bg-indigo-50");
        maklumatPeribadi.classList.add("text-indigo-700", "bg-indigo-100", "focus:outline-none",
            "focus:text-indigo-800", "focus:bg-indigo-200");
        maklumatPeribadi_content.classList.remove("hidden");
        maklumatPeribadi_content.classList.add("block");

        maklumatPerniagaan.classList.remove("text-indigo-700", "bg-indigo-100", "focus:outline-none",
            "focus:text-indigo-800", "focus:bg-indigo-200");
        maklumatPerniagaan.classList.add("text-gray-500", "hover:text-gray-700", "focus:outline-none",
            "focus:text-indigo-600", "focus:bg-indigo-50");
        maklumatPerniagaan_content.classList.remove("block");
        maklumatPerniagaan_content.classList.add("hidden");

        maklumatPinjaman.classList.remove("text-indigo-700", "bg-indigo-100", "focus:outline-none",
            "focus:text-indigo-800", "focus:bg-indigo-200");
        maklumatPinjaman.classList.add("text-gray-500", "hover:text-gray-700", "focus:outline-none",
            "focus:text-indigo-600", "focus:bg-indigo-50");
        maklumatPinjaman_content.classList.remove("block");
        maklumatPinjaman_content.classList.add("hidden");
    }

    function changeClass2() {
        maklumatPerniagaan.classList.remove("text-gray-500", "hover:text-gray-700", "focus:outline-none",
            "focus:text-indigo-600", "focus:bg-indigo-50");
        maklumatPerniagaan.classList.add("text-indigo-700", "bg-indigo-100", "focus:outline-none",
            "focus:text-indigo-800", "focus:bg-indigo-200");
        maklumatPerniagaan_content.classList.remove("hidden");
        maklumatPerniagaan_content.classList.add("block");

        maklumatPeribadi.classList.remove("text-indigo-700", "bg-indigo-100", "focus:outline-none",
            "focus:text-indigo-800", "focus:bg-indigo-200");
        maklumatPeribadi.classList.add("text-gray-500", "hover:text-gray-700", "focus:outline-none",
            "focus:text-indigo-600", "focus:bg-indigo-50");
        maklumatPeribadi_content.classList.remove("block");
        maklumatPeribadi_content.classList.add("hidden");

        maklumatPinjaman.classList.remove("text-indigo-700", "bg-indigo-100", "focus:outline-none",
            "focus:text-indigo-800", "focus:bg-indigo-200");
        maklumatPinjaman.classList.add("text-gray-500", "hover:text-gray-700", "focus:outline-none",
            "focus:text-indigo-600", "focus:bg-indigo-50");
        maklumatPinjaman_content.classList.remove("block");
        maklumatPinjaman_content.classList.add("hidden");
    }

    function changeClass3() {
        maklumatPinjaman.classList.remove("text-gray-500", "hover:text-gray-700", "focus:outline-none",
            "focus:text-indigo-600", "focus:bg-indigo-50");
        maklumatPinjaman.classList.add("text-indigo-700", "bg-indigo-100", "focus:outline-none",
            "focus:text-indigo-800", "focus:bg-indigo-200");
        maklumatPinjaman_content.classList.remove("hidden");
        maklumatPinjaman_content.classList.add("block");

        maklumatPerniagaan.classList.remove("text-indigo-700", "bg-indigo-100", "focus:outline-none",
            "focus:text-indigo-800", "focus:bg-indigo-200");
        maklumatPerniagaan.classList.add("text-gray-500", "hover:text-gray-700", "focus:outline-none",
            "focus:text-indigo-600", "focus:bg-indigo-50");
        maklumatPerniagaan_content.classList.remove("block");
        maklumatPerniagaan_content.classList.add("hidden");

        maklumatPeribadi.classList.remove("text-indigo-700", "bg-indigo-100", "focus:outline-none",
            "focus:text-indigo-800", "focus:bg-indigo-200");
        maklumatPeribadi.classList.add("text-gray-500", "hover:text-gray-700", "focus:outline-none",
            "focus:text-indigo-600", "focus:bg-indigo-50");
        maklumatPeribadi_content.classList.remove("block");
        maklumatPeribadi_content.classList.add("hidden");
    }

</script>
@endpush

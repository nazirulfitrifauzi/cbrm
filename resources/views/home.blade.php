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
                                        <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Home</a>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden md:block">
                                <span class="inline-flex rounded-md shadow-sm">
                                    <a href="{{ route('logout') }}" type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <svg class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm8 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h5a5 5 0 0 1 5 5v2zm5-10a1 1 0 0 1-1 1h-6a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1z" clip-rule="evenodd"/>
                                        </svg>
                                        Log out
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        {{ csrf_field() }}
                                    </form>
                                </span>
                            </div>
                            <div class="-mr-2 flex md:hidden">
                                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white" x-bind:aria-label="open ? 'Close main menu' : 'Main menu'" x-bind:aria-expanded="open">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div :class="{'block': open, 'hidden': !open}" class="hidden border-b border-gray-700 md:hidden">
                    <div class="pt-4 pb-3 border-t border-gray-700">
                        <div class="flex items-center px-5">
                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                                <svg class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm8 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h5a5 5 0 0 1 5 5v2zm5-10a1 1 0 0 1-1 1h-6a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1z" clip-rule="evenodd"/>
                                </svg>
                                Log out
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
            <header class="py-10">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-20">
                    <h1 class="text-3xl leading-9 font-bold text-white">
                    Laman Utama
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
                        <select class="form-select block w-full">
                            <option selected>Maklumat Peribadi</option>
                            <option>Maklumat Perniagaan</option>
                            <option>Maklumat Pinjaman</option>
                        </select>
                    </div>
                    <div class="hidden sm:block">
                        <nav class="flex">
                            <a href="#" id="maklumatPeribadi" class="px-3 py-2 font-medium text-sm leading-5 rounded-md text-indigo-700 bg-indigo-100 focus:outline-none focus:text-indigo-800 focus:bg-indigo-200" onclick="changeClass1()">
                                Maklumat Peribadi
                            </a>
                            <a href="#" id="maklumatPerniagaan" class="ml-4 px-3 py-2 font-medium text-sm leading-5 rounded-md text-gray-500 hover:text-gray-700 focus:outline-none focus:text-indigo-600 focus:bg-indigo-50" onclick="changeClass2()">
                                Maklumat Perniagaan
                            </a>
                            <a href="#" id="maklumatPinjaman" class="ml-4 px-3 py-2 font-medium text-sm leading-5 rounded-md text-gray-500 hover:text-gray-700 focus:outline-none focus:text-indigo-600 focus:bg-indigo-50" onclick="changeClass3()">
                                Maklumat Pinjaman
                            </a>
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
    <script>
        var maklumatPeribadi = document.getElementById("maklumatPeribadi");
        var maklumatPeribadi_content = document.getElementById("maklumatPeribadi_content");
        var maklumatPerniagaan = document.getElementById("maklumatPerniagaan");
        var maklumatPerniagaan_content = document.getElementById("maklumatPerniagaan_content");
        var maklumatPinjaman = document.getElementById("maklumatPinjaman");
        var maklumatPinjaman_content = document.getElementById("maklumatPinjaman_content");

        function changeClass1() {
            maklumatPeribadi.classList.remove("text-gray-500","hover:text-gray-700","focus:outline-none","focus:text-indigo-600","focus:bg-indigo-50");
            maklumatPeribadi.classList.add("text-indigo-700","bg-indigo-100","focus:outline-none","focus:text-indigo-800","focus:bg-indigo-200");
            maklumatPeribadi_content.classList.remove("hidden");
            maklumatPeribadi_content.classList.add("block");

            maklumatPerniagaan.classList.remove("text-indigo-700","bg-indigo-100","focus:outline-none","focus:text-indigo-800","focus:bg-indigo-200");
            maklumatPerniagaan.classList.add("text-gray-500","hover:text-gray-700","focus:outline-none","focus:text-indigo-600","focus:bg-indigo-50");
            maklumatPerniagaan_content.classList.remove("block");
            maklumatPerniagaan_content.classList.add("hidden");

            maklumatPinjaman.classList.remove("text-indigo-700","bg-indigo-100","focus:outline-none","focus:text-indigo-800","focus:bg-indigo-200");
            maklumatPinjaman.classList.add("text-gray-500","hover:text-gray-700","focus:outline-none","focus:text-indigo-600","focus:bg-indigo-50");
            maklumatPinjaman_content.classList.remove("block");
            maklumatPinjaman_content.classList.add("hidden");
        }

        function changeClass2() {
            maklumatPerniagaan.classList.remove("text-gray-500","hover:text-gray-700","focus:outline-none","focus:text-indigo-600","focus:bg-indigo-50");
            maklumatPerniagaan.classList.add("text-indigo-700","bg-indigo-100","focus:outline-none","focus:text-indigo-800","focus:bg-indigo-200");
            maklumatPerniagaan_content.classList.remove("hidden");
            maklumatPerniagaan_content.classList.add("block");

            maklumatPeribadi.classList.remove("text-indigo-700","bg-indigo-100","focus:outline-none","focus:text-indigo-800","focus:bg-indigo-200");
            maklumatPeribadi.classList.add("text-gray-500","hover:text-gray-700","focus:outline-none","focus:text-indigo-600","focus:bg-indigo-50");
            maklumatPeribadi_content.classList.remove("block");
            maklumatPeribadi_content.classList.add("hidden");

            maklumatPinjaman.classList.remove("text-indigo-700","bg-indigo-100","focus:outline-none","focus:text-indigo-800","focus:bg-indigo-200");
            maklumatPinjaman.classList.add("text-gray-500","hover:text-gray-700","focus:outline-none","focus:text-indigo-600","focus:bg-indigo-50");
            maklumatPinjaman_content.classList.remove("block");
            maklumatPinjaman_content.classList.add("hidden");
        }

        function changeClass3() {
            maklumatPinjaman.classList.remove("text-gray-500","hover:text-gray-700","focus:outline-none","focus:text-indigo-600","focus:bg-indigo-50");
            maklumatPinjaman.classList.add("text-indigo-700","bg-indigo-100","focus:outline-none","focus:text-indigo-800","focus:bg-indigo-200");
            maklumatPinjaman_content.classList.remove("hidden");
            maklumatPinjaman_content.classList.add("block");

            maklumatPerniagaan.classList.remove("text-indigo-700","bg-indigo-100","focus:outline-none","focus:text-indigo-800","focus:bg-indigo-200");
            maklumatPerniagaan.classList.add("text-gray-500","hover:text-gray-700","focus:outline-none","focus:text-indigo-600","focus:bg-indigo-50");
            maklumatPerniagaan_content.classList.remove("block");
            maklumatPerniagaan_content.classList.add("hidden");

            maklumatPeribadi.classList.remove("text-indigo-700","bg-indigo-100","focus:outline-none","focus:text-indigo-800","focus:bg-indigo-200");
            maklumatPeribadi.classList.add("text-gray-500","hover:text-gray-700","focus:outline-none","focus:text-indigo-600","focus:bg-indigo-50");
            maklumatPeribadi_content.classList.remove("block");
            maklumatPeribadi_content.classList.add("hidden");
        }
    </script>
@endpush
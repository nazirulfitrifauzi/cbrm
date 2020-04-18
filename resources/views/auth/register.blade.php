@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-24 w-auto" src="{{ asset('img') }}/logo_tekun.png" />
            <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                Daftar Akaun
            </h2>
            <p class="mt-2 text-center text-sm leading-5 text-gray-600 max-w">
                atau
            <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                log masuk akaun anda
            </a>
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                        Nama
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name')  border-red-500 @enderror" />

                        @error('name')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="mt-6">
                    <label for="ic_no" class="block text-sm font-medium leading-5 text-gray-700">
                        No Kad Pengenalan
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="ic_no" type="text" name="ic_no" value="{{ old('ic_no') }}" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('ic_no')  border-red-500 @enderror" />

                        @error('ic_no')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
<!--
                <div class="mt-6">
                    <label for="phone_no" class="block text-sm font-medium leading-5 text-gray-700">
                        No Telefon
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="phone_no" type="text" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                </div>-->

                <div class="mt-6">
                    <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
                        Alamat emel
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-500 @enderror" />

                        @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                        Kata laluan
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="password" type="password" name="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-500 @enderror" />

                        @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="mt-6">
                    <label for="password-confirm" class="block text-sm font-medium leading-5 text-gray-700">
                        Sahkan Kata laluan
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="password-confirm" type="password" name="password_confirmation" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        Daftar Akaun
                        </button>
                    </span>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection

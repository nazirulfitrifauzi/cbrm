<div x-show="tab === 'tab1'">
    <form method="post" action="{{ route('home.storePeribadi') }}" enctype="multipart/form-data">
        @csrf

        @if($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
        @endif

        <div class="my-8 px-4">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Maklumat Asas</h3>
                        {{-- <p class="mt-1 text-sm leading-5 text-gray-500">
        This information will be displayed publicly so be careful what you share.
        </p> --}}
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="tekun_state"
                                        class="block text-sm font-medium leading-5 text-gray-700">Negeri</label>
                                    <select id="tekun_state" name="tekun_state"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="">Sila Pilih Negeri</option>
                                        @foreach($negeri as $negeris)
                                            <option value="{{ $negeris->kodnegeri }}" 
                                                @if(isset(auth()->user()->peribadi->tekun_state))
                                                    @if(auth()->user()->peribadi->tekun_state == $negeris->kodnegeri) 
                                                        selected 
                                                    @endif @else
                                                @endif
                                            >{{ $negeris->namanegeri }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="tekun_branch"
                                        class="block text-sm font-medium leading-5 text-gray-700">Cawangan</label>
                                    <select id="tekun_branch" name="tekun_branch"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        @foreach($cawangan as $cawangans)
                                            <option value="{{ $cawangans->kodcawangan }}" 
                                                @if(isset(auth()->user()->peribadi->tekun_branch))
                                                    @if(auth()->user()->peribadi->tekun_branch == $cawangans->kodcawangan) 
                                                        selected 
                                                    @endif @else
                                                @endif
                                            >{{ $cawangans->namacawangan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-6 gap-6 mt-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="business_status"
                                        class="block text-sm font-medium leading-5 text-gray-700">Status
                                        Perniagaan</label>
                                    <select id="business_status" name="business_status"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="Sedang Berniaga" @if(isset(auth()->
                                            user()->peribadi->business_status))
                                            @if(auth()->user()->peribadi->business_status == 'Sedang Berniaga') selected
                                            @endif @else @endif>Sedang Berniaga</option>
                                        <option value="Memulakan Perniagaan" @if(isset(auth()->
                                            user()->peribadi->business_status))
                                            @if(auth()->user()->peribadi->business_status == 'Memulakan Perniagaan')
                                            selected @endif @else @endif> Memulakan Perniagaan </option>
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <fieldset>
                                        <legend class="block text-sm font-medium leading-5 text-gray-700">Usahawan TEKUN
                                        </legend>
                                        {{-- <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p> --}}
                                        <div class="mt-4">
                                            <div class="flex items-center">
                                                <input id="business_type_yes" name="business_type" value="1"
                                                    type="radio" @if(isset(auth()->user()->peribadi->business_type))
                                                @if(auth()->user()->peribadi->business_type == '1') checked @endif @else
                                                @endif
                                                class="form-radio h-4 w-4 text-indigo-600 transition duration-150
                                                ease-in-out" />
                                                <label for="business_type_yes" class="ml-3">
                                                    <span
                                                        class="block text-sm leading-5 font-medium text-gray-700">Ya</span>
                                                </label>
                                                <input id="business_type_no" name="business_type" value="0" type="radio"
                                                    @if(isset(auth()->user()->peribadi->business_type))
                                                @if(auth()->user()->peribadi->business_type == '0') checked @endif @else
                                                @endif
                                                class="ml-8 form-radio h-4 w-4 text-indigo-600 transition duration-150
                                                ease-in-out" />
                                                <label for="business_type_no" class="ml-3">
                                                    <span
                                                        class="block text-sm leading-5 font-medium text-gray-700">Tidak</span>
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="grid grid-cols-6 gap-6 mt-6">
                                <div class="col-span-6 sm:col-span-6">
                                    <label for="business_sector"
                                        class="block text-sm font-medium leading-5 text-gray-700">Sektor
                                        Perniagaan</label>
                                    <select id="business_sector" name="business_sector"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        @foreach($aktiviti as $aktivitis)
                                            <option value="{{ $aktivitis->idaktiviti }}" 
                                                @if(isset(auth()->user()->peribadi->business_sector))
                                                    @if(auth()->user()->peribadi->business_sector == $aktivitis->idaktiviti) 
                                                        selected 
                                                    @endif @else
                                                @endif
                                            >{{ $aktivitis->keterangan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-6 gap-6 mt-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="bank1" class="block text-sm font-medium leading-5 text-gray-700">Nama
                                        Bank 1</label>
                                    <select id="bank1" name="bank1"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        @foreach($bank as $banks)
                                            <option value="{{ $banks->id }}" 
                                                @if(isset(auth()->user()->peribadi->bank1))
                                                    @if(auth()->user()->peribadi->bank1 == $banks->id) 
                                                        selected 
                                                    @endif @else
                                                @endif
                                            >{{ $banks->nama_bank }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="bank1_acct" class="block text-sm font-medium leading-5 text-gray-700">No
                                        Akaun Bank 1</label>
                                    <input id="bank1_acct" name="bank1_acct"
                                        value="{{ isset(auth()->user()->peribadi->bank1_acct) ? auth()->user()->peribadi->bank1_acct : old('bank1_acct') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="bank2" class="block text-sm font-medium leading-5 text-gray-700">Nama
                                        Bank 2</label>
                                    <select id="bank2" name="bank2"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        @foreach($bank as $banks2)
                                            <option value="{{ $banks2->id }}" 
                                                @if(isset(auth()->user()->peribadi->bank2))
                                                    @if(auth()->user()->peribadi->bank2 == $banks2->id) 
                                                        selected 
                                                    @endif @else
                                                @endif
                                            >{{ $banks->nama_bank }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="bank2_acct" class="block text-sm font-medium leading-5 text-gray-700">No
                                        Akaun Bank 2</label>
                                    <input id="bank2_acct" name="bank2_acct"
                                        value="{{ isset(auth()->user()->peribadi->bank2_acct) ? auth()->user()->peribadi->bank2_acct : old('bank2_acct') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden sm:block">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="mt-10 sm:mt-0 my-8 px-4">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Maklumat Peribadi Pemohon</h3>
                        {{-- <p class="mt-1 text-sm leading-5 text-gray-500">
        Use a permanent address where you can receive mail.
        </p> --}}
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="mt-1">
                                <label for="profile_pic" class="block text-sm leading-5 font-medium text-gray-700">
                                    Gambar
                                </label>

                                @if(isset(auth()->user()->peribadi->gambar))
                                <div class="mt-2 px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md"
                                    x-data="{ open: false }">
                                    <div class="w-full">
                                        <img src="{{ asset('storage/Pictures/' . auth()->user()->peribadi->gambar) }}"
                                            class="h-40">
                                    </div>
                                    <div class="w-full">
                                        <span class="mt-3 inline-flex rounded-md shadow-sm">
                                            <button
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition ease-in-out duration-150 cursor-pointer"
                                                @click.prevent="open = true">
                                                <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd">
                                                </svg>
                                                Padam Gambar
                                            </button>
                                        </span>
                                    </div>

                                    {{-- delete gambar modal --}}
                                    <div
                                        class="fixed bottom-0 inset-x-0 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center"
                                        x-show="open"
                                    >
                                        <div class="fixed inset-0 transition-opacity"
                                            x-show="open"
                                            x-transition:enter="ease-out duration-300""
                                            x-transition:enter-start="opacity-0"
                                            x-transition:enter-end="opacity-100"
                                            x-transition:leave="ease-in duration-200"
                                            x-transition:leave-start="opacity-100"
                                            x-transition:leave-end="opacity-0"
                                        >
                                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                        </div>

                                        <div
                                            class="bg-white rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full sm:p-6"
                                            x-show="open"
                                            x-transition:enter="ease-out duration-300""
                                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave="ease-in duration-200"
                                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                        >
                                            <div class="sm:flex sm:items-start">
                                                <div
                                                    class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                    <svg class="h-6 w-6 text-red-600" stroke="currentColor" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                    </svg>
                                                </div>
                                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                                                        Padam Gambar!
                                                    </h3>
                                                    <div class="mt-2">
                                                        <p class="text-sm leading-5 text-gray-500">
                                                            Adakah anda pasti untuk memadam gambar ini?
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                                                <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                                    <button type="button"
                                                        class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                                        onclick="event.preventDefault();deleteGambar({{auth()->user()->peribadi->id}})">
                                                        Padam!
                                                    </button>
                                                </span>
                                                <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                    <button type="button"
                                                        class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                                        @click="open = false">
                                                        Batal
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end delete gambar modal --}}
                                </div>
                                @else

                                <div id="gambar-div"
                                    class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer"
                                    style="display: block;">
                                    <div class="text-center">
                                        <input type="file" name="gambar" id="gambar" class="hidden" />
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                            viewBox="0 0 48 48">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <p class="mt-1 text-sm text-gray-600">
                                            <a
                                                class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition duration-150 ease-in-out">
                                                Muat naik
                                            </a>
                                        </p>
                                        <p class="mt-1 text-xs text-gray-500">
                                            PNG & JPG sahaja.
                                        </p>
                                    </div>
                                </div>

                                <div id="uploaded-div"
                                    class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer"
                                    style="display:none">
                                    <img id="uploaded" src="" class="h-40">
                                    <span class="mt-3 inline-flex rounded-md shadow-sm">
                                        <a id="buttonDel" type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition ease-in-out duration-150"
                                            onclick="delPicture()">
                                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd">
                                            </svg>
                                            Buang Gambar
                                        </a>
                                    </span>
                                </div>

                                @endif
                            </div>

                            <div class="grid grid-cols-6 gap-6 mt-6">
                                <div class="col-span-6 sm:col-span-6">
                                    <label for="name" class="block text-sm font-medium leading-5 text-gray-700">Nama
                                        Pemohon</label>
                                    <input id="name" name="name" value="{{ strtoupper(auth()->user()->name) }}" readonly
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="ic_no" class="block text-sm font-medium leading-5 text-gray-700">No. KP
                                        (Baru)</label>
                                    <input id="ic_no" name="ic_no" value="{{ auth()->user()->ic_no }}" readonly
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="ic_old" class="block text-sm font-medium leading-5 text-gray-700">No. KP
                                        (Lama)</label>
                                    <input id="ic_old" name="ic_old"
                                        value="{{ isset(auth()->user()->peribadi->ic_old) ? auth()->user()->peribadi->ic_old : old('ic_old') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                            </div>

                            <div class="grid grid-cols-6 gap-6 mt-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <fieldset>
                                        <legend class="block text-sm font-medium leading-5 text-gray-700">Jantina
                                        </legend>
                                        {{-- <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p> --}}
                                        <div class="mt-3">
                                            <div class="flex items-center">
                                                <input id="genderL" name="gender" value="Lelaki" type="radio"
                                                    @if(isset(auth()->user()->peribadi->gender))
                                                @if(auth()->user()->peribadi->gender == 'Lelaki') checked @endif @else
                                                @endif
                                                class="form-radio h-4 w-4 text-indigo-600 transition duration-150
                                                ease-in-out" />
                                                <label for="genderL" class="ml-3">
                                                    <span
                                                        class="block text-sm leading-5 font-medium text-gray-700">Lelaki</span>
                                                </label>
                                                <input id="genderF" name="gender" value="Perempuan" type="radio"
                                                    @if(isset(auth()->user()->peribadi->gender))
                                                @if(auth()->user()->peribadi->gender == 'Perempuan') checked @endif
                                                @else @endif
                                                class="ml-8 form-radio h-4 w-4 text-indigo-600 transition duration-150
                                                ease-in-out" />
                                                <label for="genderF" class="ml-3">
                                                    <span
                                                        class="block text-sm leading-5 font-medium text-gray-700">Perempuan</span>
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="religion"
                                        class="block text-sm font-medium leading-5 text-gray-700">Agama</label>
                                    <select id="religion" name="religion"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="Islam" @if(isset(auth()->user()->peribadi->religion))
                                            @if(auth()->user()->peribadi->religion == 'Islam') selected @endif @else
                                            @endif>Islam
                                        </option>
                                        <option value="Hindu" @if(isset(auth()->user()->peribadi->religion))
                                            @if(auth()->user()->peribadi->religion == 'Hindu') selected @endif @else
                                            @endif>Hindu
                                        </option>
                                        <option value="Buddha" @if(isset(auth()->user()->peribadi->religion))
                                            @if(auth()->user()->peribadi->religion == 'Buddha') selected @endif @else
                                            @endif>Buddha
                                        </option>
                                        <option value="Kristian" @if(isset(auth()->user()->peribadi->religion))
                                            @if(auth()->user()->peribadi->religion == 'Kristian') selected @endif @else
                                            @endif>
                                            Kristian</option>
                                        <option value="Lain" @if(isset(auth()->user()->peribadi->religion))
                                            @if(auth()->user()->peribadi->religion == 'Lain') selected @endif @else
                                            @endif>Lain-lain</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-6 gap-6 mt-6">
                                <div class="col-span-6 sm:col-span-2">
                                    <label for="birthdate"
                                        class="block text-sm font-medium leading-5 text-gray-700">Tarikh
                                        Lahir</label>
                                    <input id="birthdate" name="birthdate" type="date"
                                        value="{{ isset(auth()->user()->peribadi->birthdate) ? auth()->user()->peribadi->birthdate : old('birthdate') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="race"
                                        class="block text-sm font-medium leading-5 text-gray-700">Bangsa/Kaum</label>
                                    <select id="race" name="race"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="Melayu" @if(isset(auth()->user()->peribadi->race))
                                            @if(auth()->user()->peribadi->race == 'Melayu') selected @endif @else
                                            @endif>Melayu
                                        </option>
                                        <option value="Cina" @if(isset(auth()->user()->peribadi->race))
                                            @if(auth()->user()->peribadi->race == 'Cina') selected @endif @else
                                            @endif>Cina</option>
                                        <option value="India" @if(isset(auth()->user()->peribadi->race))
                                            @if(auth()->user()->peribadi->race == 'India') selected @endif @else
                                            @endif>India</option>
                                        <option value="Iban" @if(isset(auth()->user()->peribadi->race))
                                            @if(auth()->user()->peribadi->race == 'Iban') selected @endif @else
                                            @endif>Iban</option>
                                        <option value="Kadazan" @if(isset(auth()->user()->peribadi->race))
                                            @if(auth()->user()->peribadi->race == 'Kadazan') selected @endif @else
                                            @endif>Kadazan
                                        </option>
                                        <option value="Bumiputra" @if(isset(auth()->user()->peribadi->race))
                                            @if(auth()->user()->peribadi->race == 'Bumiputra') selected @endif @else
                                            @endif>
                                            Bumiputra</option>
                                        <option value="Siam" @if(isset(auth()->user()->peribadi->race))
                                            @if(auth()->user()->peribadi->race == 'Siam') selected @endif @else
                                            @endif>Siam</option>
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="age"
                                        class="block text-sm font-medium leading-5 text-gray-700">Umur</label>
                                    <input id="age" name="age" type="number"
                                        value="{{ isset(auth()->user()->peribadi->age) ? auth()->user()->peribadi->age : old('age') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="marital" class="block text-sm font-medium leading-5 text-gray-700">Taraf
                                        Perkahwinan</label>
                                    <select id="marital" name="marital"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="Bujang" @if(isset(auth()->user()->peribadi->marital))
                                            @if(auth()->user()->peribadi->marital == 'Bujang') selected @endif @else
                                            @endif>Bujang
                                        </option>
                                        <option value="Berkahwin" @if(isset(auth()->user()->peribadi->marital))
                                            @if(auth()->user()->peribadi->marital == 'Berkahwin') selected @endif @else
                                            @endif>
                                            Berkahwin</option>
                                        <option value="Duda" @if(isset(auth()->user()->peribadi->marital))
                                            @if(auth()->user()->peribadi->marital == 'Duda') selected @endif @else
                                            @endif>Duda
                                        </option>
                                        <option value="Janda" @if(isset(auth()->user()->peribadi->marital))
                                            @if(auth()->user()->peribadi->marital == 'Janda') selected @endif @else
                                            @endif>Janda
                                        </option>
                                        <option value="Ibu Tunggal" @if(isset(auth()->user()->peribadi->marital))
                                            @if(auth()->user()->peribadi->marital == 'Ibu Tunggal') selected @endif
                                            @else
                                            @endif>
                                            Ibu Tunggal</option>
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="dependent"
                                        class="block text-sm font-medium leading-5 text-gray-700">Bilangan
                                        Tanggungan</label>
                                    <input id="dependent" name="dependent" type="number"
                                        value="{{ isset(auth()->user()->peribadi->dependent) ? auth()->user()->peribadi->dependent : old('dependent') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <fieldset>
                                        <legend class="block text-sm font-medium leading-5 text-gray-700">Orang Kelainan
                                            Upaya</legend>
                                        {{-- <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p> --}}
                                        <div class="mt-3">
                                            <div class="flex items-center">
                                                <input id="oku_yes" name="oku" value="Ya" type="radio"
                                                    @if(isset(auth()->user()->peribadi->oku))
                                                @if(auth()->user()->peribadi->oku == 'Ya') checked @endif @else
                                                @endif
                                                class="form-radio h-4 w-4 text-indigo-600 transition duration-150
                                                ease-in-out" />
                                                <label for="oku_yes" class="ml-3">
                                                    <span
                                                        class="block text-sm leading-5 font-medium text-gray-700">Ya</span>
                                                </label>
                                                <input id="oku_no" name="oku" value="Tidak" type="radio"
                                                    @if(isset(auth()->user()->peribadi->oku))
                                                @if(auth()->user()->peribadi->oku == 'Tidak') checked @endif @else
                                                @endif
                                                class="ml-8 form-radio h-4 w-4 text-indigo-600 transition duration-150
                                                ease-in-out" />
                                                <label for="oku_no" class="ml-3">
                                                    <span
                                                        class="block text-sm leading-5 font-medium text-gray-700">Tidak</span>
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-span-6">
                                    <label for="address1"
                                        class="block text-sm font-medium leading-5 text-gray-700">Alamat</label>
                                    <input id="address1" name="address1"
                                        value="{{ isset(auth()->user()->peribadi->address1) ? auth()->user()->peribadi->address1 : old('address1') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />

                                    <input id="address2" name="address2"
                                        value="{{ isset(auth()->user()->peribadi->address2) ? auth()->user()->peribadi->address1 : old('address2') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="postcode"
                                        class="block text-sm font-medium leading-5 text-gray-700">Poskod</label>
                                    <input id="postcode" name="postcode"
                                        value="{{ isset(auth()->user()->peribadi->postcode) ? auth()->user()->peribadi->postcode : old('postcode') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="city"
                                        class="block text-sm font-medium leading-5 text-gray-700">Bandar</label>
                                    <input id="city" name="city"
                                        value="{{ isset(auth()->user()->peribadi->city) ? auth()->user()->peribadi->city : old('city') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="state"
                                        class="block text-sm font-medium leading-5 text-gray-700">Negeri</label>
                                    <select id="state" name="state"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        @foreach($negerix as $negerix1)
                                            <option value="{{ $negerix1->kodnegeri }}"
                                                @if(isset(auth()->user()->peribadi->state))
                                                    @if(auth()->user()->peribadi->state == $negerix1->kodnegeri) 
                                                        selected 
                                                    @endif @else
                                                @endif
                                            >{{ $negerix1->namanegeri }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="phone_home" class="block text-sm font-medium leading-5 text-gray-700">No
                                        Telefon
                                        (Rumah)</label>
                                    <input id="phone_home" name="phone_home"
                                        value="{{ isset(auth()->user()->peribadi->phone_home) ? auth()->user()->peribadi->phone_home : old('phone_home') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="phone_hp" class="block text-sm font-medium leading-5 text-gray-700">No
                                        Telefon
                                        (HP)</label>
                                    <input id="phone_hp" name="phone_hp"
                                        value="{{ isset(auth()->user()->peribadi->phone_hp) ? auth()->user()->peribadi->phone_hp : old('phone_hp') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="email"
                                        class="block text-sm font-medium leading-5 text-gray-700">Emel</label>
                                    <input id="email" name="email" value="{{ auth()->user()->email }}" readonly
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="facebook"
                                        class="block text-sm font-medium leading-5 text-gray-700">Facebook</label>
                                    <input id="facebook" name="facebook"
                                        value="{{ isset(auth()->user()->peribadi->facebook) ? auth()->user()->peribadi->facebook : old('facebook') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="instagram"
                                        class="block text-sm font-medium leading-5 text-gray-700">Instagram</label>
                                    <input id="instagram" name="instagram"
                                        value="{{ isset(auth()->user()->peribadi->instagram) ? auth()->user()->peribadi->instagram : old('instagram') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="profession"
                                        class="block text-sm font-medium leading-5 text-gray-700">Perkerjaan
                                        Sekarang</label>
                                    <input id="profession" name="profession"
                                        value="{{ isset(auth()->user()->peribadi->profession) ? auth()->user()->peribadi->profession : old('profession') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <fieldset>
                                        <legend class="block text-sm font-medium leading-5 text-gray-700">Pendapatan
                                            Bulanan
                                        </legend>
                                        {{-- <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p> --}}

                                        <div class="flex items-center">
                                            <label for="income"
                                                class="block text-sm font-medium leading-5 text-gray-700">RM</label>
                                            <label for="income" class="ml-3">
                                                <span class="block text-sm leading-5 font-medium text-gray-700"><input
                                                        id="income" name="income"
                                                        value="{{ isset(auth()->user()->peribadi->income) ? auth()->user()->peribadi->income : old('income') }}"
                                                        type="number" step="0.01"
                                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" /></span>
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="employer_phone"
                                        class="block text-sm font-medium leading-5 text-gray-700">No
                                        Telefon Majikan</label>
                                    <input id="employer_phone" name="employer_phone"
                                        value="{{ isset(auth()->user()->peribadi->employer_phone) ? auth()->user()->peribadi->employer_phone : old('employer_phone') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6">
                                    <label for="employer_address1"
                                        class="block text-sm font-medium leading-5 text-gray-700">Alamat Majikan</label>
                                    <input id="employer_address1" name="employer_address1"
                                        value="{{ isset(auth()->user()->peribadi->employer_address1) ? auth()->user()->peribadi->employer_address1 : old('employer_address1') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />

                                    <input id="employer_address2" name="employer_address2"
                                        value="{{ isset(auth()->user()->peribadi->employer_address2) ? auth()->user()->peribadi->employer_address2 : old('employer_address2') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="employer_postcode"
                                        class="block text-sm font-medium leading-5 text-gray-700">Poskod</label>
                                    <input id="employer_postcode" name="employer_postcode"
                                        value="{{ isset(auth()->user()->peribadi->employer_postcode) ? auth()->user()->peribadi->employer_postcode : old('employer_postcode') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="employer_city"
                                        class="block text-sm font-medium leading-5 text-gray-700">Bandar</label>
                                    <input id="employer_city" name="employer_city"
                                        value="{{ isset(auth()->user()->peribadi->employer_city) ? auth()->user()->peribadi->employer_city : old('employer_city') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="employer_state"
                                        class="block text-sm font-medium leading-5 text-gray-700">Negeri</label>
                                    <select id="employer_state" name="employer_state"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        @foreach($negerix as $negerix2)
                                            <option value="{{ $negerix2->kodnegeri }}"
                                                @if(isset(auth()->user()->peribadi->employer_state))
                                                    @if(auth()->user()->peribadi->employer_state == $negerix2->kodnegeri) 
                                                        selected 
                                                    @endif @else
                                                @endif
                                            >{{ $negerix2->namanegeri }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden sm:block">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="mt-10 sm:mt-0 my-8 px-4">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Maklumat Pasangan Pemohon/Waris</h3>
                        {{-- <p class="mt-1 text-sm leading-5 text-gray-500">
        Decide which communications you'd like to receive and how.
        </p> --}}
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6 mt-1">

                                <div class="col-span-6 sm:col-span-6">
                                    <fieldset>
                                        <legend class="block text-sm font-medium leading-5 text-gray-700">Jenis
                                        </legend>
                                        {{-- <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p> --}}
                                        <div class="mt-4">
                                            <div class="flex items-center">
                                                <input id="spouse_type_husband" name="spouse_type" value="H"
                                                    type="radio" @if(isset(auth()->user()->peribadi->spouse_type))
                                                @if(auth()->user()->peribadi->spouse_type == 'H') checked @endif @else
                                                @endif
                                                class="form-radio h-4 w-4 text-indigo-600 transition duration-150
                                                ease-in-out" />
                                                <label for="spouse_type_husband" class="ml-3">
                                                    <span
                                                        class="block text-sm leading-5 font-medium text-gray-700">Suami</span>
                                                </label>
                                                <input id="spouse_type_wife" name="spouse_type" value="W" type="radio"
                                                    @if(isset(auth()->user()->peribadi->spouse_type))
                                                @if(auth()->user()->peribadi->spouse_type == 'W') checked @endif @else
                                                @endif
                                                class="ml-8 form-radio h-4 w-4 text-indigo-600 transition duration-150
                                                ease-in-out" />
                                                <label for="spouse_type_wife" class="ml-3">
                                                    <span
                                                        class="block text-sm leading-5 font-medium text-gray-700">Isteri</span>
                                                </label>
                                                <input id="spouse_type_beneficiary" name="spouse_type" value="B"
                                                    type="radio" @if(isset(auth()->user()->peribadi->spouse_type))
                                                @if(auth()->user()->peribadi->spouse_type == 'B') checked @endif @else
                                                @endif
                                                class="ml-8 form-radio h-4 w-4 text-indigo-600 transition duration-150
                                                ease-in-out" />
                                                <label for="spouse_type_beneficiary" class="ml-3">
                                                    <span
                                                        class="block text-sm leading-5 font-medium text-gray-700">Waris</span>
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <label for="spouse_name"
                                        class="block text-sm font-medium leading-5 text-gray-700">Nama
                                        Suami/Isteri/Waris</label>
                                    <input id="spouse_name" name="spouse_name"
                                        value="{{ isset(auth()->user()->peribadi->spouse_name) ? auth()->user()->peribadi->spouse_name : old('spouse_name') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <label for="spouse_ic_no"
                                        class="block text-sm font-medium leading-5 text-gray-700">No.
                                        KP (Baru)</label>
                                    <input id="spouse_ic_no" name="spouse_ic_no"
                                        value="{{ isset(auth()->user()->peribadi->spouse_ic_no) ? auth()->user()->peribadi->spouse_ic_no : old('spouse_ic_no') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <label for="spouse_profession"
                                        class="block text-sm font-medium leading-5 text-gray-700">Perkerjaan
                                        Sekarang</label>
                                    <input id="spouse_profession" name="spouse_profession"
                                        value="{{ isset(auth()->user()->peribadi->spouse_profession) ? auth()->user()->peribadi->spouse_profession : old('spouse_profession') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6">
                                    <label for="spouse_employer_address1"
                                        class="block text-sm font-medium leading-5 text-gray-700">Alamat Majikan</label>
                                    <input id="spouse_employer_address1" name="spouse_employer_address1"
                                        value="{{ isset(auth()->user()->peribadi->spouse_employer_address1) ? auth()->user()->peribadi->spouse_employer_address1 : old('spouse_employer_address1') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />

                                    <input id="spouse_employer_address2" name="spouse_employer_address2"
                                        value="{{ isset(auth()->user()->peribadi->spouse_employer_address2) ? auth()->user()->peribadi->spouse_employer_address2 : old('spouse_employer_address2') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="spouse_employer_postcode"
                                        class="block text-sm font-medium leading-5 text-gray-700">Poskod</label>
                                    <input id="spouse_employer_postcode" name="spouse_employer_postcode"
                                        value="{{ isset(auth()->user()->peribadi->spouse_employer_postcode) ? auth()->user()->peribadi->spouse_employer_postcode : old('spouse_employer_postcode') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="spouse_employer_city"
                                        class="block text-sm font-medium leading-5 text-gray-700">Bandar</label>
                                    <input id="spouse_employer_city" name="spouse_employer_city"
                                        value="{{ isset(auth()->user()->peribadi->spouse_employer_city) ? auth()->user()->peribadi->spouse_employer_city : old('spouse_employer_city') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="spouse_employer_state"
                                        class="block text-sm font-medium leading-5 text-gray-700">Negeri</label>
                                    <select id="spouse_employer_state" name="spouse_employer_state"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        @foreach($negerix as $negerix3)
                                            <option value="{{ $negerix3->kodnegeri }}" 
                                                @if(isset(auth()->user()->peribadi->spouse_employer_state))
                                                    @if(auth()->user()->peribadi->spouse_employer_state == $negerix3->kodnegeri) 
                                                        selected 
                                                    @endif @else
                                                @endif
                                            >{{ $negerix3->namanegeri }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex justify-center">
            <span class="inline-flex rounded-md shadow-sm">
                <button type="submit"
                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition ease-in-out duration-150">
                    {{--add this to disable button: opacity-50 cursor-not-allowed --}}
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Simpan
                </button>
            </span>
        </div>
    </form>
</div>

@push('js')
<script>
    $(document).ready(function(){
        $('select[name=tekun_state]').on('change', function () {
            var selected = $(this).find(":selected").attr('value');
            $.ajax({
                url: "{{ route('home.getCawangan') }}?negeri=" + selected,
                method: 'GET',
                success: function(data) {
                    $('#tekun_branch').html(data.html);
                }
            });
        });
    });
</script>
<script>
    $("#gambar-div").click(function (event) {
        if (!$(event.target).is('#gambar')) {
            $(this).find("#gambar").trigger('click');
        }
    });

    $("input[id='gambar']").on('change', function () {
        readURL(this);
        checkFiles();
    });

    var checkFiles = function () {
        if (document.getElementById("gambar").files.length > 0) {
            $('#uploaded-div').css('display', 'block');
            $('#gambar-div').css('display', 'none');
        } else {
            $('#uploaded-div').css('display', 'none');
            $('#gambar-div').css('display', 'block');
        }
    }

    var readURL = function (input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#uploaded').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function delPicture() {
        $("#gambar").val('');
        $('#uploaded-div').css('display', 'none');
        $('#gambar-div').css('display', 'block');
    }

    function deleteGambar(id) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'POST',
            url: "{{ url('deleteGambar')}}" + '/' + id,
            data: {'_token' : CSRF_TOKEN, '_method' : 'DELETE'},
            success: function () {
                window.location = "{{ url('home')}}";
            }
        });
    }
</script>
@endpush

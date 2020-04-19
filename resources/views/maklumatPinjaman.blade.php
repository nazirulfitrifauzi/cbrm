<div x-show="tab === 'tab3'">
    <form method="post" action="{{ route('home.storePinjaman') }}">
    @csrf

    <div class="my-8 px-4">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Keterangan Mengenai Pembiayaan Yang Dipohon
                    </h3>
                    {{-- <p class="mt-1 text-sm leading-5 text-gray-500">
        This information will be displayed publicly so be careful what you share.
        </p> --}}
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-6">
                                <fieldset>
                                    <legend class="block text-sm font-medium leading-5 text-gray-700">Jumlah Pembiayaan
                                        Yang Diperlukan</legend>
                                    {{-- <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p> --}}
                                    <div class="mt-3">
                                        <div class="flex items-center">
                                            <label for="purchase_price"
                                                class="block text-sm font-medium leading-5 text-gray-700">RM</label>
                                            <label for="purchase_price" class="ml-3">
                                                <span class="block text-sm leading-5 font-medium text-gray-700"> <!-- number xyah checking kat front end.. kite accept string je, kat controlloer bru kite validate number -->
                                                    <input
                                                        id="purchase_price" name="purchase_price"
                                                        value="{{ isset(auth()->user()->pinjaman->purchase_price) ? auth()->user()->pinjaman->purchase_price : old('purchase_price') }}"
                                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                                        />
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
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
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Perujuk</h3>
                    {{-- <p class="mt-1 text-sm leading-5 text-gray-500">
        Use a permanent address where you can receive mail.
        </p> --}}
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6 mt-6">
                            <div class="col-span-6 sm:col-span-6">
                                <label for="reference_name"
                                    class="block text-sm font-medium leading-5 text-gray-700">Nama</label>
                                <input id="reference_name" name="reference_name"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" 
                                    value="{{ isset(auth()->user()->pinjaman->reference_name) ? auth()->user()->pinjaman->reference_name : old('reference_name') }}"
                                    />
                            </div>
                        </div>

                        <div class="grid grid-cols-6 gap-6 mt-6">
                            <div class="col-span-6">
                                <label for="reference_address1"
                                    class="block text-sm font-medium leading-5 text-gray-700">Alamat</label>
                                <input id="reference_address1" name="reference_address1"
                                    value="{{ isset(auth()->user()->pinjaman->reference_address1) ? auth()->user()->pinjaman->reference_address1 : old('reference_address1') }}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />

                                <input id="reference_address2" name="reference_address2"
                                    value="{{ isset(auth()->user()->pinjaman->reference_address2) ? auth()->user()->pinjaman->reference_address2 : old('reference_address2') }}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="reference_postcode"
                                    class="block text-sm font-medium leading-5 text-gray-700">Poskod</label>
                                <input id="reference_postcode" name="reference_postcode"
                                    value="{{ isset(auth()->user()->pinjaman->reference_postcode) ? auth()->user()->pinjaman->reference_postcode : old('reference_postcode') }}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label for="reference_city"
                                    class="block text-sm font-medium leading-5 text-gray-700">Bandar</label>
                                <input id="reference_city" name="reference_city" value="{{ isset(auth()->user()->pinjaman->reference_city) ? auth()->user()->pinjaman->reference_city : old('reference_city') }}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="reference_state"
                                    class="block text-sm font-medium leading-5 text-gray-700">Negeri</label>
                                <select id="reference_state" name="reference_state"
                                    class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    <option value="1" @if(isset(auth()->user()->pinjaman->reference_state)) @if(auth()->user()->pinjaman->reference_state == '1') selected @endif @else @endif>Johor</option>
                                    <option value="2" @if(isset(auth()->user()->pinjaman->reference_state)) @if(auth()->user()->pinjaman->reference_state == '2') selected @endif @else @endif>Kedah</option> <!-- kene pkai cmni sbb aku buat insert & update & show dlm satu form-->
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="reference_relation"
                                    class="block text-sm font-medium leading-5 text-gray-700">Hubungan Dengan
                                    Pemohon</label>
                                <input id="reference_relation" name="reference_relation"
                                    value="{{ isset(auth()->user()->pinjaman->reference_relation) ? auth()->user()->pinjaman->reference_relation : old('reference_relation') }}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="reference_phone"
                                    class="block text-sm font-medium leading-5 text-gray-700">No Telefon</label>
                                <input id="reference_phone" name="reference_phone" 
                                    value="{{ isset(auth()->user()->pinjaman->reference_phone) ? auth()->user()->pinjaman->reference_phone : old('reference_phone') }}" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
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
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Dokumen Sokongan</h3>
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
                                Kad Pengenalan
                            </label>
                            <div id="ic-no-div"
                                class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer"
                                style="display: block;">
                                <div class="text-center">
                                    <input type="file" name="doc_ic_no" id="doc_ic_no" class="hidden" />
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
                                        PDF sahaja
                                    </p>
                                </div>
                            </div>
                            {{-- test --}}
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
                                        Buang File
                                    </a>
                                </span>
                            </div>
                            {{-- end test --}}
                        </div>

                        <div class="mt-6">
                            <label for="profile_pic" class="block text-sm leading-5 font-medium text-gray-700">
                                SSM
                            </label>
                            <div id="ssm-div"
                                class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer"
                                style="display: block;">
                                <div class="text-center">
                                    <input type="file" name="doc_ssm" id="doc_ssm" class="hidden" />
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
                                        PDF sahaja
                                    </p>
                                </div>
                            </div>
                            {{-- test --}}
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
                                        Buang File
                                    </a>
                                </span>
                            </div>
                            {{-- end test --}}
                        </div>

                        <div class="mt-6">
                            <label for="profile_pic" class="block text-sm leading-5 font-medium text-gray-700">
                                Penyata Bank
                            </label>
                            <div id="bank-statements-div"
                                class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer"
                                style="display: block;">
                                <div class="text-center">
                                    <input type="file" name="doc_bank_statements" id="doc_bank_statements" class="hidden" />
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
                                        PDF sahaja
                                    </p>
                                </div>
                            </div>
                            {{-- test --}}
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
                                        Buang File
                                    </a>
                                </span>
                            </div>
                            {{-- end test --}}
                        </div>

                        <div class="mt-6">
                            <label for="profile_pic" class="block text-sm leading-5 font-medium text-gray-700">
                                Bil Utiliti
                            </label>
                            <div id="utility-div"
                                class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer"
                                style="display: block;">
                                <div class="text-center">
                                    <input type="file" name="doc_utility" id="doc_utility" class="hidden" />
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
                                        PDF sahaja
                                    </p>
                                </div>
                            </div>
                            {{-- test --}}
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
                                        Buang File
                                    </a>
                                </span>
                            </div>
                            {{-- end test --}}
                        </div>

                        <div class="mt-6">
                            <label for="profile_pic" class="block text-sm leading-5 font-medium text-gray-700">
                                Borang Penzahiran
                            </label>
                            <div id="penzahiran-div"
                                class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer"
                                style="display: block;">
                                <div class="text-center">
                                    <input type="file" name="penzahiran" id="penzahiran" class="hidden" />
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
                                        PDF sahaja
                                    </p>
                                </div>
                            </div>
                            {{-- test --}}
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
                                        Buang File
                                    </a>
                                </span>
                            </div>
                            {{-- end test --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

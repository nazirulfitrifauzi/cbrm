<div x-show="tab === 'tab1'">
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
                                <label for="state"
                                    class="block text-sm font-medium leading-5 text-gray-700">Negeri</label>
                                <select id="state" name="state"
                                    class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    <option value="1" {{ old('role_id') == 1 ? 'selected' : '' }}>Johor</option>
                                    <option value="2" {{ old('role_id') == 2 ? 'selected' : '' }}>Kedah</option>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="branch"
                                    class="block text-sm font-medium leading-5 text-gray-700">Cawangan</label>
                                <select id="branch" name="branch"
                                    class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    <option value="1" {{ old('role_id') == 1 ? 'selected' : '' }}>Ayer Hitam</option>
                                    <option value="2" {{ old('role_id') == 2 ? 'selected' : '' }}>Bakri</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-6 gap-6 mt-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="business_status"
                                    class="block text-sm font-medium leading-5 text-gray-700">Status Perniagaan</label>
                                <select id="business_status" name="business_status"
                                    class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    <option value="1" {{ old('role_id') == 1 ? 'selected' : '' }}>Sedang Berniaga
                                    </option>
                                    <option value="2" {{ old('role_id') == 2 ? 'selected' : '' }}>Memulakan Perniagaan
                                    </option>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <fieldset>
                                    <legend class="block text-sm font-medium leading-5 text-gray-700">Usahawan TEKUN
                                    </legend>
                                    {{-- <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p> --}}
                                    <div class="mt-4">
                                        <div class="flex items-center">
                                            <input id="business_type_yes" name="business_type" value="Y" type="radio"
                                                {{ old('business_type') == "Y" ? 'checked' : '' }}
                                                class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                                            <label for="business_type_yes" class="ml-3">
                                                <span
                                                    class="block text-sm leading-5 font-medium text-gray-700">Ya</span>
                                            </label>
                                            <input id="business_type_no" name="business_type" value="N" type="radio"
                                                {{ old('business_type') == "N" ? 'checked' : '' }}
                                                class="ml-8 form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
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
                                    <option value="1" {{ old('business_sector') == 1 ? 'selected' : '' }}>PERTANIAN &
                                        PERUSAHAAN ASAS TANI</option>
                                    <option value="2" {{ old('business_sector') == 2 ? 'selected' : '' }}>PERUNCITAN
                                    </option>
                                    <option value="3" {{ old('business_sector') == 3 ? 'selected' : '' }}>PERKHIDMATAN
                                    </option>
                                    <option value="4" {{ old('business_sector') == 4 ? 'selected' : '' }}>PEMBUATAN
                                    </option>
                                    <option value="5" {{ old('business_sector') == 5 ? 'selected' : '' }}>KONTRAKTOR
                                        KECIL</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-6 gap-6 mt-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="bank1" class="block text-sm font-medium leading-5 text-gray-700">Nama
                                    Bank 1</label>
                                <select id="bank1" name="bank1"
                                    class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    <option value="1" {{ old('bank1') == 1 ? 'selected' : '' }}>Maybank</option>
                                    <option value="2" {{ old('bank1') == 2 ? 'selected' : '' }}>Bank Muamalat</option>
                                    <option value="3" {{ old('bank1') == 3 ? 'selected' : '' }}>Bank Islam</option>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="bank1_acct" class="block text-sm font-medium leading-5 text-gray-700">No
                                    Akaun Bank 1</label>
                                <input id="bank1_acct" name="bank1_acct" value="{{old('bank1_acct')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="bank2" class="block text-sm font-medium leading-5 text-gray-700">Nama
                                    Bank 2</label>
                                <select id="bank2" name="bank2"
                                    class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    <option value="1" {{ old('bank2') == 1 ? 'selected' : '' }}>Maybank</option>
                                    <option value="2" {{ old('bank2') == 2 ? 'selected' : '' }}>Bank Muamalat</option>
                                    <option value="3" {{ old('bank2') == 3 ? 'selected' : '' }}>Bank Islam</option>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="bank2_acct" class="block text-sm font-medium leading-5 text-gray-700">No
                                    Akaun Bank 2</label>
                                <input id="bank2_acct" name="bank2_acct" value="{{old('bank2_acct')}}"
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

    <div class="mt-10 sm:mt-0">
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
                            <div id="gambar-div" class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer" style="display: block;">
                                <div class="text-center">
                                    <input type="file" name="gambar" id="gambar" class="hidden" />
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                        viewBox="0 0 48 48">
                                        <path
                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <p class="mt-1 text-sm text-gray-600">
                                        <a class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition duration-150 ease-in-out">
                                            Muat naik
                                        </a>
                                    </p>
                                    <p class="mt-1 text-xs text-gray-500">
                                        PNG & JPG sahaja.
                                    </p>
                                </div>
                            </div>
                            {{-- test --}}
                            <div id="uploaded-div" class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer" style="display:none">
                                <img id="uploaded" src="" class="h-40">
                                <span class="mt-3 inline-flex rounded-md shadow-sm">
                                    <a id="buttonDel" type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition ease-in-out duration-150" onclick="delPicture()">
                                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd">
                                        </svg>
                                        Buang Gambar
                                    </a>
                                </span>
                            </div>
                            {{-- end test --}}
                        </div>

                        <div class="grid grid-cols-6 gap-6 mt-6">
                            <div class="col-span-6 sm:col-span-6">
                                <label for="name" class="block text-sm font-medium leading-5 text-gray-700">Nama
                                    Pemohon</label>
                                <input id="name" name="name" value="{{old('name')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="ic_no" class="block text-sm font-medium leading-5 text-gray-700">No. KP
                                    (Baru)</label>
                                <input id="ic_no" name="ic_no" value="{{old('ic_no')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="ic_old" class="block text-sm font-medium leading-5 text-gray-700">No. KP
                                    (Lama)</label>
                                <input id="ic_old" name="ic_old" value="{{old('ic_old')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                        </div>

                        <div class="grid grid-cols-6 gap-6 mt-6">
                            <div class="col-span-6 sm:col-span-3">
                                <fieldset class="mt-6">
                                    <legend class="block text-sm font-medium leading-5 text-gray-700">Jantina</legend>
                                    {{-- <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p> --}}
                                    <div class="mt-3">
                                        <div class="flex items-center">
                                            <input id="genderL" name="gender" value="L" type="radio"
                                                {{ old('gender') == "L" ? 'checked' : '' }}
                                                class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                                            <label for="genderL" class="ml-3">
                                                <span
                                                    class="block text-sm leading-5 font-medium text-gray-700">Lelaki</span>
                                            </label>
                                            <input id="genderF" name="gender" value="P" type="radio"
                                                {{ old('gender') == "P" ? 'checked' : '' }}
                                                class="ml-8 form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                                            <label for="genderF" class="ml-3">
                                                <span
                                                    class="block text-sm leading-5 font-medium text-gray-700">Perempuan</span>
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <fieldset class="mt-6">
                                    <legend class="block text-sm font-medium leading-5 text-gray-700">Agama</legend>
                                    {{-- <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p> --}}
                                    <div class="mt-3">
                                        <div class="flex items-center">
                                            <input id="religionI" name="religion" value="I" type="radio"
                                                {{ old('religion') == "I" ? 'checked' : '' }}
                                                class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                                            <label for="religionI" class="ml-3">
                                                <span
                                                    class="block text-sm leading-5 font-medium text-gray-700">Islam</span>
                                            </label>
                                            <input id="religionB" name="religion" value="B" type="radio"
                                                {{ old('religion') == "B" ? 'checked' : '' }}
                                                class="ml-8 form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                                            <label for="religionB" class="ml-3">
                                                <span class="block text-sm leading-5 font-medium text-gray-700">Bukan
                                                    Islam</span>
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>

                        <div class="grid grid-cols-6 gap-6 mt-6">
                            <div class="col-span-6 sm:col-span-2">
                                <label for="birthdate" class="block text-sm font-medium leading-5 text-gray-700">Tarikh
                                    Lahir</label>
                                <input id="birthdate" name="birthdate" type="date" value="{{old('birthdate')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <label for="race" class="block text-sm font-medium leading-5 text-gray-700">Bangsa /
                                    Kaum</label>
                                <select id="race" name="race"
                                    class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    <option value="1" {{ old('race') == 1 ? 'selected' : '' }}>Melayu</option>
                                    <option value="2" {{ old('race') == 2 ? 'selected' : '' }}>Cina</option>
                                    <option value="3" {{ old('race') == 3 ? 'selected' : '' }}>India</option>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <label for="age" class="block text-sm font-medium leading-5 text-gray-700">Umur</label>
                                <input id="age" name="age" value="{{old('age')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <label for="marital" class="block text-sm font-medium leading-5 text-gray-700">Taraf
                                    Perkahwinan</label>
                                <select id="marital" name="marital"
                                    class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    <option value="1" {{ old('bank2') == 1 ? 'selected' : '' }}>Bujang</option>
                                    <option value="2" {{ old('bank2') == 2 ? 'selected' : '' }}>Berkahwin</option>
                                    <option value="3" {{ old('bank2') == 3 ? 'selected' : '' }}>Duda</option>
                                    <option value="4" {{ old('bank2') == 4 ? 'selected' : '' }}>Janda</option>
                                    <option value="5" {{ old('bank2') == 5 ? 'selected' : '' }}>Ibu Tunggal</option>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <label for="dependent"
                                    class="block text-sm font-medium leading-5 text-gray-700">Bilangan
                                    Tanggungan</label>
                                <input id="dependent" name="dependent" value="{{old('dependent')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <fieldset>
                                    <legend class="block text-sm font-medium leading-5 text-gray-700">Orang Kelainan
                                        Upaya</legend>
                                    {{-- <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p> --}}
                                    <div class="mt-3">
                                        <div class="flex items-center">
                                            <input id="okuY" name="oku" value="Y" type="radio"
                                                {{ old('oku') == "Y" ? 'checked' : '' }}
                                                class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                                            <label for="okuY" class="ml-3">
                                                <span
                                                    class="block text-sm leading-5 font-medium text-gray-700">Ya</span>
                                            </label>
                                            <input id="okuN" name="oku" value="N" type="radio"
                                                {{ old('oku') == "N" ? 'checked' : '' }}
                                                class="ml-8 form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                                            <label for="okuN" class="ml-3">
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
                                <input id="address1" name="address1" value="{{old('address1')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />

                                <input id="address2" name="address2" value="{{old('address2')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="postcode"
                                    class="block text-sm font-medium leading-5 text-gray-700">Poskod</label>
                                <input id="postcode" name="postcode" value="{{old('postcode')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label for="city"
                                    class="block text-sm font-medium leading-5 text-gray-700">Bandar</label>
                                <input id="city" name="city" value="{{old('city')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="state"
                                    class="block text-sm font-medium leading-5 text-gray-700">Negeri</label>
                                <select id="state" name="state"
                                    class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    <option value="1" {{ old('bank2') == 1 ? 'selected' : '' }}>Johor</option>
                                    <option value="2" {{ old('bank2') == 2 ? 'selected' : '' }}>Kedah</option>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="phone1" class="block text-sm font-medium leading-5 text-gray-700">No Telefon
                                    (Rumah)</label>
                                <input id="phone1" name="phone1" value="{{old('phone1')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="phone2" class="block text-sm font-medium leading-5 text-gray-700">No Telefon
                                    (HP)</label>
                                <input id="phone2" name="phone2" value="{{old('phone2')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <label for="email"
                                    class="block text-sm font-medium leading-5 text-gray-700">Emel</label>
                                <input id="email" name="email" value="{{old('email')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <label for="facebook"
                                    class="block text-sm font-medium leading-5 text-gray-700">Facebook</label>
                                <input id="facebook" name="facebook" value="{{old('facebook')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <label for="instagram"
                                    class="block text-sm font-medium leading-5 text-gray-700">Instagram</label>
                                <input id="instagram" name="instagram" value="{{old('instagram')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <label for="profession"
                                    class="block text-sm font-medium leading-5 text-gray-700">Perkerjaan
                                    Sekarang</label>
                                <input id="profession" name="profession" value="{{old('profession')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <label for="income" class="block text-sm font-medium leading-5 text-gray-700">Pendapatan
                                    (Bulanan)</label>
                                <input id="income" name="income" value="{{old('income')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <label for="phone_employer" class="block text-sm font-medium leading-5 text-gray-700">No
                                    Telefon Majikan</label>
                                <input id="phone_employer" name="phone_employer" value="{{old('phone_employer')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6">
                                <label for="address1_employer"
                                    class="block text-sm font-medium leading-5 text-gray-700">Alamat Majikan</label>
                                <input id="address1_employer" name="address1_employer"
                                    value="{{old('address1_employer')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />

                                <input id="address2_employer" name="address2_employer"
                                    value="{{old('address2_employer')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="postcode_employer"
                                    class="block text-sm font-medium leading-5 text-gray-700">Poskod</label>
                                <input id="postcode_employer" name="postcode_employer"
                                    value="{{old('postcode_employer')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label for="city_employer"
                                    class="block text-sm font-medium leading-5 text-gray-700">Bandar</label>
                                <input id="city_employer" name="city_employer" value="{{old('city_employer')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="state_employer"
                                    class="block text-sm font-medium leading-5 text-gray-700">Negeri</label>
                                <select id="state_employer" name="state_employer"
                                    class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    <option value="1" {{ old('state_employer') == 1 ? 'selected' : '' }}>Johor</option>
                                    <option value="2" {{ old('state_employer') == 2 ? 'selected' : '' }}>Kedah</option>
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

    <div class="mt-10 sm:mt-0">
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
                        <div class="grid grid-cols-6 gap-6 mt-6">
                            <div class="col-span-6 sm:col-span-6">
                                <label for="spouse_name" class="block text-sm font-medium leading-5 text-gray-700">Nama
                                    * Suami/Isteri/Waris</label>
                                <input id="spouse_name" name="spouse_name" value="{{old('city_employer')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-6">
                                <label for="spouse_ic_no" class="block text-sm font-medium leading-5 text-gray-700">No.
                                    KP (Baru)</label>
                                <input id="spouse_ic_no" name="spouse_ic_no" value="{{old('city_employer')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-6">
                                <label for="spouse_profession"
                                    class="block text-sm font-medium leading-5 text-gray-700">Perkerjaan
                                    Sekarang</label>
                                <input id="spouse_profession" name="spouse_profession" value="{{old('city_employer')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            {{-- <div class="col-span-6 sm:col-span-2">
                    <label for="spouse_income" class="block text-sm font-medium leading-5 text-gray-700">Pendapatan (Bulanan)</label>
                     <input id="spouse_income" name="spouse_income" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                </div> --}}

                            {{-- <div class="col-span-6 sm:col-span-2">
                    <label for="phone2" class="block text-sm font-medium leading-5 text-gray-700">No Telefon Majikan</label>
                     <input id="phone2" name="phone2" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                </div> --}}

                            <div class="col-span-6">
                                <label for="spouse_address1_employer"
                                    class="block text-sm font-medium leading-5 text-gray-700">Alamat Majikan</label>
                                <input id="spouse_address1_employer" name="spouse_address1_employer"
                                    value="{{old('spouse_address1_employer')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />

                                <input id="spouse_address2_employer" name="spouse_address2_employer"
                                    value="{{old('spouse_address2_employer')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="spouse_postcode_employer"
                                    class="block text-sm font-medium leading-5 text-gray-700">Poskod</label>
                                <input id="spouse_postcode_employer" name="spouse_postcode_employer"
                                    value="{{old('spouse_postcode_employer')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label for="spouse_city_employer"
                                    class="block text-sm font-medium leading-5 text-gray-700">Bandar</label>
                                <input id="spouse_city_employer" name="spouse_city_employer"
                                    value="{{old('spouse_city_employer')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="spouse_state_employer"
                                    class="block text-sm font-medium leading-5 text-gray-700">Negeri</label>
                                <select id="spouse_state_employer" name="spouse_state_employer"
                                    class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    <option {{ old('spouse_state_employer') == 2 ? 'selected' : '' }}>Johor</option>
                                    <option {{ old('spouse_state_employer') == 2 ? 'selected' : '' }}>Kedah</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        $("#gambar-div").click(function(event) {
            if ( !$(event.target).is('#gambar') ) {
                $(this).find("#gambar").trigger('click');
            }
        });

        $("input[id='gambar']").on('change', function(){
            readURL(this);
            checkFiles();
        });

        var checkFiles = function () {
            if( document.getElementById("gambar").files.length > 0 ){
                $('#uploaded-div').css('display', 'block');
                $('#gambar-div').css('display', 'none');
            } else {
                $('#uploadeddiv').css('display', 'none');
                $('#gambar-div').css('display', 'block');
            }
        }

        var readURL = function(input) {
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
    </script>
@endpush
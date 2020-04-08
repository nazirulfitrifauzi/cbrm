<div id="maklumatPeribadi_content" class="block">
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
    <form action="#" method="POST">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-4">
                    <label for="state" class="block text-sm font-medium leading-5 text-gray-700">Negeri</label>
                    <select id="state" name="state" class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    <option>Johor</option>
                    <option>Kedah</option>
                    </select>
                </div>
                
                <div class="col-span-6 sm:col-span-4">
                    <label for="branch" class="block text-sm font-medium leading-5 text-gray-700">Cawangan</label>
                    <select id="branch" name="branch" class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    <option>Ayer Hitam</option>
                    <option>Bakri</option>
                    </select>
                </div>
                
                <div class="col-span-6 sm:col-span-4">
                    <label for="business_status" class="block text-sm font-medium leading-5 text-gray-700">Status Perniagaan</label>
                    <select id="business_status" name="business_status" class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    <option>Sedang Berniaga</option>
                    <option>Memulakan Perniagaan</option>
                    </select>
                </div>
            </div>

            <fieldset class="mt-6">
                <legend class="text-base leading-6 font-medium text-gray-900">Usahawan TEKUN</legend>
                {{-- <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p> --}}
                <div class="mt-4">
                    <div class="flex items-center">
                        <input id="business_type_yes" name="business_type" value="Y" type="radio" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                        <label for="business_type_yes" class="ml-3">
                            <span class="block text-sm leading-5 font-medium text-gray-700">Ya</span>
                        </label>
                        <input id="business_type_no" name="business_type" value="N" type="radio" class="ml-8 form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                        <label for="business_type_no" class="ml-3">
                            <span class="block text-sm leading-5 font-medium text-gray-700">Tidak</span>
                        </label>
                    </div>
                </div>
            </fieldset>
            
            <div class="grid grid-cols-6 gap-6 mt-6">
                <div class="col-span-6 sm:col-span-4">
                    <label for="sector" class="block text-sm font-medium leading-5 text-gray-700">Sektor Perniagaan</label>
                    <select id="sector" name="sector" class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    <option>PERTANIAN & PERUSAHAAN ASAS TANI</option>
                    <option>PERUNCITAN</option>
                    <option>PERKHIDMATAN</option>
                    <option>PEMBUATAN</option>
                    <option>KONTRAKTOR KECIL</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-6 gap-6 mt-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="bank1" class="block text-sm font-medium leading-5 text-gray-700">Nama Bank</label>
                    <select id="bank1" name="bank1" class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    <option>Maybank</option>
                    <option>Bank Muamalat</option>
                    <option>Bank Islam</option>
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="bank1_acct" class="block text-sm font-medium leading-5 text-gray-700">No Akaun Bank</label>
                    <input id="bank1_acct" name="bank1_acct" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="bank2" class="block text-sm font-medium leading-5 text-gray-700">Nama Bank</label>
                    <select id="bank2" name="bank1" class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    <option>Maybank</option>
                    <option>Bank Muamalat</option>
                    <option>Bank Islam</option>
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="bank2_acct" class="block text-sm font-medium leading-5 text-gray-700">No Akaun Bank</label>
                    <input id="bank2_acct" name="bank2_acct" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                </div>
            </div>
        </div>
        </div>
    </form>
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
    <form action="#" method="POST">
        <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
            <div class="mt-1">
                <label for="profile_pic" class="block text-sm leading-5 font-medium text-gray-700">
                    Gambar
                </label>
                <div class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="mt-1 text-sm text-gray-600">
                        <button class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition duration-150 ease-in-out">
                        Muat turun 
                        </button>
                        atau <i>drag and drop</i>
                    </p>
                    <p class="mt-1 text-xs text-gray-500">
                        PNG, JPG, GIF up to 10MB
                    </p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-6 gap-6 mt-6">
            <div class="col-span-6 sm:col-span-6">
                <label for="name" class="block text-sm font-medium leading-5 text-gray-700">Nama Pemohon</label>
                <input id="name" name="name" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>

            <div class="col-span-6 sm:col-span-3">
                <label for="ic_no" class="block text-sm font-medium leading-5 text-gray-700">No. KP (Baru)</label>
                <input id="ic_no" name="ic_no" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>

            <div class="col-span-6 sm:col-span-3">
                <label for="ic_old" class="block text-sm font-medium leading-5 text-gray-700">No. KP (Lama)</label>
                <input id="ic_old" name="ic_old" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>
            </div>

            <div class="grid grid-cols-6 gap-6 mt-6">
                <div class="col-span-6 sm:col-span-3">
                    <fieldset class="mt-6">
                        <legend class="block text-sm font-medium leading-5 text-gray-700">Jantina</legend>
                        {{-- <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p> --}}
                        <div class="mt-3">
                            <div class="flex items-center">
                                <input id="genderL" name="gender" value="L" type="radio" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                                <label for="genderL" class="ml-3">
                                    <span class="block text-sm leading-5 font-medium text-gray-700">Lelaki</span>
                                </label>
                                <input id="genderF" name="gender" value="P" type="radio" class="ml-8 form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                                <label for="genderF" class="ml-3">
                                    <span class="block text-sm leading-5 font-medium text-gray-700">Perempuan</span>
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
                                <input id="religionI" name="religion" value="I" type="radio" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                                <label for="religionI" class="ml-3">
                                    <span class="block text-sm leading-5 font-medium text-gray-700">Islam</span>
                                </label>
                                <input id="religionB" name="religion" value="B" type="radio" class="ml-8 form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                                <label for="religionB" class="ml-3">
                                    <span class="block text-sm leading-5 font-medium text-gray-700">Bukan Islam</span>
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>

            <div class="grid grid-cols-6 gap-6 mt-6">
            <div class="col-span-6 sm:col-span-2">
                <label for="birthdate" class="block text-sm font-medium leading-5 text-gray-700">Tarikh Lahir</label>
                <input id="birthdate" name="birthdate" type="date" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>
            
            <div class="col-span-6 sm:col-span-2">
                <label for="race" class="block text-sm font-medium leading-5 text-gray-700">Bangsa / Kaum</label>
                <select id="race" name="race" class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                <option>Melayu</option>
                <option>Cina</option>
                <option>India</option>
                </select>
            </div>

            <div class="col-span-6 sm:col-span-2">
               <label for="age" class="block text-sm font-medium leading-5 text-gray-700">Umur</label>
                <input id="age" name="age" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>

            <div class="col-span-6 sm:col-span-2">
                <label for="marital" class="block text-sm font-medium leading-5 text-gray-700">Taraf Perkahwinan</label>
                <select id="marital" name="marital" class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                <option>Bujang</option>
                <option>Berkahwin</option>
                <option>Duda</option>
                <option>Janda</option>
                <option>Ibu Tunggal</option>
                </select>
            </div>

            <div class="col-span-6 sm:col-span-2">
                <label for="dependent" class="block text-sm font-medium leading-5 text-gray-700">Bilangan Tanggungan</label>
                 <input id="dependent" name="dependent" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>

            <div class="col-span-6 sm:col-span-2">
                <fieldset>
                    <legend class="block text-sm font-medium leading-5 text-gray-700">Orang Kelainan Upaya</legend>
                    {{-- <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p> --}}
                    <div class="mt-3">
                        <div class="flex items-center">
                            <input id="okuY" name="oku" value="Y" type="radio" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                            <label for="okuY" class="ml-3">
                                <span class="block text-sm leading-5 font-medium text-gray-700">Ya</span>
                            </label>
                            <input id="okuN" name="oku" value="N" type="radio" class="ml-8 form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                            <label for="okuN" class="ml-3">
                                <span class="block text-sm leading-5 font-medium text-gray-700">Tidak</span>
                            </label>
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class="col-span-6">
                <label for="address1" class="block text-sm font-medium leading-5 text-gray-700">Alamat</label>
                <input id="address1" name="address1" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            
                <input id="address2" name="address2" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>

            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="postcode" class="block text-sm font-medium leading-5 text-gray-700">Poskod</label>
                <input id="postcode" name="postcode" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>

            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <label for="city" class="block text-sm font-medium leading-5 text-gray-700">Bandar</label>
                <input id="city" name="city" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>

            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="state" class="block text-sm font-medium leading-5 text-gray-700">Negeri</label>
                <select id="state" name="state" class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                <option>Johor</option>
                <option>Kedah</option>
                <option>Duda</option>
                <option>Janda</option>
                <option>Ibu Tunggal</option>
                </select>
            </div>

            <div class="col-span-6 sm:col-span-3">
                <label for="phone1" class="block text-sm font-medium leading-5 text-gray-700">No Telefon (Rumah)</label>
                 <input id="phone1" name="phone1" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>

            <div class="col-span-6 sm:col-span-3">
                <label for="phone2" class="block text-sm font-medium leading-5 text-gray-700">No Telefon (HP)</label>
                 <input id="phone2" name="phone2" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>

            <div class="col-span-6 sm:col-span-2">
                <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Emel</label>
                 <input id="email" name="email" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>

            <div class="col-span-6 sm:col-span-2">
                <label for="facebook" class="block text-sm font-medium leading-5 text-gray-700">Facebook</label>
                 <input id="facebook" name="facebook" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>

            <div class="col-span-6 sm:col-span-2">
                <label for="instagram" class="block text-sm font-medium leading-5 text-gray-700">Instagram</label>
                 <input id="instagram" name="instagram" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>

            <div class="col-span-6 sm:col-span-2">
                <label for="profession" class="block text-sm font-medium leading-5 text-gray-700">Perkerjaan Sekarang</label>
                 <input id="profession" name="profession" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>

            <div class="col-span-6 sm:col-span-2">
                <label for="income" class="block text-sm font-medium leading-5 text-gray-700">Pendapatan (Bulanan)</label>
                 <input id="income" name="income" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>

            <div class="col-span-6 sm:col-span-2">
                <label for="phone_employer" class="block text-sm font-medium leading-5 text-gray-700">No Telefon Majikan</label>
                 <input id="phone_employer" name="phone_employer" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>

            <div class="col-span-6">
                <label for="address1_employer" class="block text-sm font-medium leading-5 text-gray-700">Alamat Majikan</label>
                <input id="address1_employer" name="address1_employer" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            
                <input id="address2_employer" name="address2_employer" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>

            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="postcode_employer" class="block text-sm font-medium leading-5 text-gray-700">Poskod</label>
                <input id="postcode_employer" name="postcode_employer" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>

            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <label for="city_employer" class="block text-sm font-medium leading-5 text-gray-700">Bandar</label>
                <input id="city_employer" name="city_employer" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>

            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="state_employer" class="block text-sm font-medium leading-5 text-gray-700">Negeri</label>
                <select id="state_employer" name="state_employer" class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                <option>Johor</option>
                <option>Kedah</option>
                <option>Duda</option>
                <option>Janda</option>
                <option>Ibu Tunggal</option>
                </select>
            </div>
            </div>
        </div>
        </div>
    </form>
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
    <form action="#" method="POST">
        <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6 mt-6">
                <div class="col-span-6 sm:col-span-6">
                    <label for="spouse_name" class="block text-sm font-medium leading-5 text-gray-700">NAMA * SUAMI / ISTERI / WARIS</label>
                    <input id="spouse_name" name="spouse_name" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                </div>
    
                <div class="col-span-6 sm:col-span-6">
                    <label for="spouse_ic_no" class="block text-sm font-medium leading-5 text-gray-700">No. KP (Baru)</label>
                    <input id="spouse_ic_no" name="spouse_ic_no" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                </div>

                <div class="col-span-6 sm:col-span-6">
                    <label for="spouse_profession" class="block text-sm font-medium leading-5 text-gray-700">Perkerjaan Sekarang</label>
                     <input id="spouse_profession" name="spouse_profession" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
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
                    <label for="spouse_address1_employer" class="block text-sm font-medium leading-5 text-gray-700">Alamat Majikan</label>
                    <input id="spouse_address1_employer" name="spouse_address1_employer" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                
                    <input id="address2_employer" name="address2_employer" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                </div>
    
                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="spouse_postcode_employer" class="block text-sm font-medium leading-5 text-gray-700">Poskod</label>
                    <input id="spouse_postcode_employer" name="spouse_postcode_employer" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                </div>
    
                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                    <label for="spouse_city_employer" class="block text-sm font-medium leading-5 text-gray-700">Bandar</label>
                    <input id="spouse_city_employer" name="spouse_city_employer" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                </div>
    
                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="spouse_state_employer" class="block text-sm font-medium leading-5 text-gray-700">Negeri</label>
                    <select id="spouse_state_employer" name="spouse_state_employer" class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    <option>Johor</option>
                    <option>Kedah</option>
                    <option>Duda</option>
                    <option>Janda</option>
                    <option>Ibu Tunggal</option>
                    </select>
                </div>
            </div>
        </div>
        </div>
    </form>
    </div>
</div>
</div>
</div>
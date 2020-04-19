<div x-show="tab === 'tab3'">
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
                                                <span class="block text-sm leading-5 font-medium text-gray-700"><input
                                                        id="purchase_price" name="purchase_price"
                                                        value="{{old('purchase_price')}}"
                                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" /></span>
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

    <div class="mt-10 sm:mt-0">
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
                                <input id="reference_name" name="reference_name" value="{{old('reference_name')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                        </div>

                        <div class="grid grid-cols-6 gap-6 mt-6">
                            <div class="col-span-6">
                                <label for="reference_address1"
                                    class="block text-sm font-medium leading-5 text-gray-700">Alamat</label>
                                <input id="reference_address1" name="reference_address1"
                                    value="{{old('reference_address1')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />

                                <input id="reference_address2" name="reference_address2"
                                    value="{{old('reference_address2')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="reference_postcode"
                                    class="block text-sm font-medium leading-5 text-gray-700">Poskod</label>
                                <input id="reference_postcode" name="reference_postcode"
                                    value="{{old('reference_postcode')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label for="reference_city"
                                    class="block text-sm font-medium leading-5 text-gray-700">Bandar</label>
                                <input id="reference_city" name="reference_city" value="{{old('reference_city')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="reference_state"
                                    class="block text-sm font-medium leading-5 text-gray-700">Negeri</label>
                                <select id="reference_state" name="reference_state"
                                    class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    <option value="1" {{ old('role_id') == 1 ? 'selected' : '' }}>Johor</option>
                                    <option value="2" {{ old('role_id') == 2 ? 'selected' : '' }}>Kedah</option>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="reference_relation"
                                    class="block text-sm font-medium leading-5 text-gray-700">Hubungan Dengan
                                    Pemohon</label>
                                <input id="reference_relation" name="reference_relation"
                                    value="{{old('reference_relation')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="reference_phone"
                                    class="block text-sm font-medium leading-5 text-gray-700">No Telefon</label>
                                <input id="reference_phone" name="reference_phone" value="{{old('reference_phone')}}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
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
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                Simpan
            </button>
        </span>
    </div>
    
</div>

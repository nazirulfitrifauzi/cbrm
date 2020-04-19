<div x-show="tab === 'tab2'">
    <form method="post" action="{{ route('home.storePerniagaan') }}">
    @csrf

    <div class="my-8 px-4">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Maklumat Perniagaan</h3>
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
                                <label for="business_name"
                                    class="block text-sm font-medium leading-5 text-gray-700">Nama
                                    Perniagaan/Syarikat</label>
                                <input id="business_name" name="business_name" value="{{ isset(auth()->user()->perniagaan->business_name) ? auth()->user()->perniagaan->business_name : old('business_name') }}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-6">
                                <label for="business_activity"
                                    class="block text-sm font-medium leading-5 text-gray-700">Aktiviti
                                    Perniagaan/Projek</label>
                                <select id="business_activity" name="business_activity"
                                    class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    <option value="1" @if(isset(auth()->user()->perniagaan->business_activity)) @if(auth()->user()->perniagaan->business_activity == '1') selected @endif @else @endif>Pendawaian
                                        elektrik
                                    </option>
                                    <option value="2" @if(isset(auth()->user()->perniagaan->business_activity)) @if(auth()->user()->perniagaan->business_activity == '2') selected @endif @else @endif>Kedai pajak
                                        gadai
                                    </option>
                                </select>
                            </div>

                            <div class="col-span-6">
                                <label for="business_address1"
                                    class="block text-sm font-medium leading-5 text-gray-700">Alamat
                                    Perniagaan/Permis/Projek</label>
                                <input id="business_address1" name="business_address1"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" 
                                    value="{{ isset(auth()->user()->perniagaan->business_address1) ? auth()->user()->perniagaan->business_address1 : old('business_address1') }}"/>

                                <input id="business_address2" name="business_address2"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" 
                                    value="{{ isset(auth()->user()->perniagaan->business_address2) ? auth()->user()->perniagaan->business_address2 : old('business_address2') }}"/>
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="business_postcode"
                                    class="block text-sm font-medium leading-5 text-gray-700">Poskod</label>
                                <input id="business_postcode" name="business_postcode"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" 
                                    value="{{ isset(auth()->user()->perniagaan->business_postcode) ? auth()->user()->perniagaan->business_postcode : old('business_postcode') }}"/>
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label for="business_city"
                                    class="block text-sm font-medium leading-5 text-gray-700">Bandar</label>
                                <input id="business_city" name="business_city"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" 
                                    value="{{ isset(auth()->user()->perniagaan->business_city) ? auth()->user()->perniagaan->business_city : old('business_city') }}"/>
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="business_state"
                                    class="block text-sm font-medium leading-5 text-gray-700">Negeri</label>
                                <select id="business_state" name="business_state"
                                    class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    <option value="1" @if(isset(auth()->user()->perniagaan->business_state)) @if(auth()->user()->perniagaan->business_state == '1') selected @endif @else @endif>Johor</option>
                                    <option value="2" @if(isset(auth()->user()->perniagaan->business_state)) @if(auth()->user()->perniagaan->business_state == '2') selected @endif @else @endif>Kedah</option>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="business_phone" class="block text-sm font-medium leading-5 text-gray-700">No
                                    Telefon (Perniagaan)</label>
                                <input id="business_phone" name="business_phone" value="{{ isset(auth()->user()->perniagaan->business_phone) ? auth()->user()->perniagaan->business_phone : old('business_phone') }}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="business_phone_hp"
                                    class="block text-sm font-medium leading-5 text-gray-700">No
                                    Telefon (HP)</label>
                                <input id="business_phone_hp" name="business_phone_hp"
                                    value="{{ isset(auth()->user()->perniagaan->business_phone_hp) ? auth()->user()->perniagaan->business_phone_hp : old('business_phone_hp') }}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="business_premise"
                                    class="block text-sm font-medium leading-5 text-gray-700">Status Premis</label>
                                <select id="business_premise" name="business_premise"
                                    class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    <option value="Sendiri" @if(isset(auth()->user()->perniagaan->business_premise)) @if(auth()->user()->perniagaan->business_premise == 'Sendiri') selected @endif @else @endif>Sendiri</option>
                                    <option value="Sewa" @if(isset(auth()->user()->perniagaan->business_premise)) @if(auth()->user()->perniagaan->business_premise == 'Sewa') selected @endif @else @endif>Sewa</option>
                                    <option value="Keluarga" @if(isset(auth()->user()->perniagaan->business_premise)) @if(auth()->user()->perniagaan->business_premise == 'Keluarga') selected @endif @else @endif>Keluarga</option>
                                    <option value="Persatuan" @if(isset(auth()->user()->perniagaan->business_premise)) @if(auth()->user()->perniagaan->business_premise == 'Persatuan') selected @endif @else @endif>Persatuan
                                    </option>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="business_ownership"
                                    class="block text-sm font-medium leading-5 text-gray-700">Permilikan
                                    Perniagaan</label>
                                <select id="business_ownership" name="business_ownership"
                                    class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    <option value="Individu" @if(isset(auth()->user()->perniagaan->business_ownership)) @if(auth()->user()->perniagaan->business_ownership == 'Individu') selected @endif @else @endif>Individu</option>
                                    <option value="Pemilikan Tunggal" @if(isset(auth()->user()->perniagaan->business_ownership)) @if(auth()->user()->perniagaan->business_ownership == 'Pemilikan Tunggal') selected @endif @else @endif> Pemilikan Tunggal </option>
                                    <option value="Perkongsian" @if(isset(auth()->user()->perniagaan->business_ownership)) @if(auth()->user()->perniagaan->business_ownership == 'Perkongsian') selected @endif @else @endif>Perkongsian </option>
                                    <option value="Sendirian Berhad" @if(isset(auth()->user()->perniagaan->business_ownership)) @if(auth()->user()->perniagaan->business_ownership == 'Sendirian Berhad') selected @endif @else @endif> Sendirian Berhad </option>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <fieldset>
                                    <legend class="block text-sm font-medium leading-5 text-gray-700">Modal Berbayar
                                    </legend>
                                    {{-- <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p> --}}

                                    <div class="flex items-center">
                                        <label for="business_modal"
                                            class="block text-sm font-medium leading-5 text-gray-700">RM</label>
                                        <label for="business_modal" class="ml-3">
                                            <span class="block text-sm leading-5 font-medium text-gray-700"><input
                                                    id="business_modal" name="business_modal" type="number" step="0.01"
                                                    value="{{ isset(auth()->user()->perniagaan->business_modal) ? auth()->user()->perniagaan->business_modal : old('business_modal') }}"
                                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" /></span>
                                        </label>
                                    </div>
                                </fieldset>
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-6">
                                <label class="block text-sm font-medium leading-5 text-gray-700">Masa Berniaga</label>
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                                <label for="business_open"
                                    class="block text-sm font-medium leading-5 text-gray-700">Dari</label>
                                <input id="business_open" name="business_open" type="time"
                                    value="{{ isset(auth()->user()->perniagaan->business_open) ? auth()->user()->perniagaan->business_open : old('business_open') }}"
                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                                <label for="business_closed"
                                    class="block text-sm font-medium leading-5 text-gray-700">hingga</label>
                                <input id="business_closed" name="business_closed" type="time"
                                    value="{{ isset(auth()->user()->perniagaan->business_closed) ? auth()->user()->perniagaan->business_closed : old('business_closed') }}"
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
    </form>
</div>
<x-layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 text-xl border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <h1>Entry Data - Data Indikator Program</h1>
            <hr class="border-gray-200">
            <div class="flex gap-5 items-center justify-center m-5">
                <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input id="datepicker-year" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                                focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Pilih Tahun">
                </div>
                <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input id="datepicker-month" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                                focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Pilih Bulan">
                </div>
            </div>
            <h1>Indikator Program</h1>
            <h2 class="font-bold text-red-500 text-center">Diisi dengan data kumulatif</h2>
            <h1>Contoh Penginputan Data<br>
                - Input Bulan Februari = Data Bulan Januari + Data Bulan Februari<br>
                - Input Bulan Juni = Data Bulan Januari + Data Februari + Data Maret + Data Bulan April + Data Bulan Mei
                + Data Bulan Juni</h1>
            <hr class="border-gray-200">
            <div class="block gap-2 md:m-10 mt-10">

                <section>
                    <h1 class="text-sm mb-5 font-bold">1. Ibu hamil </h1>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <label class="pl-5 text-sm mb-3 italic">
                            a. K1 Murni
                        </label>

                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <label class="pl-5 text-sm mb-3 italic">
                            b. Ibu Hamil dengan 4T
                        </label>

                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <label class="pl-5 text-sm mb-3 italic">
                            c. K1 oleh dokter
                        </label>

                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <label class="pl-5 text-sm mb-3 italic">
                            d. K5 oleh dokter
                        </label>

                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <label class="pl-5 text-sm mb-3 italic">
                            e. K1 USG oleh dokter
                        </label>

                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <label class="pl-5 text-sm mb-3 italic">
                            f. K5 USG oleh dokter
                        </label>

                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <label class="pl-5 text-sm mb-3 italic">
                            g. Ibu hamil memiliki Buku KIA
                        </label>

                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <h1 class="text-sm mb-5 font-bold">2. Ibu bersalin</h1>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">a. PN</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">b. KF1</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">c. KF Lengkap</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">d. Vit A Nifas(*)</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <h1 class="text-sm mb-5 font-bold">3. Jumlah Komplikasi pada ibu hamil, bersalin dan nifas </h1>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <label class="pl-5 text-sm mb-3 italic">a. Anemia ( Hb < 11 gram/dl)</label>
                                <fieldset class="flex flex-col w-full px-10 justify-center">
                                    <label class="pl-5 text-sm mb-3 italic">a. TM 1</label>
                                    <div class="flex flex-col md:ml-10 md:flex-row ml-7 md:gap-4">
                                        <div class="relative z-0 max-w-sm w-full mb-5 group">
                                            <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                               appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                               focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                placeholder=" " min="0" required />
                                            <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                               transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                               peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                               peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                               peer-focus:scale-75 peer-focus:-translate-y-6">
                                                Sasaran
                                            </label>
                                        </div>

                                        <div class="relative z-0 max-w-sm w-full mb-5 group">
                                            <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                               appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                               focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                placeholder=" " min="0" required />
                                            <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                               transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                               peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                               peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                               peer-focus:scale-75 peer-focus:-translate-y-6">
                                                Jumlah
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="flex flex-col w-full px-10 justify-center">
                                    <label class="pl-5 text-sm mb-3 italic">b. TM 3</label>
                                    <div class="flex flex-col md:ml-10 md:flex-row ml-7 md:gap-4">
                                        <div class="relative z-0 max-w-sm w-full mb-5 group">
                                            <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                               appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                               focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                placeholder=" " min="0" required />
                                            <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                               transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                               peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                               peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                               peer-focus:scale-75 peer-focus:-translate-y-6">
                                                Sasaran
                                            </label>
                                        </div>

                                        <div class="relative z-0 max-w-sm w-full mb-5 group">
                                            <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                               appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                               focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                placeholder=" " min="0" required />
                                            <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                               transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                               peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                               peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                               peer-focus:scale-75 peer-focus:-translate-y-6">
                                                Jumlah
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>

                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">b. perdarahan</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">c. Prekeklamsia/Eklamsia</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">d. Infeksi</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">e. Tubercolosis</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">f. Malaria</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">g. Jantung</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">h. DM</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">i. Obesitas</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">j. COVID 19 (Confirm)</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">k. Keguguran</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">l. Lain-lain</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <h1 class="text-sm mb-5 font-bold">4. Lahir hidup </h1>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">a. KN1</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">b. Neonatus Komplikasi</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">c. Jumlah lahir hidup</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <h1 class="text-sm mb-5 font-bold">5. Jumlah Komplikasi pada Neonatus </h1>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">a. BBLR ( < 2500 gr)</p>
                                <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                                    <div class="relative z-0 max-w-sm w-full mb-5 group">
                                        <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " min="0" required />
                                        <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                            Sasaran
                                        </label>
                                    </div>

                                    <div class="relative z-0 max-w-sm w-full mb-5 group">
                                        <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " min="0" required />
                                        <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                            Jumlah
                                        </label>
                                    </div>
                                </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">b. Asfiksia</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">c. Infeksi</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">d. Tetanus neonatorum</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">e. Kelainan kongenital</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">f. Covid 19 (Konfirm)</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">g. BBL Hipotiroid Kongenital</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">h. Lain-lain</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <h1 class="text-sm mb-5 font-bold">6. Balita </h1>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">a. Bayi usia kurang dari 6 bulan Mendapat ASI Eksklusif(*)
                        </p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">b. Balita usia 12 – 59 bulan mendapatkan Vitamin A pada
                            bulan Februari/Agustus(*)</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">c. Anak 6-23 bulan mendapat MPASI(*)</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">d. Balita Memiliki Buku KIA</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">e. Balita dilayani SDIDTK</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">f. Balita dengan gangguan perkembangan</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">g. Jumlah Kunjungan Balita Sakit</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">h. Balita dilayani MTBS</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <h1 class="text-sm mb-5 font-bold">7. PUSKESMAS MELAKSANAKAN </h1>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">a. Puskesmas yang memiliki USG</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">b. Puskemas yang memiliki dokter terlatih USG
                        </p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">c. Melaksanakan P4K</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">d. Jumlah FKTP mampu poned</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">e. MTBS</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">f. SDIDTK</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">g. Kelas Ibu Hamilt</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">h. Kelas Ibu Balita</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">i. Mampu tatalaksana gizi buruk pada balit</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">j. Pel. Neo Esensial</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <h1 class="text-sm mb-5 font-bold">8. Rumah Sakit </h1>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">a. RS melakukan audit medik/klinik kematian maternal dan
                            perinatal</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">b. RS Sayang Ibu dan Bayi
                        </p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">c. Jumlah Rumah Sakit mampu ponek</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <h1 class="text-sm mb-5 font-bold">9. Tenaga Kesehatan Terlatih </h1>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">a. Dokter terlatih USG</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">b. Kader terlatih pemantauan pertumbuhan dan perkembangan
                            balita</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">c. Tenaga Kesehatan dilatih MTBS</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">d. Tenaga Kesehatan dilatih Tatalaksana Gizi Buruk</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">e. Tenaga Kesehatan dilatih PMBA</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">f. Tenaga Kesehatan dilatih SDIDTK</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">g. Tenaga kesehatan dilatih integrasi MTBS- Gizi Buruk</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">h. Tenaga kesehatan dilatih integrasi PMBA-SDIDTK</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <h1 class="text-sm mb-5 font-bold">10. Jumlah Kasus Kematian </h1>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">a. Jumlah kasus kematian perinatal yang dilakukan
                            pengkajian</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">b. Jumlah kasus kematian ibu yang dilakukan pengkajian
                            oleh kab/kota</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Sasaran
                                </label>
                            </div>

                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <h1 class="text-sm mb-5 font-bold">11. Presentase Kab/Kota yang memiliki Tim AMPSR </h1>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">a. Kabupaten/Kota melakukan audit kematian ibu dan bayi
                            sebanyak minimal 4 kali dalam setahun dan diseminasi hasil minimal 1 kali dalam setahun</p>
                        <div class="w-1/7 mx-auto mt-2 mb-4 text-sm">
                            <label>
                                <input type="radio" name="gender" value="male"> Ya
                            </label>
                            <label>
                                <input type="radio" name="gender" value="female"> Tidak
                            </label>
                        </div>
                    </fieldset>

                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">b. Kabupaten/kota memiliki Tim/Komite AMPSR di tingkat
                            Kabupaten/Kota</p>
                        <div class="w-1/7 mx-auto mt-2 mb-4 text-sm">
                            <label>
                                <input type="radio" name="gender" value="male"> Ya
                            </label>
                            <label>
                                <input type="radio" name="gender" value="female"> Tidak
                            </label>
                        </div>
                    </fieldset>

                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">c. Kabupaten/kota Tim/Komite AMPSR telah terorientasi/workshop
                            AMPSR, minimal adalah Sekretariat AMPSR dan Tim Pengkaji AMPSR</p>
                        <div class="w-1/7 mx-auto mt-2 mb-4 text-sm">
                            <label>
                                <input type="radio" name="gender" value="male"> Ya
                            </label>
                            <label>
                                <input type="radio" name="gender" value="female"> Tidak
                            </label>
                        </div>
                    </fieldset>
                    
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">d. Jumlah RS yang telah mendapatkan orientasi/workshop
                            Pedoman AMPSR revisi 2022 baik yang diselenggarakan oleh Pusat, Dinas Kesehatan
                            Provinsi/Kab/Kota atau Organisasi Profesi</p>
                        <div class="flex flex-col md:ml-10 md:flex-row md:gap-4">
                            <div class="relative z-0 max-w-sm w-full mb-5 group">
                                <input type="number" name="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
                                           appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
                                           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " min="0" required />
                                <label for="Jumlah_BBL_Mendapatkan_S-PJB_Kritis"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                           transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
                                           peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                                           peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                           peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Jumlah
                                </label>
                            </div>
                        </div>
                    </fieldset>


                    <button type="button"
                        class="focus:outline-none w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
                </section>
            </div>
        </div>
    </div>
</x-layout>

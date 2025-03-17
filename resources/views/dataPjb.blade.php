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
            <h1> Indikator Program</h1>
            <h2 class="font-bold text-red-500 text-center">Diisi dengan Data Yang diperiksa di bulan tersebut</h2>
            <hr class="border-gray-200">
            <div class="block gap-2 md:m-10 mt-10">
                <section>
                    <h1 class="text-sm mb-5 font-bold">1. Skrining di FKTP/RSUD </h1>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <label class="pl-5 text-sm mb-3 italic">
                            a. Jumlah BBL Mendapatkan S-PJB Kritis
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
                                    Jumlah data
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
                                    Masukkan Data Baru
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <label class="pl-5 text-sm mb-3 italic">
                            b. Jumlah BBL Hasil Positif/Gagal
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
                                    Jumlah data
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
                                    Masukkan Data Baru
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <h1 class="text-sm mb-5 font-bold">2. Skrining Lanjutan RSUD</h1>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <p class="pl-5 text-sm mb-3 italic">a. Jumlah BBL Mendapatkan Skrining Lanjutan</p>
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
                                    Jumlah data
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
                                    Masukkan Data Baru
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <label class="pl-5 text-sm mb-3 italic">b. Hasil Skrining Lanjutan</label>
                        <fieldset class="flex flex-col w-full px-10 justify-center">
                            <label class="pl-5 text-sm mb-3 italic">a. Jumlah PJB Kritis</label>
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
                                        Jumlah data
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
                                        Masukkan Data Baru
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="flex flex-col w-full px-10 justify-center">
                            <label class="pl-5 text-sm mb-3 italic">b. Jumlah PJB Non Kritis</label>
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
                                        Jumlah data
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
                                        Masukkan Data Baru
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <label class="pl-5 text-sm mb-3 italic">c. Jumlah BBL Terdiagnosa PJB</label>
                        <fieldset class="flex flex-col w-full px-10 justify-center">
                            <label class="pl-5 text-sm mb-3 italic">a. Mendapatkan Tatalaksana Awal</label>
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
                                        Jumlah data
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
                                        Masukkan Data Baru
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="flex flex-col w-full px-10 justify-center">
                            <label class="pl-5 text-sm mb-3 italic">b. Dirujuk (untuk mendapatkan Tatalaksana Awal)</label>
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
                                        Jumlah data
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
                                        Masukkan Data Baru
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        
                    </fieldset>
                    <h1 class="text-sm mb-5 font-bold">3. KETERANGAN </h1>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <label class="pl-5 text-sm mb-3 italic">
                            a. Jumlah BBL Meninggal
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
                                    Jumlah data
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
                                    Masukkan Data Baru
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <label class="pl-5 text-sm mb-3 italic">
                            a. Jumlah BBL Loss Follow Up
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
                                    Jumlah data
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
                                    Masukkan Data Baru
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                        <label class="pl-5 text-sm mb-3 italic">
                            c. dll
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
                                    Jumlah data
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
                                    Masukkan Data Baru
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    
                    
                    <button type="button" class="focus:outline-none w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
                </section>
            </div>
        </div>
    </div>
</x-layout>


<x-layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="p-6">
                <div class="w-full mx-auto bg-white shadow-md rounded-lg p-6">
                    <!-- Header -->
                    <h2 class="text-xl font-bold text-gray-800">Entry Data - Data Indikator</h2>

                    <!-- Tab Navigasi -->
                    <div class="border-b border-gray-200 mt-4">
                        <nav class="flex space-x-4">
                            <a href="/data-indikator" class="py-2 px-4 border-b-2 border-blue-500 text-blue-600 font-semibold">
                                RPJMN/Renstra
                            </a>
                            <a href="/data-indikator/sub-data-indikator" class="py-2 px-4 text-gray-600 hover:text-blue-600">
                                Import Excel (Offline)
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
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
            <!-- Indikator -->
            <h3 class="mt-6 text-lg font-bold text-gray-800">Indikator</h3>

            <!-- Contoh Penginputan Data -->
            <div class="mt-4 mb-4 text-xl text-gray-700">
                <h2 class="font-bold text-red-500 text-center">Diisi dengan data kumulatif</h2>
                <h1 class="mb-2">Contoh Penginputan Data<br>
                    - Input Bulan Februari = Data Bulan Januari + Data Bulan Februari<br>
                    - Input Bulan Juni = Data Bulan Januari + Data Februari + Data Maret + Data Bulan April + Data Bulan Mei
                    + Data Bulan Juni</h1>
                <hr class="border-gray-200">
            </div>
            <div class="block gap-2 md:m-10 mt-10">
            <section>
                <h1 class="text-sm mb-5 font-bold">1. Cakupan Kunjungan Antenatal (K4)</h1>
                <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                    <label class="pl-5 text-sm mb-3 italic">
                        a. Jumlah ibu hamil yang memperoleh pelayanan antenatal sesuai standar (K4)
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
                <h1 class="text-sm mb-5 font-bold">2. Persentase ibu hamil yang mendapatkan pemeriksaan kehamilan 6 kali (ANC 6x)</h1>
                <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                    <label class="pl-5 text-sm mb-3 italic">
                        a. Jumlah ibu hamil memperoleh pelayanan antenatal minimal 6x sesuai standar
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
                <h1 class="text-sm mb-5 font-bold">3. Persentase persalinan di fasilitas pelayanan kesehatan (PF)</h1>
                <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                    <label class="pl-5 text-sm mb-3 italic">
                        a. Jumlah ibu bersalin yang mendapatkan pertolongan persalinan oleh tenaga kesehatan di fasilitas pelayanan kesehatan sesuai standar.
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
                <h1 class="text-sm mb-5 font-bold">4. Persentase bayi yang mendapatkan pelayanan kesehatan</h1>
                <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                    <label class="pl-5 text-sm mb-3 italic">
                        a. Jumlah bayi baru lahir usia 0-28 hari yang mendapatkan pelayanan sesuai standar (KN Lengkap)
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
                <h1 class="text-sm mb-5 font-bold">5. Persentase balita yang dipantau pertumbuhan dan perkembangannya</h1>
                <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                    <label class="pl-5 text-sm mb-3 italic">
                        a. Jumlah balita dipantau pertumbuhan dan perkembangan
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
                <h1 class="text-sm mb-5 font-bold">6. Persentase puskesmas yang melaksanakan pembinaan ke sekolah 4 kali setahun</h1>
                <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                    <label class="pl-5 text-sm mb-3 italic">
                        a. Jumlah Puskesmas yang melaksanakan pembinaan ke sekolah 4 kali/tahun
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
                <h1 class="text-sm mb-5 font-bold">7. Jumlah tenaga kesehatan yang dilatih kegawatdaruratan maternal dan neonatal                </h1>
                <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                    <label class="pl-5 text-sm mb-3 italic">
                        a. Jumlah tenaga kesehatan yang dilatih kegawatdaruratan maternal dan neonatal
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
                <h1 class="text-sm mb-5 font-bold">8. Persentase kabupaten/ kota yang melaksanakan intervensi kesehatan keluarga</h1>
                <fieldset class="flex flex-col w-full px-4 md:px-10 justify-center">
                    <label class="pl-5 text-sm mb-3 italic">
                        a. Jumlah ibu hamil memperoleh pelayanan antenatal minimal 6x sesuai standar
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
                        b. Jumlah ibu bersalin yang mendapatkan pertolongan persalinan oleh tenaga kesehatan di fasilitas pelayanan kesehatan sesuai standar.
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
                        c. Jumlah bayi baru lahir usia 0-28 hari yang mendapatkan pelayanan sesuai standar (KN Lengkap)
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
                        d. Jumlah balita dipantau pertumbuhan dan perkembangan
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
                        e. Jumlah puskesmas memberikan pelayanan kesehatan reproduksi calon pengantin (kespro catin)
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
                        f. Lansia yang Mendapatkan Pelayanan Kesehatan
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
                        g. Persentase penduduk usia ≥ 15 tahun dengan risiko masalah kesehatan jiwa yang mendapatkan skrining
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

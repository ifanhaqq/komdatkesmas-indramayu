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
            <h2 class="font-bold text-red-500 text-center">Diisi dengan Data Kumulatif</h2>
            <h3 class="mt-5">Contoh Penginputan Data</h3>
            <ul class="py-3">
                <li>- Input Bulan Februari = Data Bulan Januari + Data Bulan Februari</li>
                <li>- Input Bulan Juni = Data Bulan Januari + Data Februari + Data Maret + Data Bulan April + Data Bulan Mei + Data Bulan Juni</li>
            </ul>
            <hr class="border-gray-200 mt-5">
            <div class="block gap-2 md:m-10 mt-10">
             
                <section>
                    <form class="flex flex-col" action="">
                        <h1 class="text-md mb-5 font-bold">1. PUSKESMAS MELAKSANAKAN</h1>
                        <ol style="list-style: lower-alpha">
                            <li class="ps-3 py-3 italic flex justify-between items-center">a. Melaksanakan skrining kesehatan pada kelas 1-6 SD/MI/Pesantren sederajat
                                <div>
                                    <input class="border w-40 py-1" type="number">
                                    <input class="border w-40 py-1 ms-6" type="number">
                                </div>
                            </li>
                            <li class="ps-3 py-3 italic flex justify-between items-center">b. Melaksanakan skrining kesehatan pada kelas 7-9 SMP/MTs/Pesantren sederajat
                                <div>
                                    <input class="border w-40 py-1" type="number">
                                    <input class="border w-40 py-1 ms-6" type="number">
                                </div>
                            </li>
                            <li class="ps-3 py-3 italic flex justify-between items-center">c. Melaksanakan skrining kesehatan pada kelas 10-12 SMA/SMK/MA/Pesantren sederajat
                                <div>
                                    <input class="border w-40 py-1" type="number">
                                    <input class="border w-40 py-1 ms-6" type="number">
                                </div>
                            </li>
                            <li class="ps-3 py-3 italic flex justify-between items-center">d. Melaksanakan Pelayanan Kesehatan Peduli Remaja
                                <div>
                                    <input class="border w-40 py-1" type="number">
                                    <input class="border w-40 py-1 ms-6" type="number">
                                </div>
                            </li>
                            <li class="ps-3 py-3 italic flex justify-between items-center">e. Membina bayi/anak/remaja terlantar di rumah singgah/panti/LKSA/LPKS
                                <div>
                                    <input class="border w-40 py-1" type="number">
                                    <input class="border w-40 py-1 ms-6" type="number">
                                </div>
                            </li>
                            <li class="ps-3 py-3 italic flex justify-between items-center">f. Membina Lapas/Rutan/Lembaga Anak/LPKA/LPAS
                                
                            </li>
                        </ol>
                        <h1 class="text-md mt-5 mb-5 font-bold">2. SCREENING KESEHATAN DI SEKOLAH</h1>
                        <ol style="list-style: lower-alpha">
                            <li class="ps-3 py-3 italic flex justify-between items-center">a. Jumlah sasaran anak usia sekolah kelas 1-6 SD/MI/Pesantren sederajat
                                <div class="me-47">
                                    <input class="border w-40 py-1 ms-6" type="number">
                                </div>
                            </li>
                            <li class="ps-3 py-3 italic flex justify-between items-center">b. Jumlah sasaran anak usia sekolah kelas 7-9 SMP/MTs/Pesantren sederajat
                                <div class="me-47">
                                    <input class="border w-40 py-1 ms-6" type="number">
                                </div>
                            </li>
                            <li class="ps-3 py-3 italic flex justify-between items-center">c. Jumlah sasaran anak usia sekolah kelas 10-12 SMA/SMK/MA/Pesantren sederajat
                                <div class="me-47">
                                    <input class="border w-40 py-1 ms-6" type="number">
                                </div>
                            </li>
                            <li class="ps-3 py-3 italic flex justify-between items-center">d. Anak usia sekolah tingkat SD/MI/Pesantren sederajat mendapatkan skrining kesehatan
                                <div>
                                    <input class="border w-40 py-1" type="number">
                                    <input class="border w-40 py-1 ms-6" type="number">
                                </div>
                            </li>
                            <li class="ps-3 py-3 italic flex justify-between items-center">e. Anak usia sekolah tingkat SMP/MTS/Pesantren sederajat mendapatkan skrining kesehatan
                                <div>
                                    <input class="border w-40 py-1" type="number">
                                    <input class="border w-40 py-1 ms-6" type="number">
                                </div>
                            </li>
                            <li class="ps-3 py-3 italic flex justify-between items-center">f. Anak usia sekolah tingkat SMA/MA/SMK/sederajat mendapatkan skrining kesehatan
                                <div>
                                    <input class="border w-40 py-1" type="number">
                                    <input class="border w-40 py-1 ms-6" type="number">
                                </div>
                            </li>
                            <li class="ps-3 py-3 italic flex justify-center items-between flex-col">
                                <span>g. Hasil Penjaringan kelas 1-6 SD/MI/Pesantren</span>
                                <ol class="ms-5 mt-4" style="list-style: lower-alpha">
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Status gizi obesitas
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Status gizi kurang
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Pendek
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Risiko anemia
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Masalah hipertensi
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Masalah kelainan refraksi mata
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Karies gigi
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Masalah pendengaran
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Masalah mental emosional
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Masalah kebugaran
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li class="ps-3 py-3 italic flex flex-col justify-center items-between">
                                <span>h. Hasil Penjaringan kelas 7-9 SMP/MTS/Pesantren</span>
                                <ol class="ms-5 mt-4" style="list-style: lower-alpha">
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Status gizi obesitas
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Status gizi kurang
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Pendek
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Risiko anemia
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Masalah hipertensi
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Masalah kelainan refraksi mata
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Karies gigi
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Masalah pendengaran
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Masalah mental emosional
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Masalah kebugaran
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li class="ps-3 py-3 italic flex flex-col justify-center items-between">
                                <span>i. Hasil Penjaringan kelas 10-12 SMA/SMK/MA/ Pesantren</span>
                                <ol class="ms-5 mt-4" style="list-style: lower-alpha">
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Status gizi obesitas
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Status gizi kurang
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Pendek
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Risiko anemia
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Masalah hipertensi
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Masalah kelainan refraksi mata
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Karies gigi
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Masalah pendengaran
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Masalah mental emosional
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                    <li class="ps-3 py-3 italic flex justify-between items-center">Masalah kebugaran
                                        <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                                    </li>
                                </ol>
                            </li>
                        </ol>
                        <h1 class="text-md mt-5 mb-5 font-bold">3. SEKOLAH</h1>
                        <ol style="list-style: lower-alpha">
                            <li class="ps-3 py-3 italic flex justify-between items-center">Jumlah SD/MI/Sederajat melaksanakan UKS/M
                                <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                            </li>
                            <li class="ps-3 py-3 italic flex justify-between items-center">Jumlah SMP/MTS/Sederajat melaksanakan UKS/M
                                <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                            </li>
                            <li class="ps-3 py-3 italic flex justify-between items-center">Jumlah SMA/MA/Sederajat melaksanakan UKS/M
                                <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                            </li>
                            <li class="ps-3 py-3 italic flex justify-between items-center">Jumlah SD/MI/Sederajat mendapatkan skrinning kesehatan
                                <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                            </li>
                            <li class="ps-3 py-3 italic flex justify-between items-center">Jumlah SMP/MTS/Sederajat mendapatkan skrinning kesehatan
                                <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                            </li>
                            <li class="ps-3 py-3 italic flex justify-between items-center">Jumlah SMA/MA/Sederajat mendapatkan skrinning kesehatan
                                <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                            </li>
                        </ol>
                        <h1 class="text-md mt-5 mb-5 font-bold">3. POSYANDU YANG MEMILIKI KEGIATAN KESEHATAN REMAJA</h1>
                        <ol style="list-style: lower-alpha">
                            <li class="ps-3 py-3 italic flex justify-between items-center">Jumlah posyandu yang memiliki kegiatan kesehatan remaja
                                <div>
                                            <input class="border w-40 py-1" type="number">
                                            <input class="border w-40 py-1 ms-6" type="number">
                                        </div>
                            </li>
                        </ol>
                        <button type="button" class="mt-5 w-50 self-end focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
                    </form>
                </section>
            </div>
        </div>
    </div>
</x-layout>
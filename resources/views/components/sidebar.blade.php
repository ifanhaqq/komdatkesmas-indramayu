{{-- <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
       <ul class="space-y-2 font-medium">
          <li>
             <a href="/dashboard" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                   <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                   <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                </svg>
                <span class="ms-3">Dashboard</span>
             </a>
          </li>
         <li>
            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                    <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857  0 0 0 16.143 10Z"/>
                </svg>
                <span class="flex-1 ms-3 text-left whitespace-nowrap">Entry Data</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </button>

            <ul id="dropdown-example" class="hidden py-2 space-y-2 pl-5">
                <li>
                    <button class="flex justify-between items-center gap-2 w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                        <div class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <span>Gizi KIA</span>
                        </div>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    </button>
                    <ul class="hidden py-2 space-y-2 pl-10">
                        <li class="flex justify-between items-center w-full p-2 text-gray-900 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            <a href="/Entry-Data" class="flex items-center gap-2">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>
                                <span>contoh form 1</span>
                            </a>
                        </li>

                        <li class="justify-between items-center w-full text-gray-900 rounded-lg group  dark:text-white">
                            <div id="screening-button" class="flex cursor-pointer justify-between items-center p-2 gap-2 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 w-full">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>
                                <span>Screening</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </div>
                            <ul class="hidden py-2 space-y-1 pl-7">
                              <li class="text-sm rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                  <a href="/data-pjb" class="flex items-center gap-2 p-2 w-full rounded-lg">
                                      <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                      </svg>
                                      <span>Data PJB</span>
                                  </a>
                              </li>
                           </ul>
                        </li>
                        <li class="flex justify-between items-center w-full p-2 text-gray-900 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            <a href="/data-program" class="flex items-center gap-2">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>
                                <span>Data Program</span>
                            </a>
                        </li>
                        <li class="flex justify-between items-center w-full p-2 text-gray-900 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            <a href="/Data-Jampersal" class="flex items-center gap-2">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>
                                <span>Data Jampersal</span>
                            </a>
                        </li>
                        <li class="flex justify-between items-center w-full p-2 text-gray-900 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            <a href="/Data-Kematian" class="flex items-center gap-2">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>
                                <span>Data Kematian</span>

                        <li class="flex justify-between items-center w-full p-2 text-gray-900 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            <a href="/data-usia-sekolah-dan-remaja" class="flex items-center gap-2">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>
                                <span>Data Usia Sekolah dan Remaja</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Contoh 2</a>
                </li>

                <li>
                    <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Contoh 3</a>
                </li>
            </ul>
        </li>


          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                   <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                   <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                   <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                   <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                   <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                   <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
             </a>
          </li>
       </ul>
    </div>
</aside>
--}}

{{-- Rewrite --}}
<aside class="border-r border-slate-300 py-6 h-full overflow-y-hidden hover:overflow-y-scroll">
    <ul class="">
        {{-- Dashboard --}}
        <li class="flex items-center justify-between mb-6 px-3 group">
            <a class="flex gap-3 w-full py-4 font-bold items-center bg-green-700 transition px-3 rounded group-hover:bg-green-800"
                href="#">
                @include('icons.HomeIcon')
                {{-- <img class="w-6" src="{{ asset('icons/HomeIcon.svg') }}" alt="Dashboard Icon"> --}}
                <p class="leading-tight text-white">Dashboard</p>
            </a>
        </li>
        {{-- Sekretariat --}}
        <li class="flex-col items-center justify-between px-3">
            <button type="button"
                class="px-3 flex gap-3 w-full py-4 justify-between items-center font-bold bg-slate-200 cursor-pointer rounded-t hover:bg-green-700 hover:text-white transition">
                <div class="flex gap-3 items-center">
                    @include('icons.SekretariatIcon')
                    <p class="leading-tight">Sekretariat</p>
                </div>
                @include('icons.plusIcon')
            </button>
            {{-- Sub Menu Yankes --}}
            <ul class="bg-slate-200">
                <li class="py-2 bg-slate-300 hover:bg-slate-400">
                    <div class="ps-3">
                        <a class="" href="/test/p2p/sub-bagian-imunisasi/laporan-manual/spm">Standar Pelayanan
                            Minimal</a>
                    </div>
                </li>
            </ul>
        </li>
        {{-- Yankes --}}
        <li class="border flex-col items-center justify-between bg-slate-100">
            <button type="button"
                class="flex gap-3 w-full py-2 justify-between items-center font-bold border bg-amber-400 cursor-pointer">
                <div class="flex gap-3 items-center">
                    <img class="w-6 border" src="{{ asset('icons/YankesIcon.svg') }}" alt="Kesmas Icon">
                    <p class="border leading-tight">Layanan Kesehatan</p>
                </div>
                <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
            </button>
            <ul class="bg-slate-200">
                {{-- Sarpelkes --}}
                <li class="border flex-col justify-between bg-slate-300 my-2">
                    <button type="button"
                        class="flex justify-between items-center py-2 text-start w-full bg-green-700 cursor-pointer"
                        href="#imunisasi">
                        <p class="border leading-tight ps-3">Sarana Pelayanan Kesehatan</p>
                        <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
                    </button>
                </li>
                {{-- Rujukan --}}
                <li class="border flex-col justify-between bg-slate-300 my-2">
                    <button type="button"
                        class="flex justify-between items-center py-2 text-start w-full bg-green-700 cursor-pointer"
                        href="#imunisasi">
                        <p class="border leading-tight ps-3">Rujukan</p>
                        <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
                    </button>
                </li>
                {{-- Primer --}}
                <li class="border flex-col justify-between bg-slate-300 my-2">
                    <button type="button"
                        class="flex justify-between items-center py-2 text-start w-full bg-green-700 cursor-pointer"
                        href="#imunisasi">
                        <p class="border leading-tight ps-3">Primer</p>
                        <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
                    </button>
                    {{-- Sub Menu Primer --}}
                    <ul class="bg-red-500">
                        <li class="border py-2 my-2 bg-red-700">
                            <div class="border ps-6">
                                <a class="bg-white" href="#test1">Gawat Darurat Non PSC 119</a>
                            </div>
                        </li>
                        <li class="border py-2 my-2 bg-red-700">
                            <div class="border ps-6">
                                <a class="bg-white" href="#test2">Laporan Rawat Jalan (BP Umum)</a>
                            </div>
                        </li>
                        <li class="border py-2 my-2 bg-red-700">
                            <div class="border ps-6">
                                <a class="bg-white" href="#test2">Laporan Rawat Inap</a>
                            </div>
                        </li>
                        <li class="border py-2 my-2 bg-red-700">
                            <div class="border ps-6">
                                <a class="bg-white" href="#test2">Laporan UGD/KLL</a>
                            </div>
                        </li>
                        <li class="border py-2 my-2 bg-red-700">
                            <div class="border ps-6">
                                <a class="bg-white" href="#test2">[PERKESMAS] Pembina Keluarga Mandiri</a>
                            </div>
                        </li>
                        <li class="border py-2 my-2 bg-red-700">
                            <div class="border ps-6">
                                <a class="bg-white" href="#test2">[PERKESMAS] Laporan Bulanan</a>
                            </div>
                        </li>
                        <li class="border py-2 my-2 bg-red-700">
                            <div class="border ps-6">
                                <a class="bg-white" href="#test2">Laporan PIS-PK</a>
                            </div>
                        </li>
                        <li class="border py-2 my-2 bg-red-700">
                            <div class="border ps-6">
                                <a class="bg-white" href="#test2">Laporan Kesehatan Tradisional</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        {{-- SDMK --}}
        <li class="border flex items-center justify-between bg-slate-100">
            <button type="button"
                class="flex gap-3 justify-between items-center border py-2 w-full font-bold bg-amber-400 cursor-pointer text-start"
                href="#p2popen">
                <div class="flex gap-3 items-center">
                    <img class="w-6 border" src="{{ asset('icons/SDMKIcon.svg') }}" alt="P2P Icon">
                    <p class="border leading-tight">Sumber Daya Manusia Kesehatan</p>
                </div>
                <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
            </button>
        </li>
        {{-- P2P --}}
        <li class="border flex-col justify-center bg-slate-100">
            <button type="button"
                class="flex gap-3 justify-between items-center border py-2 w-full font-bold bg-amber-400 cursor-pointer text-start"
                href="#p2popen">
                <div class="flex gap-3 items-center">
                    <img class="w-6 border" src="{{ asset('icons/P2PIcon.svg') }}" alt="P2P Icon">
                    <p class="border leading-tight" href="">Program Pencegahan dan Pengendalian Penyakit</p>
                </div>
                <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
            </button>
            {{-- Sub Menu P2P --}}
            <ul class="bg-slate-200">
                {{-- Sub Bagian Penyakit Tidak Menular --}}
                <li class="border flex-col justify-between bg-slate-300 my-2">
                    <button type="button"
                        class="flex justify-between items-center py-2 text-start w-full bg-green-700 cursor-pointer"
                        href="#ptm">
                        <p class="border leading-tight ps-3">Sub. Bagian Penyakit Tidak Menular</p>
                        <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
                    </button>
                    <ul class="bg-slate-400 border">
                        {{-- Laporan Manual --}}
                        <li class="border my-2 bg-slate-500">
                            <button type="button"
                                class="border py-2 flex justify-between w-full bg-purple-600 cursor-pointer">
                                <p class="border ps-6">Laporan Manual</p>
                                <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
                            </button>
                            <ul class="bg-red-500">
                                <li class="border py-2 my-2 bg-red-700">
                                    <div class="border ps-9">
                                        <a class="bg-white" href="#test1">Laporan Gigi</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        {{-- Aplikasi Kemenkes --}}
                        <li class="border my-2 bg-slate-500">
                            <button type="button"
                                class="border py-2 flex justify-between w-full bg-purple-600 cursor-pointer">
                                <p class="border ps-6">Aplikasi Kemenkes</p>
                                <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
                            </button>
                        </li>
                    </ul>
                </li>
                {{-- Sub Bagian Penyakit Menular --}}
                <li class="border flex-col justify-between bg-slate-300 my-2">
                    <button type="button"
                        class="flex justify-between items-center py-2 text-start w-full bg-green-700 cursor-pointer"
                        href="#pm">
                        <p class="border leading-tight ps-3">Sub. Bagian Penyakit Menular</p>
                        <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
                    </button>
                    <ul class="bg-red-500">
                        <li class="border py-2 my-2 bg-red-700">
                            <div class="border ps-6">
                                <a class="bg-white" href="#test1">Laporan ISPA</a>
                            </div>
                        </li>
                    </ul>
                </li>
                {{-- Sub Bagian Imunisasi --}}
                <li class="border flex-col justify-between bg-slate-300 my-2">
                    <button type="button"
                        class="flex justify-between items-center py-2 text-start w-full bg-green-700 cursor-pointer"
                        href="#imunisasi">
                        <p class="border leading-tight ps-3">Sub. Bagian Imunisasi</p>
                        <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
                    </button>
                    <ul class="bg-slate-400 border">
                        {{-- Aplikasi Kemenkes --}}
                        <li class="border my-2 bg-slate-500">
                            <button type="button"
                                class="border py-2 flex justify-between w-full bg-purple-600 cursor-pointer">
                                <p class="border ps-6">Aplikasi Kemenkes</p>
                                <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
                            </button>
                            <ul class="bg-red-500">
                                <li class="border py-2 my-2 bg-red-700">
                                    <div class="border ps-9">
                                        <a class="bg-white" href="#test1">Test 1</a>
                                    </div>
                                </li>
                                <li class="border py-2 my-2 bg-red-700">
                                    <div class="border ps-9">
                                        <a class="bg-white" href="#test2">Test 2</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        {{-- Laporan Manual --}}
                        <li class="border my-2 bg-slate-500">
                            <button type="button"
                                class="border py-2 flex justify-between w-full bg-purple-600 cursor-pointer">
                                <p class="border ps-6">Laporan Manual</p>
                                <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
                            </button>
                            <ul class="bg-red-500">
                                <li class="border py-2 my-2 bg-red-700">
                                    <div class="border ps-9">
                                        <a class="bg-white"
                                            href="/test/p2p/sub-bagian-imunisasi/laporan-manual/hasil-imunisasi-baduta">Sasaran
                                            Bumil</a>
                                    </div>
                                </li>
                                <li class="border py-2 my-2 bg-red-700">
                                    <div class="border ps-9">
                                        <a class="bg-white"
                                            href="/test/p2p/sub-bagian-imunisasi/laporan-manual/status-td-ibu-hamil">Status
                                            TD Ibu Hamil</a>
                                    </div>
                                </li>
                                <li class="border py-2 my-2 bg-red-700">
                                    <div class="border ps-9">
                                        <a class="bg-white"
                                            href="/test/p2p/sub-bagian-imunisasi/laporan-manual/jumlah-dan-persentase-wus-tidak-hamil-diimunisasi">Jumlah
                                            dan Persentase WUS Tidak Hamil Diimunisasi</a>
                                    </div>
                                </li>
                                <li class="border py-2 my-2 bg-red-700">
                                    <div class="border ps-9">
                                        <a class="bg-white"
                                            href="/test/p2p/sub-bagian-imunisasi/laporan-manual/status-td-wus-tidak-hamil">Status
                                            TD WUS Tidak Hamil</a>
                                    </div>
                                </li>
                                <li class="border py-2 my-2 bg-red-700">
                                    <div class="border ps-9">
                                        <a class="bg-white"
                                            href="/test/p2p/sub-bagian-imunisasi/laporan-manual/hasil-imunisasi-bayi">Hasil
                                            Imunisasi Bayi</a>
                                    </div>
                                </li>
                                <li class="border py-2 my-2 bg-red-700">
                                    <div class="border ps-9">
                                        <a class="bg-white"
                                            href="/test/p2p/sub-bagian-imunisasi/laporan-manual/hasil-imunisasi-baduta">Hasil
                                            Imunisasi Baduta</a>
                                    </div>
                                </li>
                                {{-- <li class="border py-2 my-2 bg-red-700">
                                    <div class="border ps-9">
                                        <a class="bg-white" href="/test/p2p/sub-bagian-imunisasi/laporan-manual/jumlah-dan-persentase-ibu-hamil-diimunisasi">Jumlah dan Persentase Ibu Hamil Diimunisasi</a>
                                    </div>
                                </li>
                                <li class="border py-2 my-2 bg-red-700">
                                    <div class="border ps-9">
                                        <a class="bg-white" href="/test/p2p/sub-bagian-imunisasi/laporan-manual/jumlah-total-dan-persentase-wus-hamil-plus-tidak-hamil-diimunisasi-td">Jumlah Total dan Persentase WUS (Hamil + Tidak Hamil) Diimunisasi TD</a>
                                    </div>
                                </li>
                                <li class="border py-2 my-2 bg-red-700">
                                    <div class="border ps-9">
                                        <a class="bg-white" href="/test/p2p/sub-bagian-imunisasi/laporan-manual/status-td2-plus-bumil">Status TD 2+ Bumil</a>
                                    </div>
                                </li>
                                <li class="border py-2 my-2 bg-red-700">
                                    <div class="border ps-9">
                                        <a class="bg-white" href="/test/p2p/sub-bagian-imunisasi/laporan-manual/status-wus-hamil-plus-tidak-hamil-diimunisasi-td">Status WUS (Hamil + Tidak Hamil) Diimunisasi TD</a>
                                    </div>
                                </li> --}}
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        {{-- Kesmas --}}
        <li class="border flex-col items-center justify-between bg-slate-100">
            <button type="button"
                class="flex gap-3 w-full py-2 justify-between font-bold border bg-amber-400 cursor-pointer">
                <div class="flex gap-3">
                    <img class="w-6 border" src="{{ asset('icons/KesmasIcon.svg') }}" alt="Kesmas Icon">
                    <p class="border leading-tight">Kesehatan Masyarakat</p>
                </div>
                <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
            </button>
            {{-- Sub Menu Kesmas --}}
            <ul class="bg-slate-200">
                {{-- Sub Bagian Promosi Kesehatan --}}
                <li class="border flex-col justify-between my-2">
                    <button type="button"
                        class="w-full flex justify-between items-center py-2 text-start bg-green-700 cursor-pointer"
                        href="#imunisasi">
                        <p class="border leading-tight ps-3">Sub. Bagian Promosi Kesehatan</p>
                        <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
                    </button>
                    <ul class="bg-slate-400 border">
                        {{-- Laporan Manual --}}
                        <li class="border my-2 bg-slate-500">
                            <button type="button"
                                class="border py-2 flex justify-between w-full bg-purple-600 cursor-pointer">
                                <p class="border ps-6">Laporan Manual</p>
                                <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
                            </button>
                            <ul class="bg-red-500">
                                <li class="border py-2 my-2 bg-red-700">
                                    <div class="border ps-9">
                                        <a class="bg-white" href="#test2">Test 2</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        {{-- Aplikasi Kemenkes --}}
                        <li class="border my-2 bg-slate-500">
                            <button type="button"
                                class="border py-2 flex justify-between w-full bg-purple-600 cursor-pointer">
                                <p class="border ps-6">Aplikasi Kemenkes</p>
                                <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
                            </button>
                            <ul class="bg-red-500">
                                <li class="border py-2 my-2 bg-red-700">
                                    <div class="border ps-9">
                                        <a class="bg-white" href="#test1">Test 1</a>
                                    </div>
                                </li>
                                <li class="border py-2 my-2 bg-red-700">
                                    <div class="border ps-9">
                                        <a class="bg-white" href="#test2">Test 2</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                {{-- Sub Bagian Kesehatan Lingkungan --}}
                <li class="border flex-col justify-between my-2">
                    <button type="button"
                        class="w-full flex justify-between items-center py-2 text-start bg-green-700 cursor-pointer"
                        href="#imunisasi">
                        <p class="border leading-tight ps-3">Sub. Bagian Kesehatan Lingkungan</p>
                        <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
                    </button>
                    <ul class="bg-slate-400 border">
                        {{-- Laporan Manual --}}
                        <li class="border my-2 bg-slate-500">
                            <button type="button"
                                class="border py-2 flex justify-between w-full bg-purple-600 cursor-pointer">
                                <p class="border ps-6">Laporan Manual</p>
                                <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
                            </button>
                            <ul class="bg-red-500">
                                <li class="border py-2 my-2 bg-red-700">
                                    <div class="border ps-9">
                                        <a class="bg-white" href="#test2">Test 2</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        {{-- Aplikasi Kemenkes --}}
                        <li class="border my-2 bg-slate-500">
                            <button type="button"
                                class="border py-2 flex justify-between w-full bg-purple-600 cursor-pointer">
                                <p class="border ps-6">Aplikasi Kemenkes</p>
                                <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
                            </button>
                            <ul class="bg-red-500">
                                <li class="border py-2 my-2 bg-red-700">
                                    <div class="border ps-9">
                                        <a class="bg-white" href="#test1">Test 1</a>
                                    </div>
                                </li>
                                <li class="border py-2 my-2 bg-red-700">
                                    <div class="border ps-9">
                                        <a class="bg-white" href="#test2">Test 2</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                {{-- Sub Bagian Kesehatan Keluarga dan Gizi --}}
                <li class="border flex-col justify-between my-2">
                    <button type="button"
                        class="w-full flex justify-between items-center py-2 text-start bg-green-700 cursor-pointer"
                        href="#imunisasi">
                        <p class="border leading-tight ps-3">Sub. Bagian Kesehatan Keluarga dan Gizi</p>
                        <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
                    </button>
                    <ul class="bg-slate-400 border">
                        {{-- Laporan Manual --}}
                        <li class="border my-2 bg-slate-500">
                            <button type="button"
                                class="border py-2 flex justify-between w-full bg-purple-600 cursor-pointer">
                                <p class="border ps-6">Laporan Manual</p>
                                <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
                            </button>
                            <ul class="bg-red-500">
                                <li class="border py-2 my-2 bg-red-700">
                                    <div class="border ps-9">
                                        <a class="bg-white" href="#test2">Test 2</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        {{-- Aplikasi Kemenkes --}}
                        <li class="border my-2 bg-slate-500">
                            <button type="button"
                                class="border py-2 flex justify-between w-full bg-purple-600 cursor-pointer">
                                <p class="border ps-6">Aplikasi Kemenkes</p>
                                <img class="w-6 border" src="{{ asset('icons/plusIcon.svg') }}" alt="Plus Icon">
                            </button>
                            <ul class="bg-red-500">
                            </ul>
                        </li>
                    </ul>
                    {{-- <ul class="bg-red-500">
                        <li class="border py-2 my-2 bg-red-700">
                            <div class="border ps-6">
                                <a class="bg-white" href="/test/kesehatan-masyarakat/sub-bag-kesehatan-keluarga-dan-gizi/si-gizi">Si-Gizi</a>
                            </div>
                        </li>
                    </ul> --}}
                </li>
            </ul>
        </li>
    </ul>
</aside>

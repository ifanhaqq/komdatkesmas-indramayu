{{-- Rewrite --}}
<aside class="border-r border-slate-300 h-full overflow-y-hidden hover:overflow-y-s">
    <ul class="px-2 py-6 flex flex-col gap-3 overflow-y-hidden hover:overflow-y-auto h-full">
        {{-- Dashboard --}}
        <li id="dashboard-menu" class="flex items-center justify-between px-3 group">
            <a class="flex gap-3 w-full py-4 font-bold items-center bg-green-700 transition px-3 rounded group-hover:bg-green-800"
                href="#">
                @include('icons.HomeIcon')
                <p class="leading-tight text-white">Dashboard</p>
            </a>
        </li>
        {{-- Sekretariat --}}
        <li id="sekretariat-menu" class="flex-col items-center justify-between mx-3">
            <button type="button"
                class="px-3 flex gap-3 w-full py-4 justify-between items-center font-bold cursor-pointer rounded-t transition group hover:text-white hover:bg-green-700">
                <div class="flex gap-3 items-center">
                    @include('icons.SekretariatIcon')
                    <p class="leading-tight">Sekretariat</p>
                </div>
                @include('icons.PlusIcon')
            </button>
            {{-- Sub Menu Sekretariat --}}
            <ul class="h-auto overflow-hidden">
                <li class="py-2 transition bg-slate-200">
                    <div class="ps-6 pe-3">
                        <a class="" href="/test/p2p/sub-bagian-imunisasi/laporan-manual/spm">Standar Pelayanan
                            Minimal</a>
                    </div>
                </li>
            </ul>
        </li>
        {{-- Yankes --}}
        <li class="flex-col items-center justify-between mx-3">
            <button type="button"
                class="rounded-t px-3 flex gap-3 w-full py-4 justify-between items-center font-bold cursor-pointer transition group hover:text-white hover:bg-green-700">
                <div class="flex gap-3 items-center text-start">
                    @include('icons.YankesIcon')
                    <p class="leading-tight">Layanan Kesehatan</p>
                </div>
                @include('icons.PlusIcon')
            </button>
            {{-- Sub Menu Yankes --}}
            <ul class="bg-slate-200">
                {{-- Sarpelkes --}}
                <li class="flex-col justify-between bg-slate-300">
                    <button type="button"
                        class="px-3 flex justify-between items-center py-4 text-start transition w-full bg-green-600 hover:bg-green-650 text-white cursor-pointer"
                        href="#imunisasi">
                        <p class="leading-tight">Sarana Pelayanan Kesehatan</p>
                        @include('icons.PlusIcon')
                    </button>
                </li>
                {{-- Rujukan --}}
                <li class="flex-col justify-between bg-slate-300">
                    <button type="button"
                        class="px-3 flex justify-between items-center py-4 text-start transition w-full bg-green-600 hover:bg-green-650 text-white cursor-pointer"
                        href="#imunisasi">
                        <p class="leading-tight">Rujukan</p>
                        @include('icons.plusIcon')
                    </button>
                </li>
                {{-- Primer --}}
                <li class="flex-col justify-between bg-slate-300">
                    <button type="button"
                        class="px-3 flex justify-between items-center py-4 text-start transition w-full bg-green-600 hover:bg-green-650 text-white cursor-pointer"
                        href="#imunisasi">
                        <p class="leading-tight">Primer</p>
                        @include('icons.plusIcon')
                    </button>
                    {{-- Sub Menu Primer --}}
                    <ul class="">
                        <li class="py-3 pe-3 bg-slate-200">
                            <div class="ps-6 pe-3">
                                <a class="" href="#test1">Gawat Darurat Non PSC 119</a>
                            </div>
                        </li>
                        <li class="py-3 pe-3 bg-slate-200">
                            <div class="ps-6 pe-3">
                                <a class="" href="#test2">Laporan Rawat Jalan (BP Umum)</a>
                            </div>
                        </li>
                        <li class="py-3 pe-3 bg-slate-200">
                            <div class="ps-6 pe-3">
                                <a class="" href="#test2">Laporan Rawat Inap</a>
                            </div>
                        </li>
                        <li class="py-3 pe-3 bg-slate-200">
                            <div class="ps-6 pe-3">
                                <a class="" href="#test2">Laporan UGD/KLL</a>
                            </div>
                        </li>
                        <li class="py-3 pe-3 bg-slate-200">
                            <div class="ps-6 pe-3">
                                <a class="" href="#test2">[PERKESMAS] Pembina Keluarga Mandiri</a>
                            </div>
                        </li>
                        <li class="py-3 pe-3 bg-slate-200">
                            <div class="ps-6 pe-3">
                                <a class="" href="#test2">[PERKESMAS] Laporan Bulanan</a>
                            </div>
                        </li>
                        <li class="py-3 pe-3 bg-slate-200">
                            <div class="ps-6 pe-3">
                                <a class="" href="#test2">Laporan PIS-PK</a>
                            </div>
                        </li>
                        <li class="py-3 pe-3 bg-slate-200">
                            <div class="ps-6 pe-3">
                                <a class="" href="#test2">Laporan Kesehatan Tradisional</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        {{-- SDMK --}}
        <li class="flex items-center justify-between mx-3">
            <button type="button"
                class="rounded-t px-3 flex gap-3 justify-between items-center py-4 w-full font-bold cursor-pointer text-start transition group hover:text-white hover:bg-green-700"
                href="#p2popen">
                <div class="flex gap-3 items-center">
                    @include('icons.SDMKIcon')
                    <p class="leading-tight">Sumber Daya Manusia Kesehatan</p>
                </div>
                @include('icons.plusIcon')
            </button>
        </li>
        {{-- P2P --}}
        <li class="flex-col justify-center mx-3">
            <button type="button"
                class="rounded-t px-3 flex gap-3 justify-between items-center py-4 w-full font-bold cursor-pointer text-start transition group hover:text-white hover:bg-green-700"
                href="#p2popen">
                <div class="flex gap-3 items-center">
                    @include('icons.P2PIcon')
                    <p class="leading-tight" href="">Program Pencegahan dan Pengendalian Penyakit</p>
                </div>
                @include('icons.PlusIcon')
            </button>
            {{-- Sub Menu P2P --}}
            <ul class="">
                {{-- Sub Bagian Penyakit Tidak Menular --}}
                <li class="flex-col justify-between bg-slate-300">
                    <button type="button"
                        class="flex px-3 justify-between items-center py-4 text-start w-full bg-green-600 hover:bg-green-650 text-white cursor-pointer"
                        href="#ptm">
                        <p class="leading-tight">Sub. Bagian Penyakit Tidak Menular</p>
                        @include('icons.PlusIcon')
                    </button>
                    <ul class="bg-slate-400">
                        {{-- Laporan Manual --}}
                        <li class="">
                            <button type="button"
                                class="py-4 flex justify-between w-full bg-slate-300 cursor-pointer ps-6 pe-3">
                                <p class="">Laporan Manual</p>
                                @include('icons.PlusIcon')
                            </button>
                            <ul class="">
                                <li class="py-3 pe-3 bg-slate-200">
                                    <div class="ps-9 pe-3">
                                        <a class="" href="#test1">Laporan Gigi</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        {{-- Aplikasi Kemenkes --}}
                        <li class="">
                            <button type="button"
                                class="py-4 flex justify-between w-full bg-slate-300 cursor-pointer ps-6 pe-3">
                                <p class="">Aplikasi Kemenkes</p>
                                @include('icons.PlusIcon')
                            </button>
                        </li>
                    </ul>
                </li>
                {{-- Sub Bagian Penyakit Menular --}}
                <li class="flex-col justify-between bg-slate-300">
                    <button type="button"
                        class="px-3 flex justify-between items-center py-4 text-start w-full bg-green-600 hover:bg-green-650 text-white cursor-pointer"
                        href="#pm">
                        <p class="leading-tight">Sub. Bagian Penyakit Menular</p>
                        @include('icons.PlusIcon')
                    </button>
                    <ul>
                        <li class="py-3 pe-3 bg-slate-200">
                            <div class="ps-6 pe-3">
                                <a class="" href="#test1">Laporan ISPA</a>
                            </div>
                        </li>
                    </ul>
                </li>
                {{-- Sub Bagian Imunisasi --}}
                <li class="flex-col justify-between">
                    <button type="button"
                        class="px-3 flex justify-between items-center py-4 text-start w-full bg-green-600 hover:bg-green-650 text-white cursor-pointer"
                        href="#imunisasi">
                        <p class="leading-tight">Sub. Bagian Imunisasi</p>
                        @include('icons.PlusIcon')
                    </button>
                    <ul class="">
                        {{-- Laporan Manual --}}
                        <li class="">
                            <button type="button"
                                class="py-4 flex justify-between w-full bg-slate-300 cursor-pointer ps-6 pe-3">
                                <p class="">Laporan Manual</p>
                                @include('icons.PlusIcon')
                            </button>
                            <ul class="">
                                <li class="py-3 pe-3 bg-slate-200">
                                    <div class="ps-9 pe-3">
                                        <a class=""
                                            href="/test/p2p/sub-bagian-imunisasi/laporan-manual/hasil-imunisasi-baduta">Sasaran
                                            Bumil</a>
                                    </div>
                                </li>
                                <li class="py-3 pe-3 bg-slate-200">
                                    <div class="ps-9 pe-3">
                                        <a class=""
                                            href="/test/p2p/sub-bagian-imunisasi/laporan-manual/status-td-ibu-hamil">Status
                                            TD Ibu Hamil</a>
                                    </div>
                                </li>
                                <li class="py-3 pe-3 bg-slate-200">
                                    <div class="ps-9 pe-3">
                                        <a class=""
                                            href="/test/p2p/sub-bagian-imunisasi/laporan-manual/jumlah-dan-persentase-wus-tidak-hamil-diimunisasi">Jumlah
                                            dan Persentase WUS Tidak Hamil Diimunisasi</a>
                                    </div>
                                </li>
                                <li class="py-3 pe-3 bg-slate-200">
                                    <div class="ps-9 pe-3">
                                        <a class=""
                                            href="/test/p2p/sub-bagian-imunisasi/laporan-manual/status-td-wus-tidak-hamil">Status
                                            TD WUS Tidak Hamil</a>
                                    </div>
                                </li>
                                <li class="py-3 pe-3 bg-slate-200">
                                    <div class="ps-9 pe-3">
                                        <a class=""
                                            href="/test/p2p/sub-bagian-imunisasi/laporan-manual/hasil-imunisasi-bayi">Hasil
                                            Imunisasi Bayi</a>
                                    </div>
                                </li>
                                <li class="py-3 pe-3 bg-slate-200">
                                    <div class="ps-9 pe-3">
                                        <a class=""
                                            href="/test/p2p/sub-bagian-imunisasi/laporan-manual/hasil-imunisasi-baduta">Hasil
                                            Imunisasi Baduta</a>
                                    </div>
                                </li>
                                {{-- <li class="border py-2 my-2 bg-red-700">
                                    <div class="border ps-6 pe-3">
                                        <a class="" href="/test/p2p/sub-bagian-imunisasi/laporan-manual/jumlah-dan-persentase-ibu-hamil-diimunisasi">Jumlah dan Persentase Ibu Hamil Diimunisasi</a>
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
                        {{-- Aplikasi Kemenkes --}}
                        <li class="">
                            <button type="button"
                                class="py-4 flex justify-between w-full bg-slate-300 cursor-pointer ps-6 pe-3">
                                <p class="">Aplikasi Kemenkes</p>
                                @include('icons.PlusIcon')
                            </button>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        {{-- Kesmas --}}
        <li class="flex-col items-center justify-between mx-3">
            <button type="button"
                class="rounded-t px-3 flex gap-3 w-full py-4 justify-between items-center font-bold cursor-pointer text-start transition group hover:text-white hover:bg-green-700">
                <div class="flex gap-3 items-center">
                    @include('icons.KesmasIcon')
                    <p class="leading-tight">Kesehatan Masyarakat</p>
                </div>
                @include('icons.PlusIcon')
            </button>
            {{-- Sub Menu Kesmas --}}
            <ul>
                {{-- Sub Bagian Promosi Kesehatan --}}
                <li class="flex-col justify-between bg-slate-300">
                    <button type="button"
                        class="flex px-3 justify-between items-center py-4 text-start w-full bg-green-600 hover:bg-green-650 text-white cursor-pointer"
                        href="#ptm">
                        <p class="leading-tight">Sub. Bagian Promosi Kesehatan</p>
                        @include('icons.PlusIcon')
                    </button>
                </li>
                {{-- Sub Bagian Kesehatan Lingkungan --}}
                <li class="flex-col justify-between bg-slate-300">
                    <button type="button"
                        class="flex px-3 justify-between items-center py-4 text-start w-full bg-green-600 hover:bg-green-650 text-white cursor-pointer"
                        href="#ptm">
                        <p class="leading-tight">Sub. Bagian Kesehatan Lingkungan</p>
                        @include('icons.PlusIcon')
                    </button>
                    <ul class="bg-slate-400">
                        {{-- Laporan Manual --}}
                        <li class="">
                            <button type="button"
                                class="py-4 flex justify-between w-full bg-slate-300 cursor-pointer ps-6 pe-3">
                                <p class="">Laporan Manual</p>
                                @include('icons.PlusIcon')
                            </button>
                            {{-- <ul class="">
                                <li class="py-3 pe-3 bg-slate-200">
                                    <div class="ps-6 pe-3">
                                        <a class="" href="#test1">Laporan Gigi</a>
                                    </div>
                                </li>
                            </ul> --}}
                        </li>
                        {{-- Aplikasi Kemenkes --}}
                        <li class="">
                            <button type="button"
                                class="py-4 flex justify-between w-full bg-slate-300 cursor-pointer ps-6 pe-3">
                                <p class="">Aplikasi Kemenkes</p>
                                @include('icons.PlusIcon')
                            </button>
                        </li>
                    </ul>
                </li>
                {{-- Sub Bagian Kesehatan Keluarga dan Gizi --}}
                <li class="flex-col justify-between bg-slate-300">
                    <button type="button"
                        class="flex px-3 justify-between items-center py-4 text-start w-full bg-green-600 hover:bg-green-650 text-white cursor-pointer"
                        href="#ptm">
                        <p class="leading-tight">Sub. Bagian Kesehatan Keluarga dan Gizi</p>
                        @include('icons.PlusIcon')
                    </button>
                    <ul class="bg-slate-400">
                        {{-- Laporan Manual --}}
                        <li class="">
                            <button type="button"
                                class="py-4 flex justify-between w-full bg-slate-300 cursor-pointer ps-6 pe-3">
                                <p class="">Laporan Manual</p>
                                @include('icons.PlusIcon')
                            </button>
                            {{-- <ul class="">
                                <li class="py-3 pe-3 bg-slate-200">
                                    <div class="ps-6 pe-3">
                                        <a class="" href="#test1">Laporan Gigi</a>
                                    </div>
                                </li>
                            </ul> --}}
                        </li>
                        {{-- Aplikasi Kemenkes --}}
                        <li class="">
                            <button type="button"
                                class="py-4 flex justify-between w-full bg-slate-300 cursor-pointer ps-6 pe-3">
                                <p class="">Aplikasi Kemenkes</p>
                                @include('icons.PlusIcon')
                            </button>
                            <ul class="">
                                <li class="">
                                    <button type="button"
                                        class="py-4 flex justify-between w-full bg-green-700 hover:bg-green-800 text-white cursor-pointer ps-6 pe-3">
                                        <p class="">Si-Gizi</p>
                                        @include('icons.PlusIcon')
                                    </button>
                                </li>
                                <li class="">
                                    <button type="button"
                                        class="py-4 flex justify-between w-full bg-green-700 hover:bg-green-800 text-white cursor-pointer ps-6 pe-3">
                                        <p class="">Komdat</p>
                                        @include('icons.PlusIcon')
                                    </button>
                                    <ul class="">
                                        <li class="">
                                            <button type="button"
                                                class="py-4 flex justify-between w-full bg-green-800 hover:bg-green-900 text-white cursor-pointer ps-9 pe-3">
                                                <p class="">Gizi KIA</p>
                                                @include('icons.PlusIcon')
                                            </button>
                                            <ul>
                                                <li class="">
                                                    <button type="button"
                                                        class="py-4 flex justify-between w-full bg-slate-300 cursor-pointer ps-12 pe-3">
                                                        <p class="">Screening</p>
                                                        @include('icons.PlusIcon')
                                                    </button>
                                                    <ul>
                                                        <li class="py-3 pe-3 bg-slate-200">
                                                            <div class="ps-15 pe-3">
                                                                <a class=""
                                                                    href="/test/p2p/sub-bagian-imunisasi/laporan-manual/hasil-imunisasi-baduta">Data PJB</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="">
                                                    <button type="button"
                                                        class="py-4 flex justify-between w-full bg-slate-300 cursor-pointer ps-12 pe-3">
                                                        <p class="">Usia Sekolah dan Remaja</p>
                                                        @include('icons.PlusIcon')
                                                    </button>
                                                    <ul>
                                                        <li class="py-3 pe-3 bg-slate-200">
                                                            <div class="ps-15 pe-3">
                                                                <a class=""
                                                                    href="/test/p2p/sub-bagian-imunisasi/laporan-manual/hasil-imunisasi-baduta">Data Program</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="py-3 pe-3 bg-slate-200">
                                                    <div class="ps-6 pe-3">
                                                        <a class=""
                                                            href="/test/p2p/sub-bagian-imunisasi/laporan-manual/hasil-imunisasi-baduta">Data Indikator</a>
                                                    </div>
                                                </li>
                                                <li class="py-3 pe-3 bg-slate-200">
                                                    <div class="ps-6 pe-3">
                                                        <a class=""
                                                            href="/test/p2p/sub-bagian-imunisasi/laporan-manual/hasil-imunisasi-baduta">Data Program</a>
                                                    </div>
                                                </li>
                                                <li class="py-3 pe-3 bg-slate-200">
                                                    <div class="ps-6 pe-3">
                                                        <a class=""
                                                            href="/test/p2p/sub-bagian-imunisasi/laporan-manual/hasil-imunisasi-baduta">Data Kematian</a>
                                                    </div>
                                                </li>
                                                <li class="py-3 pe-3 bg-slate-200">
                                                    <div class="ps-6 pe-3">
                                                        <a class=""
                                                            href="/test/p2p/sub-bagian-imunisasi/laporan-manual/hasil-imunisasi-baduta">Data Jampersal</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</aside>

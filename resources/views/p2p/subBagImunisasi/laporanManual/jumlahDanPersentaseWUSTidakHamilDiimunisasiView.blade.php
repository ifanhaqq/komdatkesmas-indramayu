<x-layout>
    <div class="px-6 py-6 h-full flex flex-col gap-5 overflow-y-scroll">
        <h1 class="url-route ">Program Pencegahan dan Pengendalian Penyakit / Sub. Bagian Imunisasi / Laporan Manual / Jumlah Dan Persentase WUS Tidak Hamil Diimunisasi</h1>
        <div class="border border-gray-100"></div>
        <h1 class="text-2xl font-bold text-center mb-5 mt-5 text-gray-700">Jumlah Dan Persentase WUS Tidak Hamil Diimunisasi</h1>
        <div>
            <form action="" class="w-full grid grid-cols-2 gap-3">
                <div class="col-start-1 col-end-3">
                    <label for="provinsi" clas>Kecamatan</label>
                    <div class="flex space-x-4">
                        <select class="w-full mt-3 border border-gray-300 p-3 rounded-lg text-gray-700 focus:ring-2 focus:ring-blue-500 w-1/4">
                            <option disabled selected>-- Silahkan Pilih Kecamatan --</option>
                            <option>Kecamatan</option>
                            <option>Karangampel</option>
                        </select>
                    </div>
                </div>
                <div class="col-start-1 col-end-3">
                    <label for="desa">Desa</label>
                    <div class="flex space-x-4">
                        <select class="w-full mt-3 border border-gray-300 p-3 rounded-lg text-gray-700 focus:ring-2 focus:ring-blue-500 w-1/4">
                            <option disabled selected>-- Silahkan Pilih Desa --</option>
                            <option>Kecamatan</option>
                            <option>Karangampel</option>
                        </select>
                    </div>
                </div>
                <div class="col-start-1 col-end-3">
                    <label for="puskesmas">Puskesmas</label>
                    <div class="flex space-x-4">
                        <select class="w-full mt-3 border border-gray-300 p-3 rounded-lg text-gray-700 focus:ring-2 focus:ring-blue-500 w-1/4">
                            <option disabled selected>-- Silahkan Pilih Puskesmas --</option>
                            <option>Kecamatan</option>
                            <option>Karangampel</option>
                        </select>
                    </div>
                </div>
                <div class="col-start-1 col-end-3 grid grid-cols-2 gap-3">
                    <div>
                        <label for="puskesmas">Bulan</label>
                        <select class="w-full mt-3 border border-gray-300 p-3 rounded-lg text-gray-700 focus:ring-2 focus:ring-blue-500 w-1/4">
                            <option disabled selected>-- Silahkan Pilih Bulan --</option>
                            <option>Januari</option>
                            <option>Februari</option>
                        </select>
                    </div>
                    <div>
                        <label for="puskesmas">Tahun</label>
                        <select class="w-full mt-3 border border-gray-300 p-3 rounded-lg text-gray-700 focus:ring-2 focus:ring-blue-500 w-1/4">
                            <option disabled selected>-- Silahkan Pilih Tahun --</option>
                            <option>2024</option>
                            <option>2025</option>
                        </select>
                    </div>
                </div>
            </form>
            <div class="flex gap-3 justify-between mt-5">
                <div class="flex justify-start gap-2">
                    <button class="bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 transition duration-200 flex items-center cursor-pointer">
                        <img src="{{ asset('images/download.png') }}" alt="Export Icon" class="mr-2 w-5 h-5">
                        Export Rekap Data
                    </button>
                </div>
                <div class="flex justify-end gap-2">
                    <button class="bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 transition duration-200 flex items-center cursor-pointer">
                        <img src="{{ asset('images/search.png') }}" alt="Search Icon" class="mr-2 w-5 h-5">
                        Cari Data
                    </button>
                    <button class="bg-green-600 text-white p-3 rounded-lg hover:bg-green-700 transition duration-200 flex items-center cursor-pointer">
                        <img src="{{ asset('images/plus.png') }}" alt="Add Icon" class="mr-2 w-5 h-5">
                        Tambah Data
                    </button>
                </div>
            </div>
        </div>
        <div class="border border-gray-100"></div>
        <div class="flex ml-5 items-center gap-1">
            <img src="{{ asset('images/document.png') }}" alt="Search Icon" class="mr-2 w-7 h-7">
            <h4>Hasil pencarian data</h4>
        </div>
        <table class="table-auto w-full border-collapse">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2" rowspan="3">NO</th>
                    <th class="border px-4 py-2" rowspan="3">Tetanus Difentri</th>
                    <th class="border px-4 py-2" rowspan="3">Sasaran WUS Tidak Hamil</th>
                    <th class="border px-4 py-2" colspan="2">Bulan Januari</th>
                    <th class="border px-4 py-2" rowspan="3">Action</th>
                </tr>
                <tr>
                    <th class="border px-4 py-2">Jumlah</th>
                    <th class="border">Presentase</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border">
                    <td class="border px-4 py-2 text-center">1</td>
                    <td class="border px-4 py-2">TD1</td>
                    <td class="border px-4 py-2 text-center">42</td>
                    <td class="border px-4 py-2 text-center">2</td>
                    <td class="border px-4 py-2 text-center">2,5</td>
                    <td class="px-4 py-2 flex justify-center items-center space-x-4">
                        <img src="{{ asset('images/edit.png') }}" alt="Edit" class="w-6 h-6 cursor-pointer">
                        <img src="{{ asset('images/trash.png') }}" alt="Delete" class="w-6 h-6 cursor-pointer">
                    </td>
                 </tr>
                 <tr class="border">
                    <td class="border px-4 py-2 text-center">2</td>
                    <td class="border px-4 py-2">TD2</td>
                    <td class="border px-4 py-2 text-center">42</td>
                    <td class="border px-4 py-2 text-center">2</td>
                    <td class="border px-4 py-2 text-center">2,5</td>
                    <td class="px-4 py-2 flex justify-center items-center space-x-4">
                        <img src="{{ asset('images/edit.png') }}" alt="Edit" class="w-6 h-6 cursor-pointer">
                        <img src="{{ asset('images/trash.png') }}" alt="Delete" class="w-6 h-6 cursor-pointer">
                    </td>
                </tr>
                <tr class="border">
                    <td class="border px-4 py-2 text-center">3</td>
                    <td class="border px-4 py-2">TD3</td>
                    <td class="border px-4 py-2 text-center">42</td>
                    <td class="border px-4 py-2 text-center">2</td>
                    <td class="border px-4 py-2 text-center">2,5</td>
                    <td class="px-4 py-2 flex justify-center items-center space-x-4">
                        <img src="{{ asset('images/edit.png') }}" alt="Edit" class="w-6 h-6 cursor-pointer">
                        <img src="{{ asset('images/trash.png') }}" alt="Delete" class="w-6 h-6 cursor-pointer">
                    </td>
                </tr>
                <tr class="border">
                    <td class="border px-4 py-2 text-center">4</td>
                    <td class="border px-4 py-2">TD4</td>
                    <td class="border px-4 py-2 text-center">42</td>
                    <td class="border px-4 py-2 text-center">2</td>
                    <td class="border px-4 py-2 text-center">2,5</td>
                    <td class="px-4 py-2 flex justify-center items-center space-x-4">
                        <img src="{{ asset('images/edit.png') }}" alt="Edit" class="w-6 h-6 cursor-pointer">
                        <img src="{{ asset('images/trash.png') }}" alt="Delete" class="w-6 h-6 cursor-pointer">
                    </td>
                </tr>
                <tr class="border">
                    <td class="border px-4 py-2 text-center">5</td>
                    <td class="border px-4 py-2">TD5</td>
                    <td class="border px-4 py-2 text-center">42</td>
                    <td class="border px-4 py-2 text-center">2</td>
                    <td class="border px-4 py-2 text-center">2,5</td>
                    <td class="px-4 py-2 flex justify-center items-center space-x-4">
                        <img src="{{ asset('images/edit.png') }}" alt="Edit" class="w-6 h-6 cursor-pointer">
                        <img src="{{ asset('images/trash.png') }}" alt="Delete" class="w-6 h-6 cursor-pointer">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="flex gap-3 justify-between mt-5">
            <div class="flex justify-start gap-2">
                <button class="bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 transition duration-200 flex items-center cursor-pointer">
                    <img src="{{ asset('images/download.png') }}" alt="Export Icon" class="mr-2 w-5 h-5">
                    Export Rekap Data
                </button>
            </div>
        </div>
        <div class="border border-gray-100"></div>
        <div class="flex ml-5 items-center gap-1">
            <img src="{{ asset('images/document.png') }}" alt="Search Icon" class="mr-2 w-7 h-7">
            <h4>Hasil Pencarian Data Tahunan</h4>
        </div>
        <table class="table-auto w-full border-collapse">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2">NO</th>
                    <th class="border px-4 py-2">Bulan</th>
                    <th class="border px-4 py-2">Sasaran Tidak Hamil</th>
                    <th class="border px-4 py-2">TD1</th>
                    <th class="border px-4 py-2">TD2</th>
                    <th class="border px-4 py-2">TD3</th>
                    <th class="border px-4 py-2">TD4</th>
                    <th class="border px-4 py-2">TD5</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border">
                    <td class="border px-4 py-2 text-center">1</td>
                    <td class="border px-4 py-2">Januari</td>
                    <td class="border px-4 py-2 text-center">4</td>
                    <td class="border px-4 py-2 text-center">5</td>
                    <td class="border px-4 py-2 text-center">5</td>
                    <td class="border px-4 py-2 text-center">5</td>
                    <td class="border px-4 py-2 text-center">5</td>
                    <td class="border px-4 py-2 text-center">5</td>
                 </tr>
                 <tr class="border">
                    <td class="border px-4 py-2 text-center">2</td>
                    <td class="border px-4 py-2">Februari</td>
                    <td class="border px-4 py-2 text-center">4</td>
                    <td class="border px-4 py-2 text-center">5</td>
                    <td class="border px-4 py-2 text-center">5</td>
                    <td class="border px-4 py-2 text-center">5</td>
                    <td class="border px-4 py-2 text-center">5</td>
                    <td class="border px-4 py-2 text-center">5</td>
                </tr>
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border px-4 py-2" colspan="2">Jumlah</th>
                        <th class="border px-4 py-2">8</th>
                        <th class="border px-4 py-2">10</th>
                        <th class="border px-4 py-2">10</th>
                        <th class="border px-4 py-2">10</th>
                        <th class="border px-4 py-2">10</th>
                        <th class="border px-4 py-2">10</th>
                    </tr>
                </thead>
            </tbody>
        </table>
    </div>
</x-layout>

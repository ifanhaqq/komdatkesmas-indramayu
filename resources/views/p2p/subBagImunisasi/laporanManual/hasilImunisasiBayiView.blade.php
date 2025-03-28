<x-layout>
    <div class="px-6 py-6 h-full flex flex-col gap-5 overflow-y-scroll">
        <h1 class="url-route ">Program Pencegahan dan Pengendalian Penyakit / Sub. Bagian Imunisasi / Laporan Manual / Hasil Imunisasi Bayi</h1>
        <div class="border border-gray-100"></div>
        <h1 class="text-2xl font-bold text-center mb-5 mt-5 text-gray-700">Hasil Imunisasi Bayi</h1>
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
                    <button onclick="openForm()" class="bg-green-600 text-white p-3 rounded-lg hover:bg-green-700 transition duration-200 flex items-center cursor-pointer">
                        <img src="{{ asset('images/plus.png') }}" alt="Add Icon" class="mr-2 w-5 h-5">
                        Tambah Data
                    </button>
                </div>
            </div>
            <div id="popupForm" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
                <div class="bg-white p-6 rounded-lg w-1/2 shadow-lg">
                    <h2 class="text-2xl font-bold mb-4 text-center">Hasil Imunisasi Bayi</h2>
                    <form action="#" method="POST">
                        <div class="mb-4">
                            <label for="kecamatan" class="block text-gray-700">Kecamatan</label>
                            <select id="kecamatan" name="kecamatan" class="w-full border p-3 rounded-lg">
                                <option disabled selected>-- Silahkan Pilih Kecamatan --</option>
                                <option>Karangampel</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="puskesmas" class="block text-gray-700">Puskesmas</label>
                            <select id="puskesmas" name="puskesmas" class="w-full border p-3 rounded-lg">
                                <option disabled selected>-- Silahkan Pilih Puskesmas --</option>
                                <option>Karangampel</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="desa" class="block text-gray-700">Desa</label>
                            <select id="desa" name="desa" class="w-full border p-3 rounded-lg">
                                <option disabled selected>-- Silahkan Pilih Desa --</option>
                                <option>Karangampel</option>
                            </select>
                        </div>

                        <div class="mb-4 flex space-x-4">
                            <div class="w-1/2">
                                <label for="bulan" class="block text-gray-700">Bulan</label>
                                <select id="bulan" name="bulan" class="w-full border p-3 rounded-lg">
                                    <option disabled selected>-- Silahkan Pilih Bulan --</option>
                                    <option>Januari</option>
                                    <option>Februari</option>
                                </select>
                            </div>
                            <div class="w-1/2">
                                <label for="tahun" class="block text-gray-700">Tahun</label>
                                <select id="tahun" name="tahun" class="w-full border p-3 rounded-lg">
                                    <option disabled selected>-- Silahkan Pilih Tahun --</option>
                                    <option>2025</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="vaksin" class="block text-gray-700">Vaksin</label>
                            <select id="vaksin" name="vaksin" class="w-full border p-3 rounded-lg">
                                <option disabled selected>-- Silahkan Pilih Vaksin --</option>
                                <option>BCG</option>
                            </select>
                        </div>

                        <div class="mb-4 flex space-x-4">
                            <div class="w-1/2">
                                <div class="mb-4">
                                    <label for="lakiLaki" class="block text-gray-700">Bayi Baru Lahir Laki-Laki</label>
                                    <input type="number" id="lakiLaki" name="lakiLaki" class="w-full border p-3 rounded-lg" value="5" required>
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div class="mb-4">
                                    <label for="perempuan" class="block text-gray-700">Bayi Baru Lahir Perempuan</label>
                                    <input type="number" id="perempuan" name="perempuan" class="w-full border p-3 rounded-lg" value="5" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 flex space-x-4">
                            <div class="w-1/2">
                                <div class="mb-4">
                                    <label for="lakiLaki" class="block text-gray-700">Surviving Infant Laki-Laki</label>
                                    <input type="number" id="lakiLaki" name="lakiLaki" class="w-full border p-3 rounded-lg" value="5" required>
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div class="mb-4">
                                    <label for="perempuan" class="block text-gray-700">Surviving Infant Perempuan</label>
                                    <input type="number" id="perempuan" name="perempuan" class="w-full border p-3 rounded-lg" value="5" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 flex space-x-4">
                            <div class="w-1/2">
                                <div class="mb-4">
                                    <label for="jumlahLakiLaki" class="block text-gray-700">Jumlah Imunisasi Bayi Laki-Laki</label>
                                    <input type="number" id="jumlahLakiLaki" name="jumlahLakiLaki" class="w-full border p-3 rounded-lg" value="1" required>
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div class="mb-4">
                                    <label for="jumlahPerempuan" class="block text-gray-700">Jumlah Imunisasi Bayi Perempuan</label>
                                    <input type="number" id="jumlahPerempuan" name="jumlahPerempuan" class="w-full border p-3 rounded-lg" value="2" required>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end space-x-4">
                            <button type="button" onclick="closeForm()" class="bg-gray-400 text-white p-3 rounded-lg hover:bg-gray-500">Cancel</button>
                            <button type="submit" class="bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700">Save</button>
                        </div>
                    </form>
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
                    <th class="border px-4 py-2" rowspan="3">Vaksin</th>
                    <th class="border px-4 py-2" colspan="3">Bayi Baru Lahir</th>
                    <th class="border px-4 py-2" colspan="3">Surviving Infant</th>
                    <th class="border px-4 py-2" colspan="6">Bulan Januari</th>
                    <th class="border px-4 py-2" rowspan="3">Action</th>
                </tr>
                <tr>
                    <th class="border px-4 py-2">L</th>
                    <th class="border px-4 py-2">P</th>
                    <th class="border px-4 py-2">Jumlah</th>
                    <th class="border px-4 py-2">L</th>
                    <th class="border px-4 py-2">P</th>
                    <th class="border px-4 py-2">Jumlah</th>
                    <th class="border px-4 py-2">L</th>
                    <th class="border px-4 py-2">%</th>
                    <th class="border px-4 py-2">P</th>
                    <th class="border px-4 py-2">%</th>
                    <th class="border px-4 py-2">Jumlah</th>
                    <th class="border px-4 py-2">%</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border">
                    <td class="border px-4 py-2 text-center">1</td>
                    <td class="border px-4 py-2">IMUNISASI DASAR LENGKAP</td>
                    <td class="border px-4 py-2 text-center">2</td>
                    <td class="border px-4 py-2 text-center">2</td>
                    <td class="border px-4 py-2 text-center">2,5</td>
                    <td class="border px-4 py-2 text-center">2</td>
                    <td class="border px-4 py-2 text-center">2</td>
                    <td class="border px-4 py-2 text-center">2,5</td>
                    <td class="border px-4 py-2 text-center">1</td>
                    <td class="border px-4 py-2 text-center">2,5</td>
                    <td class="border px-4 py-2 text-center">1</td>
                    <td class="border px-4 py-2 text-center">2.5</td>
                    <td class="border px-4 py-2 text-center">4</td>
                    <td class="border px-4 py-2 text-center">5.5</td>
                    <td class="px-4 py-2 flex justify-center items-center space-x-4">
                        <div class="flex flex-wrap justify-center items-center">
                            <img src="{{ asset('images/edit.png') }}" alt="Edit" class="w-6 h-6 cursor-pointer">
                            <img src="{{ asset('images/trash.png') }}" alt="Delete" class="w-6 h-6 cursor-pointer">
                        </div>
                    </td>
                 </tr>
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
                    <th class="border px-4 py-2">Bayi Baru Lahir</th>
                    <th class="border px-4 py-2">Surviving Infant</th>
                    <th class="border px-4 py-2">Imunisasi Bayi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border">
                    <td class="border px-4 py-2 text-center">1</td>
                    <td class="border px-4 py-2">Januari</td>
                    <td class="border px-4 py-2 text-center">4</td>
                    <td class="border px-4 py-2 text-center">5</td>
                    <td class="border px-4 py-2 text-center">5</td>
                 </tr>
                 <tr class="border">
                    <td class="border px-4 py-2 text-center">2</td>
                    <td class="border px-4 py-2">Februari</td>
                    <td class="border px-4 py-2 text-center">4</td>
                    <td class="border px-4 py-2 text-center">5</td>
                    <td class="border px-4 py-2 text-center">5</td>
                </tr>
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border px-4 py-2" colspan="2">Jumlah</th>
                        <th class="border px-4 py-2">8</th>
                        <th class="border px-4 py-2">10</th>
                        <th class="border px-4 py-2">10</th>
                    </tr>
                </thead>
            </tbody>
        </table>
    </div>
    <script>
        function openForm() {
            document.getElementById('popupForm').classList.remove('hidden');
        }

        function closeForm() {
            document.getElementById('popupForm').classList.add('hidden');
        }
    </script>
</x-layout>

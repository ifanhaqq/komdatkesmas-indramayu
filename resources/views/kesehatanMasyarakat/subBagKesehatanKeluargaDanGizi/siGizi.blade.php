<x-layout>
    <div class="border px-6 py-6 h-full flex flex-col gap-5 overflow-y-scroll">
        <h1 class="url-route border">/ test / Kesehatan-Masyarakat  / sub-bagian-kesehatan-keluarga-dan-gizi / si-gizi</h1>
        <h1 class="border text-2xl">Nama Fitur</h1>
        <div class="border">
            <form action="" class="w-full grid grid-cols-2 gap-3">
                <div class="border col-start-1 col-end-3">
                    <label for="provinsi" clas>Provinsi</label>
                    <select name="provinsi" id="provinsi" class="w-full border focus:outline-0 p-2">
                        <option value="Jawa Barat" selected>JAWA BARAT</option>
                    </select>
                </div>
                <div class="border">
                    <label for="kabupaten-kota">Kabupaten/Kota</label>
                    <select name="kabupaten-kota" id="kabupaten-kota" class="w-full border focus:outline-0 p-2">
                        <option value="Indramayu" selected>KOTA INDRAMAYU</option>
                    </select>
                </div>
                <div class="border">
                    <label for="kecamatan">Kecamatan</label>
                    <select name="kecamatan" id="kecamatan" class="w-full border focus:outline-0 p-2">
                        <option value="Indramayu" selected>KEC. INDRAMAYU</option>
                    </select>
                </div>
                <div class="border col-start-1 col-end-3">
                    <label for="desa">Desa</label>
                    <select name="desa" id="desa" class="w-full border focus:outline-0 p-2">
                        <option disabled selected>-- Silahkan Pilih Desa --</option>
                    </select>
                </div>
                <div class="border col-start-1 col-end-3">
                    <label for="puskesmas">Puskesmas</label>
                    <select name="puskesmas" id="puskesmas" class="w-full border focus:outline-0 p-2">
                        <option disabled selected>-- Silahkan Pilih Puskesmas --</option>
                    </select>
                </div>
                <div class="col-start-1 col-end-3 grid grid-cols-2 gap-3">
                    <div class="border">
                        <label for="puskesmas">Bulan</label>
                        <select name="puskesmas" id="puskesmas" class="w-full border focus:outline-0 p-2">
                            <option disabled selected>-- Silahkan Pilih Bulan --</option>
                        </select>
                    </div>
                    <div class="border">
                        <label for="puskesmas">Tahun</label>
                        <select name="puskesmas" id="puskesmas" class="w-full border focus:outline-0 p-2">
                            <option disabled selected>-- Silahkan Pilih Tahun --</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="border col-start-1 col-end-3 py-3 mt-3">Cari</button>
            </form>
        </div>
        <div class="border flex items-center gap-3">
            <img class="w-9" src="{{ asset('icons/SearchResult.svg') }}" alt="Search Result Icon">
            <h3 class="border">Hasil pencarian data</h3>
        </div>
        {{-- Export Box --}}
        <div class="border flex gap-3 justify-end">
            <div class="border flex gap-2 p-3">
                <img class="w-6 border" src="{{ asset('icons/ImportIcon.svg') }}" alt="Import Icon">
                <p class="border">Ekspor Rekap Sasaran</p>
            </div>
            <div class="border flex gap-2 p-3">
                <img class="w-6 border" src="{{ asset('icons/ImportIcon.svg') }}" alt="Import Icon">
                <p class="border">Export SPM</p>
            </div>
        </div>
        <table class="table-auto w-full border-collapse">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2" rowspan="2">No</th>
                    <th class="border px-4 py-2" rowspan="2">Posyandu</th>
                    <th class="border px-4 py-2" colspan="3">Balita</th>
                </tr>
                <tr>
                    <th class="border px-4 py-2">Laki - Laki</th>
                    <th class="border px-4 py-2">Perempuan</th>
                    <th class="border px-4 py-2">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-4 py-2 text-center">1</td>
                    <td class="border px-4 py-2">Kenanga 1</td>
                    <td class="border px-4 py-2 text-center">5</td>
                    <td class="border px-4 py-2 text-center">5</td>
                    <td class="border px-4 py-2 text-center">10</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2 text-center">2</td>
                    <td class="border px-4 py-2">Kenanga 2</td>
                    <td class="border px-4 py-2 text-center">5</td>
                    <td class="border px-4 py-2 text-center">5</td>
                    <td class="border px-4 py-2 text-center">10</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2 text-center">3</td>
                    <td class="border px-4 py-2">Kenanga 3</td>
                    <td class="border px-4 py-2 text-center">5</td>
                    <td class="border px-4 py-2 text-center">5</td>
                    <td class="border px-4 py-2 text-center">10</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2 text-center">4</td>
                    <td class="border px-4 py-2">Melati</td>
                    <td class="border px-4 py-2 text-center">5</td>
                    <td class="border px-4 py-2 text-center">5</td>
                    <td class="border px-4 py-2 text-center">10</td>
                </tr>
                <tr class="bg-gray-200 font-bold">
                    <td class="border px-4 py-2 text-center" colspan="2">Jumlah</td>
                    <td class="border px-4 py-2 text-center">20</td>
                    <td class="border px-4 py-2 text-center">20</td>
                    <td class="border px-4 py-2 text-center">40</td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layout>

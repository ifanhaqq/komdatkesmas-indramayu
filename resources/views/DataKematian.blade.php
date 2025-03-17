<x-layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            @if (session('success'))
                <div id="alert-3"
                    class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium">
                        {{ session('success') }}
                    </div>
                    <button type="button" id="close-button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-3" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            @endif

            <form action="" method="POST" class="max-w-4xl mx-auto">
                @csrf
                <div class="p-4">
                    <h2 class="text-lg font-semibold mb-2">Data Kematian</h2>
                    <div class="grid grid-cols-4 gap-4 items-center p-2">
                        <!-- Tahun -->
                        <label class="col-span-1 font-bold text-gray-700">Tahun</label>
                        <div class="col-span-2">
                            <input id="datepicker-year" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                                focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Pilih Tahun">
                        </div>
                
                        <div class="col-span-1"></div> <!-- Spacer -->
                
                        <!-- Bulan -->
                        <label class="col-span-1 font-bold text-gray-700">Bulan</label>
                        <div class="col-span-2">
                            <select class="border border-gray-300 p-2 rounded w-full focus:outline-none focus:ring focus:border-blue-300">
                                <option>Januari</option>
                                <option>Februari</option>
                                <option>Maret</option>
                                <option>April</option>
                                <option>Mei</option>
                                <option>Juni</option>
                                <option>Juli</option>
                                <option>Agustus</option>
                                <option>September</option>
                                <option>Oktober</option>
                                <option>November</option>
                                <option>Desember</option>
                            </select>
                        </div>
                    </div>
                </div>
                <h2 class="text-center text-lg text-red-500 font-bold mb-4">Diisi dengan Data Bulanan</h2>
                <hr>

                {{-- Tabel Penyebab Kematian Ibu --}}
                <table class="w-full border-collapse border border-gray-300 text-center mt-4">
                    <thead>
                        <tr class="bg-gray-200">
                            <th colspan="2" class="border border-gray-300 p-2">Nama</th>
                            <th class="border border-gray-300 p-2 w-60">Total</th>
                            <th class="border border-gray-300 p-2">Ket</th>
                        </tr>
                        <tr class="bg-gray-100">
                            <th colspan="2" class="border border-gray-300 p-2">Jumlah Kematian Ibu</th>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="total_kematian"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 font-bold text-center align-middle w-20 px-2 whitespace-nowrap rotate-[-180deg]"
                                style="writing-mode: vertical-rl;" rowspan="9">
                                Penyebab Kematian Ibu
                            </td>
                            <td class="border border-gray-300 p-2">Perdarahan</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="perdarahan"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Hipertensi</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="hipertensi"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Infeksi</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="infeksi"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Abortus</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="abortus"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Gangguan Darah</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="gangguan_darah"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Gangguan Metabolik</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="gangguan_metabolik"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Jantung</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="jantung"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">COVID 19</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="covid"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Lain-lain</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="lain"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <th colspan="2" class="border border-gray-300 p-2">Jumlah Lahir Mati</th>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="total_lahir_mati"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td colspan="5" class="border border-gray-300 p-2">Update per 27 March 2023 (Desember
                                2022)</td>
                        </tr>
                    </tbody>
                </table>

                {{-- Tabel kematian neonatal --}}
                <table class="w-full border-collapse border border-gray-300 text-center">
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 font-bold text-center align-middle w-20 px-2 whitespace-nowrap rotate-[-180deg]"
                                style="writing-mode: vertical-rl;" rowspan="9">
                                Kematian Neonatal
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2 w-48">0-6 Hari</td>
                            <td class="border border-gray-300 p-2 w-60">
                                <input type="number"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td colspan="5" class="border border-gray-300 p-2">Update per 27 March 2023 (Desember
                                2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2 w-48">7-28 Hari</td>
                            <td class="border border-gray-300 p-2 w-60">
                                <input type="number"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td colspan="5" class="border border-gray-300 p-2">Update per 27 March 2023 (Desember
                                2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2 w-48">0-28 Hari</td>
                            <td class="border border-gray-300 p-2 w-60">
                                <input type="number"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td colspan="5" class="border border-gray-300 p-2">Update per 27 March 2023 (Desember
                                2022)</td>
                        </tr>
                    </tbody>
                </table>

                {{-- Tabel pennyebab kematian neonatal --}}
                <table class="w-full table-fixed border-collapse border border-gray-300 text-center">
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 font-bold text-center align-middle w-20 px-2 whitespace-nowrap rotate-[-180deg]"
                                style="writing-mode: vertical-rl;" rowspan="9">
                                Penyebab Kematian Neonatal
                            </td>
                            <td class="border border-gray-300 p-2 w-48">BBLR</td>
                            <td class="border border-gray-300 p-2 w-60 text-center">
                                <div class="flex justify-center space-x-6">
                                    <div class="flex flex-col items-center">
                                        <span class="font-bold text-sm">0-6 hari</span>
                                        <input type="number" class="w-20 p-1 border border-gray-400 text-center"
                                            required>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <span class="font-bold text-sm">7-28 hari</span>
                                        <input type="number" class="w-20 p-1 border border-gray-400 text-center"
                                            required>
                                    </div>
                                </div>
                            </td>
                            <td colspan="5" class="border border-gray-300 p-2 w-">
                                Update per 27 March 2023 (Desember 2022)
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2 w-48">Asfiksia</td>
                            <td class="border border-gray-300 p-2 w-60 text-center">
                                <div class="flex justify-center space-x-6">
                                    <div class="flex flex-col items-center">
                                        <span class="font-bold text-sm">0-6 hari</span>
                                        <input type="number" class="w-20 p-1 border border-gray-400 text-center"
                                            required>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <span class="font-bold text-sm">7-28 hari</span>
                                        <input type="number" class="w-20 p-1 border border-gray-400 text-center"
                                            required>
                                    </div>
                                </div>
                            </td>
                            <td colspan="5" class="border border-gray-300 p-2 w-">
                                Update per 27 March 2023 (Desember 2022)
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2 w-48">Tetanus Neonatorum</td>
                            <td class="border border-gray-300 p-2 w-60 text-center">
                                <div class="flex justify-center space-x-6">
                                    <div class="flex flex-col items-center">
                                        <span class="font-bold text-sm">0-6 hari</span>
                                        <input type="number" class="w-20 p-1 border border-gray-400 text-center"
                                            required>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <span class="font-bold text-sm">7-28 hari</span>
                                        <input type="number" class="w-20 p-1 border border-gray-400 text-center"
                                            required>
                                    </div>
                                </div>
                            </td>
                            <td colspan="5" class="border border-gray-300 p-2 w-">
                                Update per 27 March 2023 (Desember 2022)
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2 w-48">Infeksi</td>
                            <td class="border border-gray-300 p-2 w-60 text-center">
                                <div class="flex justify-center space-x-6">
                                    <div class="flex flex-col items-center">
                                        <span class="font-bold text-sm">0-6 hari</span>
                                        <input type="number" class="w-20 p-1 border border-gray-400 text-center"
                                            required>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <span class="font-bold text-sm">7-28 hari</span>
                                        <input type="number" class="w-20 p-1 border border-gray-400 text-center"
                                            required>
                                    </div>
                                </div>
                            </td>
                            <td colspan="5" class="border border-gray-300 p-2 w-">
                                Update per 27 March 2023 (Desember 2022)
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2 w-48">Kelainan Kongenital</td>
                            <td class="border border-gray-300 p-2 w-60 text-center">
                                <div class="flex justify-center space-x-6">
                                    <div class="flex flex-col items-center">
                                        <span class="font-bold text-sm">0-6 hari</span>
                                        <input type="number" class="w-20 p-1 border border-gray-400 text-center"
                                            required>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <span class="font-bold text-sm">7-28 hari</span>
                                        <input type="number" class="w-20 p-1 border border-gray-400 text-center"
                                            required>
                                    </div>
                                </div>
                            </td>
                            <td colspan="5" class="border border-gray-300 p-2 w-">
                                Update per 27 March 2023 (Desember 2022)
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2 w-48">COVID-19</td>
                            <td class="border border-gray-300 p-2 w-60 text-center">
                                <div class="flex justify-center space-x-6">
                                    <div class="flex flex-col items-center">
                                        <span class="font-bold text-sm">0-6 hari</span>
                                        <input type="number" class="w-20 p-1 border border-gray-400 text-center"
                                            required>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <span class="font-bold text-sm">7-28 hari</span>
                                        <input type="number" class="w-20 p-1 border border-gray-400 text-center"
                                            required>
                                    </div>
                                </div>
                            </td>
                            <td colspan="5" class="border border-gray-300 p-2 w-">
                                Update per 27 March 2023 (Desember 2022)
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2 w-48">Lain2</td>
                            <td class="border border-gray-300 p-2 w-60 text-center">
                                <div class="flex justify-center space-x-6">
                                    <div class="flex flex-col items-center">
                                        <span class="font-bold text-sm">0-6 hari</span>
                                        <input type="number" class="w-20 p-1 border border-gray-400 text-center"
                                            required>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <span class="font-bold text-sm">7-28 hari</span>
                                        <input type="number" class="w-20 p-1 border border-gray-400 text-center"
                                            required>
                                    </div>
                                </div>
                            </td>
                            <td colspan="5" class="border border-gray-300 p-2 w-">
                                Update per 27 March 2023 (Desember 2022)
                            </td>
                        </tr>
                    </tbody>
                </table>

                {{--  tabel Penyebab Kematian Bayi PostNeonatal (29 Hari sd 11 Bulan) --}}
                <table class="w-full border-collapse border border-gray-300 text-center">
                    <thead>
                        <tr class="bg-gray-100">
                            <th colspan="2" class="border border-gray-300 text-center align-middle">
                                Jumlah Kematian Bayi<br>PostNeonatal

                            </th>
                            <th class="border border-gray-300 p-2 text-center align-middle w-43">
                                <input type="number" name="total_kematian"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </th>
                            <td colspan="5" class="border border-gray-300 p-2 text-center align-middle">
                                Update per 27 March 2023 (Desember 2022)
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 font-bold text-center align-middle w-20 px-2 whitespace-nowrap rotate-[-180deg]"
                                style="writing-mode: vertical-rl;" rowspan="12">
                                Penyebab Kematian Bayi PostNeonatal (29 Hari sd 11 Bulan)
                            </td>
                            <td class="border border-gray-300 p-2 w-48">Kondisi Perinatal</td>
                            <td class="border border-gray-300 p-2 w-60">
                                <input type="number" name="perinatal"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Pneumonia</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="pneumonia"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Diare</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="diare"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Kelainan Kongenital</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="kongenital"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Meningitis</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="meningitis"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Penyakkit Saraf</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="penyakit_saraf"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Demam Berdarah</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="demam_berdarah"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">PD3I</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="pd3i"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">PD3I</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="pd3i"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Tenggelam, Cedera, Kecelakaan</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="kck"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">COVID-19</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="covid"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Lain-lain</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="lain"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <th colspan="2" class="border border-gray-300 p-2">Jumlah Kematian Bayi (0 sd 11 Bulan)
                            </th>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="total_kematian_bayi"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td colspan="5" class="border border-gray-300 p-2">Update per 27 March 2023 (Desember
                                2022)</td>
                        </tr>
                    </tbody>
                </table>

                {{-- tabel Penyebab Kematian Anak Balita --}}
                <table class="w-full border-collapse border border-gray-300 text-center">
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 font-bold text-center align-middle w-20 px-2 whitespace-nowrap rotate-[-180deg]"
                                style="writing-mode: vertical-rl;" rowspan="13">
                                Penyebab Kematian Anak Balita
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2 w-48">Pneumonia</td>
                            <td class="border border-gray-300 p-2 w-60">
                                <input type="number" name="pneumonia"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Diare</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="diare"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Penyakit Saraf</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="penyakit_saraf"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Demam Berdarah</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="demam_berdarah"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Kel. Kongenital Jantung</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="kongenital_jantung"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Kecelakaan Lalu Lintas</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="lakalantas"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Kel. Kongenital Lainnya</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="kongenital_lain"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">PD3I</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="pd3i"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Tenggelam</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="tenggelam"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Infeksi Parasit</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="infeksi_parasit"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">COVID-19</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="covid"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Lain-lain</td>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="lain"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td class="border border-gray-300 p-2">Update per 27 March 2023 (Desember 2022)</td>
                        </tr>
                        <tr>
                            <th colspan="2" class="border border-gray-300 p-2">Jumlah Kematian Anak Balita 1 sd 4
                                Tahun</th>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="total_kematian_anak_balita"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td colspan="5" class="border border-gray-300 p-2">Update per 27 March 2023 (Desember
                                2022)</td>
                        </tr>
                        <tr>
                            <th colspan="2" class="border border-gray-300 p-2">Jumlah Kematian Balita 0 sd 4 Tahun
                            </th>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="total_kematian_balita"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td colspan="5" class="border border-gray-300 p-2">Update per 27 March 2023 (Desember
                                2022)</td>
                        </tr>
                        <tr>
                            <th colspan="2" class="border border-gray-300 p-2">Jumlah Pengkajian Kematian Maternal
                                dan Perinatal</th>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="total_kematian_maternal"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td colspan="5" class="border border-gray-300 p-2">Update per 27 March 2023 (Desember
                                2022)</td>
                        </tr>
                        <tr>
                            <th colspan="2" class="border border-gray-300 p-2">Jumlah Kasus Kematian Maternal yang
                                dilakukan Pengkajian</th>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="total_kematian_maternal_pengkajian"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td colspan="5" class="border border-gray-300 p-2">Update per 27 March 2023 (Desember
                                2022)</td>
                        </tr>
                        <tr>
                            <th colspan="2" class="border border-gray-300 p-2">Jumlah Kasus Kematian Maternal yang
                                dilakukan Pengkajian</th>
                            <td class="border border-gray-300 p-2">
                                <input type="number" name="total_kematian_maternal_pengkajian"
                                    class="w-full p-1 border border-gray-400 text-center" required>
                            </td>
                            <td colspan="5" class="border border-gray-300 p-2">Update per 27 March 2023 (Desember
                                2022)</td>
                        </tr>
                    </tbody>
                </table>

                <div class="flex justify-end">
                    <button type="submit"
                        class="mt-4 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 
                               font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center 
                               dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Save
                    </button>
                </div>                
            </form>
        </div>
    </div>
</x-layout>

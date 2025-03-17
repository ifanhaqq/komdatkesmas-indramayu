<x-layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            {{-- <div class="mt-14 mx-auto bg-white shadow-md rounded-lg p-6 border border-gray-100"> --}}
                <h2 class="text-xl font-semibold mb-4">Entry Data - Data Jamperal</h2>
                <div class="flex gap-5 items-center mb-5">
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

                <table class="w-full border-collapse border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border border-gray-300 px-4 py-2 text-left">Nama</th>
                            <th class="border border-gray-300 px-4 py-2 text-center">Total</th>
                            <th class="border border-gray-300 px-4 py-2 text-center">Ket</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">Jumlah Rumah Tunggu Kelahiran (RTK)</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <input type="number" class="w-full px-2 py-1 border rounded focus:outline-blue-500">
                            </td>
                            <td class="border border-gray-300 px-4 py-2 text-center">Unit</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">Pagu RK Tempat Tunggu Kelahiran (TTK)</td>
                            <td class="border border-gray-300 px-4 py-2 text-center flex items-center">
                                <span class="mr-2">Rp.</span>
                                <input type="text" class="w-full px-2 py-1 border rounded focus:outline-blue-500">
                            </td>
                            <td class="border border-gray-300 px-4 py-2 text-center">,-</td>
                        </tr>
                    </tbody>
                </table>

                <div class="mt-4 text-right">
                    <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">Save</button>
                </div>
            {{-- </div> --}}
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            flatpickr("#tanggalPicker", {
                enableTime: false,
                dateFormat: "d/m/Y",
                minDate: "01/01/2000",
                maxDate: new Date(),
                defaultDate: new Date(),
                static: true
            });
        });
    </script>
</x-layout>

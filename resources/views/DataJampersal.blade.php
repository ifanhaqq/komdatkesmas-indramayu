<x-layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            {{-- <div class="mt-14 mx-auto bg-white shadow-md rounded-lg p-6 border border-gray-100"> --}}
                <h2 class="text-xl font-semibold mb-4">Entry Data - Data Jamperal</h2>

                <div class="flex justify-between items-center mb-4">
                    <div class="grid grid-cols-1 gap-4 mb-4">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Tanggal</label>
                            <input type="text" id="tanggalPicker" class="w-full px-3 py-2 border border-gray-400 rounded-lg shadow-sm focus:ring focus:ring-blue-300">
                        </div>
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

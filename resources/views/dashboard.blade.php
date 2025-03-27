{{-- <x-layout>
   

<div class="p-4 sm:ml-64">
   <div class="p-4 gap-10 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
    <h1 class="text-2xl text-center p-4 font-bold">CONTOH CATEGORY</h1>
    <div class="flex justify-center gap-5">
        @forelse ($datas as $data )
        <div class="max-w-sm text-center p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-4xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $data->jumlah_persentase }}%</h5>
            </a>
            <p class="mb-3 font-normal text-sm text-gray-700 dark:text-gray-400">SARANA AIR MINUM YANG DIAWASI/ DIPERIKSA
                KUALITAS AIR MINUMNYA SESUAI STANDAR (AMAN)</p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
        @empty
            
        @endforelse
       
    </div>
    

   </div>
</div>

</x-layout> --}}

{{-- Rewrite --}}
<x-layout>
    <div class="px-6 py-6 h-full">
        <div class="border">this is a dashboard</div>
    </div>
</x-layout>
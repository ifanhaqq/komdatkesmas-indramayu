<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body class="font-jakarta">
    {{-- Set Grid untuk Responsive --}}
    <section class="grid grid-cols-[350px_1fr] grid-rows-[80px_1fr] h-screen">
        {{-- Header Slot --}}
        <x-header></x-header>
        {{-- Sidebar Slot --}}
        <x-sidebar></x-sidebar>

        {{-- Content Slot --}}
        <main class="overflow-hidden">
            {{ $slot }}
        </main>
    </section>

    {{-- Vite Build --}}
    @vite('node_modules/flowbite/dist/flowbite.min.js')
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</body>
</html>

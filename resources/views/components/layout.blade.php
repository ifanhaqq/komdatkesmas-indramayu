<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
<<<<<<< HEAD
    @vite(['resources/js/app.js'])
=======
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
>>>>>>> 4f0ca4d (Entry Data - Data Jampersal)
</head>

<body>
    <x-header></x-header>
    <x-sidebar></x-sidebar>

    <main>
        {{ $slot }}
    </main>
<<<<<<< HEAD
    
    @vite('node_modules/flowbite/dist/flowbite.min.js')
=======

    @vite(['resources/js/app.js'])
>>>>>>> 4f0ca4d (Entry Data - Data Jampersal)
</body>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</html>

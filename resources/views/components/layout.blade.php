<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
</head>

<body>
    <x-header></x-header>
    <x-sidebar></x-sidebar>
    
    <main>
        {{ $slot }}
    </main>
    
    @vite('node_modules/flowbite/dist/flowbite.min.js')
</body>
</html>
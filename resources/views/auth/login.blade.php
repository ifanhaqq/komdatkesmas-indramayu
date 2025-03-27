<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="font-jakarta">
  <div class="h-screen flex justify-center items-center">
    <form class="w-1/3 mx-auto flex flex-col gap-5">
      <h1 class="text-center text-4xl mb-7 font-bold">Selamat datang!</h1>
      <div class="flex flex-col gap-3">
        <div class="relative">
          <input id="email" type="email" class="py-3 px-3 w-full border rounded border-slate-400 focus:outline-green-700 hover:outline-green-700 peer hover:invalid:outline-red-500 focus:invalid:outline-red-500 invalid:border-red-500" placeholder="Email address">
          <label for="email" class="mb-2 text-sm text-gray-900 absolute -top-3 left-5 px-2 bg-white font-semibold peer-invalid:text-red-500 peer-focus:text-green-700 peer-focus:peer-invalid:text-red-500">Email</label>
        </div>
      </div>
      <div class="flex flex-col gap-3">
        <div class="relative">
          <input id="password" type="password" class="py-3 px-3 w-full border rounded border-slate-400 focus:outline-green-700 hover:outline-green-700 peer" placeholder="Password">
          <label for="password" class="mb-2 text-sm text-gray-900 absolute -top-3 left-5 px-2 bg-white font-semibold peer-focus:text-green-700">Password</label>
        </div>
      </div>
      <button id="button-login" type="submit" class="w-full py-4 rounded mt-2 cursor-pointer bg-green-700 text-white">Continue</button>
      <p class="text-center">Belum punya akun? <a href="/register" class="text-green-700 font-semibold">Daftar disini</a></p>
    </form>
  </div>
  {{-- Script Sementara --}}
  <script>
    const getButton = document.getElementById("button-login");
    getButton.addEventListener("click", (e) => {
      e.preventDefault();
      window.location.href = "/dashboard";
    })
  </script>
</body>
</html>
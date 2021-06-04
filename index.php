<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/tailwind.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<div class="min-h-screen bg-purple-100 text-black-900 antialiased px-4 py-6 flex flex-col justify-center sm:py-10">
  <div class="relative py-3 sm:max-w-xl mx-auto text-center">
    <span class="text-2xl font-light">Entrada</span>
    <div class="relative mt-4 bg-white shadow-md sm:rounded-lg text-left">
      <div class="h-2 bg-indigo-400 rounded-t-md"></div>
      <div class="py-6 px-8">
        <label class="block font-semibold">Usuario<label>
        <input type="text" placeholder="Usuario" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md">
        <label class="block mt-3 font-semibold">Contraseña<label>
        <input type="password" placeholder="Contraseña" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md">
        <div class="flex justify-between items-baseline">
          <button class="mt-4 bg-indigo-500 text-white py-2 px-6 rounded-lg">Entrar</button>
          <a href="#" class="text-sm hover:underline py-2 px-6">¿Olvidaste la contraseña?</a>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
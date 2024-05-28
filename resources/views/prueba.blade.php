<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex flex-col bg-gray-100 min-h-screen">
  <header class="flex items-center justify-between p-4 bg-gray-300">
    <div class="text-xl font-bold text-gray-800">SV-IA-HEALTH</div>
    <div class="text-gray-800">USER PROFILE</div>
  </header>
  <main class="flex-grow p-4">
    <div class="flex flex-col md:flex-row md:justify-between mb-4 border-b border-gray-400 pb-4">
      <div class="w-full md:w-1/3">
        <div class="mb-2 text-gray-800">IDENTIFICATION</div>
        <input class="w-full p-2 border border-gray-400 rounded" type="text" value="123456789">
      </div>
      <div class="w-full md:w-1/3">
        <div class="mb-2 text-gray-800">NAME</div>
        <input class="w-full p-2 border border-gray-400 rounded" type="text" value="John Doe">
      </div>
      <div class="w-full md:w-1/3">
        <div class="mb-2 text-gray-800">AGE</div>
        <input class="w-full p-2 border border-gray-400 rounded" type="text" value="30">
      </div>
    </div>
    <div class="flex flex-col md:flex-row md:justify-between mb-4 border-b border-gray-400 pb-4">
      <div class="w-full md:w-1/3">
        <div class="mb-2 text-gray-800">Ver sus recetas</div>
        <button class="w-full p-2 bg-blue-500 text-white rounded">Ver</button>
      </div>
      <div class="w-full md:w-1/3">
        <div class="mb-2 text-gray-800">Ir y crear una nueva receta</div>
        <button class="w-full p-2 bg-blue-500 text-white rounded">+</button>
      </div>
    </div>
  </main>
  <footer class="p-4 bg-gray-300">
    <div class="text-center text-gray-800">Copyright © 2024 SV-IA-HEALTH</div>
  </footer>
</div>

</body>


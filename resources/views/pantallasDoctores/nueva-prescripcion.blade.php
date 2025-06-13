<x-layout title="Nueva prescripción">
    <x-barra />
    <div class="grid grid-cols-2 bg-white rounded-lg shadow-xl w-5/6 mx-auto mt-10 border-2 border-scriptmorado">
        <div class="my-auto px-6 py-6">
            <h1 class="text-center h-6">Paciente: Ángel Gustavo Salazar Mendoza</h1>
        </div>
        <div class="my-auto px-6 py-6 ">
            <h1 class="text-center">Fecha de nacimiento: 14/07/2007</h1>
        </div>
        <hr class="bg-[#B394BD] h-1 rounded-full  mx-auto my-5 w-3/6 mb-4 mt-4 col-span-2">

        <h1 class="font-bold overflow-hidden col-span-2 text-center mb-4">Diagnóstico: <br>
            <textarea name="diagnostico" cols="90" rows="2" class="border-2 border-scriptmorado rounded-xl px-2 py-2"></textarea>
        </h1>

        <h1 class="font-bold overflow-hidden text-center mb-4">Medicación: <br>
            <textarea name="diagnostico" cols="40" rows="2" class="border-2 border-scriptmorado rounded-xl px-2 py-2"></textarea>
        </h1>

        <h1 class="font-bold overflow-hidden text-center mb-4">Dosis: <br>
            <textarea name="diagnostico" cols="40" rows="2" class="border-2 border-scriptmorado rounded-xl px-2 py-2"></textarea>
        </h1>

        <h1 class="font-bold overflow-hidden col-span-2 text-center mb-4">Anotaciones: <br>
            <textarea name="diagnostico" cols="90" rows="2" class="border-2 border-scriptmorado rounded-xl px-2 py-2"></textarea>
        </h1>
        </h1>
       <script>
    function mostrarFechaCorta() {
      const hoy = new Date();
      const dia = String(hoy.getDate()).padStart(2, '0');
      const mes = String(hoy.getMonth() + 1).padStart(2, '0');
      const año = String(hoy.getFullYear()).slice(-2);
      const fechaFormateada = `${dia}/${mes}/${año}`;
      document.getElementById("fecha").textContent = fechaFormateada;
    }

    window.onload = mostrarFechaCorta;
  </script>
</head>
<body>
  <h1 id="fecha" class="col-span-2 flex justify-center mb-6"></h1>
</body>
    </div>
    <div class="grid justify-center mt-10"><button class="border-2 border-scriptmorado rounded-xl bg-scriptmorado w-44 h-11 text-white">Guardar</button></div>
    <x-barrafinal />
</x-layout>

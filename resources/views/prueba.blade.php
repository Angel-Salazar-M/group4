<x-layout title="Prescriptions">
    <x-barra/>
    <div class="grid grid-cols-2">
        <input type="text" class="font-sans" name="Nombre Completo" placeholder="Nombre completo">  {{-- disabled --}}
        <input type="date" class="font-sans" name="Fecha de nacimiento" placeholder="Fecha de nacimiento"> {{-- disabled --}}
        <input type="text" class="font-sans" name="Genero" placeholder="Genero">
        <input type="text" class="font-sans" name="Estado civil" placeholder="Estado civil">
        <input type="text" class="font-sans" name="Dui" placeholder="Número de identificación"> {{-- disabled --}}
        <input type="number" class="font-sans" name="Número de teléfono" placeholder="Número de teléfono"> {{-- disabled --}}
        <input type="text" class="font-sans" name="Correo" placeholder="Correo electrónico"> {{-- disabled --}}
        {{-- faltan inputs como tipo de sangre etc etc pero no se si ya estan en la base de datos asi que solo hice los inputs que estaban en la pantalla de figma :p --}}
        {{-- ola miss --}}
    </div>
    <x-primary-button>Guardar</x-primary-button>
    </x-layout>

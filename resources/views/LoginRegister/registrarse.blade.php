<x-layout title="Home 1">
    <div class="w-screen h-screen grid grid-cols-2">
        <div class="w-full h-full grid content-center bg bg-[#72A9D7]">
            <h1 class="text-4xl text-white text-center font-sans font-semibold">¡Bienvenido!</h1>
            <p class="text-center mt-6 font-sans text-white mb-4">Si ya tienes una cuenta, <br>accede a ella aquí con tu
                información personal.
            </p>
            <a href="login" class="grid content-center border-2 font-serif border-white bg bg-[#72A9D7]  w-40 py-2 rounded-full mt-4 text-white hover:bg-[#5891bf] focus:border-gray-600 text-center">Iniciar sesión</a>
        </div>
        <div class="grid content-center justify-items-center">
            <h1 class="text-4xl text-black text-center font-sans mb-6 font-semibold">Registrate</h1>

            <form action="/register" method="POST">
                @csrf
                <x-input type="text" name="name" placeholder="Nombre completo"/> {{-- buscar forma de que salgan las dos palabras --}}
                <x-input type="integer" name="dui" placeholder="Dui"/>
                <x-input type="text" name="birthday" placeholder="Fecha de cumpleaños"/>
                <x-input type="text" name="email" placeholder="Correo electrónico"></x-input>
                <x-input type="text" name="Phone" placeholder="Número de teléfono" />
                <x-input type="password" name="password" placeholder="Contraseña"/>
                <x-primary-button>Registrarse</x-primary-button>
            </form>

        </div>
    </div>
</x-layout>

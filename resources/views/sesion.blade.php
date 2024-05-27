<x-layout title="Home 1">
    <div class="w-screen h-screen grid grid-cols-2">
        <div class="grid content-center justify-items-center">
            <h1 class="text-4xl text-black text-center font-serif mb-6">Iniciar sesión</h1>

            <form action="/login" method="POST">
                @csrf

                <x-input type="text" nombre="email" textoFondo="correo electrónico"></x-input>
                <x-input type="password" nombre="password" textoFondo="contraseña" />
                <a href="prueba" class="mt-4 font-serif hover:font-bold">¿Has olvidado tu contraseña?</a> {{-- convertir esto a un botón, pasar hover a focus --}}
                <x-primary-button texto="Iniciar sesión" />

            </form>

        </div>
        <div class="w-full h-full grid content-center bg bg-[#72A9D7]">
            <h1 class="text-4xl text-white text-center font-serif">¡ Bienvenido, usuario !</h1>
            <p class="text-center mt-6 font-serif text-white">Si todavía no has creado una cuenta con nosotros, <br>
                ingresa tu
                información aquí.</p>
            <x-primary-button texto="Registrarse" />
        </div>
    </div>
</x-layout>

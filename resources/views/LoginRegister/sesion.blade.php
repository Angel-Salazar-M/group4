<x-layout title="Home 1">
    <div class="w-screen h-screen grid grid-cols-2" >

        <div style="background-image: url({{asset('img/Img.png')}})" class="bg-cover">
        </div>

        <div class="grid content-center justify-items-center">
            <h1 class="text-4xl text-black text-center font-sans mb-6">Iniciar sesión</h1>

            <form action="/login" method="POST">
                @csrf

                <x-input type="text" name="email" placeholder="correo electrónico"></x-input>
                <x-input type="password" name="password" placeholder="contraseña" />
                <a href="prueba" class="mt-4 font-sans hover:font-semibold">¿Has olvidado tu contraseña?</a> {{-- convertir esto a un botón, pasar hover a focus --}}
                <x-primary-button> Iniciar sesión</x-primary-button>

            </form>

        </div>
    </div>
</x-layout>

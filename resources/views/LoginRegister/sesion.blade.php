<x-layout title="Login">
    <div class="w-screen h-screen grid grid-cols-2" >

        <div style="background-image: url({{asset('img/Img.png')}})" class="bg-cover">
        </div>

        <div class="grid content-center justify-items-center">
            <div class="bg-white w-96 rounded-lg shadow-xl grid justify-center h-96">

                <h1 class="text-4xl text-black text-center font-sans mt-4">Iniciar sesión</h1>

                <form action="/login" method="POST">
                    @csrf

                    <x-input type="text" name="email" placeholder="correo electrónico"></x-input>
                    <x-input type="password" name="password" placeholder="contraseña" />
                    <a href="/register" class="font-sans text-gray-600 hover:text-black">¿Aún no tienes una cuenta? Registrate</a>
                    <x-primary-button> Iniciar sesión</x-primary-button>

                </form>

            </div>
        </div>
    </div>
</x-layout>

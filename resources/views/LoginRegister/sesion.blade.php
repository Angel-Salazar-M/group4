<x-layout title="Login">
    <div class="grid grid-cols-2">
        <div class="bg-welcome1 bg-cover bg-center w-full h-full">
        </div>
       <div class="h-screen grid place-items-center bg-piel">
    <div class="grid place-items-center gap-4">
        <!-- Imagen centrada -->
        <img src="/img/logonuevosg.png" alt="Logo" class="w-36 h-auto">

        <!-- Formulario centrado -->
        <form action="/login" method="POST" class="grid place-items-center w-fit">
            <h1 class="text-3xl text-white font-bold mb-4">Log In</h1>
            @csrf
            <div class="grid place-items-center border-2 border-white p-4">
                <input type="text" name="email" placeholder=" Email" class="border-black bg-white rounded-md text-black mt-4 mb-4 font-sans px-3 py-2 w-60">
                    @if($errors->has('email'))
                        <span>{{ $errors->first('email') }}</span>
                    @endif

                <input type="password" name="password" placeholder=" Password" class="border-black bg-white rounded-md text-black mt-4 mb-4 font-sans px-3 py-2 w-60">
                    @if($errors->has('password'))
                        <span>{{ $errors->first('password') }}</span>
                    @endif


                <h1 class="text-white">Don't have an account?
                    <a href="/register" class="hover:text-blue-600">Sign up here</a>
                </h1>
                <div class="flex justify-center">
                    <button type="submit"
                        class="mt-2 border-2 bg-cafe w-40 py-1 rounded-full text-white text-lg focus:border-gray-600 hover:scale-110 transition">
                        Log In
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


    </div>
</x-layout>

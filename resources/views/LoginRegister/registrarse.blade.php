<x-layout title="Register">
    <div class="w-screen min-h-screen grid grid-cols-2 overflow-hidden bg-azulnegro-to-r from-cafe via-blue-100 to-celeste">
        
        {{-- Lado izquierdo: formulario con scroll si es necesario --}}
        <div class="overflow-y-auto flex items-center justify-center py-10">
            <div class="bg-white border border-gray-300 rounded-2xl shadow-xl w-96 px-6 py-8 space-y-5">
                <h1 class="text-3xl text-center font-bold text-gray-800">Regístrate</h1>

                <form action="/register" method="POST" class="space-y-4">
                    @csrf

                    {{-- Género --}}
                    <div>
                        <p class="font-semibold text-gray-700 mb-1">Selecciona tu género</p>
                        <div class="flex gap-4">
                            <label class="flex items-center gap-2 text-gray-600">
                                <input type="radio" name="gender" value="Hombre" checked class="accent-blue-600">
                                Hombre
                            </label>
                            <label class="flex items-center gap-2 text-gray-600">
                                <input type="radio" name="gender" value="Mujer" class="accent-pink-500">
                                Mujer
                            </label>
                        </div>
                    </div>

                    <x-input type="text" name="name" placeholder="Nombre completo" />
                    <x-input type="text" name="dui" placeholder="DUI" />
                    <x-input type="date" name="birthday" placeholder="Fecha de nacimiento" />
                    <x-input type="text" name="email" placeholder="Correo electrónico" />
                    <x-input type="number" name="phoneNumber" placeholder="Número de teléfono" />
                    <x-input type="password" name="password" placeholder="Contraseña" />

                    {{-- Tipo de cuenta --}}
                    <div x-data="{ userable: 'patient' }" class="space-y-2">
                        <p class="font-semibold text-gray-700">Tipo de cuenta</p>
                        <div class="flex gap-4">
                            <label class="flex items-center gap-2 text-gray-600">
                                <input type="radio" id="doctor" name="userable" value="dogtor" x-model="userable" class="accent-blue-600">
                                Doctor
                            </label>
                            <label class="flex items-center gap-2 text-gray-600">
                                <input type="radio" id="paciente" name="userable" value="patient" x-model="userable" class="accent-blue-600" checked>
                                Paciente
                            </label>
                        </div>

                        <template x-if="userable === 'dogtor'">
                            <div class="space-y-3 pt-2">
                                <x-input type="text" name="place_address" placeholder="Dirección de la clínica" />
                                <x-input type="text" name="medical_speciality" placeholder="Especialidad médica" />
                                <x-input type="text" name="medical_code" placeholder="Código médico" />
                            </div>
                        </template>

                        <template x-if="userable === 'patient'">
                            <div class="space-y-3 pt-2">
                                <x-input type="text" name="address" placeholder="Dirección" />
                                <p class="font-semibold text-gray-700">¿Deseas ser cuidador?</p>
                                <div class="flex gap-4">
                                    <label class="flex items-center gap-2 text-gray-600">
                                        <input type="radio" name="caretaker" value="True" class="accent-green-500">
                                        Sí
                                    </label>
                                    <label class="flex items-center gap-2 text-gray-600">
                                        <input type="radio" name="caretaker" value="False" checked class="accent-red-500">
                                        No
                                    </label>
                                </div>
                            </div>
                        </template>
                    </div>

                    <div class="text-center">
                        <a href="/login" class="text-sm text-gray-500 hover:text-blue-600 underline">
                            ¿Ya tienes una cuenta? Inicia sesión
                        </a>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-full shadow transition">
                            Registrarse
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Lado derecho: imagen --}}
        <div class="hidden md:flex items-center justify-center bg-cover bg-center"
            style="background-image: url('https://source.unsplash.com/800x1000/?healthcare,doctor');">
            <div class="bg-white bg-opacity-70 backdrop-blur-sm p-6 rounded-xl text-center max-w-sm shadow-lg">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">¡Bienvenido!</h2>
                <p class="text-gray-700">Regístrate como paciente o doctor para comenzar tu experiencia médica.</p>
            </div>
        </div>
    </div>
</x-layout>


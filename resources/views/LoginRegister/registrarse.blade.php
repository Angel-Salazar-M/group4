<x-layout title="Register">
    <div class="w-screen h-screen grid grid-cols-2 overflow-x-hidden bg-register">
{{$errors}}
        <div class="grid content-center justify-items-center">
            <div class="bg-white rounded-lg w-96 shadow-xl grid justify-center py-4 mt-4 mb-4">
                <h1 class="text-4xl text-black text-center font-sans mb-4 font-semibold">Registrate</h1>

                <form action="/register" method="POST">
                    @csrf
                    <p class="font-semibold mt-3">Selecciona tu genero</p>
                    <label for="">
                        <input type="radio" name="gender" value="Hombre" placeholder="Genero" checked>
                        Hombre
                    </label>
                    <label for="">
                        <input type="radio" name="gender" value="Mujer" placeholder="Genero">
                        Mujer
                    </label>
                    <x-input type="text" name="name" placeholder="Nombre completo" /> {{-- buscar forma de que salgan las dos palabras --}}
                    <x-input type="text" name="dui" placeholder="Dui" />
                    <x-input type="date" name="birthday" placeholder="Fecha de cumpleaños" />
                    <x-input type="text" name="email" placeholder="Correo electrónico"></x-input>
                    <x-input type="number" name="phoneNumber" placeholder="Número de teléfono" />
                    <x-input type="password" name="password" placeholder="Contraseña" />

                    <p class="font-semibold">Elige tu tipo de cuenta</p>

                    <div x-data="{ userable: '' }" class="mb-3">
                        <label>
                            <input type="radio" id="doctor" @change="console.log(userable)" name="userable"
                                value="dogtor" x-model="userable">
                            Doctor
                        </label>

                        <label>
                            <input type="radio" id="paciente" name="userable" value="patient" x-model="userable"
                                checked>
                            Paciente
                        </label>
                        <template x-if='userable === "dogtor"'>
                            <div>
                                <x-input type="text" name="place_address" placeholder="Dirección de la clínica" />
                                <x-input type="text" name="medical_speciality" placeholder="Especialidad médica" />
                                <x-input type="text" name="medical_code" placeholder="Código médico" />
                            </div>
                        </template>

                        <template x-if='userable === "patient"'>
                            <div>
                                <div>
                                </div>
                                {{-- <x-input type="text" name="age" placeholder="Edad" /> --}}
                                <x-input type="text" name="address" placeholder="Dirección" />

                                <p class="font-semibold">¿Deseas ser cuidador?</p>
                                <label for="">
                                    <input type="radio" name="caretaker" value="True">
                                    Si
                                </label>
                                <label for="">
                                    <input type="radio" name="caretaker" value="False" checked>
                                    No
                                </label>

                                {{-- <p class="font-semibold">Selecciona tu estado civil</p>

                                <select name="civil_status">
                                    <option value="Soltero/a">Soltero/a</option>
                                    <option value="Casado/a">Casado/a</option>
                                    <option value="Unión libre">Unión libre</option>
                                    <option value="Separado/a">Separado/a</option>
                                    <option value="Divorciado/a">Divorciado/a</option>
                                    <option value="Viudo/a">Viudo/a</option>
                                </select>

                                <p class="font-semibold mt-3">Selecciona tu tipo de sangre</p>

                                <select name="blood_type">
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div> --}}
                        </template>
                    </div>

                    <a href="/login" class="font-sans text-gray-600 hover:text-black">
                        ¿Ya tienes una cuenta? Inicia sesión
                    </a>

                    <div class="flex justify-center">
                        <button type="submit"
                            class=" border-2 font-sans border-white bg bg-[#B394BD] w-40 py-2 rounded-full mt-4 text-white hover:bg-[#5891bf] focus:border-gray-600">Registrarse</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="inset-0 flex items-center">
            <div class="h-screen w-full bg-cover bg-center bg-no-repeat"
                style="background-image: url('{{ asset('img/fondoregister.png') }}');">
            </div>
        </div>
    </div>
</x-layout>

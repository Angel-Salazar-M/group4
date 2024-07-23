<x-layout title="Home 1">
    <div class="w-screen h-screen grid grid-cols-2 overflow-x-hidden bg-register">
        <div class="w-full h-full flex-col ">
            <h1 class="text-4xl text-black text-center font-sans font-semibold">¡Bienvenido!</h1>
            <p class="text-center mt-6 font-sans text-black mb-4">Si ya tienes una cuenta, <br>accede a ella aquí con tu
                información personal.
            </p>
            <a href="login"
                class="flex items-center border-2 font-serif border-white bg bg-[#72A9D7] h-12 w-40 py-2 rounded-full mt-4 text-white hover:bg-[#5891bf] focus:border-gray-600 text-center">Iniciar
                sesión</a>
        </div>
        <div class="grid content-center justify-items-center">
            <h1 class="text-4xl text-black text-center font-sans mb-6 font-semibold">Registrate</h1>
            <form action="/register" method="POST">
                @csrf
                <x-input type="text" name="name" placeholder="Nombre completo" /> {{-- buscar forma de que salgan las dos palabras --}}
                <x-input type="text" name="dui" placeholder="Dui" />
                <x-input type="date" name="birthday" placeholder="Fecha de cumpleaños" />
                <x-input type="text" name="email" placeholder="Correo electrónico"></x-input>
                <x-input type="number" name="phoneNumber" placeholder="Número de teléfono" />
                <x-input type="password" name="password" placeholder="Contraseña" />

                <p class="font-semibold">Elige tu tipo de cuenta</p>
                <div x-data="{ userable: '' }">
                    <label>
                        <input type="radio" id="doctor" @change="console.log(userable)" name="userable"
                            value="dogtor" x-model="userable">
                        Doctor
                    </label>

                    <label>
                        <input type="radio" id="paciente" name="userable" value="patient" x-model="userable" checked>
                        Paciente
                    </label>

                    <template x-if='userable === "dogtor"'>
                        <div>
                            <x-input type="text" name="medical_speciality" placeholder="Especialidad médica" />
                            <x-input type="text" name="medical_code" placeholder="Código médico" />
                        </div>
                    </template>

                    <template x-if='userable === "patient"'>
                        <div>
                            <div>
                                <p class="font-semibold mt-3">Selecciona tu genero</p>
                                <label for="">
                                    <input type="radio" name="gender" value="Hombre" placeholder="Genero">
                                    Hombre
                                </label>
                                <label for="">
                                    <input type="radio" name="gender" value="Mujer" placeholder="Genero">
                                    Mujer
                                </label>
                            </div>
                            <x-input type="text" name="age" placeholder="Edad" />
                            <x-input type="text" name="address" placeholder="Dirección" />

                            <p class="font-semibold">Selecciona tu estado civil</p>

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
                        </div>
                    </template>
                </div>

                <x-primary-button>Registrarse</x-primary-button>
            </form>

        </div>
    </div>
</x-layout>

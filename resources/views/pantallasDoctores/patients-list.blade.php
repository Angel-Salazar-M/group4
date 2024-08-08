<x-layout title="Patients list">
    <x-barra />


    {{-- Mover el boton de añadir hasta el fondo y ver porque expira la pagina cuando se hace "post" --}}
    <div x-data="{ modal: false }" class="">
        <label>
        </label>
        <button class="border-2 bg-[#B394BD] rounded-full mt-6 mr-6 py-2 px-10 " @click="modal = !modal"
            :aria-expanded="modal ? 'true' : 'false'"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                <path
                    d="M720-400v-120H600v-80h120v-120h80v120h120v80H800v120h-80Zm-360-80q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm80-80h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0-80Zm0 400Z" />
            </svg>
        </button>
        <template x-if='modal === false'>
            <div class=" bg-white w-screen grid place-items-center h-full">

                <form action="/doctor/records" method="POST">
                    <x-input type="text" name="name" placeholder="Nombre completo" />
                    <x-input type="text" name="dui" placeholder="Dui" />
                    <x-input type="date" name="birthday" placeholder="Birthday" />
                    <x-input type="text" name="email" placeholder="Correo electrónico" />
                    <x-input type="number" name="phone_number" placeholder="Número telefónico" />
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

                    <button type="submit" class="border-2 bg-[#B394BD] rounded-full mt-6 mr-6 py-2 px-10">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 11.917 9.724 16.5 19 7.5" />
                        </svg>
                    </button>

                </form>
            </div>
        </template>

        <div class="flex justify-between">
            <input type="text" name="buscador" placeholder="Buscar..."
                class="ml-6 mt-6 border-2 border-[#B394BD]  px-2 py-1 w-96">
        </div>
        <div class="absolute grid col-2 w-full">
            <div class="mt-10 flex justify-center mx-5 static col-span-2">
                <table class="border-2 border-bg-[#5BBEA6] py-2 px-14">
                    <thead class="border-2 border-[#5BBEA6] py-2 px-14">
                        <th class="border-2 border-[#5BBEA6] py-2 px-14">NOMBRES</th>
                        <th class="border-2 border-[#5BBEA6] py-2 px-14">DUI</th>
                        <th class="border-2 border-[#5BBEA6] py-2 px-14">EDAD</th>
                        <th class="border-2 border-[#5BBEA6] py-2 px-14">ESTADO CIVIL</th>
                    </thead>
                    <tbody class="border-2 border-[#5BBEA6] py-2 px-14">
                        @foreach ($patients as $patient)
                            <tr>
                                <td class="border-2 border-[#5BBEA6] py-2 px-14 text-center">
                                    <a href="/doctor/record/{{ $patient->id }}">
                                        {{ $patient->user->name }}
                                    </a>
                                </td>
                                <td class="border-2 border-[#5BBEA6] py-2 px-14 text-center"> {{ $patient->user->dui }}
                                </td>
                                <td class="border-2 border-[#5BBEA6] py-2 px-14 text-center">
                                    {{ $patient->user->age() }}
                                </td>
                                <td class="border-2 border-[#5BBEA6] py-2 px-14 text-center">
                                    {{ $patient->civil_status }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</x-layout>

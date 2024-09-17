<x-layout title="Patients list">
    <x-barra />

    {{-- Mover el boton de añadir hasta el fondo y ver porque expira la pagina cuando se hace "post" --}}

    {{-- <div x-data="{ modal: false }" class="h-screen">

        <div class="w-full flex justify-end">
            <button class="border-2 bg-[#B394BD] rounded-full mt-20 mr-6 py-2 px-10 " @click="modal = !modal"
                :aria-expanded="modal ? 'true' : 'false'"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                    viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                    <path
                        d="M720-400v-120H600v-80h120v-120h80v120h120v80H800v120h-80Zm-360-80q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm80-80h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0-80Zm0 400Z" />
                </svg>
            </button>
        </div>

        <template x-if='modal === false'>
            <div class=" w-screen grid place-items-center h-full">

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

        <template x-if='!(modal === false)'>

            <div class="flex justify-center">
                <input type="text" name="buscador" placeholder="Buscar..."
                    class="ml-6 mt-6 border-2 border-[#B394BD]  px-2 py-1 w-96">
            </div>

            <h1>sdijfsdfkjn</h1>

            <div class="grid col-2 w-full">
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
                                    <td class="border-2 border-[#5BBEA6] py-2 px-14 text-center">
                                        {{ $patient->user->dui }}
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
        </template>
    </div>

    </div> --}}
    <div class="px-4 md:p-12">

        <div class="mx-auto max-w-3xl lg:text-center mt-8 mb-14">
            <p class="font-bold sm:text-5xl text-scriptverde">Historiales <span class=""> Médicos
                </span></p>
        </div>
        <div class="mx-auto">
            <div class="relative mx-auto">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400"><svg
                        xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#9ca3af">
                        <path
                            d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                    </svg></div><input
                    class="py-3 w-full md:w-[32rem] border-2 border-gray-300 rounded-3xl shadow-xl pl-10 focus:outline-none"
                    name="search" placeholder="Buscar" type="text">
            </div>
        </div>
    </div>
    <div class="mx-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
        <div
            class="card bg-white p-4 rounded-3xl shadow-md border-solid border-2 border-scriptmorado opacity-90 duration-300 hover:opacity-100">
            <div class="flex justify-center hover:scale-105 transition-all ease-in-out"><img
                    src="{{ asset('https://karlacsphotography.com/wp-content/uploads/2020/03/MG_3442_2.jpg') }}" class="size-40 rounded-full mb-4 object-cover shadow-xl">
            </div>
            <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                </svg>
                <p class="text-[16px] text-black">paciente:</p>
                <p class="text-gray-600 ms-7">Claudia Rodríguez</p>
            </div>
            <div class="flex mb-2 transition-all ease-in-out space-x-2"> <svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M160-80q-17 0-28.5-11.5T120-120v-200q0-33 23.5-56.5T200-400v-160q0-33 23.5-56.5T280-640h160v-58q-18-12-29-29t-11-41q0-15 6-29.5t18-26.5l56-56 56 56q12 12 18 26.5t6 29.5q0 24-11 41t-29 29v58h160q33 0 56.5 23.5T760-560v160q33 0 56.5 23.5T840-320v200q0 17-11.5 28.5T800-80H160Zm120-320h400v-160H280v160Zm-80 240h560v-160H200v160Zm80-240h400-400Zm-80 240h560-560Zm560-240H200h560Z" />
                </svg>
                <p class="text-[16px] text-black">Nacimiento: </p>
                <p class="text-gray-600">07/09/1990</p>
            </div>
            <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
                </svg>
                <p class="text-[16px] text-black">Teléfono:</p>
                <p class="text-[16px] ms-5 text-gray-600">1023-1984</p>
            </div>
            <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                </svg>
                <p class="text-[16px] text-black">Dirección:</p>
                <p class="text-gray-600 ms-1">12 av. Norte san Pedro Sula, San Sebastián</p>
            </div>
            <div class="flex items-center justify-center gap-x-4 mt-4"><a active="false" href="/doctor/record/1"><button
                        class="transition duration-150 ease-in-out border-2 border-scriptverde hover:-translate-y-0.5 hover:scale-110 hover:bg-scriptverde tracking-widest py-2 px-4 rounded-3xl text-xs uppercase">
                        Historial médico</button></a><a href="/doctor/prescription/new"><button type="button"
                        class="inline-flex items-center bg-white text-xs uppercase tracking-widest shadow-sm focus:outline-none font-comfortaa focus:ring-2 focus:ring-scriptazul focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 border-2 border-scriptazul hover:-translate-y-0.5 hover:scale-110 hover:bg-scriptazul py-2 px-4 rounded-3xl">
                        Nueva Prescripción </button></a></div>
        </div>
        <div
            class="card bg-white p-4 rounded-3xl shadow-md border-solid border-2 border-scriptmorado opacity-90 duration-300 hover:opacity-100">
            <div class="flex justify-center hover:scale-105 transition-all ease-in-out"><img
                    src="{{ asset('img/ejemplop1.jpg') }}" class="size-40 rounded-full mb-4 object-cover shadow-xl">
            </div>
            <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                </svg>
                <p class="text-[16px] text-black">paciente:</p>
                <p class="text-gray-600 ms-7">Javier Salmerón</p>
            </div>
            <div class="flex mb-2 transition-all ease-in-out space-x-2"> <svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M160-80q-17 0-28.5-11.5T120-120v-200q0-33 23.5-56.5T200-400v-160q0-33 23.5-56.5T280-640h160v-58q-18-12-29-29t-11-41q0-15 6-29.5t18-26.5l56-56 56 56q12 12 18 26.5t6 29.5q0 24-11 41t-29 29v58h160q33 0 56.5 23.5T760-560v160q33 0 56.5 23.5T840-320v200q0 17-11.5 28.5T800-80H160Zm120-320h400v-160H280v160Zm-80 240h560v-160H200v160Zm80-240h400-400Zm-80 240h560-560Zm560-240H200h560Z" />
                </svg>
                <p class="text-[16px] text-black">Nacimiento: </p>
                <p class="text-gray-600">01/05/1999</p>
            </div>
            <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
                </svg>
                <p class="text-[16px] text-black">Teléfono:</p>
                <p class="text-[16px] ms-5 text-gray-600">1234-5678</p>
            </div>
            <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                </svg>
                <p class="text-[16px] text-black">Dirección:</p>
                <p class="text-gray-600 ms-1">6 calle poniente, San antonio las palmeras, Santa Tecla</p>
            </div>
            <div class="flex gap-x-4 mt-4"><a active="false" href="/doctor/record/1"><button
                        class="transition duration-150 ease-in-out border-2 border-scriptverde hover:-translate-y-0.5 hover:scale-110 hover:bg-scriptverde tracking-widest py-2 px-4 rounded-3xl text-xs uppercase">
                        Historial médico</button></a><a href="/doctor/prescription/new"><button type="button"
                        class="inline-flex items-center bg-white text-xs uppercase tracking-widest shadow-sm focus:outline-none font-comfortaa focus:ring-2 focus:ring-scriptazul focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 border-2 border-scriptazul hover:-translate-y-0.5 hover:scale-110 hover:bg-scriptazul py-2 px-4 rounded-3xl">
                        Nueva Prescripción </button></a></div>
        </div>
        <div
            class="card bg-white p-4 rounded-3xl shadow-md border-solid border-2 border-scriptmorado opacity-90 duration-300 hover:opacity-100">
            <div class="flex justify-center hover:scale-105 transition-all ease-in-out"><img
                    src="{{ asset('https://karlacsphotography.com/wp-content/uploads/2020/03/MG_6970_2.jpg') }}" class="size-40 rounded-full mb-4 object-cover shadow-xl">
            </div>
            <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                </svg>
                <p class="text-[16px] text-black">paciente:</p>
                <p class="text-gray-600 ms-7">Angela Díaz</p>
            </div>
            <div class="flex mb-2 transition-all ease-in-out space-x-2"> <svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M160-80q-17 0-28.5-11.5T120-120v-200q0-33 23.5-56.5T200-400v-160q0-33 23.5-56.5T280-640h160v-58q-18-12-29-29t-11-41q0-15 6-29.5t18-26.5l56-56 56 56q12 12 18 26.5t6 29.5q0 24-11 41t-29 29v58h160q33 0 56.5 23.5T760-560v160q33 0 56.5 23.5T840-320v200q0 17-11.5 28.5T800-80H160Zm120-320h400v-160H280v160Zm-80 240h560v-160H200v160Zm80-240h400-400Zm-80 240h560-560Zm560-240H200h560Z" />
                </svg>
                <p class="text-[16px] text-black">Nacimiento: </p>
                <p class="text-gray-600">09/05/1980</p>
            </div>
            <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
                </svg>
                <p class="text-[16px] text-black">Teléfono:</p>
                <p class="text-[16px] ms-5 text-gray-600">8917-2346</p>
            </div>
            <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                </svg>
                <p class="text-[16px] text-black">Dirección:</p>
                <p class="text-gray-600 ms-1">20 ave. norte, Chichimilco, San Miguel</p>
            </div>
            <div class="flex items-center justify-center gap-x-4 mt-4"><a active="false"
                    href="/doctor/record/1"><button
                        class="transition duration-150 ease-in-out border-2 border-scriptverde hover:-translate-y-0.5 hover:scale-110 hover:bg-scriptverde tracking-widest py-2 px-4 rounded-3xl text-xs uppercase">
                        Historial médico</button></a><a href="/doctor/prescription/new"><button type="button"
                        class="inline-flex items-center bg-white text-xs uppercase tracking-widest shadow-sm focus:outline-none font-comfortaa focus:ring-2 focus:ring-scriptazul focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 border-2 border-scriptazul hover:-translate-y-0.5 hover:scale-110 hover:bg-scriptazul py-2 px-4 rounded-3xl">
                        Nueva Prescripción </button></a></div>
        </div>
        <div
            class="card bg-white p-4 rounded-3xl shadow-md border-solid border-2 border-scriptmorado opacity-90 duration-300 hover:opacity-100">
            <div class="flex justify-center hover:scale-105 transition-all ease-in-out"><img
                    src="{{ asset('https://karlacsphotography.com/wp-content/uploads/2020/03/MG_7051_3.jpg') }}" class="size-40 rounded-full mb-4 object-cover shadow-xl">
            </div>
            <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                </svg>
                <p class="text-[16px] text-black">paciente:</p>
                <p class="text-gray-600 ms-7">Miguel alejandro</p>
            </div>
            <div class="flex mb-2 transition-all ease-in-out space-x-2"> <svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M160-80q-17 0-28.5-11.5T120-120v-200q0-33 23.5-56.5T200-400v-160q0-33 23.5-56.5T280-640h160v-58q-18-12-29-29t-11-41q0-15 6-29.5t18-26.5l56-56 56 56q12 12 18 26.5t6 29.5q0 24-11 41t-29 29v58h160q33 0 56.5 23.5T760-560v160q33 0 56.5 23.5T840-320v200q0 17-11.5 28.5T800-80H160Zm120-320h400v-160H280v160Zm-80 240h560v-160H200v160Zm80-240h400-400Zm-80 240h560-560Zm560-240H200h560Z" />
                </svg>
                <p class="text-[16px] text-black">Nacimiento: </p>
                <p class="text-gray-600">19/02/1998</p>
            </div>
            <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
                </svg>
                <p class="text-[16px] text-black">Teléfono:</p>
                <p class="text-[16px] ms-5 text-gray-600">0192-8734</p>
            </div>
            <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                </svg>
                <p class="text-[16px] text-black">Dirección:</p>
                <p class="text-gray-600 ms-1">4 ave. sur, Nuevo Cuscatlán, La Libertad</p>
            </div>
            <div class="flex items-center justify-center gap-x-4 mt-4"><a active="false"
                    href="/doctor/record/1"><button
                        class="transition duration-150 ease-in-out border-2 border-scriptverde hover:-translate-y-0.5 hover:scale-110 hover:bg-scriptverde tracking-widest py-2 px-4 rounded-3xl text-xs uppercase">
                        Historial médico</button></a><a href="/doctor/prescription/new"><button type="button"
                        class="inline-flex items-center bg-white text-xs uppercase tracking-widest shadow-sm focus:outline-none font-comfortaa focus:ring-2 focus:ring-scriptazul focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 border-2 border-scriptazul hover:-translate-y-0.5 hover:scale-110 hover:bg-scriptazul py-2 px-4 rounded-3xl">
                        Nueva Prescripción </button></a></div>
        </div>
    </div>
    <x-barrafinal/>
</x-layout>

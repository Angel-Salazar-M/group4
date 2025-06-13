<x-layout title="Prescripciones">
    <x-barradoc />
    <div class="mx-auto max-w-3xl lg:text-center mt-20 mb-16">
        <p class="font-bold sm:text-5xl text-scriptverde">Prescripciones <span class=""> recientes
            </span></p>
    </div>
    {{-- <div class="mx-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-10">
        <div class="mx-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-10 ">
            <div class="card bg-white p-4 rounded-3xl border-solid border-2 border-scriptmorado opacity-90 duration-300 hover:opacity-100 shadow-xl">
            <div class="flex justify-center hover:scale-105 transition-all ease-in-out"></div>
            <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                    viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                </svg>
                <p class="text-[16px] text-black">Paciente:</p>
                <p class="text-gray-600 ms-7"> {{ $patient->name }} </p>
            </div>


            <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                viewBox="0 -960 960 960" width="24px" fill="#000000">
                <path
                    d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
            </svg>
            <p class="text-[16px] text-black">Enfermedad:</p>
            <p class="text-gray-600 ms-7"></p>
        </div>

            <div class="flex mb-2 transition-all ease-in-out space-x-2"> <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                    viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M540-80q-108 0-184-76t-76-184v-23q-86-14-143-80.5T80-600v-240h120v-40h80v160h-80v-40h-40v160q0 66 47 113t113 47q66 0 113-47t47-113v-160h-40v40h-80v-160h80v40h120v240q0 90-57 156.5T360-363v23q0 75 52.5 127.5T540-160q75 0 127.5-52.5T720-340v-67q-35-12-57.5-43T640-520q0-50 35-85t85-35q50 0 85 35t35 85q0 39-22.5 70T800-407v67q0 108-76 184T540-80Zm220-400q17 0 28.5-11.5T800-520q0-17-11.5-28.5T760-560q-17 0-28.5 11.5T720-520q0 17 11.5 28.5T760-480Zm0-40Z" />
                </svg>
                <p class="text-[16px] text-black">Doctor:</p>
                <p class="text-gray-600">Josué Morales</p>
            </div>
            <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                    viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z" />
                </svg>
                <p class="text-[16px] text-black">Fecha:</p>
                <p class="text-[16px] ms-5 text-gray-600">11/09/2001</p>
            </div>
            <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                    viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                </svg>
                <p class="text-[16px] text-black">Dirección:</p>
                <p class="text-gray-600 ms-1">12 av. Norte san Pedro Sula, San Sebastián</p>
            </div>
            <div class="flex items-center justify-center gap-x-4 mt-4"><a active="false" href="/doctor/record/1"><button
                        class="transition duration-150 ease-in-out border-2 border-scriptverde hover:-translate-y-0.5 hover:scale-110 hover:bg-scriptverde tracking-widest py-2 px-4 rounded-3xl text-xs uppercase">
                        Historial médico</button></a><a href="/patient/record"></a></div>
        </div>
        </div> --}}

    <div class="mx-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-10 mb-10">
        <div
            class="card bg-white p-4 rounded-3xl shadow-md border-solid border-2 border-scriptmorado opacity-90 duration-300 hover:opacity-100">
            <div class="flex justify-center hover:scale-105 transition-all ease-in-out"><img
                    src="{{ asset('https://simg.nicepng.com/png/small/933-9332131_profile-picture-default-png.png') }}"
                    class="size-40 rounded-full mb-4 object-cover shadow-xl"></div>
            <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                </svg>
                <p class="text-[16px] text-black">Paciente:</p>
                <p class="text-gray-600 ms-7"> {{ $patient->user->name }} </p>
            </div>
            <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M680-320q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T720-440q0-17-11.5-28.5T680-480q-17 0-28.5 11.5T640-440q0 17 11.5 28.5T680-400ZM440-40v-116q0-21 10-39.5t28-29.5q32-19 67.5-31.5T618-275l62 75 62-75q37 6 72 18.5t67 31.5q18 11 28.5 29.5T920-156v116H440Zm79-80h123l-54-66q-18 5-35 13t-34 17v36Zm199 0h122v-36q-16-10-33-17.5T772-186l-54 66Zm-76 0Zm76 0Zm-518 0q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v200q-16-20-35-38t-45-24v-138H200v560h166q-3 11-4.5 22t-1.5 22v36H200Zm80-480h280q26-20 57-30t63-10v-40H280v80Zm0 160h200q0-21 4.5-41t12.5-39H280v80Zm0 160h138q11-9 23.5-16t25.5-13v-51H280v80Zm-80 80v-560 137-17 440Zm480-240Z" />
                </svg>
                <p class="text-[16px] text-black">Diagnóstico: </p>
                <p class="text-gray-600"> Fiebre </p>
            </div>
            <div class="flex mb-2 transition-all ease-in-out space-x-2"> <svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M540-80q-108 0-184-76t-76-184v-23q-86-14-143-80.5T80-600v-240h120v-40h80v160h-80v-40h-40v160q0 66 47 113t113 47q66 0 113-47t47-113v-160h-40v40h-80v-160h80v40h120v240q0 90-57 156.5T360-363v23q0 75 52.5 127.5T540-160q75 0 127.5-52.5T720-340v-67q-35-12-57.5-43T640-520q0-50 35-85t85-35q50 0 85 35t35 85q0 39-22.5 70T800-407v67q0 108-76 184T540-80Zm220-400q17 0 28.5-11.5T800-520q0-17-11.5-28.5T760-560q-17 0-28.5 11.5T720-520q0 17 11.5 28.5T760-480Zm0-40Z" />
                </svg>
                <p class="text-[16px] text-black">Doctor:</p>
                <p class="text-[16px] ms-5 text-gray-600"> Josué Morales </p>
            </div>
            <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path
                        d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                </svg>
                <p class="text-[16px] text-black">Dirección:</p>
                <p class="text-gray-600 ms-1"> {{ $patient->address }} </p>
            </div>
            <div class="flex items-center justify-center gap-x-4 mt-4"><a active="false" href="/doctor/record/1"><button
                        class="transition duration-150 ease-in-out border-2 border-scriptverde hover:-translate-y-0.5 hover:scale-110 hover:bg-scriptverde tracking-widest py-2 px-4 rounded-3xl text-xs uppercase">
                        Historial médico</button></a><a href="/doctor/prescription/new"><button type="button"
                        class="inline-flex items-center bg-white text-xs uppercase tracking-widest shadow-sm focus:outline-none font-comfortaa focus:ring-2 focus:ring-scriptazul focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 border-2 border-scriptazul hover:-translate-y-0.5 hover:scale-110 hover:bg-scriptazul py-2 px-4 rounded-3xl">
                        Nueva Prescripción </button></a></div>
        </div>
</x-layout>

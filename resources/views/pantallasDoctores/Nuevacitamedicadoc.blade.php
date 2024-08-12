<x-layout title="Cita">
    <x-barra/>
    <div class="mt-10 grid grid-cols-2 grid-rows-2 border-4 border-[#B394BD] rounded-md w-5/6 mx-auto mb-5 ">
            <div>
            <div class="flex ml-5 mt-5">
                <img src=https://cdn-icons-png.flaticon.com/512/1144/1144760.png class="w-8 h-8 rounded-full object-cover mt-2 mr-8 ml-5 row-span-2 col-span-2">
                <div class="flex flex-col">
                    <h1 class="">Dr.Gustavo Salazar</h1>
                    <!-- hay que hacer un backend para que cambie entre dr y dra -->
                    <h1 class=""> Pediatra</h1>
                </div>
            </div>
        </div>
        <h1 class="grid-col-start-2 text-right mr-10 mt-5">Número único profesional: 0123 456 7899</h1>
            <hr class="bg-[#B394BD] h-1 rounded-full  mx-auto my-5 w-5/6 mt-10 mb-10 col-span-2 ">
            <h1 class="text-center h-6">Paciente: <input type="text" name="paciente" placeholder="Angel Salalzar"/></h1>
            <h1 class="text-center">Fecha de nacimiento: <input type="date" name="fecha de nacimiento"/></h1>
            <h1 class="flex flex-row justify-evenly col-span-2 mt-6">Diagnóstico: <textarea class="border-2 col-span-2 rounded-md border-[#B394BD] w-5/6" name="diagnóstico" cols="30" rows="3" placeholder="ola"></textarea></h1>
            <h1 class="flex justify-center flex-row mt-6">Medicación: <textarea class="border-2 rounded-md border-[#B394BD] " name="medicación" cols="30" rows="2" placeholder="ola"></textarea> </h1>
            <h1 class="flex justify-center flex-row mt-6">Dosificación: <textarea class="border-2 rounded-md border-[#B394BD] " name="diagnóstico" cols="30" rows="2" placeholder="ola"></textarea> </h1>
            <h1 class="flex flex-row justify-evenly col-span-2 mt-6 mb-10">Anotaciones: <textarea class="border-2 col-span-2 rounded-md border-[#B394BD] w-5/6" name="diagnóstico" cols="30" rows="3" placeholder="ola"></textarea></h1>
            <div class="bg-[#B394BD] font-sans text-white space-x-8 h-14 flex justify-around items-center mt-10 col-span-2">
                <h1 class="mt-3 mb-2 font-bold ml-5>">CONTACTOS:</h1>
                <h1 class="mt-3 mb-2 font-bold ml-5>">1234-5678</h1>
                <h1 class="mt-3 mb-2 font-bold ml-5>">SCRIPTGO@gmail.com</h1>
                <h1 class="mt-3 mb-2 font-bold ml-5>">SCRIPTGO_SV</h1>
                </div>
            </div>


    </div>
    <div class="mb-10">
        <x-primary-button>Guardar</x-primary-button>
    </div>
    <x-barrafinal/>
    </x-layout>

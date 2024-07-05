<x-layout title="Prescripción">
    <x-barrapac/>
    <div class="w-9/12 border-2 border-black mt-10 mx-auto">
        <div class="mt-4 flex justify-evenly ">
            <img src="https://images7.memedroid.com/images/UPLOADED766/639a22bcc8861.jpeg"
                class=" w-20 h-20 rounded-full object-cover">
            <h1 class="text-center font-sans font-bold my-auto">Nombre del médico: José Guardado ola
                123<br>Identificación: 13iueye1y82638712</h1>
                <input type="date" name="fecha de creación" placeholder="fecha de creación"
        class="font-bold font-sans  w-32"> {{-- disabled, timestamp --}}
        </div>

        <div class="mx-5">
            <hr class="bg-black h-1 rounded-full  mx-auto my-5">
            <div class="grid grid-cols-2">
                <h1 class="col-span-2 font-bold font-sans">Nombre: jose antonio guardado</h1>
                <h1 class="col-span-2 font-bold font-sans">Edad: 15555 años</h1>

                <div>
<textarea name="prescripción" placeholder="prescription" class="w-11/12 h-32 mt-3"></textarea>

        </div>

                <div class="mx-auto col-start-2">
                    <img src="https://images7.memedroid.com/images/UPLOADED766/639a22bcc8861.jpeg"
                        class="w-20 h-20 rounded-full object-cover">
                    <h1 class="text-center text-sm font-semibold">Firma y sello <br>del médico </h1>
                </div>
            </div>
        </div>
        <div class="pb-10 mr-10 flex justify-end">
            <button
            class="border-2 font-sans font-semibold border-white bg bg-[#B394BD] text-center  w-40 h-12 py-2 rounded-full text-white hover:bg-[#a885b4] focus:border-gray-600">
            Guardar</a>
            </button>
    </div>

    </div>
</x-layout>

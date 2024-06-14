<x-layout title="Prescripción">
    <x-barrapac />
    <div class="w-9/12 border-2 border-black mt-10 mx-auto">
        <div class="mt-4 flex justify-evenly ">
            <img src="https://images7.memedroid.com/images/UPLOADED766/639a22bcc8861.jpeg"
                class=" w-20 h-20 rounded-full object-cover">
            <h1 class="text-center font-sans font-bold my-auto">Nombre del médico: José Guardado ola
                123<br>Identificación: 13iueye1y82638712</h1>
            <h1 class="my-auto font-bold font-sans">Fecha: ola</h1>
        </div>

        <div class="mx-5">
            <hr class="bg-black h-1 rounded-full  mx-auto my-5">
            <div class="grid grid-cols-2 pb-10">
                <h1 class="col-span-2 font-bold font-sans">Nombre: jose antonio guardado</h1>
                <h1 class="col-span-2 font-bold font-sans">Edad: 15555 años</h1>

                <div>

                    <input class="w-full break-normal" type="text" name="Prescription" placeholder="prescription"> {{--disabled--}}

        </div>

                <div class="mx-auto col-start-2">
                    <img src="https://images7.memedroid.com/images/UPLOADED766/639a22bcc8861.jpeg"
                        class="w-20 h-20 rounded-full object-cover">
                    <h1 class="text-center text-sm">Firma y sello <br>del médico </h1>
                </div>
            </div>
        </div>
    </div>
</x-layout>

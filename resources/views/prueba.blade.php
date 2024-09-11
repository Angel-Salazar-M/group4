<x-layout title="Paco">

    <nav class="bg-[#B394BD] font-sans text-white space-between sticky top-0 z-40 shadow-xl">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-end h-16">
                <div class="flex"><a href="">
                        <img alt="Logo de completo de ScriptGo" src="" class="h-12 mt-1">
                    </a>
                    <a href="/doctor/prescriptions"
                        class="mt-3 mb-2 font-bold ml-8 mr-6 space-x-8 text-right">PRESCRIPCIONES MÉDICAS</a>
                    <a href="/doctor/records" class="mb-2 mt-3 font-bold space-x-8 ml-8 mr-6 text-right">HISTORIAL
                        MÉDICO</a>
                    <a href="/doctor/profile" class=""><img
                            src=https://cdn-icons-png.flaticon.com/512/1144/1144760.png
                            class="w-8 h-8 rounded-full object-cover mt-2 font-bold text-right mr-8 ml-5"></a>
                </div>

            </div>
        </div>

        <div>
            <x-cuadroRecetas></x-cuadroRecetas>
            <x-cuadroRecetas></x-cuadroRecetas>
            <x-cuadroRecetas></x-cuadroRecetas>
            <x-cuadroRecetas></x-cuadroRecetas>
        </div>




</x-layout>

<x-layout title="Perfil">
    <x-barradoc/>
    <div class="w-[60%] h-auto grid-rows-[auto_1fr] border-2 border-azulnegro mx-auto grid grid-rows-2 mt-8 mb-2">
        <div class="grid place-content-center place-items-center mx-auto bg-gray-100 my-auto p-4">
            <img src="{{ asset('https://simg.nicepng.com/png/small/933-9332131_profile-picture-default-png.png') }}"
                class="w-36 h-34 rounded-full object-cover">
            <h1 class="mt-6  font-bold text-xl text-center">{{ Auth::user()->name }} </h1>
            <h1 class="text-xl  font-bold">"especialidad"</h1>
        </div>
        <div class="border-t border-azulnegro grid grid-cols-2 w-full p-6 bg-gray-200">
            <div class="border border-2 dorder-gray-100 w-[50%] mx-auto p-4 bg-gray-100 h-[90%]">
                <h1 class="mb-4 text-lg">Contact information</h1>
                <h1 class="text-sm">Email</h1>
                <input type="text" class="w-44 rounded-sm mb-2" placeholder=" Email">
                <h1 class="text-sm">Phone number</h1>
                <input type="number" class="w-44 rounded-sm" placeholder=" Phone number">
            </div>
            <div class="border border-2 dorder-gray-100 w-[50%] mx-auto p-4 bg-gray-100">
                <h1 class="text-lg mb-4">Personal information</h1>
                <h1 class="text-sm">Birth date</h1>
                <input type="date" class="w-44 rounded-sm mb-2" placeholder=" Birth date">
                <h1>ID</h1>
                <input type="number" class="w-44 rounded-sm mb-2" placeholder=" ID">
                <h1 class="text-sm">Doctor ID</h1>
                <input type="text" class="w-44 rounded-sm" placeholder=" Doctor ID">

            </div>
            <div class="border border-2 dorder-gray-100 w-[50%] mx-auto p-4 bg-gray-100">
                <h1 class="text-lg mb-4">Public information</h1>
                <h1 class="text-sm">Clinic address</h1>
                <input type="text" class="w-44 rounded-sm" placeholder=" Clinic address">
            </div>
            <div>
                <button type="submit" onclick="window.location.href='/doctor/profile'" class="text-white font-semibold border border-2 dorder-gray-100 w-36 h-16 bg-cafe flex items-center justify-center mx-auto mt-4 rounded-full hover:scale-110 transition">
                    Save changes
                </button>
            </div>
        </div>
    </div>
</x-layout>

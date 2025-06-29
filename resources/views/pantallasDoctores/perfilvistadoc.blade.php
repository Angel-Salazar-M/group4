<x-layout title="Perfil">
    <x-barradoc />
    <div class="w-[60%] h-auto grid-rows-[auto_1fr] border-2 border-azulnegro mx-auto grid grid-rows-2 mt-8 mb-2">
        <div class="grid place-content-center place-items-center mx-auto bg-gray-100 my-auto p-4">
            <img src="{{ asset('https://simg.nicepng.com/png/small/933-9332131_profile-picture-default-png.png') }}"
                class="w-36 h-34 rounded-full object-cover">
            <h1 class="mt-6  font-bold text-xl text-center">{{ Auth::user()->name }} </h1>
            <h1 class="text-xl  font-bold">"especialidad"</h1>
        </div>
        <div class="border-t border-azulnegro grid grid-cols-2 w-full p-6 bg-gray-200">
            <div class="border border-2 dorder-gray-100 w-[50%] mx-auto p-4 bg-gray-100">
                <h1 class="mb-4 text-lg">Contact information</h1>
                <h1 class="text-sm">Email</h1>
                <p class="text-blue-600 mb-2">{{ Auth::user()->email }}</p>
                <h1 class="text-sm">Phone number</h1>
                <p class="text-blue-600">{{ Auth::user()->phoneNumber }}</p>
            </div>
            <div class="border border-2 dorder-gray-100 w-[50%] mx-auto p-4 bg-gray-100">
                <h1 class="text-lg mb-4">Personal information</h1>
                <h1 class="text-sm">Birth date</h1>
                <p class="mb-2 text-blue-600">{{ Auth::user()->birthday }}</p>
                <h1>ID</h1>
                <p class="text-blue-600 mb-2">{{ Auth::user()->dui }}</p>
                <h1 class="text-sm">Doctor ID</h1>
                <p class="text-blue-600">{{ Auth::user()->dui }}</p>

            </div>
            <div class="border border-2 dorder-gray-100 w-[50%] mx-auto p-4 mt-4 bg-gray-100">
                <h1 class="">Public information</h1>
                <h1>Clinic address</h1>
                <p>{{ Auth::user()->place_address }}</p>
            </div>
            <div>
                <a href="/doctor/profile/edit"
                    class="text-white font-semibold border border-2 dorder-gray-100 w-36 h-16 bg-cafe flex items-center justify-center mx-auto mt-4 rounded-full hover:scale-110 transition ">Edit
                    profile</a>
            </div>
        </div>
    </div>
</x-layout>
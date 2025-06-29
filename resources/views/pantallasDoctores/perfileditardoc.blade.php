<x-layout title="Perfil">
    <x-barradoc/>
    <div class="w-[60%] h-auto grid-rows-[auto_1fr] border-2 border-azulnegro mx-auto grid grid-rows-2 mt-8 mb-2">
        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-2 rounded mb-4 text-center">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-200 text-red-800 p-2 rounded mb-4 text-center">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="grid place-content-center place-items-center mx-auto bg-gray-100 my-auto mt-4">
            <form action="{{ route('profile.photo.upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="photo" class="mb-4">
    <button type="submit"
        class="bg-cafe text-white px-4 py-2 rounded hover:scale-110 transition">Upload</button>
</form>
<img src="{{ Auth::user()->profile_photo ? asset('storage/' . Auth::user()->profile_photo) : asset('img/default.png') }}"
     alt="Foto de perfil" class="w-36 h-36 rounded-full object-cover">
            <h1 class="mt-6  font-bold text-xl text-center">{{ Auth::user()->name }} </h1>
            <h1 class="text-xl  font-bold mb-4">"especialidad"</h1>
        <form action="{{ route('profile.update') }}" method="POST" class="border-t border-azulnegro grid grid-cols-2 w-full p-6 bg-gray-200">
    @csrf
    @method('PUT')

    <div class="border border-2 dorder-gray-100 w-[50%] mx-auto p-4 bg-gray-100 h-[90%]">
        <h1 class="mb-4 text-lg">Contact information</h1>

        <label class="text-sm" for="email">Email</label>
        <input
            type="email"
            id="email"
            name="email"
            class="w-44 rounded-sm mb-2"
            placeholder="Email"
            value="{{ old('email', Auth::user()->email) }}"
            required
        >

        <label class="text-sm" for="phoneNumber">Phone number</label>
        <input
            type="text"
            id="phoneNumber"
            name="phoneNumber"
            class="w-44 rounded-sm"
            placeholder="Phone number"
            value="{{ old('phoneNumber', Auth::user()->phoneNumber) }}"
        >
    </div>

    <div class="border border-2 dorder-gray-100 w-[50%] mx-auto p-4 bg-gray-100">
        <h1 class="text-lg mb-4">Personal information</h1>

        <label class="text-sm" for="birthday">Birth date</label>
        <input
            type="date"
            id="birthday"
            name="birthday"
            class="w-44 rounded-sm mb-2"
            value="{{ old('birthday', Auth::user()->birthday) }}"
        >

        <label class="text-sm" for="dui">ID</label>
        <input
            type="text"
            id="dui"
            name="dui"
            class="w-44 rounded-sm mb-2"
            placeholder="ID"
            value="{{ old('dui', Auth::user()->dui) }}"
        >

        <label class="text-sm" for="medical_code">Medical code</label>
       <input
    type="text"
    id="medical_code"
    name="medical_code"
    value="{{ old('medical_code', Auth::user()->userable->medical_code ?? '') }}"
    class="w-44 rounded-sm"
    placeholder="Doctor Code"
/>
    </div>

    <div class="border border-2 dorder-gray-100 w-[50%] mx-auto p-4 bg-gray-100">
        <h1 class="text-lg mb-4">Public information</h1>

        <label class="text-sm" for="place_address">Clinic address</label>
        <input
            type="text"
            id="place_address"
            name="place_address"
            class="w-44 rounded-sm"
            placeholder="Clinic address"
            value="{{ old('place_address', Auth::user()->place_address) }}"
        >
    </div>

    <div class="flex items-center justify-center">
        <button
            type="submit"
            class="text-white font-semibold border border-2 dorder-gray-100 w-36 h-16 bg-cafe rounded hover:scale-110 transition"
        >
            Save changes
        </button>
    </div>
</form>

</x-layout>

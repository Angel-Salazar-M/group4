<x-layout title="prueba">
    <div class="bg bg-black">
        <div class="grid place-content-center h-screen">
            <div class="w-[500px]">
                <h1 class="text text-5xl text-center uppercase font-bold text-white font-mono">Log In</h1>
            </div>
            <div class="flex flex-col my-12 bg bg-gray-900 rounded-lg">
                @csrf
                <div class="mt-11">
                    <x-input type="text" nombre="email" />
                </div>
                <div>
                    <x-input type="password" nombre="password" />
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="mb-11 font-mono border-2 border-black rounded-lg bg bg-lime-600 font-semibold w-96 py-2 mt-8 text-white hover:font-bold hover:bg-lime-900 hover:border-lime-400">Log
                        In</button>
                </div>
            </div>
            <div class="flex justify-center">
                <img src="ttps://i.pinimg.com/originals/66/89/dc/6689dc331be27e66349ce9a4d15ddff3.gifh" alt="pikachu"
                    width="100" height="50">
            </div>
        </div>
    </div>
</x-layout>

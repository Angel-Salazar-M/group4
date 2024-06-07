@props(['nombre', 'id', 'doctor'])
<div class=" grid grid-cols-1 mt-4 space-y-3 mx-32">
    <input type="date" name="fecha de creación" placeholder="fecha de creación"
        class="font-bold font-sans  w-32"> {{-- disabled, timestamp --}}

    <div class="grid grid-cols-3 place-content-center border-2 border-black py-8 w-full mx-auto rounded-3xl">
        <img src="https://images7.memedroid.com/images/UPLOADED766/639a22bcc8861.jpeg"
            class=" w-20 h-20 rounded-full object-cover mx-auto">
        <h1 class="font-bold font-sans my-auto">{{$nombre}}<br>Identificación:{{$id}}</h1>
        <h1 class="font-bold font-sans my-auto">Doctor: {{$doctor}}</h1>
    </div>
</div>

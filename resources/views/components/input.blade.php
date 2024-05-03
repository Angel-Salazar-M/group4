@props(['type', 'nombre'])
<div class="">
    <h1 class="font-semibold">{{ $nombre }}</h1>
    <input type={{ $type }} name={{ $nombre }}
        class="border-slate-200 bg bg-slate-200 rounded-lg text-black font-bold font-mono">

    @error($nombre)
        <p>{{ $message }}</p>
    @enderror
</div>
{{-- pendiente :p --}}

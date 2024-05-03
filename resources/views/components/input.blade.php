@props(['type', 'nombre'])
<div class="grid col-4 mb-1 mt-2 font-mono">
    <h1 class="col-start-3 col-span-4 font-semibold">{{ $nombre }}</h1>
    <input type={{ $type }} name={{ $nombre }}
        class="col-start-3 col-span-2 border-2 w-100 border-slate-200 bg bg-slate-200 rounded-lg px-2 py-2 mt-1 mb-2     text-black font-bold font-mono">

    @error($nombre)
        <p>{{ $message }}</p>
    @enderror
</div>
{{-- pendiente :p --}}

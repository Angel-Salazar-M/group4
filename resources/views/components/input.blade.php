@props(['type', 'nombre', 'textoFondo'])
<div class="">
    <input type={{ $type }} name={{ $nombre }} placeholder={{ $textoFondo }}
        class="border-slate-200 bg bg-gray-300 rounded-[1px] text-black mt-4 mb-4 font-serif px-3 py-2 w-60">
    @error($nombre)
        <p>{{ $message }}</p>
    @enderror
    {{-- ya no tan pendiente :p --}}
</div>

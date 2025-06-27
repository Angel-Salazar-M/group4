<div class="border-black">
    <input {{ $attributes }}
        class="border-black bg bg-white-300 ] rounded-md text-black mt-4 mb-4 font-sans px-3 py-2 w-60">
    @error($name)
        <p>{{ $message }}</p>
    @enderror
</div>

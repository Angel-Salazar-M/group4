<div class="border-black">
    <input {{ $attributes }}
        class="border-black bg bg-gray-300 rounded-[1px] text-black mt-4 mb-4 font-serif px-3 py-2 w-60">
    @error($name)
        <p>{{ $message }}</p>
    @enderror
</div>

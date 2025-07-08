<x-layout title="Perfil">
    <x-appointment name="{{$patient->name}}" age="{{$patient->age}}">
        <textarea placeholder="Reason for the appointment" class="bg-white rounded-md text-black px-3 mt-4 mb-4 w-auto h-28 border-2 border-cafe col-start-1 col-span-3 p-2"></textarea>
    </x-appointment>
    <x-prescription>
    </x-prescription>
</x-layout>

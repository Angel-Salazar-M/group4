<x-layout title="Register">
    {{-- Evita scroll horizontal en toda la página --}}
    <div class="w-full min-h-screen grid grid-cols-1 md:grid-cols-2 overflow-hidden">

        {{-- Lado izquierdo: Imagen decorativa (sin pixelarse) --}}
        <div class="hidden md:flex items-center justify-center bg-white px-6">
            <img src='img/services3.jpg'
               class="object-cover h-full w-full" alt="Doctor">
        </div>

        {{-- Lado derecho: Formulario funcional y visualmente estilizado --}}
        <div class="bg-[#3E4A56] flex items-center justify-center py-10 px-4">
            <div class="bg-white rounded-xl p-8 w-full max-w-md shadow-xl">
                <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Create account</h1>

                <form action="/register" method="POST" class="space-y-4">
                    @csrf

                    {{-- Gender --}}
                    <div>
                        <p class="font-semibold text-gray-700 mb-1">Select your gender</p>
                        <div class="flex gap-4">
                            <label class="flex items-center gap-2 text-gray-600">
                                <input type="radio" name="gender" value="Hombre" checked class="accent-blue-600">
                                Male
                            </label>
                            <label class="flex items-center gap-2 text-gray-600">
                                <input type="radio" name="gender" value="Mujer" class="accent-pink-500">
                                Female
                            </label>
                        </div>
                    </div>

                    {{-- Datos generales --}}
                    <x-input type="text" name="name" placeholder="Full Name" />
                    <x-input type="text" name="dui" placeholder="DUI" />
                    <x-input type="date" name="birthday" placeholder="Birth Date" />
                    <x-input type="text" name="email" placeholder="Email Address" />
                    <x-input type="number" name="phoneNumber" placeholder="Phone Number" />
                    <x-input type="password" name="password" placeholder="Password" />

                    {{-- Account type --}}
                    <div x-data="{ userable: 'patient' }" class="space-y-2">
                        <p class="font-semibold text-gray-700">Account Type</p>
                        <div class="flex gap-4">
                            <label class="flex items-center gap-2 text-gray-600">
                                <input type="radio" id="doctor" name="userable" value="dogtor"
                                       x-model="userable" class="accent-blue-600">
                                Doctor
                            </label>
                            <label class="flex items-center gap-2 text-gray-600">
                                <input type="radio" id="paciente" name="userable" value="patient"
                                       x-model="userable" class="accent-blue-600" checked>
                                Patient
                            </label>
                        </div>

                        {{-- Doctor-specific fields --}}
                        <template x-if="userable === 'dogtor'">
                            <div class="space-y-3 pt-2">
                                <x-input type="text" name="place_address" placeholder="Clinic Address" />
                                <x-input type="text" name="medical_speciality" placeholder="Medical Specialty" />
                                <x-input type="text" name="medical_code" placeholder="Medical Code" />
                            </div>
                        </template>

                        {{-- Patient-specific fields --}}
                        <template x-if="userable === 'patient'">
                            <div class="space-y-3 pt-2">
                                <x-input type="text" name="address" placeholder="Address" />
                                <p class="font-semibold text-gray-700">Would you like to be a caretaker?</p>
                                <div class="flex gap-4">
                                    <label class="flex items-center gap-2 text-gray-600">
                                        <input type="radio" name="caretaker" value="True" class="accent-green-500">
                                        Yes
                                    </label>
                                    <label class="flex items-center gap-2 text-gray-600">
                                        <input type="radio" name="caretaker" value="False" checked class="accent-red-500">
                                        No
                                    </label>
                                </div>
                            </div>
                        </template>
                    </div>

                    {{-- Register button --}}
                    <div class="flex justify-center">
                        <button type="submit"
                            class="bg-[#D37C2F] hover:bg-[#c06b22] text-white font-semibold py-2 px-6 rounded-full shadow transition">
                            Sign Up
                        </button>
                    </div>

                    {{-- Login link --}}
                    <div class="text-center mt-4">
                        <a href="/login" class="text-sm text-gray-500 hover:text-blue-400 underline">
                            Already have an account? Log in
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>

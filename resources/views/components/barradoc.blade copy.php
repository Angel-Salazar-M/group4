<div class="sticky top-4 z-50">
    <div class="max-w-6xl mx-auto px-4 bg-scriptmorado rounded-lg shadow-md">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center hover:bg-scriptazul hover:shadow-md hover:scale-110 transition rounded">
                <a href="/doctor/welcome">
                    <img src="{{ asset('img/logowhite.png') }}" class="h-14 ml-3 mr-3">
                </a>
            </div>

            <!-- Menú de botones -->
            <div class="flex w-full max-w-md h-full bg-scriptmorado overflow-x-auto">
                <!-- Botón 1 -->
                <a href="/doctor/records"
                   class="flex items-center justify-center w-1/3 h-full hover:bg-scriptazul hover:shadow-md hover:scale-110 transition text-white space-x-2">
                    <svg class="w-5 h-5" fill="#e3e3e3" viewBox="0 0 24 24">
                        <!-- Ícono -->
                    </svg>
                    <span class="text-sm font-medium whitespace-nowrap">Pacientes</span>
                </a>

                <!-- Botón 2 -->
                <a href="/doctor/prescriptions"
                   class="flex items-center justify-center w-1/3 h-full hover:bg-scriptazul hover:shadow-md hover:scale-110 transition text-white space-x-2">
                    <svg class="w-5 h-5" fill="#e3e3e3" viewBox="0 0 24 24">
                        <!-- Ícono -->
                    </svg>
                    <span class="text-sm font-medium whitespace-nowrap">Prescripciones</span>
                </a>

                <!-- Botón 3 -->
                <a href="/doctor/profile"
                   class="flex items-center justify-center w-1/3 h-full hover:bg-scriptazul hover:shadow-md hover:scale-110 transition text-white space-x-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <!-- Ícono -->
                    </svg>
                    <span class="text-sm font-medium whitespace-nowrap">Perfil</span>
                </a>
            </div>
        </div>
    </div>
</div>

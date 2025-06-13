<div class="w-full mx-auto bg-scriptazul sticky top-0 z-40 shadow-md">
    <div class="flex justify-between items-center h-16">
        <div class="flex relative hover:bg-scriptmorado hover:shadow-md hover:scale-110">
            <a href="/welcome"><img src="{{ asset('img/logowhite.png') }}" class="mt-2 h-14 ml-3 mr-3 "></a>
        </div>
        <div class="flex w-64 h-full divide-x divide-black">
    <!-- Botón 1: Iniciar sesión -->
    <a href="/login" class="flex items-center justify-center w-1/2 h-full hover:bg-scriptmorado hover:scale-105 hover:shadow-md transition text-white space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 -960 960 960" fill="currentColor">
            <path d="M480-120v-80h280v-560H480v-80h280q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H480Zm-80-160-55-58 102-102H120v-80h327L345-622l55-58 200 200-200 200Z"/>
        </svg>
        <span class="text-sm font-medium whitespace-nowrap">Iniciar sesión</span>
    </a>

    <!-- Botón 2: Registrar -->
    <a href="/register" class="flex items-center justify-center w-1/2 h-full hover:bg-scriptmorado hover:scale-105 hover:shadow-md transition text-white space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2a10 10 0 100 20 10 10 0 000-20zM13 11h4v2h-4v4h-2v-4H7v-2h4V7h2v4z" />
        </svg>
        <span class="text-sm font-medium whitespace-nowrap">Registrarse</span>
    </a>
</div>

    </div>

</div>
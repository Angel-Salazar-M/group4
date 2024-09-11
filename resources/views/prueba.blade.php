<x-layout title="Paco">

    <nav class="bg-[#B394BD] font-sans text-white space-between sticky top-0 z-40 shadow-xl">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-end h-16">
                <div class="flex"><a href="">
                        <img alt="Logo de completo de ScriptGo" src="" class="h-12 mt-1">
                    </a>
                    <a href="/doctor/prescriptions"
                        class="mt-3 mb-2 font-bold ml-8 mr-6 space-x-8 text-right">PRESCRIPCIONES MÉDICAS</a>
                    <a href="/doctor/records" class="mb-2 mt-3 font-bold space-x-8 ml-8 mr-6 text-right">HISTORIAL
                        MÉDICO</a>
                    <a href="/doctor/profile" class=""><img
                            src=https://cdn-icons-png.flaticon.com/512/1144/1144760.png
                            class="w-8 h-8 rounded-full object-cover mt-2 font-bold text-right mr-8 ml-5"></a>
<x-layout title="prueba">
    <div class="w-full sm:max-w-2xl mt-6 px-6 bg-[#FFFFFF] overflow-hidden sm:rounded-lg"><!---->
        <div
            class="font-extrabold text-4xl text-center text-2toring-lbrown mb-8 flex flex-col items-center justify-center">
            Ready to learn together? <p class="font-concert text-2toring-navy"> Choose your role </p>
        </div>
        <div class="space-x-12 flex justify-center pb-10">
            <div class="flex flex-col items-center"><img src="img/roles/1.png" class="mb-2 w-50 h-50"><button
                    class="bg-2toring-orange px-4 py-2.5 rounded-md text-sm font-semibold text-white shadow-xl hover:bg-2toring-orange/60 h-22">Student</button>
            </div>
            <div class="flex flex-col items-center"><img src="img/roles/2.png" class="mb-2 w-50 h-50"><button
                    class="bg-2toring-orange px-4 py-2.5 rounded-md text-sm font-semibold text-white shadow-xl hover:bg-2toring-orange/60 h-22">Tutor</button>
            </div>
        </div>
        <form style="display: none;">
            <div class="grid grid-cols-2 gap-5">
                <div><label class="block font-medium text-sm text-gray-700 my-2.5" for="first_name"><span>First
                            Name</span></label><input
                        class="border-gray-200 focus:border-2toring-dturquoise focus:ring-2toring-dturquoise rounded-md shadow-sm selection:bg-2toring-blue selection:text-white bg-slate-100 mt-1 block w-full"
                        id="first_name" autocomplete="first_name" autofocus="" type="text">
                    <div class="mt-2" style="display: none;">
                        <p class="text-sm text-red-600 dark:text-red-400"></p>
                    </div>
                </div>
                <div><label class="block font-medium text-sm text-gray-700 my-2.5" for="last_name"><span>Last
                            Name</span></label><input
                        class="border-gray-200 focus:border-2toring-dturquoise focus:ring-2toring-dturquoise rounded-md shadow-sm selection:bg-2toring-blue selection:text-white bg-slate-100 mt-1 block w-full"
                        id="last_name" autocomplete="last_name" autofocus="" type="text">
                    <div class="mt-2" style="display: none;">
                        <p class="text-sm text-red-600 dark:text-red-400"></p>
                    </div>
                </div>
                <div><label class="block font-medium text-sm text-gray-700 my-2.5"
                        for="age"><span>Age</span></label><input
                        class="border-gray-200 focus:border-2toring-dturquoise focus:ring-2toring-dturquoise rounded-md shadow-sm selection:bg-2toring-blue selection:text-white bg-slate-100 mt-1 block w-full"
                        id="age" autocomplete="19" autofocus="" type="number">
                    <div class="mt-2" style="display: none;">
                        <p class="text-sm text-red-600 dark:text-red-400"></p>
                    </div>
                </div>
                <div><label class="block font-medium text-sm text-gray-700 my-2.5" for="document_type"><span>Select your
                            Document type</span></label><select
                        class="border-gray-300 focus:border-2toring-dturquoise focus:ring-2toring-dturquoise text-sm rounded-md shadow-sm bg-slate-100 mt-1 block w-full">
                        <option disabled="">Select a document type</option>
                        <option class="text-sm hover:!text-blue-700" value="ID">Unique identification (ID)</option>
                        <option class="text-sm hover:!text-blue-700" value="Passport">Passport</option>
                    </select>
                    <div class="mt-2" style="display: none;">
                        <p class="text-sm text-red-600 dark:text-red-400"></p>
                    </div>
                </div>
                <div><label class="block font-medium text-sm text-gray-700 my-2.5" for="document_number"><span>Document
                            Number</span></label><input
                        class="border-gray-200 focus:border-2toring-dturquoise focus:ring-2toring-dturquoise rounded-md shadow-sm selection:bg-2toring-blue selection:text-white bg-slate-100 mt-1 block w-full"
                        id="document_number" autocomplete="document_number" autofocus="" type="text">
                    <div class="mt-2" style="display: none;">
                        <p class="text-sm text-red-600 dark:text-red-400"></p>
                    </div>
                </div>
                <div><label class="block font-medium text-sm text-gray-700 my-2.5"
                        for="address"><span>Address</span></label><input
                        class="border-gray-200 focus:border-2toring-dturquoise focus:ring-2toring-dturquoise rounded-md shadow-sm selection:bg-2toring-blue selection:text-white bg-slate-100 mt-1 block w-full"
                        id="address" autocomplete="address" autofocus="" type="text">
                    <div class="mt-2" style="display: none;">
                        <p class="text-sm text-red-600 dark:text-red-400"></p>
                    </div>
                </div>
                <div><label class="block font-medium text-sm text-gray-700 my-2.5" for="county"><span>Select your
                            state</span></label><select
                        class="border-gray-300 focus:border-2toring-dturquoise focus:ring-2toring-dturquoise text-sm rounded-md shadow-sm bg-slate-100 mt-1 block w-full">
                        <option disabled="">Select a state to continue</option>
                        <option class="text-sm hover:!text-blue-700" value="1">Ahuachapan</option>
                        <option class="text-sm hover:!text-blue-700" value="2">Cabañas</option>
                        <option class="text-sm hover:!text-blue-700" value="3">Chalatenango</option>
                        <option class="text-sm hover:!text-blue-700" value="4">Cuscatlan</option>
                        <option class="text-sm hover:!text-blue-700" value="5">La Libertad</option>
                        <option class="text-sm hover:!text-blue-700" value="6">La Paz</option>
                        <option class="text-sm hover:!text-blue-700" value="7">La Unión</option>
                        <option class="text-sm hover:!text-blue-700" value="8">Morazán</option>
                        <option class="text-sm hover:!text-blue-700" value="9">San Miguel</option>
                        <option class="text-sm hover:!text-blue-700" value="10">San Salvador</option>
                        <option class="text-sm hover:!text-blue-700" value="11">San Vicente</option>
                        <option class="text-sm hover:!text-blue-700" value="12">Santa Ana</option>
                        <option class="text-sm hover:!text-blue-700" value="13">Sonsonate</option>
                        <option class="text-sm hover:!text-blue-700" value="14">Usulután</option>
                    </select>
                    <div class="mt-2" style="display: none;">
                        <p class="text-sm text-red-600 dark:text-red-400"></p>
                    </div>
                </div>
                <div style="display: none;"><label class="block font-medium text-sm text-gray-700 my-2.5"
                        for="county"><span>Select your county</span></label><select
                        class="border-gray-300 focus:border-2toring-dturquoise focus:ring-2toring-dturquoise text-sm rounded-md shadow-sm bg-slate-100 mt-1 block w-full">
                        <option disabled="">Select a county</option>
                    </select>
                    <div class="mt-2" style="display: none;">
                        <p class="text-sm text-red-600 dark:text-red-400"></p>
                    </div>
                </div>
                <div><label class="block font-medium text-sm text-gray-700 my-2.5"
                        for="email"><span>Email</span></label><input
                        class="border-gray-200 focus:border-2toring-dturquoise focus:ring-2toring-dturquoise rounded-md shadow-sm selection:bg-2toring-blue selection:text-white bg-slate-100 mt-1 block w-full"
                        id="email" autocomplete="username" type="email">
                    <div class="mt-2" style="display: none;">
                        <p class="text-sm text-red-600 dark:text-red-400"></p>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button type="button"
                        class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>

                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button type="button"
                                class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </button>
                        </div>

                        <!--
              Dropdown menu, show/hide based on menu state.

              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
                        <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                            tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="user-menu-item-0">Your Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="user-menu-item-1">Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="user-menu-item-2">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="mt-8"><label class="block font-medium text-sm text-gray-700 my-2.5"
                        for="profile_photo"><span>Upload a profile photo</span></label><!----><input
                        accept="image/jpg, image/jpeg, image/png" type="file"></div>
                <div class="mt-2" style="display: none;">
                    <p class="text-sm text-red-600 dark:text-red-400"></p>
                </div>
            </div>
            <div class="flex items-center justify-center mt-4"><button
                    class="inline-flex items-center px-6 py-2 font-concert font-extrabold bg-2toring-orange border border-transparent rounded-3xl text-white uppercase tracking-widest hover:bg-[#045174] focus:bg-[#045174] active:bg-2toring-lbrown focus:outline-none transition ease-in-out duration-150 ms-4 justify-center">
                    Register </button></div>
            <div class="flex items-center justify-center mt-4 mb-2"><a
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="https://2toring.superatepoma.org/login"> Already registered? </a></div>
        </form>
    </div>
</x-layout>

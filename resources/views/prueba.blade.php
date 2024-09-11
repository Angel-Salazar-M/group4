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
                <div><label class="block font-medium text-sm text-gray-700 my-2.5"
                        for="password"><span>Password</span></label><input
                        class="border-gray-200 focus:border-2toring-dturquoise focus:ring-2toring-dturquoise rounded-md shadow-sm selection:bg-2toring-blue selection:text-white bg-slate-100 mt-1 block w-full"
                        id="password" autocomplete="new-password" type="password">
                    <div class="mt-2" style="display: none;">
                        <p class="text-sm text-red-600 dark:text-red-400"></p>
                    </div>
                </div>
                <div><label class="block font-medium text-sm text-gray-700 my-2.5"
                        for="password_confirmation"><span>Confirm Password</span></label><input
                        class="border-gray-200 focus:border-2toring-dturquoise focus:ring-2toring-dturquoise rounded-md shadow-sm selection:bg-2toring-blue selection:text-white bg-slate-100 mt-1 block w-full"
                        id="password_confirmation" autocomplete="new-password" type="password">
                    <div class="mt-2" style="display: none;">
                        <p class="text-sm text-red-600 dark:text-red-400"></p>
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

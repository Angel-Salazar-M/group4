<x-layout title="Prescripción">
    <x-barradoc />
    <div class="px-4 md:p-12">
        <div class="mx-auto max-w-3xl lg:text-center mb-14">
            <p class="font-bold sm:text-5xl text-azulnegro">Most recent<span class=""> prescription
                </span></p>
        </div>
        <div>
            <x-prescription />
        </div>
        <div class="mx-auto max-w-3xl lg:text-center mb-14 mt-24">
            <p class="font-bold sm:text-5xl text-azulnegro">Patient's<span class=""> prescriptions
                </span></p>
        </div>
        <div class="mx-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div
                class="card bg-white p-4 rounded-3xl shadow-md border-solid border-2 border-cafe opacity-90 duration-300 hover:opacity-100">
                <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg"
                        height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                        <path
                            d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                    </svg>
                    <p class="text-[16px] text-black">Patient's name:</p>
                    <p class="text-azulnegro ms-7"> asdjagsjda</p>
                </div>
                <div class="flex mb-2 transition-all ease-in-out space-x-2"> <svg xmlns="http://www.w3.org/2000/svg"
                        height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                        <path
                            d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z" />
                    </svg>
                    <p class="text-[16px] text-black">Prescription date: </p>
                    <p class="text-azulnegro"> aasdahsd</p>
                </div>
                <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg"
                        height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                        <path
                            d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
                    </svg>
                    <p class="text-[16px] text-black">Phone number:</p>
                    <p class="text-[16px] ms-5 text-azulnegro"> ausdghadsj</p>
                </div>
                <div class="flex mb-2 space-x-2 transition-all ease-in-out"><svg xmlns="http://www.w3.org/2000/svg"
                        height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                        <path
                            d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                    </svg>
                    <p class="text-[16px] text-black">Address:</p>
                    <p class="text-azulnegro ms-1"> asdghkashf</p>
                </div>

                <div class="flex items-center justify-center gap-x-4 mt-4">
                    <a active="false" href="/patient/prescription/">
                        <button
                            class="bg-cafe text-white transition duration-150 ease-in-out border-2 border-cafe hover:scale-110 transition tracking-widest py-2 px-4 rounded-3xl text-xs uppercase">
                            Go to prescription
                        </button>
                    </a>
                </div>
            </div>
        </div>
</x-layout>
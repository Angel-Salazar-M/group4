<x-layout title="expediente">
    <x-barrapac/>

    <div
        class="grid grid-cols-2 h-[calc(90vh-95px)] place-content-center bg-white shadow-md max-w-7xl mt-10 mx-auto rounded-lg">

        <div class="flex flex-col justify-center items-center border-4 rounded-lg border-scriptverde h-96 w-80 mx-auto">
            <img src="{{ asset('https://karlacsphotography.com/wp-content/uploads/2023/05/MG_8074-copia-768x614.jpg') }}" class="w-36 h-36 rounded-full object-cover">
            <h1 class="mt-6  font-bold text-xl"> {{ $patient->name }} </h1>
            <h1 class="text-xl  font-bold">expediente</h1>
        </div>

        <div class="grid grid-cols-2 my-auto space-y-6">
            <div class="col-span-2 flex space-x-5 justify-items-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    fill="#000000">
                    <path
                        d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                </svg>
                <h1 class=" text-2xl">Nombre: {{ $patient->name }} </h1>
            </div>
            <div class="flex space-x-5 justify-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    fill="#000000">
                    <path
                        d="M160-80q-17 0-28.5-11.5T120-120v-200q0-33 23.5-56.5T200-400v-160q0-33 23.5-56.5T280-640h160v-58q-18-12-29-29t-11-41q0-15 6-29.5t18-26.5l56-56 56 56q12 12 18 26.5t6 29.5q0 24-11 41t-29 29v58h160q33 0 56.5 23.5T760-560v160q33 0 56.5 23.5T840-320v200q0 17-11.5 28.5T800-80H160Zm120-320h400v-160H280v160Zm-80 240h560v-160H200v160Zm80-240h400-400Zm-80 240h560-560Zm560-240H200h560Z" />
                </svg>
                <h1 class="">Fecha de nacimiento: {{ $patient->birthday }}</h1>
            </div>
            <div class="flex space-x-5 justify-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    fill="#000000">
                    <path
                        d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
                </svg>
                <h1 class="">Número de teléfono: {{ $patient->phoneNumber }}</h1>
            </div>
            <div class="flex space-x-5 justify-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    fill="#000000">
                    <path
                        d="M160-80q-33 0-56.5-23.5T80-160v-440q0-33 23.5-56.5T160-680h200v-120q0-33 23.5-56.5T440-880h80q33 0 56.5 23.5T600-800v120h200q33 0 56.5 23.5T880-600v440q0 33-23.5 56.5T800-80H160Zm0-80h640v-440H600q0 33-23.5 56.5T520-520h-80q-33 0-56.5-23.5T360-600H160v440Zm80-80h240v-18q0-17-9.5-31.5T444-312q-20-9-40.5-13.5T360-330q-23 0-43.5 4.5T276-312q-17 8-26.5 22.5T240-258v18Zm320-60h160v-60H560v60Zm-200-60q25 0 42.5-17.5T420-420q0-25-17.5-42.5T360-480q-25 0-42.5 17.5T300-420q0 25 17.5 42.5T360-360Zm200-60h160v-60H560v60ZM440-600h80v-200h-80v200Zm40 220Z" />
                </svg>
                <h1 class="">DUI: {{ $patient->dui }}</h1>
            </div>
            <div class="flex space-x-5 justify-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    fill="#000000">
                    <path
                        d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z" />
                </svg>
                <h1 class="">Correo electrónico: {{ $patient->email }}</h1>
            </div>
            <div class="flex space-x-5 justify-items-center col-span-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    fill="#000000">
                    <path
                        d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                </svg>
                <h1>Dirección: {{ $patient->address }}</h1>
            </div>
            <div class="flex space-x-5">
                <a href="#citasMedicas"
                    class="border-2  font-semibold border-white bg-scriptverde text-center  w-40 h-12 py-2 rounded-full text-white focus:border-gray-600">
                    Prescripciones</a>
            </div>
            <div class="flex space-x-5">
                <a href="#historialMedico"
                    class="border-2  font-semibold border-white bg-scriptverde text-center  w-40 h-12 py-2 rounded-full text-white focus:border-gray-600">
                    Historial médico</a>
            </div>
        </div>
    </div>
    <div id="citasMedicas"></div>
    <div>
        <hr class="bg-scriptverde h-1 rounded-full  mx-auto my-5 w-3/6 mb-10 mt-20">
    </div>
    <div class=>
        <h1 class=" text-2xl font-bold text-center col-span-2 mt-5 mb-16">PRESCRIPCIONES MÉDICAS
            RECIENTES</h1>

        <div
            class="grid grid-cols-2 grid-rows-2 border-4 border-scriptverde rounded-lg w-5/6 mx-auto mb-14 p-6 bg-white shadow-xl">
            <div class="flex ml-5 mt-5">
                <img src=https://cdn-icons-png.flaticon.com/512/1144/1144760.png
                    class="w-12 h-12 rounded-full object-cover mt-2 mr-8 ml-5 row-span-2 col-span-2">
                <div class="flex flex-col">
                    <h1 class="font-bold">Dr.Gustavo Salazar</h1>
                    <!-- hay que hacer un backend para que cambie entre dr y dra -->
                    <h1 class="font-bold"> Pediatra</h1>
                </div>
            </div>
            <h1 class="grid-col-start-2 text-right mr-10 mt-10 font-bold">Número único profesional: 0123 456 7899</h1>
            <hr class="bg-scriptverde h-1 rounded-full  mx-auto my-5 w-5/6 mt-10 mb-10 col-span-2 ">
            <h1 class="text-center h-6">Paciente: Ángel Gustavo Salazar Mendoza</h1>
            <h1 class="text-center">Fecha de nacimiento: 14/07/2007</h1>
            <hr class="bg-scriptverde h-1 rounded-full  mx-auto my-5 w-5/6 mt-10 mb-10 col-span-2 ">

            <h1 class="font-bold overflow-hidden col-span-2 text-center mb-4">Diagnóstico: <br>
                <H1 class="col-start-1 font-semibold">Hipertensión arterial esencial (primaria)</H1>
                <div class="flex col-start-1">

                    <h1 class="font-bold col-start-1">Descripción:</h1>
                    <h1 class="col-start-1 px-2">Presión arterial elevada sin una causa secundaria identificada.
                        Códigos: I10 (CIE-10)
                </div>
                <h1 class="font-semibold col-start-1">Dislipidemia</h1>
                <div class="col-start-1 flex">

                    <h1 class="font-bold col-start-1">Descripción:</h1>
                    <h1 class="col-start-1 px-2">Alteración de los niveles de lípidos en sangre, con elevación de
                        colesterol LDL y
                        triglicéridos.
                        Códigos: E78.5 (CIE-10)</h1>
                </div>
            </h1>
            <h1 class="font-bold overflow-hidden col-span-2 text-center mb-4 mt-4">Medicación: <br>
                <H1 class="col-start-1 font-semibold">Enalapril</H1>
                <div class="flex col-start-1">

                    <h1 class="font-bold col-start-1">Dosis</h1>
                    <h1 class="col-start-1 px-2">1 pastilla después de cada comida por 1 mes.
                </div>
                <h1 class="font-semibold col-start-1">Valsartán</h1>
                <div class="col-start-1 flex">

                    <h1 class="font-bold col-start-1">Descripción:</h1>
                    <h1 class="col-start-1 px-2">ayudan a reducir la presión arterial</h1>
                </div>
            </h1>

            <h1 class="flex flex-row justify-evenly col-span-2 mt-4 font-bold">Anotaciones: <h1
                    class="text-justify col-span-2 underline underline-offset-1 mb-4"> El paciente presenta dolor la
                    parte inferior izquierda del abdomen al momento de realizar movimientos que involucran estiramiento
                    prolongado. </h1>
            </h1>
            <h1 class="col-span-2 flex justify-center">17/03/24</h1>
            <div class="bg-scriptverde text-white space-x-8 h-20 flex justify-around items-center mt-10 col-span-2">
                <h1 class="mt-3 mb-2 font-bold ml-5>">CONTACTOS:</h1>
                <h1 class="mt-3 mb-2 font-bold ml-5>">1234-5678</h1>
                <h1 class="mt-3 mb-2 font-bold ml-5>">Danielguzman@gmail.com</h1>
            </div>
        </div>
        <div
            class="grid grid-cols-2 grid-rows-2 border-4 border-scriptverde rounded-lg w-5/6 mx-auto mb-14 p-6 bg-white shadow-xl">
            <div class="flex ml-5 mt-5">
                <img src=https://cdn-icons-png.flaticon.com/512/1144/1144760.png
                    class="w-12 h-12 rounded-full object-cover mt-2 mr-8 ml-5 row-span-2 col-span-2">
                <div class="flex flex-col">
                    <h1 class="font-bold">Dr.Gustavo Salazar</h1>
                    <!-- hay que hacer un backend para que cambie entre dr y dra -->
                    <h1 class="font-bold"> Pediatra</h1>
                </div>
            </div>
            <h1 class="grid-col-start-2 text-right mr-10 mt-10 font-bold">Número único profesional: 0123 456 7899</h1>
            <hr class="bg-scriptverde h-1 rounded-full  mx-auto my-5 w-5/6 mt-10 mb-10 col-span-2 ">
            <h1 class="text-center h-6">Paciente: Ángel Gustavo Salazar Mendoza</h1>
            <h1 class="text-center">Fecha de nacimiento: 14/07/2007</h1>
            <hr class="bg-scriptverde h-1 rounded-full  mx-auto my-5 w-5/6 mt-10 mb-10 col-span-2 ">

            <h1 class="font-bold overflow-hidden col-span-2 text-center mb-4">Diagnóstico: <br>
                <H1 class="col-start-1 font-semibold">Hipertensión arterial esencial (primaria)</H1>
                <div class="flex col-start-1">

                    <h1 class="font-bold col-start-1">Descripción:</h1>
                    <h1 class="col-start-1 px-2">Presión arterial elevada sin una causa secundaria identificada.
                        Códigos: I10 (CIE-10)
                </div>
                <h1 class="font-semibold col-start-1">Dislipidemia</h1>
                <div class="col-start-1 flex">

                    <h1 class="font-bold col-start-1">Descripción:</h1>
                    <h1 class="col-start-1 px-2">Alteración de los niveles de lípidos en sangre, con elevación de
                        colesterol LDL y
                        triglicéridos.
                        Códigos: E78.5 (CIE-10)</h1>
                </div>
            </h1>
            <h1 class="font-bold overflow-hidden col-span-2 text-center mb-4 mt-4">Medicación: <br>
                <H1 class="col-start-1 font-semibold">Enalapril</H1>
                <div class="flex col-start-1">

                    <h1 class="font-bold col-start-1">Dosis</h1>
                    <h1 class="col-start-1 px-2">1 pastilla después de cada comida por 1 mes.
                </div>
                <h1 class="font-semibold col-start-1">Valsartán</h1>
                <div class="col-start-1 flex">

                    <h1 class="font-bold col-start-1">Descripción:</h1>
                    <h1 class="col-start-1 px-2">ayudan a reducir la presión arterial</h1>
                </div>
            </h1>

            <h1 class="flex flex-row justify-evenly col-span-2 mt-4 font-bold">Anotaciones: <h1
                    class="text-justify col-span-2 underline underline-offset-1 mb-4"> El paciente presenta dolor la
                    parte inferior izquierda del abdomen al momento de realizar movimientos que involucran estiramiento
                    prolongado. </h1>
            </h1>
            <h1 class="col-span-2 flex justify-center">17/03/24</h1>
            <div class="bg-scriptverde text-white space-x-8 h-20 flex justify-around items-center mt-10 col-span-2">
                <h1 class="mt-3 mb-2 font-bold ml-5>">CONTACTOS:</h1>
                <h1 class="mt-3 mb-2 font-bold ml-5>">1234-5678</h1>
                <h1 class="mt-3 mb-2 font-bold ml-5>">Danielguzman@gmail.com</h1>
            </div>
        </div>
        <div
            class="grid grid-cols-2 grid-rows-2 border-4 border-scriptverde rounded-lg w-5/6 mx-auto mb-14 p-6 bg-white shadow-xl">
            <div class="flex ml-5 mt-5">
                <img src=https://cdn-icons-png.flaticon.com/512/1144/1144760.png
                    class="w-12 h-12 rounded-full object-cover mt-2 mr-8 ml-5 row-span-2 col-span-2">
                <div class="flex flex-col">
                    <h1 class="font-bold">Dr.Gustavo Salazar</h1>
                    <!-- hay que hacer un backend para que cambie entre dr y dra -->
                    <h1 class="font-bold"> Pediatra</h1>
                </div>
            </div>
            <h1 class="grid-col-start-2 text-right mr-10 mt-10 font-bold">Número único profesional: 0123 456 7899</h1>
            <hr class="bg-scriptverde h-1 rounded-full  mx-auto my-5 w-5/6 mt-10 mb-10 col-span-2 ">
            <h1 class="text-center h-6">Paciente: Ángel Gustavo Salazar Mendoza</h1>
            <h1 class="text-center">Fecha de nacimiento: 14/07/2007</h1>
            <hr class="bg-scriptverde h-1 rounded-full  mx-auto my-5 w-5/6 mt-10 mb-10 col-span-2 ">

            <h1 class="font-bold overflow-hidden col-span-2 text-center mb-4">Diagnóstico: <br>
                <H1 class="col-start-1 font-semibold">Hipertensión arterial esencial (primaria)</H1>
                <div class="flex col-start-1">

                    <h1 class="font-bold col-start-1">Descripción:</h1>
                    <h1 class="col-start-1 px-2">Presión arterial elevada sin una causa secundaria identificada.
                        Códigos: I10 (CIE-10)
                </div>
                <h1 class="font-semibold col-start-1">Dislipidemia</h1>
                <div class="col-start-1 flex">

                    <h1 class="font-bold col-start-1">Descripción:</h1>
                    <h1 class="col-start-1 px-2">Alteración de los niveles de lípidos en sangre, con elevación de
                        colesterol LDL y
                        triglicéridos.
                        Códigos: E78.5 (CIE-10)</h1>
                </div>
            </h1>
            <h1 class="font-bold overflow-hidden col-span-2 text-center mb-4 mt-4">Medicación: <br>
                <H1 class="col-start-1 font-semibold">Enalapril</H1>
                <div class="flex col-start-1">

                    <h1 class="font-bold col-start-1">Dosis</h1>
                    <h1 class="col-start-1 px-2">1 pastilla después de cada comida por 1 mes.
                </div>
                <h1 class="font-semibold col-start-1">Valsartán</h1>
                <div class="col-start-1 flex">

                    <h1 class="font-bold col-start-1">Descripción:</h1>
                    <h1 class="col-start-1 px-2">ayudan a reducir la presión arterial</h1>
                </div>
            </h1>

            <h1 class="flex flex-row justify-evenly col-span-2 mt-4 font-bold">Anotaciones: <h1
                    class="text-justify col-span-2 underline underline-offset-1 mb-4"> El paciente presenta dolor la
                    parte inferior izquierda del abdomen al momento de realizar movimientos que involucran estiramiento
                    prolongado. </h1>
            </h1>
            <h1 class="col-span-2 flex justify-center">17/03/24</h1>
            <div class="bg-scriptverde text-white space-x-8 h-20 flex justify-around items-center mt-10 col-span-2">
                <h1 class="mt-3 mb-2 font-bold ml-5>">CONTACTOS:</h1>
                <h1 class="mt-3 mb-2 font-bold ml-5>">1234-5678</h1>
                <h1 class="mt-3 mb-2 font-bold ml-5>">Danielguzman@gmail.com</h1>
            </div>
        </div>

    </div>
    <div id="historialMedico"></div>
    <div>
        <hr class="bg-scriptverde h-1 rounded-full  mx-auto my-5 w-3/6 mt-16 mb-10">
    </div>
    <h1 class=" text-2xl font-bold text-center col-span-2 mt-10 mb-16">HISTORIAL MÉDICO</h1>
    <div class="border-4 border-scriptverde rounded-md w-5/6 mx-auto mb-5 bg-white shadow-md">
        <div class="">

            <div class="grid grid-cols-2 space-x-5 space-y-10 mb-5 place-items-center mt-12">
                <div class="col-span-2 flex space-x-5 justify-items-center items-center ml-5 col-start-1">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#000000">
                        <path
                            d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                    </svg>
                    <h1>Nombre completo: {{ $patient->name }}</h1>
                </div>
                <div class="flex space-x-5 justify-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#000000">
                        <path
                            d="M160-80q-17 0-28.5-11.5T120-120v-200q0-33 23.5-56.5T200-400v-160q0-33 23.5-56.5T280-640h160v-58q-18-12-29-29t-11-41q0-15 6-29.5t18-26.5l56-56 56 56q12 12 18 26.5t6 29.5q0 24-11 41t-29 29v58h160q33 0 56.5 23.5T760-560v160q33 0 56.5 23.5T840-320v200q0 17-11.5 28.5T800-80H160Zm120-320h400v-160H280v160Zm-80 240h560v-160H200v160Zm80-240h400-400Zm-80 240h560-560Zm560-240H200h560Z" />
                    </svg>
                    <h1 class="">Fecha de nacimiento: {{ $patient->birthday }}</h1>
                </div>
                <div class="flex space-x-5 justify-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#000000">
                        <path
                            d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
                    </svg>
                    <h1 class="">Número de teléfono: {{ $patient->phoneNumber }}</h1>
                </div>
                <div class="flex space-x-5 justify-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#000000">
                        <path
                            d="M160-80q-33 0-56.5-23.5T80-160v-440q0-33 23.5-56.5T160-680h200v-120q0-33 23.5-56.5T440-880h80q33 0 56.5 23.5T600-800v120h200q33 0 56.5 23.5T880-600v440q0 33-23.5 56.5T800-80H160Zm0-80h640v-440H600q0 33-23.5 56.5T520-520h-80q-33 0-56.5-23.5T360-600H160v440Zm80-80h240v-18q0-17-9.5-31.5T444-312q-20-9-40.5-13.5T360-330q-23 0-43.5 4.5T276-312q-17 8-26.5 22.5T240-258v18Zm320-60h160v-60H560v60Zm-200-60q25 0 42.5-17.5T420-420q0-25-17.5-42.5T360-480q-25 0-42.5 17.5T300-420q0 25 17.5 42.5T360-360Zm200-60h160v-60H560v60ZM440-600h80v-200h-80v200Zm40 220Z" />
                    </svg>
                    <h1 class="">DUI: {{ $patient->dui }}</h1>
                </div>
                <div class="flex space-x-5 justify-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#000000">
                        <path
                            d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z" />
                    </svg>
                    <h1 class="">Correo electrónico: {{ $patient->email }}</h1>
                </div>
                <div class="flex space-x-5 justify-items-center col-span-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#000000">
                        <path
                            d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                    </svg>
                    <h1>Dirección: {{ $patient->address }}</h1>
                </div>
                <div class="flex space-x-5 justify-items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#000000">
                        <path
                            d="M480-80q-137 0-228.5-94T160-408q0-100 79.5-217.5T480-880q161 137 240.5 254.5T800-408q0 140-91.5 234T480-80Zm0-80q104 0 172-70.5T720-408q0-73-60.5-165T480-774Q361-665 300.5-573T240-408q0 107 68 177.5T480-160Zm-120-80h240v-80H360v80Zm80-120h80v-80h80v-80h-80v-80h-80v80h-80v80h80v80Zm40-120Z" />
                    </svg>
                    <h1>Tipo sanguíneo: {{ $patient->blood_type }}</h1>
                </div>
                <div class="flex space-x-5 justify-items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#000000">
                        <path
                            d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z" />
                    </svg>
                    <h1>Último examen físico: 09/08/23</h1>
                </div>
                <div class="flex space-x-5 justify-items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#000000">
                        <path
                            d="M87-556q26-140 135.5-232T480-880q74 0 139.5 24T737-788q-14 26-22.5 44.5T703-709q-44-42-101-66.5T480-800q-101 0-181 56.5T183-599q-27-1-52.5 10T87-556ZM480-80q-148 0-257.5-92T87-404q17 22 42.5 33.5T183-360q36 88 116 144t181 56q133 0 226.5-93.5T800-480q0-17-1.5-34t-5.5-34q11 4 22.5 6t24.5 2q9 0 18-1t17-3q2 16 3.5 31.5T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80ZM336-496l84-84-85-85-42 42 43 42-43 43 43 42Zm504-104q-33 0-56.5-23.5T760-680q0-27 15-57.5T840-840q50 72 65 102.5t15 57.5q0 33-23.5 56.5T840-600ZM625-495l43-43-43-43 42-42-42-42-85 85 85 85Zm-145 75q-26 0-50.5 6T383-397l-143-83q0-16-8-30t-22-22q-22-12-45.5-5.5T128-510q-12 22-5.5 45.5T150-428q14 8 30 8t30-8l119 69q-17 17-30.5 36.5T276-280h66q21-36 57-58t81-22q45 0 81 22t57 58h66q-24-62-78.5-101T480-420Zm0-60Z" />
                    </svg>
                    <h1>Enfermedades recientes: N/A</h1>
                </div>
                <div class="flex space-x-5 justify-items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#000000">
                        <path
                            d="M87-556q26-140 135.5-232T480-880q74 0 139.5 24T737-788q-14 26-22.5 44.5T703-709q-44-42-101-66.5T480-800q-101 0-181 56.5T183-599q-27-1-52.5 10T87-556ZM480-80q-148 0-257.5-92T87-404q17 22 42.5 33.5T183-360q36 88 116 144t181 56q133 0 226.5-93.5T800-480q0-17-1.5-34t-5.5-34q11 4 22.5 6t24.5 2q9 0 18-1t17-3q2 16 3.5 31.5T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80ZM336-496l84-84-85-85-42 42 43 42-43 43 43 42Zm504-104q-33 0-56.5-23.5T760-680q0-27 15-57.5T840-840q50 72 65 102.5t15 57.5q0 33-23.5 56.5T840-600ZM625-495l43-43-43-43 42-42-42-42-85 85 85 85Zm-145 75q-26 0-50.5 6T383-397l-143-83q0-16-8-30t-22-22q-22-12-45.5-5.5T128-510q-12 22-5.5 45.5T150-428q14 8 30 8t30-8l119 69q-17 17-30.5 36.5T276-280h66q21-36 57-58t81-22q45 0 81 22t57 58h66q-24-62-78.5-101T480-420Zm0-60Z" />
                    </svg>
                    <h1>Enfermedades crónicas: N/A</h1>
                </div>
                <div class="col-span-2 flex space-x-5 justify-items-center items-center ml-5 col-start-1">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#000000">
                        <path
                            d="M496-346 346-496l332-332q12-12 28.5-12t28.5 12l93 93q12 12 12 28.5T828-678L496-346Zm0-114 248-247-37-37-247 248 36 36Zm-56 340 80-80h360v80H440Zm-237 0q-46 0-88.5-18T40-188l265-264 104 104q14 14 22 32t8 38q0 20-8 38.5T409-207l-19 19q-32 32-74.5 50T227-120h-24Zm0-80h24q30 0 58-11.5t49-32.5l19-19q6-6 6-14t-6-14l-48-48-136 135q8 2 17 3t17 1Zm541-507-37-37 37 37ZM305-339Z" />
                    </svg>
                    <h1>Operaciones recientes: 08/02/2024</h1>
                </div>
            </div>
            <hr class="bg-scriptverde h-1 rounded-full  mx-auto my-5 w-3/6 mt-10 mb-10">
            <h1 class=" text-2xl font-bold text-center col-span-2 mt-10">CITAS MÉDICAS RECIENTES</h1>

                <div class="grid grid-cols-2 border-2 border-scriptverde rounded-lg mx-5 my-5 py-2 px-2">
                    <div class="px-2 py-2 col-span-2">

                        <div class="flex justify-evenly px-3 py-3 col-span-2">
                            <div class="flex col-span-2">
                                <h1 class="font-sans my-auto font-bold col-span-2">Doctor: <h1 class="mt-1 px-2 col-span-2">Daniel Guzmán</h1>
                            </h1>
                        </div>
                    </div>
                    <h1 class="font-bold font-sans overflow-hidden col-span-2 text-center mb-2">Diagnóstico: <br>
                        <H1 class="col-start-1 font-semibold">Hipertensión arterial esencial (primaria)</H1>
                <div class="flex col-start-1">

                    <h1 class="font-bold col-start-1">Descripción:</h1>
                    <h1 class="col-start-1 px-2">Presión arterial elevada sin una causa secundaria identificada.
                        Códigos: I10 (CIE-10)
                    </div>
                           <h1 class="font-semibold col-start-1">Dislipidemia</h1>
                           <div class="col-start-1 flex">

                               <h1 class="font-bold col-start-1">Descripción:</h1> <h1 class="col-start-1 px-2">Alteración de los niveles de lípidos en sangre, con elevación de colesterol LDL y
                                   triglicéridos.
                                   Códigos: E78.5 (CIE-10)</h1>
                                </div>
                        </h1>


                    <div class="row-start-2 col-start-2 px-3 py-3">
                        <h1 class="font-sans text-wrap break-normal overflow-hidden">

                        </h1>
                    </div>
                    <div class="bg-scriptverde flex justify-center col-span-2">
                       <h1>09/04/24</h1>
                    </div>
                </div>
                </div>

        </div>
    </div>
    <div class="bg-scriptverde text-white space-x-8 h-20 flex justify-around items-center mt-20 col-span-2 w-full">
        <h1 class="mt-3 mb-2 font-bold ml-5>">CONTACTOS:</h1>
        <h1 class="mt-3 mb-2 font-bold ml-5>">1234-5678</h1>
        <h1 class="mt-3 mb-2 font-bold ml-5>">SCRIPTGO@gmail.com</h1>
        <h1 class="mt-3 mb-2 font-bold ml-5>">SCRIPTGO_SV</h1>
        </div>

</x-layout>

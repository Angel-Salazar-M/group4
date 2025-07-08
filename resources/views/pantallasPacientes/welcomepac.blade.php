<x-layout title="Welcome page">
    <x-barrapac/>
    <div id="start" class="bg-welcome1 bg-cover bg-center min-h-screen w-full pt-4">
        <div class="md:px-16 py-8 mx-auto space-x-12 lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-white text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl mt-16">
                    Technology and health in perfect armony</h1>
                <p class="max-w-xl mb-6 lg:mb-8 md:text-lg lg:text-lg text-white mt-20">Use our online method
                    to read your prescriptions and check your medical records. Say goodbye to lost or ilegible
                    prescriptions and repeated information.</p>

                <div class="flex justify-center bg-cafe hover:shadow-md hover:scale-110 transition w-24 py-2 mt-4">
                    <a href="/register" class="text-white font-semibold">Start now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-5 h-20">
        <div class="grid text-white font-bold place-content-center hover:scale-110 transition bg-azulnegro">
            <h1>Save Time</h1>
        </div>
        <div class="grid text-white font-bold place-content-center hover:scale-110 transition bg-celeste">
            <h1>Convenience</h1>
        </div>
        <div class="grid text-white font-bold place-content-center hover:scale-110 transition bg-azulnegro">
            <h1>Reliability</h1>
        </div>
        <div class="grid text-white font-bold place-content-center hover:scale-110 transition bg-celeste">
            <h1>Easy To Use</h1>
        </div>
        <div class="grid text-white font-bold place-content-center hover:scale-y-110 transition bg-azulnegro">
            <h1>Secure Storage</h1>
        </div>
    </div>

    <div id="plans" class="bg-azulnegro grid grid-cols-2 py-20">
        <div class="mt-20">
            <h1 class="max-w-2xl mb-4 text-white text-4xl font-extrabold tracking-tight md:text-5xl xl:text-6xl ml-20">
                Check your
                medical history
                every time you
                need</h1>
            <p class="max-w-xl mb-6 font-light lg:mb-8 md:text-lg lg:text-lg text-white mx-auto">With our premium plan,
                you will
                have
                total access to your medical history.</p>

            <div class="flex justify-center bg-cafe hover:shadow-md hover:scale-110 transition w-32 px-2 py-2 mt-4 ml-20">
                <a href="/register" class="text-white font-semibold">subscribe now</a>
            </div>
        </div>
        <div class=" flex justify-center">
            <img src="/img/Picture1.png" alt="">
        </div>
    </div>

    <div class="bg-celeste grid grid-cols-2">
        <div class="flex justify-center mt-20 mb-20">
            <img src="/img/Picture2.png" alt="">
        </div>
        <div class="mt-10">
            <h1 class="flex justify-center text-2xl font-semibold mb-3">Premium Plans</h1>
            <div class="grid grid-cols-2 w-[90%] mx-auto border-4 border-azulnegro p-6 h-[81%] gap-6">
                <div class="flex flex-col justify-between h-full">
                    <h1 class="mb-6 font-semibold text-lg mx-auto">Doctors</h1>
                    <p class="leading-relaxed mb-4 text-lg">
                        <strong>Basic plan:</strong> Limited patients storage and standard prescription template.
                    </p>
                    <p class="leading-relaxed mb-4 text-lg">
                        <strong>Premium plan:</strong> Unlimited patients storage and fully customizable prescription
                        templates.
                    </p>

                </div>
                <div class="flex flex-col justify-between h-full">
                    <h1 class="mb-6 font-semibold text-lg mx-auto">Patients</h1>
                    <p class="leading-relaxed mb-4 text-lg">
                        <strong>Basic plan:</strong> View prescriptions and the medical record for one profile.
                    </p>
                    <p class="leading-relaxed mb-4 text-lg mb-12">
                        <strong>Premium plan:</strong> Manage up to six family members profile.
                    </p>

                </div>
            </div>
        </div>
    </div>
    <div>
        <div id="missionVision" class="mt-10 mb-10">
            <h1 class="flex justify-center text-2xl font-semibold mb-3">Mission and Vision</h1>
            <div class="grid grid-cols-2 w-[90%] mx-auto p-6 h-[81%] gap-6">
                <div class="w-[75%] border-4 border-azulnegro p-6 mx-auto">
                    <h1 class="mb-6 font-semibold text-lg text-center">Mission</h1>
                    <p class="leading-relaxed mb-4 text-lg">
                        Transforming healthcare through a secure and efficient digital platform that organizes patient
                        information, facilitates access to care and improves quality of care.
                    </p>
                </div>
                <div class="mx-auto h-full w-[75%] border-4 border-azulnegro p-6">
                    <h1 class="mb-6 font-semibold text-lg text-center">Vision</h1>
                    <p class="leading-relaxed mb-4 text-lg">
                        Envision ScriptGo as one of the leading change agents in transforming the traditional way of
                        collecting general patient data, striving to create a future where technology and medicine merge
                        to deliver more personalized and efficient care, thus improving the patient experience and the
                        overall healthcare process.
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-layout>

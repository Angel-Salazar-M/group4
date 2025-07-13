@props(['name' => "Not available", 'age' => "Not available"])

<div class="w-[60%] border-4 border-cafe m-6 p-6 grid grid-rows-2 h-auto grid-rows-[auto_1fr] bg-gray-100">
        <div class="grid row-start-1 p-6 bg-cafe">
            <h1 class="text-white text-3xl font-semibold">Doctor's appointment</h1>
        </div>
        <div class="grid row-start-2 grid-cols-3 p-6">
            <div class="col-start-1 mx-auto">
                <h1><strong>Patient: </strong> {{ $name }} </h1>
            </div>
            <div class="col-start-2 mx-auto">
                <h1><strong>Date: </strong> {{ now()->format('Y-m-d') }} </h1>
            </div>
            <div class="col-start-3 mx-auto">
                <h1><strong>Age: </strong> {{ $age }} </h1>
            </div>
            <div class="border-2 border-cafe h-1 col-span-3 bg-cafe m-6"></div>
            <h1>Patient's ID</h1>
            <input type="number" placeholder=" Patient's ID"
                class="bg-white rounded-md text-black px-2 mt-4 mb-4 w-60 border-2 border-cafe col-start-1">
            <h1 class="col-start-2 row-start-3">Time scheduled</h1>
            <input type="time" placeholder=" Time scheduled"
                class="bg-white rounded-md text-black px-2 mt-4 mb-4 w-60 border-2 border-cafe col-start-2 row-start-4">
            <h1 class="col-start-3 row-start-3">Day scheduled</h1>
            <input type="date" placeholder=" Day scheduled"
                class="bg-white rounded-md text-black px-2 mt-4 mb-4 w-60 border-2 border-cafe col-start-3">
                <textarea name="" id="" placeholder="Reason for the appointment" class="bg-white rounded-md text-black px-3 mt-4 mb-4 w-auto h-28 border-2 border-cafe col-start-1 col-span-3 p-2"></textarea>
        </div>

    </div>
    </div>

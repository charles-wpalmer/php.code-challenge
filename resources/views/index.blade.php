<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SimpleStream | Code Test</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="antialiased  h-screen grid bg-slate-100 lg:items-center">

<div class=" grid lg:grid-cols-12 container gap-10 mx-auto p-4 lg:p-8">
    <div class="lg:col-span-8 py-5 bg-white rounded shadow-md">
        <h1 class="px-5 text-xl">My Bookings</h1>
        <div class="overflow-x-auto mt-8">
            <table class="table table-zebra">
                <!-- head -->
                <thead>
                <tr>
                    <th></th>
                    <th>Booking</th>
                    <th>Start time</th>
                    <th>End time</th>
                </tr>
                </thead>
                <tbody>
                <!-- row 1 -->
                <tr>
                    <th>1</th>
                    <td class="font-medium whitespace-nowrap">PHP Meet up London</td>
                    <td class="whitespace-nowrap">22/07/2024 14:00</td>
                    <td class="whitespace-nowrap">22/07/2024 18:00</td>
                </tr>
                <!-- row 2 -->
                <tr>
                    <th>2</th>
                    <td class="font-medium whitespace-nowrap">Laravel Meet up London</td>
                    <td class="whitespace-nowrap">22/07/2024 14:00</td>
                    <td class="whitespace-nowrap">22/07/2024 18:00</td>
                </tr>
                <!-- row 3 -->
                <tr>
                    <th>3</th>
                    <td class="font-medium whitespace-nowrap">Tailwind Meet up London</td>
                    <td>22/07/2024 14:00</td>
                    <td>22/07/2024 18:00</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="lg:col-span-4 p-5 bg-white shadow-md grid gap-6 ">
        <h1 class="text-xl">Add booking</h1>

        <div class="grid gap-5">
            <div>
                <label class="input input-bordered flex items-center gap-2">
                    <input type="text" class="grow" placeholder="Title"/>
                </label>
                <p class="text-sm text-red-600 mt-2">The title field is required</p>
            </div>
            <div>
                <label class="input input-bordered flex items-center gap-2">
                    <input type="datetime-local" class="grow" placeholder="Start date"/>
                </label>
                <p class="text-sm text-red-600 mt-2">The start_time field is required</p>
            </div>
            <div>
                <label class="input input-bordered flex items-center gap-2">
                    <input type="datetime-local" class="grow" placeholder="End date"/>
                </label>
                <p class="text-sm text-red-600 mt-2">The end_time field is required</p>
            </div>
        </div>

        <div>
            <button class="btn btn-primary btn-block">Save</button>
        </div>
    </div>
</div>

</body>

</html>

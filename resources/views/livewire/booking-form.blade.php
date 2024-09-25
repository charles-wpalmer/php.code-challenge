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
            @foreach($bookings as $booking)
                <tr>
                    <th>1</th>
                    <td class="font-medium whitespace-nowrap">{{ $booking->title }}</td>
                    <td class="whitespace-nowrap">{{ $booking->start_time }}</td>
                    <td class="whitespace-nowrap">{{ $booking->end_time }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="lg:col-span-4 p-5 bg-white shadow-md grid gap-6 ">
    <h1 class="text-xl">Add booking</h1>
    <form wire:submit.prevent="createBooking">
        <div class="grid gap-5">
            <div>
                <label class="input input-bordered flex items-center gap-2">
                    <input wire:model="title" id="title" type="text" class="grow" placeholder="Title"/>
                </label>
                @error('title')<p class="text-sm text-red-600 mt-2">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="input input-bordered flex items-center gap-2">
                    <input wire:model="start_time" id="start_time" type="datetime-local" class="grow" placeholder="Start date"/>
                </label>
                @error('start_time')<p class="text-sm text-red-600 mt-2">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="input input-bordered flex items-center gap-2">
                    <input wire:model="end_time" id="end_time" type="datetime-local" class="grow" placeholder="End date"/>
                </label>
                @error('end_time')<p class="text-sm text-red-600 mt-2">{{ $message }}</p>@enderror
            </div>
        </div>

        <br>
        <div>
            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </div>
    </form>
</div>
</div>
<script>
    document.addEventListener('livewire:load', function () {
        flatpickr("#start_time", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });

        flatpickr("#end_time", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
    });

    // Re-initialize Flatpickr after Livewire updates (this is necessary for reactivity)
    Livewire.hook('message.processed', (message, component) => {
        flatpickr("#start_time", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });

        flatpickr("#end_time", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
    });
</script>

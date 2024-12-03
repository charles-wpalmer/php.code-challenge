<div class="container grid gap-10 p-4 mx-auto lg:grid-cols-12 lg:p-8">
    <div class="py-5 bg-white rounded shadow-md lg:col-span-8">
        <h1 class="px-5 text-xl">My Bookings</h1>
        <div class="mt-8 overflow-x-auto">
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
                        <th>{{ $booking->id }}</th>
                        <td class="font-medium whitespace-nowrap">{{ $booking->title }}</td>
                        <td class="whitespace-nowrap">{{ $booking->start_time }}</td>
                        <td class="whitespace-nowrap">{{ $booking->end_time }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="grid gap-6 p-5 bg-white shadow-md lg:col-span-4 ">
        <h1 class="text-xl">Add booking</h1>
        <form wire:submit.prevent="createBooking">
            <div class="grid gap-5">
                <div>
                    <label class="flex items-center gap-2 input input-bordered">
                        <input wire:model="title" id="title" type="text" class="grow" placeholder="Title"/>
                    </label>
                    @error('title')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="flex items-center gap-2 input input-bordered">
                        <input wire:model="start_time" id="start_time" type="text" class="grow" placeholder="Start date"/>
                    </label>
                    @error('start_time')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="flex items-center gap-2 input input-bordered">
                        <input wire:model="end_time" id="end_time" type="text" class="grow" placeholder="End date"/>
                    </label>
                    @error('end_time')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
                </div>
            </div>

            <br>
            <div>
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </div>
        </form>
    </div>
    @push('scripts')
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            flatpickr("#start_time", {});
            flatpickr("#end_time", {});
        });

        </script>
    @endpush
</div>

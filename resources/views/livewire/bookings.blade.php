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

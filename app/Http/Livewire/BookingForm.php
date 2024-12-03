<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use Illuminate\Support\Collection;
use Livewire\Component;

class BookingForm extends Component
{
    public string $title;
    public string $start_time;
    public string $end_time;

    public Collection $bookings;

    protected array $rules = [
        'title' => 'required|string|max:255',
        'start_time' => 'required|date|after_or_equal:now',
        'end_time' => 'required|date|after:start_time',
    ];

    public function mount()
    {
        $this->bookings = Booking::all();
    }

    public function render()
    {
        return view('livewire.booking-form');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function createBooking()
    {
        $this->validate();

        Booking::create([
            'title' => $this->title,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
        ]);

        $this->resetFields();
        $this->bookings = Booking::all();
    }

    public function resetFields()
    {
        $this->title = '';
        $this->start_time = '';
        $this->end_time = '';
    }
}

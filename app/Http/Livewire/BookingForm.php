<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use Livewire\Component;

class BookingForm extends Component
{
    public $title;
    public $start_time;
    public $end_time;

    protected $rules = [
        'title' => 'required|string|max:255',
        'start_time' => 'required|date|after_or_equal:now',
        'end_time' => 'required|date|after:start_time',
    ];

    public function mount()
    {
        $this->bookings = Booking::all();
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
        $this->redirect('/');
    }

    public function resetFields()
    {
        $this->title = '';
        $this->start_time = '';
        $this->end_time = '';
    }

    public function render()
    {
        return view('livewire.booking-form');
    }
}

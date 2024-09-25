<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use Livewire\Component;

class Bookings extends Component
{
    public $bookings;

    public function mount()
    {
        $this->bookings = Booking::all();
    }

    public function render()
    {
        return view('livewire.bookings');
    }
}

<?php

namespace App\Livewire\Guest;

use Livewire\Component;

class Warranty extends Component
{
    public function render()
    {
        return view('livewire.guest.warranty')->layout('components.layouts.guest.app');
    }
}

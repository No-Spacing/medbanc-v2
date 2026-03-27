<?php

namespace App\Livewire\Guest;

use Livewire\Component;

class Manuals extends Component
{
    public function render()
    {
        return view('livewire.guest.manuals')->layout('components.layouts.guest.app');
    }
}

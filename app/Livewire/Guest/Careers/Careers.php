<?php

namespace App\Livewire\Guest\Careers;

use Livewire\Component;

class Careers extends Component
{
    public function render()
    {
        return view('livewire.guest.careers.careers')
        ->layout('components.layouts.guest.app');
    }
}

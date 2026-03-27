<?php

namespace App\Livewire\Guest;

use Livewire\Component;

class NewsEvents extends Component
{
    public function render()
    {
        return view('livewire.guest.news-events.news-events')
        ->layout('components.layouts.guest.app')
        ->with(['newsEvents' => []]);
    }
}

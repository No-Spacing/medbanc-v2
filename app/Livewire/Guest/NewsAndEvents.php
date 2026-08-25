<?php

namespace App\Livewire\Guest;

use Livewire\Component;
use App\Models\NewsEvents;

class NewsAndEvents extends Component
{
    public function render()
    {
      

        return view('livewire.guest.news-events.news-events')
        ->layout('components.layouts.guest.app')
        ->with(['newsEvents' => NewsEvents::all()]);
    }
}

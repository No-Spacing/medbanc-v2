<?php

namespace App\Livewire\Guest\NewsEvents;

use Livewire\Component;
use App\Models\NewsEvents;
use Livewire\Attributes\Url;

class ShowNewsEvents extends Component
{
    #[Url]
    public $id = 0;

    public function render()
    {
        $relatedArticles = NewsEvents::whereNotIn('id', [$this->id])->get();

        return view('livewire.guest.news-events.show-news-events')
        ->layout('components.layouts.guest.app')
        ->with(['newsEvent' => NewsEvents::findOrFail($this->id)])
        ->with(['relatedArticles' => $relatedArticles]);
    }
}

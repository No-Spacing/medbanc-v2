<?php

namespace App\Livewire\Auth\Newsevents;

use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Validate;

use App\Models\NewsEvents;

class CreateNewsEvents extends Component
{

    use WithPagination;

    #[Url]
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.auth.newsevents.create-news-events')
        ->layout('components.layouts.auth.user')
        ->with([
            'news_events' =>NewsEvents::where('title', 'like', '%' . $this->search . '%')
            ->paginate(5)
            ->withQueryString()
        ]);
    }
}

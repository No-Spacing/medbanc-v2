<?php

namespace App\Livewire\Auth\Career;

use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

use App\Models\Career;

class CreateCareer extends Component
{
    use WithPagination;

    #[Url]
    public $search = '';

    public $career_id;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function careerModal($id)
    {
        $this->career_id = $id;
    }

    public function render()
    {
        return view('livewire.auth.career.create-career')
        ->layout('components.layouts.auth.user')
        ->with([
            'careers' => Career::where('title', 'like', '%' . $this->search . '%')
            ->paginate(5)
            ->withQueryString()
        ])
        ->with([
            'career_details' => Career::where('id', $this->career_id)
            ->first()
        ]);
    }
}

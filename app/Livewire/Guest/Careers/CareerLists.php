<?php

namespace App\Livewire\Guest\Careers;

use Livewire\Component;
use App\Models\Career;
use Livewire\WithPagination;

class CareerLists extends Component
{
    use WithPagination; // Enable pagination

    public $search = ''; // Stores search input

    protected $paginationTheme = 'tailwind'; // Ensures pagination styles match TailwindCSS

    protected $queryString = ['search']; // Keeps search value in URL

    public function updatedSearch()
    {
        $this->resetPage(); // Reset pagination when search input changes
    }

    public function selectCareer($careerId)
    {
        $career = Career::find($careerId);

        if ($career) {
            $this->dispatch('careerSelected', $career->toArray());
        }
    }

    public function render()
    {
        $careers = Career::where('title', 'like', '%' . $this->search . '%')->paginate(5);
        return view('livewire.guest.careers.career-lists',
            ['careers' => $careers]
        );
    }
}

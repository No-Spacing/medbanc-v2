<?php

namespace App\Livewire\Auth\Category;

use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

use App\Models\Category;

class CreateCategory extends Component
{
    use WithPagination;

    #[Url]
    public $search = '';
    
    public $category_id;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function openUpdateModal($id){
        $this->category_id = $id;
    }

    public function render()
    {
        return view('livewire.auth.category.create-category')
        ->layout('components.layouts.auth.user')
        ->with([
            'categories' => Category::where('name', 'like', '%' . $this->search . '%')
            ->paginate(5)
            ->withQueryString()
        ])
        ->with(['modalDetails' => Category::where('id', $this->category_id)->first()]);
    }
}

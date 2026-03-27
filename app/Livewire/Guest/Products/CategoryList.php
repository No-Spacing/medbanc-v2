<?php

namespace App\Livewire\Guest\Products;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;
use App\Models\Product;

class CategoryList extends Component
{

    use WithPagination; // Enable pagination

    public function render()
    {
        return view('livewire.guest.products.category-list')
        ->layout('components.layouts.guest.app')
        ->with(['categories' => Category::all()]);
    }
}

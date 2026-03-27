<?php

namespace App\Livewire\Guest\Products;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;
use App\Models\Product;

class Products extends Component
{   
    public function render()
    {
        return view('livewire.guest.products.products')
        ->layout('components.layouts.guest.app');
    }
}

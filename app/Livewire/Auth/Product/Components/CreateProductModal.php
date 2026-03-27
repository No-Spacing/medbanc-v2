<?php

namespace App\Livewire\Auth\Product\Components;

use Livewire\Component;

class CreateProductModal extends Component
{
    public $name, $category_id, $description, $photos = [];
    
    public function render()
    {
        return view('livewire.auth.product.components.create-product-modal');
    }
}

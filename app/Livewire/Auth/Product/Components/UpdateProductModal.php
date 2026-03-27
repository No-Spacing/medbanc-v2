<?php

namespace App\Livewire\Auth\Product\Components;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;

class UpdateProductModal extends Component
{
    use WithFileUploads;

    public $updateName, $id;

    #[Validate(['photos.*' => 'image|max:5024'])]
    public $updatePhotos = [];

    public function update()
    { 
        foreach ($this->updatePhotos as $photo) {
            $photo->storeAs('images/products/medical-equipment', $photo->getClientOriginalName(), 'public_uploads');
            ProductImage::create(['image' => 'images/products/medical-equipment/'.$photo->getClientOriginalName(),
                'product_id' => $this->id
            ]);
        }  

        $this->reset('updatePhotos');
    }

    public function render()
    {
        return view('livewire.auth.product.components.update-product-modal')
        ->with([
            'product_details' => Product::select('description')
            ->where('products.id', $this->id)
            ->first()
        ]);
    }
}

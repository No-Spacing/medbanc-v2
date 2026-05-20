<?php

namespace App\Livewire\Auth\Product\Components;

use App\Models\Product;
use App\Models\ProductImage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProductModal extends Component
{
    use WithFileUploads;

    public $name, $category_id, $description;
    public $photos = [];

    protected $rules = [
        "name" => "required|string|max:255",
        "category_id" => "required|exists:categories,id",
        "description" => "required|string",
        "photos.*" => "image|max:4096"
    ];

    public function save()
    {
        $this->validate();

        $product = Product::create([
            "name" => $this->name,
            "category_id" => $this->category_id,
            "description" => $this->description
        ]);

        foreach ($this->photos as $photo) {
            $filename = $photo->getClientOriginalName();

            $photo->storeAs(
                'images/products/medical-equipment',
                $filename,
                ['disk' => 'public_path_disk']
            );

            ProductImage::create([
                'product_id' => $product->id,
                'image' => 'images/products/medical-equipment/' . $filename
            ]);
        }

        $this->reset(["name", "category_id", "description", "photos"]);

        $this->dispatch("close-create-modal");

        session()->flash("success", "Product created successfully");
    }

    public function render()
    {
        return view('livewire.auth.product.components.create-product-modal');
    }
}

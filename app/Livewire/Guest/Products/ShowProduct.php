<?php

namespace App\Livewire\Guest\Products;

use Livewire\Component;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;

class ShowProduct extends Component
{
    public $prodId, $catslug;

    public $selectedProduct = null;
    public $currentImage, $firstImage; // Store the large image dynamically


    public function mount($category_slug, $product_id)
    {
        $this->prodId = $product_id;
        $this->catslug = $category_slug;

        $this->firstImage = ProductImage::where('product_id', $this->prodId)
            ->first(); // get FIRST image, not skip(1)

        if ($this->firstImage) {
            $this->currentImage = $this->firstImage->image;
        } else {
            $this->currentImage = null;
        }
    }

    public function selectImage($image)
    {
        $this->currentImage = $image; // Update the large image dynamically
    }

    public function render()
    {

        $image_count = ProductImage::where('product_id', $this->prodId)->count();

        return view('livewire.guest.products.show-product')
        ->layout('components.layouts.guest.app')
        ->with(['images' => ProductImage::where('product_id', $this->prodId)->skip(1)->take($image_count)->get()])
        ->with('last_image', $this->firstImage)
        ->with(['product' => Product::where('id', $this->prodId)->first()])
        ->with(['category' => Category::where('slug', $this->catslug)->first()]);
    }
}

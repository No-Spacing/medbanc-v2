<?php

namespace App\Livewire\Guest\Products;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Product;
use App\Models\Category;


class ProductList extends Component
{
    use WithPagination;

    public $slug;

    public function mount($category_slug)
    {
        $this->slug = $category_slug;

    }

    public function render()
    {
        // Product::where('category_id', $this->categoryid)
        // ->join('product_images', 'products.id', '=' , 'product_images.product_id')
        // ->paginate(9)->withQueryString();
        $category_id = Category::select('id')->where('slug', $this->slug)->first();
        return view('livewire.guest.products.product-list')
                ->layout('components.layouts.guest.app')
                ->with(['category' => Category::where('slug', $this->slug)->first()])
                ->with([
                    'products' => Product::with('product_image')
                    ->where('category_id', $category_id['id'])
                    ->paginate(9)
                    ->withQueryString()
                ]);
    }
}

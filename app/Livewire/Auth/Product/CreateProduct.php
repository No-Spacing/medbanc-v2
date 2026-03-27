<?php

namespace App\Livewire\Auth\Product;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

use Livewire\Attributes\Url;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\ProductImage;

class CreateProduct extends Component
{
    use WithPagination, WithFileUploads;

    #[Url]
    public $search = '';

    public $product_id;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function productModal($id)
    {
        $this->product_id = $id;
    }

    public function update()
    { 
        foreach ($this->updatePhotos as $photo) {
            $photo->storeAs('images/products/medical-equipment', $photo->getClientOriginalName(), 'public_uploads');
            ProductImage::create(['image' => 'images/products/medical-equipment/'.$photo->getClientOriginalName(),
                'product_id' => $this->product_id
            ]);
        }  

        $this->reset('updatePhotos');
    }

    public function save()
    {
        // Product::create([
        //     'name' => $this->name,
        //     'category_id' => $this->category_id,
        //     'description' => $this->description,
            
        // ]);
    }

    public function render()
    {
        return view('livewire.auth.product.create-product')
        ->layout('components.layouts.auth.user')
        ->with([
            'products' => Product::with('product_image')
            ->with('category')
            ->where('name', 'like', '%' . $this->search . '%')
            ->where('description', 'like', '%' . $this->search . '%')
            ->paginate(5)
            ->withQueryString()
        ]);
    }
}

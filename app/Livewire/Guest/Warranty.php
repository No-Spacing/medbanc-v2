<?php

namespace App\Livewire\Guest;

use Livewire\Component;

use App\Models\Product;

class Warranty extends Component
{
    public function render()
    {
        $products = Product::select('name')->get();
        return view('livewire.guest.warranty')
        ->layout('components.layouts.guest.app')
        ->with(['products' => $products]);
    }
}

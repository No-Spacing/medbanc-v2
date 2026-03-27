<?php

namespace App\Livewire\Auth;

use Livewire\Component;

use App\Models\User;
use App\Models\Roles;
use App\Models\Product;
use App\Models\Career;
use App\Models\NewsEvents;

use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public function render()
    {

        return view('livewire.auth.dashboard')
        ->layout('components.layouts.auth.user')
        ->with(['admin' => Auth::user()->name])
        ->with(['users' => Roles::with('user_role')->get()])
        ->with(['products' => Product::all()])
        ->with(['careers' => Career::all()])
        ->with(['news_events' => NewsEvents::all()]);
    }
}

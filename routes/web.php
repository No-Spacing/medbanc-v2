<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Guest\Home;
use App\Livewire\Guest\About;
use App\Livewire\Guest\NewsEvents;
use App\Livewire\Guest\Contact;
use App\Livewire\Guest\Warranty;
use App\Livewire\Guest\Manuals;

use App\Livewire\Guest\Careers\Careers;

use App\Livewire\Auth\Category\CreateCategory;

use App\Livewire\Guest\Products\Products;
use App\Livewire\Guest\Products\ProductList;
use App\Livewire\Guest\Products\ShowProduct;

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Dashboard;
use App\Livewire\Auth\Product\CreateProduct;
use App\Livewire\Auth\Career\CreateCareer;
use App\Livewire\Auth\CreateNewsEvents;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


Route::middleware(['guest'])->group(function () {
    Route::get('/', Home::class)->name('/');

    Route::get('/about', About::class)->name('about');

    Route::get('/contact', Contact::class)->name('contact');

    Route::get('/products', Products::class)->name('product');

    Route::get('/products/{category_slug}/product-list/', ProductList::class)->name('product-list');

    Route::get('/products/{category_slug}/product-list/show-product/{product_id}', ShowProduct::class)->name('show-product');

    Route::get('/news-events', NewsEvents::class)->name('news-events');

    Route::get('/careers', Careers::class)->name('careers');

    Route::get('/warranty', Warranty::class)->name('warranty');

    Route::get('/manuals', Manuals::class)->name('manuals');
});


Route::middleware(['users'])->group(function () {
    Route::get('/login', Login::class)->name('login');

    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::get('/create-category', CreateCategory::class)->name('create-category');

    Route::get('/create-product', CreateProduct::class)->name('create-product');

    Route::get('/create-career', CreateCareer::class)->name('create-career');

    Route::get('/create-news-events', CreateNewsEvents::class)->name('create-news-events');

    Route::get('/logout', function (Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    });
});




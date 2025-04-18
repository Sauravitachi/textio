<?php

use App\Livewire\Admin\Brand\ManageBrand;
use App\Livewire\Admin\Category\ManageCategory;
use App\Livewire\Admin\Product\ManageProduct;
use App\Livewire\Admin\Product\MultipleImages;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('categories',ManageCategory::class)->name('admin.categories');
    Route::get('brands',ManageBrand::class)->name('admin.brands');
    Route::get('products',ManageProduct::class)->name('admin.products');
    Route::get('productImage',MultipleImages::class)->name('admin.product-image');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');
Route::get('/product-list', function () {
    return view('admin.products.list');
})->name('product-list');
Route::get('/product-add', function () {
    return view('admin.products.create');
})->name('product-add');


Route::get('/brand-list', function () {
    return view('admin.brand.list');
})->name('brand-list');
Route::get('/brand-add', function () {
    return view('admin.brand.create');
})->name('brand-add');


Route::get('/category-add', function () {
    return view('admin.category.create');
})->name('category-add');
Route::get('/category-list', function () {
    return view('admin.category.list');
})->name('category-list');
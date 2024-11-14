<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\ShopController;

use App\Http\Controllers\ProductsController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/4kur', function () {
    return view('4kur');
})->name('4kur');

Route::get('/fisu', function () {
    return view('fisu');
})->name('fisu');

Route::get('/fisu', function () {
    return view('fisu');
})->name('fisu');

Route::get('/store', function () {
    return view('store');
})->name('store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




Route::get('/store', [ShopController::class, 'store'])->name('store');
Route::post('/add-to-cart', [ShopController::class, 'addToCart'])->name('addToCart');
Route::get('/cart', [ShopController::class, 'cart'])->name('cart');
Route::post('/clear-cart', [ShopController::class, 'clearCart'])->name('clearCart'); // New route




Route::middleware(['auth'])->group(function () {
    Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
    Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
    Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');

});


Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');






require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductsController;

Route::get('/', [NewsController::class, 'index']);

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
Route::post('/clear-cart', [ShopController::class, 'clearCart'])->name('clearCart');




Route::middleware(['auth'])->group(function () {
    Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
    Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
    Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');

});

Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    // News listing for admin
    Route::get('/news', [NewsController::class, 'index'])->name('news.index'); 
    
    // Create new news article
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create'); 
    
    // Store new news article
    Route::post('/news', [NewsController::class, 'store'])->name('news.store'); 
    
    // Edit news article
    Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit'); 
    
    // Update news article
    Route::put('/news/{id}', [NewsController::class, 'update'])->name('news.update'); 
    
    // Delete news article
    Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy'); 
    
    // View news article (for admin)
    Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show'); 
});

// Public route for viewing a single news article
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');


Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');



require __DIR__ . '/auth.php';

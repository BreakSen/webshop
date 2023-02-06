<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\HTTP\Controllers\CategoryController;
use App\HTTP\Controllers\BookController;
use App\Models\Category;

//Home page
Route::get('/', [CategoryController::class, 'index']);

//Get all books page where the user can see all books, but can only view them
Route::get('books/all-books', [BookController::class, 'bookList'])->name('books.list');

//Choosen Category page using Category_id
Route::get('/categories/{id}', [CategoryController::class, 'categoryOverview'])->name('categories.category-overview');

//Best sellers page using the bestseller Category_id 
Route::get('/categories/best-sellers/{id}', [CategoryController::class, 'bestSellersCategory'])->name('categories.best-sellers');

//Choosen book page using the Book id 
Route::get('/books/book-overview/{id}', [BookController::class, 'bookOverview'])->name('books.book-overview');


//Shop Cart

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Check out page
Route::get('/checkout', [CartController::class, 'checkOut'])->name('checkout');

//CRUD
Route::resource('products', BookController::class)->middleware('auth');
Route::post('products/{book}', 'BookController@destroy')->name('books.destroy');

//Breeze Routes 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__ . '/auth.php';

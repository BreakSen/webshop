<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\HTTP\Controllers\CategoryController;
use App\HTTP\Controllers\BookController;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// MY ROUTES

// Route::get('/', function () {
//     return view('welcome' , []);
// });

// Route::get('/', [PagesController::class, 'home'])->name('pages.home'); 

//(beter and more clear)

Route::get('/', [CategoryController::class, 'index']);

// Find a category by its ID and pass it to view called ******
Route::get('/categories/{id}', [CategoryController::class, 'categoryOverview'])->name('categories.category-overview');

// Route::get('/categories/{id}}', [CategoryController::class, 'categoryOverview'])->name('categories.category-overview');

// if (! file_exists($id) {
//      dd OR ddd('this category dose not exist');        SHOW THE MSEESEGE
//OR    abort(404);                                       GIVE THE 404 ERROR
//OR    return redirect('/);                              WELL GO BACK TO HOME PAGE
// })

Route::get('/books/book-overview/{id}', [BookController::class, 'bookOverview'])->name('books.book-overview');

// Route::get('/books/{id}', [BookController::class, 'show'])->name('books.book-overview');

Route::get('/categories/best-sellers/{id}', [CategoryController::class, 'bestSellersCategory'])->name('categories.best-sellers');


//Cart Routes
Route::get('books/all-books', [BookController::class, 'bookList'])->name('books.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Breeze Routes 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

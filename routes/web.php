<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome' , []);
// });

// Route::get('/', [PagesController::class, 'home'])->name('pages.home'); (beter and more clear)


Route::get('/', [CategoryController::class, 'index']);


// Find a category by its ID and pass it to view called ******
Route::get('categories/{id}', [CategoryController::class, 'categoryOverview'])->name('categories.category-overview');

// Route::get('/categories/{id}}', [CategoryController::class, 'categoryOverview'])->name('categories.category-overview');

// if (! file_exists($id) {
//      dd OR ddd('this category dose not exist');        SHOW THE MSEESEGE
//OR    abort(404);                                       GIVE THE 404 ERROR
//OR    return redirect('/);                              WELL GO BACK TO HOME PAGE
// })

Route::get('/books/book-overview/{id}', [BookController::class, 'bookOverview'])->name('books.book-overview');

// Route::get('/books/{id}', [BookController::class, 'show'])->name('books.book-overview');

Route::get('/categories/best-sellers/{id}', [CategoryController::class, 'bestSellersCategory'])->name('categories.best-sellers');
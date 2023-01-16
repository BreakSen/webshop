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

Route::get('/', function () {
    return view('welcome' , []);
});

Route::get('/categories/', [CategoryController::class, 'index'])->name('categories.index');

//Route::get('/categories/', [CategoryController::class, 'index'])->name('categories.category-overview');

Route::get('/books/', [BookController::class, 'index'])->name('books.index');

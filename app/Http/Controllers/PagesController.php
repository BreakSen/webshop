<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function CategoriesOverview() {
        $categories = Category::all();
        $category = new Category($parameters);

        return view('pages.categories-overview', ['categories' => $categories]);
    }
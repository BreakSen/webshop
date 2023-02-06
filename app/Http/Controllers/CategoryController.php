<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    //Get the categories in home page (index)
    public function index()
    {

        $categories = Category::all();


        return view('categories.index', ['categories' => $categories]);
    }

    public function categoryOverview($id)
    {

        $category = Category::findOrFail($id);

        return view('categories.category-overview', [
            'category' => $category
        ]);
    }

    //Find the best seller category and show it in index
    public function bestSellersCategory()
    {
        $bestSellersCategory = Category::find(19);
        return view('categories.best-sellers', ['category' => $bestSellersCategory]);
    }
}

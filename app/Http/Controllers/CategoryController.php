<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::all();

     
        return view('categories.index' , ['categories'=> $categories]);
        // $bestSellersId = 7;
        // $bestSellers = Category::whereHas('categories', function($query) use ($bestSellersId) {
        //     $query->where('id', $bestSellersId);
        // })->get();

        // $categories = Category::where('id', '<', $bestSellersId)->get();
        // return view('categories.index', compact('categories', 'bestSellers'));
        
    }

    public function categoryOverview($id)
    {
        //$category = Category::where('id', $id);
        $category = Category::findOrFail($id);
        //$products = Product::where('id', $id)->get();
        // dd($categories);
        return view('categories.category-overview' , [
            'category'=> $category
        ]);
        // $category = Category::findorfail($id);
        // $books = $category->books;
        // return view('category', compact('category', 'books'));
    }
    
    public function bestSellersCategory() {
        $bestSellersCategory = Category::find(19);
        return view('categories.best-sellers', ['category' => $bestSellersCategory]);
        // $books = $category->books()->take(5)->get();
        // return view('bestsellers')->with(['books' => $books]);

        // $bestSellersCategory = Category::where('id', 7)->first();
        // $bestSellerBooks = $bestSellersCategory->books()->take(5)->get();
        // return view('categories.index')->with(['bestSellerBooks' => $bestSellerBooks]);

        // $category = Category::find(7);
        // return view('index', ['category' => $category]);
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $books = book::all();

        // return view('books.book-overview' , ['books'=> $books]);
        $books = Book::latest()->paginate(50);
      
        return view('products.index',compact('books'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
        
    }
    
    public function bookOverview($id)
{
    $book = Book::findOrFail($id);
    return view('books.book-overview', ['book' => $book]);
}

public function bookList()
{
    $books = Book::all();

    return view('books.all-books',  ['books' => $books]);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
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
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'category_id' => 'required',
        ]);

        Book::create($request->all());
       
        return redirect()->route('products.index')
                        ->with('success','Book created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
        return view('products.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
        return view('products.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'category_id' => 'required',
        ]);
      
        $book->update($request->all());
      
        return redirect()->route('products.index')
                        ->with('success','Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        //
        $book->delete();
       
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}

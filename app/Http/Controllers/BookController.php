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
    $request->validate([
        'name' => 'required',
        'author' => 'required',
        'image' => 'required',
        'price' => 'required',
        'category_id' => 'required',
        'description' => 'required'
    ]);

    $book = new Book([
        'name' => $request->get('name'),
        'author' => $request->get('author'),
        'image' => $request->get('image'),
        'price' => $request->get('price'),
        'category_id' => $request->get('category_id'),
        'description' => $request->get('description')
    ]);

    // dd($book); // Debugging code
    $book->save();
    return redirect()->route('products.index')->with('success', 'Product created successfully.');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
        {
        $book = Book::findOrFail($id);
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
    public function update(Request $request, Book $book, $id)
    {
        $book = Book::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'image' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'description' => 'required'
        ]);
        //dd($request);
    
        
        $book->update($request->all());
        // dd($book);
      
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $book = Book::findOrFail($id);
        $book->forceDelete();
        return redirect()->route('products.index')->with('success', 'Book deleted successfully');
    }
}

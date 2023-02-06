<?php

namespace App\Http\Controllers;

use App\Models\book;
use Database\Seeders\BookSeeder;
use Illuminate\Http\Request;
use App\Models\Category;

class BookController extends Controller
{

    //Get books in the Prudocts page (CRUD for authenticated account)
    public function index()
    {

        $books = Book::latest()->paginate(50);

        return view('products.index', compact('books'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    //View the book details book
    public function bookOverview($id)
    {

        $book = Book::findOrFail($id);
        return view('books.book-overview', ['book' => $book]);
    }

    //Get all books details in the Books page (no CRUD, just for the user)
    public function bookList()
    {
        $books = Book::all();

        return view('books.all-books',  ['books' => $books]);
    }

    //Create Product function
    public function create()
    {
        $categories = Category::all();
        return view('products.create', ['categories' => $categories]);
    }

    //Get and store the new products data
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

        $book->save();
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    //Show product informations function
    public function show($id)
    {
        $categories = Category::all();
        $book = Book::findOrFail($id);
        $category = Category::where('id', $book->category_id)->first();
        return view('products.show', compact('book', 'categories', 'category'));
    }

    //Edit products data
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $categories = Category::all();
        return view('products.edit', compact('book', 'categories'));
    }

    //Update the product informations 
    public function update(Request $request, $id)
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

        $book->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    //Delete function
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->forceDelete();
        return redirect()->route('products.index')->with('success', 'Book deleted successfully');
    }
}

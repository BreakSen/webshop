{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Book List') }}
        </h2>
    </x-slot>
    <div class="container px-12 py-8 mx-auto">
        <h3 class="text-2xl font-bold text-purple-700">Our Book</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($books as $book)
            <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                <img src="{{ url($book->image) }}" alt="" class="w-full max-h-60">
                <div class="flex items-end justify-end w-full bg-cover">
                    
                </div>
                <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase">{{ $book->title }}</h3>
                    <span class="mt-2 text-gray-500">${{ $book->price }}</span>
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $book->id }}" name="id">
                        <input type="hidden" value="{{ $book->title }}" name="name">
                        <input type="hidden" value="{{ $book->price }}" name="price">
                        <input type="hidden" value="{{ $book->image }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">Add To Cart</button>
                    </form>
                </div>
                
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>--}}

<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')
@section('navbar')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    {{-- This is how you can Comment in Blade.php  --}}
</head>
@endsection
@section('body')
<body class="min-h-screen">
<section class="bg-white py-10">
  <div class="container mx-auto">
    <h2 class="text-left text-2xl font-medium">Categories</h2>
    <div class="bg-neutral-400 grid grid-cols-3 gap-4">
      @foreach ($categories as $category)
      @if($category->id < 7)
        <div class="bg-neutral-400 p-4">
          <a href="{{ route('categories.category-overview', $category->id) }}" class="text-black px-3 py-2 rounded-sm">{{ $category->name }}</a>
        </div>
        @endif
      @endforeach
    </div>

<section class="bg-white">
  <div class="container mx-auto">
    <h2 class="text-left text-2xl font-medium">Best Sellers</h2>
<a href="{{route('categories.best-sellers', ['id' => 7])}}">
    <h3 class="text-right text-1xl font-medium">
        <span class="hover:underline">see more</span>
    </h3>
</a>
    <div class="bg-neutral-400 grid grid-cols-5 gap-0 border border-neutral-400 border-l-0 border-r-0">
    @foreach ($categories as $category)
  @if($category->id == 7)
  @foreach ($category->books()->take(10)->get() as $book)
    <div class="bg-white p-4 border-t-2 border-b-2 border-l-0 border-r-0 border-neutral-400 flex items-center text-center text-lg">
    <a href="{{ route('books.book-overview', $book->id) }}">
        <img src="{{ $book->image }}" class="w-32 h-48 object-cover mr-2" alt="{{ $book->title }}">
        <p class="text-black">{{ $book->title }}</p>
    </a>
    </div>
@endforeach
  @endif
@endforeach
  </div>
</section>
</body>
@endsection
@section('footer')
<footer>
</footer>
@endsection
</html>
<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')
@section('navbar')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
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
  @foreach ($category->books()->take(5)->get() as $book)
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
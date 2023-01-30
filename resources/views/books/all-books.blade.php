<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>
@extends('layouts.app')

@section('navbar')

@endsection
@section('body')
<body class="min-h-screen">
<div class="bg-neutral-400 grid grid-cols-5 gap-0 border border-neutral-400 border-l-0 border-r-0">
    @foreach ($books as $book)
    <div class="bg-white p-4 border-t-1 border-b-2 border-l-0 border-r-0 border-neutral-400 flex items-center text-center text-lg">
    <a href="{{ route('books.book-overview', $book->id) }}">
        <img src="{{ $book->image }}" class="w-32 h-48 object-cover mr-2" alt="{{ $book->name }}">
        <p class="text-black">{{ $book->name }}</p>
    </a>             
    </div>
@endforeach
  </div>
    </div>
</body>
@endsection
@section('footer')
<footer>
</footer>
@endsection
</html>
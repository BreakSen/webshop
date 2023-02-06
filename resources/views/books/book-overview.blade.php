<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/resources/css/app.css">
  <title>{{$book->name}}</title>
</head>
@extends('layouts.app')

@section('navbar')

@endsection
@section('body')

<!-- The book info page -->

<body class="min-h-screen">
  <section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
      <div class="lg:flex lg:justify-between lg:w-4/5 mx-auto">
        <img alt="{{ $book->name }}" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ $book->image }}" style="width: 237px; height: 361px;">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
          <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $book->author }}</h2>
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $book->name }}</h1>
          <div class="flex mb-4">
            <p class="leading-relaxed">{{ $book->description }}</p>
          </div>
          <div class="flex lg:mt-6">
            <span class="title-font font-medium text-2xl text-gray-900 mr-3">Price: {{ $book->price }}€</span>
            <div class="ml-auto">
              <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $book->id }}" name="id">
                <input type="hidden" value="{{ $book->name }}" name="name">
                <input type="hidden" value="{{ $book->price }}" name="price">
                <input type="hidden" value="{{ $book->image }}" name="image">
                <input type="number" class="border-neutral-400 border-2 form-control mr-2" id="quantity" name="quantity" min="1" value="1">
                <button class="text-white bg-gray-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-600 rounded">ADD TO CART</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
@endsection
@section('footer')
<footer>
</footer>
@endsection

</html>
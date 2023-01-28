<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')

@section('navbar')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/resources/css/app.css">
    <title>The book overview pages</title>
</head>
@endsection
@section('body')
<body class="min-h-screen">
        <div class="col-md-8">
            <h2 class="text-center">{{ $book->title }}</h2>
            <p class="text-center">Written by {{ $book->author }}</p>
            <p class="text-center">Price:{{ $book->price }}€</p>
            <div class="form-group text-center ">
                <label for="quantity">Quantity:</label>
                <input type="number" class=" border-neutral-400 border-2 form-control" id="quantity" name="quantity" min="1" value="1">
            
            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $book->id }}" name="id">
                        <input type="hidden" value="{{ $book->title }}" name="title">
                        <input type="hidden" value="{{ $book->price }}" name="price">
                        <input type="hidden" value="{{ $book->image }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="border-neutral-400 border-2 text-center btn btn-primary">Add To Cart</button>
                    </form>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    <img src="{{ $book->image }}" style="width: 237px; height: 361
                    px;" alt="{{ $book->title }}">
            </div>
            <p class="">{{ $book->description }}</p>
        </div>
    </div>
</div>
</body>
@endsection
@section('footer')
<footer>
</footer>
@endsection
</html>
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
            <h2 class="text-right">{{ $book->title }}</h2>
            <p class="text-right">By {{ $book->author }}</p>
            <p class="text-right">{{ $book->price }}</p>
            <div class="form-group text-right ">
                <label for="quantity">Quantity:</label>
                <input type="number" class=" border-neutral-400 border-2 form-control" id="quantity" name="quantity" min="1" value="1">
            </div>
            <div class="text-right form-group">
                <a href="#" class="border-neutral-400 border-2  text-right btn btn-primary">Buy Now</a>
                <a href="#" class="border-neutral-400 border-2  text-right btn btn-secondary">Add to Cart</a>
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
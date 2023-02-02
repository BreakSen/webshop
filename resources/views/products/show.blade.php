@extends('products.layout')
  
@section('content')
<section class="pt-5 container mx-auto text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <section class="pt-5 container mx-auto text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
          <hp class="text-sm title-font text-gray-500 tracking-widest"><strong>Name: {{ $book->name }}</strong></p>
          <p class="text-gray-900 text-3xl title-font font-medium mb-1"><strong>Author: {{ $book->author }}</strong></p>
      <div class="lg:flex lg:justify-between lg:w-4/5 mx-auto">
        <img alt="{{ $book->name }}" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded " src="{{ $book->image }}" style="width: 79px; height: 120px;">
          <p class="text-gray-900 text-3xl title-font font-medium mb-1"><strong>Category: {{ $category->name}}</strong></p>
          <div class="flex lg:mt-6">
  <span class="title-font font-medium text-2xl text-gray-900 mr-3"><p><strong>Price: {{ $book->price }}€</strong></p></span>
          </div>
          <div class="flex mb-4">
            <p class="leading-relaxed"><strong>description:</strong><br>{{ $book->description }}</p>
          </div>
        </div>
      </div>
    </div>
    </section>
    </div>
</section>
    
          
@endsection
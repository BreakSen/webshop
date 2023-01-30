<x-app-layout>
@section('body')
@if (session('message'))
    <div class="alert alert-success p-4 mb-3 bg-green-400 rounded">
    <p class="text-green-800">{{ session('message') }}</p>
    </div>
@endif
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
    <div class="bg-white p-4 border-t-1 border-b-1 border-l-0 border-r-0 border-neutral-400 flex items-center text-center text-lg">
    <a href="{{ route('books.book-overview', $book->id) }}">
        <img src="{{ $book->image }}" class="w-32 h-48 object-cover mr-2" alt="{{ $book->name }}">
        <p class="text-black">{{ $book->name }}</p>
    </a>
{{--   Add to cart option  
  <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $book->id }}" name="id">
                        <input type="hidden" value="{{ $book->name }}" name="name">
                        <input type="hidden" value="{{ $book->price }}" name="price">
                        <input type="hidden" value="{{ $book->image }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="border-neutral-400 border-2 text-center btn btn-primary">Add To Cart</button>
                    </form>--}}
                    
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
</x-app-layout>
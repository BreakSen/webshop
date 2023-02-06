<head>
  <title>Home</title>
</head>
<x-app-layout>
  @section('body')
  {{-- Display the success message after the checkout --}}
  @if (session('message'))
  <div class="alert alert-success p-4 mb-3 bg-green-400 rounded">
    <p class="text-green-800">{{ session('message') }}</p>
  </div>
  @endif

  <body>
    <section class="text-gray-600 body-font">
      <div class="container px-4 py-5 mx-auto">
        <div class="flex flex-wrap w-full mb-5 flex-col items-left text-center">
          <h2 class="text-left text-2xl font-medium">Categories</h2>
        </div>
        <div class="bg-white grid grid-cols-3 gap-4">
          <!-- showing all categories except best sellers category -->
          @foreach ($categories as $category)
          @if($category->id < 19) <div class="bg-white p-1">
            <a href="{{ route('categories.category-overview', $category->id) }}" class="text-black px-3 py-2 rounded-sm">{{ $category->name }}</a>
        </div>
        @endif
        @endforeach
      </div>
    </section>

    <section class="bg-white text-gray-600 body-font">
      <div class="container mx-auto">
        <h2 class=" pb-2 pt-4 text-left text-2xl font-medium ">Best Sellers</h2>
        <a href="{{route('categories.best-sellers', ['id' => 7])}}">
          <h3 class="text-right text-1xl font-medium">
            <span class="hover:underline">see more</span>
          </h3>
        </a>
        <div class="bg-neutral-400 grid grid-cols-5 gap-0 border border-neutral-400 border-l-0 border-r-0">
          <!-- showing only the best sellers category -->
          @foreach ($categories as $category)
          @if($category->id == 19)
          @foreach ($category->books()->take(10)->get() as $book)
          <div class="bg-white p-4 border-t-1 border-b-1 border-l-0 border-r-0 border-neutral-400 flex items-center text-center text-lg">
            <a href="{{ route('books.book-overview', $book->id) }}">
              <img src="{{ $book->image }}" class="w-32 h-48 object-cover mr-2" alt="{{ $book->name }}">
              <p class="text-black">{{ $book->name }}</p>
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
</x-app-layout>
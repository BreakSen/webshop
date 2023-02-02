<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Products</title>
</head>

<body>
    <x-app-layout>


        @section('body')

        <body>
            <div class="row pt-8">
                <div class="col-lg-12 margin-tb text-right text-white">
                    <div class="pull-right">
                        <a class="btn bg-gray-500 hover:bg-gray-600 text-white" href="{{ route('products.create') }}">+</a>
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>image</th>
                    <th>Name</th>
                    <th>author</th>
                    <th>price</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($books as $book)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td><img src="{{ $book->image }}" style="width: 47px; height: 72
                    px;" alt="{{ $book->name }}"></td>
                    <td><a href="{{ route('books.book-overview', $book->id) }}">{{ $book->name }}</a></td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->price }}€</td>
                    <td>
                        <form action="{{ route('books.destroy',$book->id) }}" method="POST">

                            <a class="btn btn-info hover:bg-green-400 bg-green-600" href="{{ route('products.show',$book->id) }}">Show</a>

                            <a class="btn btn-primary hover:bg-blue-400 bg-blue-600" href="{{ route('products.edit',$book) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger bg-red-600 hover:bg-red-400">Delete</button>
                        </form>

                


                    </td>
                </tr>
                @endforeach
            </table>

            {!! $books->links() !!}
        </body>
        @endsection
    </x-app-layout>
</body>

</html>
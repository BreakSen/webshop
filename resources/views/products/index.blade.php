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
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
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
            <th>category</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="{{ $book->image }}" style="width: 47px; height: 72
                    px;" alt="{{ $book->name }}"></td>
            <td>{{ $book->name }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->price }}</td>
            <td>{{ $book->category_id }}</td>
            <td>
                <form action="{{ route('products.destroy',$book->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('products.show',$book->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$book->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
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
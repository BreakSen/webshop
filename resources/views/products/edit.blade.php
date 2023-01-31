@extends('products.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('products.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" value="{{ $book->name }}">
            </div>
        </div>
        </div>
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Author:</strong>
                <input type="text" name="author" class="form-control" value="{{ $book->author }}">
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>image:</strong>
                <input type="text" name="image" class="form-control" value="{{ $book->image }}">
            </div>
        </div>
        </div>
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="integer" name="price" class="form-control" value="{{ $book->price }}">
            </div>
            </div>
            </div>
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>description:</strong>
                <input type="text" name="description" class="form-control" value="{{ $book->description }}">
            </div>
        </div>
        </div>
        <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
     <div class="dropdown-content">
    <label for="Category">Category</label>
    <select id="Category" name="category_id">
        @foreach($categories as $category)
        <option value="{{ $category->id }}" {{ ($category->id == $book->category_id) ? 'selected' : '' }}>{{ $category->name }}</option>
        @endforeach
    </select>
</div>

</div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
    </form>
@endsection
@extends('layouts.master')
<<<<<<< HEAD

@section('title', 'Add Product')

@section('content')

<form action="{{ route('products_save', $product->id) }}" method="post">
    {{ csrf_field() }}

    <div class="row mb-2">
        <div class="col-6">
            <label for="code" class="form-label">Code:</label>
            <input type="text" class="form-control" placeholder="Code" name="code" required value="{{ $product->code }}">
        </div>
        <div class="col-6">
            <label for="model" class="form-label">Model:</label>
            <input type="text" class="form-control" placeholder="Model" name="model" required value="{{ $product->model }}">
        </div>
    </div>

    <div class="row mb-2">
        <div class="col">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" placeholder="Name" name="name" required value="{{ $product->name }}">
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-6">
            <label for="price" class="form-label">Price:</label>
            <input type="numeric" class="form-control" placeholder="Price" name="price" required value="{{ $product->price }}">
        </div>
        <div class="col-6">
            <label for="photo" class="form-label">Photo:</label>
            <input type="text" class="form-control" placeholder="Photo" name="photo" required value="{{ $product->photo }}">
        </div>
    </div>

    <div class="row mb-2">
        <div class="col">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" placeholder="Description" name="description" required>{{ $product->description }}</textarea>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

=======
@section('title', 'Prime Numbers')
@section('content')

<form action="{{route('products_save', $product->id)}}" method="post">
    {{ csrf_field() }}
    {{ csrf_field() }}
    @foreach($errors->all() as $error)
    <div class="alert alert-danger">
    <strong>Error!</strong> {{$error}}
    </div>
    @endforeach
    <div class="row mb-2">
        <div class="col-6">
            <label for="code" class="form-label">Code:</label>
            <input type="text" class="form-control" placeholder="Code" name="code" required value="{{$product->code}}">
        </div>
        <div class="col-6">
            <label for="model" class="form-label">Model:</label>
            <input type="text" class="form-control" placeholder="Model" name="model" required value="{{$product->model}}">
        </div>
    </div>
    <div class="row mb-2">
        <div class="col">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" placeholder="Name" name="name" required value="{{$product->name}}">
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-6">
            <label for="model" class="form-label">Price:</label>
            <input type="numeric" class="form-control" placeholder="Price" name="price" required value="{{$product->price}}">
        </div>
        <div class="col-6">
            <label for="model" class="form-label">Photo:</label>
            <input type="text" class="form-control" placeholder="Photo" name="photo" required value="{{$product->photo}}">
        </div>
    </div>
    <div class="row mb-2">
        <div class="col">
            <label for="name" class="form-label">Description:</label>
            <textarea type="text" class="form-control" placeholder="Description" name="description" required>{{$product->description}}</textarea>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col">
            <label for="name" class="form-label">Quantity:</label>
            <textarea type="text" class="form-control" placeholder="Description" name="description" required>{{$product->quantity}}</textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
>>>>>>> 80ae6ee (after midterm disccusion)
@endsection

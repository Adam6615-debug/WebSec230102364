@extends('layouts.master')
@section('title', 'register')
@section('content')

@if(request()->has('error'))
    <div class="alert alert-danger">
        <strong>Error!</strong> {{ request()->get('error') }}
    </div>
@endif

<form action="{{route('do_register')}}" method="post">
    {{ csrf_field() }}
    
    <div class="form-group mb-2">
        <label for="code" class="form-label">Name:</label>
        <input type="text" class="form-control" placeholder="name" name="name" required>
    </div>
    
    <div class="form-group mb-2">
        <label for="model" class="form-label">Email:</label>
        <input type="email" class="form-control" placeholder="email" name="email" required>
    </div>
    
    <div class="form-group mb-2">
        <label for="model" class="form-label">Password:</label>
        <input type="password" class="form-control" placeholder="password" name="password" required>
    </div>
    
    <div class="form-group mb-2">
        <label for="model" class="form-label">Password Confirmation:</label>
        <input type="password" class="form-control" placeholder="Confirmation" name="confirm_password" required>
    </div>
    
    <div class="form-group mb-2">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
</form>

@endsection

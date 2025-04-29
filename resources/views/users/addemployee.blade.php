@extends('layouts.master')

@section('title', 'Add Employee')

@section('content')
<div class="d-flex justify-content-center">
  <div class="card m-4 col-sm-6">
    <div class="card-body">
      <form action="{{ route('addemployee') }}" method="post">
        {{ csrf_field() }}

        @foreach($errors->all() as $error)
        <div class="alert alert-danger">
          <strong>Error!</strong> {{$error}}
        </div>
        @endforeach

        <div class="form-group mb-2">
          <label for="name" class="form-label">Name:</label>
          <input type="text" class="form-control" placeholder="Name" name="name" required>
        </div>

        <div class="form-group mb-2">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" placeholder="Email" name="email" required>
        </div>

        <div class="form-group mb-2">
          <label for="password" class="form-label">Password:</label>
          <input type="password" class="form-control" placeholder="Password" name="password" required>
        </div>

        <div class="form-group mb-2">
          <label for="password_confirmation" class="form-label">Password Confirmation:</label>
          <input type="password" class="form-control" placeholder="Password Confirmation" name="password_confirmation" required>
        </div>

        <div class="form-group mb-2">
          <button type="submit" class="btn btn-primary">Add Employee</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

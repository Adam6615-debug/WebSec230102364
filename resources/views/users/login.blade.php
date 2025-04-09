@extends('layouts.master')
<<<<<<< HEAD
@section('title', 'register')
@section('content')

<div class="container mt-5"> <!-- Add container with margin -->
    <div class="row justify-content-center"> <!-- Center the form -->
        <div class="col-md-6"> <!-- Set form width -->
        
            <form action="{{route('do_login')}}" method="post" class="p-4 shadow rounded bg-white">
                {{ csrf_field() }}

                <div class="form-group">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            <strong>Error!</strong> {{$error}}
                        </div>
                    @endforeach
                </div>

                <div class="form-group mb-2">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" placeholder="email" name="email" required>
                </div>

                <div class="form-group mb-2">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" placeholder="password" name="password" required>
                </div>

                <div class="form-group mb-2">
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </div>
            </form>
            
        </div>
    </div>
</div>

=======
@section('title', 'Login')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card m-4 col-sm-6">
    <div class="card-body">
      <form action="{{route('do_login')}}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">
          <strong>Error!</strong> {{$error}}
        </div>
        @endforeach
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
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>
    </div>
  </div>
</div>
>>>>>>> 80ae6ee (after midterm disccusion)
@endsection

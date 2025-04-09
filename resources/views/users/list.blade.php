@extends('layouts.master')

@section('title', 'Users')

@section('content')
<div class="row mt-2">
  <div class="col col-10">
    <h1>Users</h1>
  </div>
</div>

{{-- Role-based message --}}
@if(auth()->user()->hasRole('Admin'))
<div class="alert alert-success">You are viewing all users (Admin).</div>
@elseif(auth()->user()->hasRole('Employee'))
<div class="alert alert-info">You are viewing customers only (Employee).</div>
@endif

<form>
  <div class="row">
    <div class="col col-sm-2">
      <input name="keywords" type="text" class="form-control" placeholder="Search Keywords" value="{{ request()->keywords }}" />
    </div>
    <div class="col col-sm-1">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="col col-sm-1">
      <a href="{{ route('users') }}" class="btn btn-danger">Reset</a>
    </div>
  </div>
</form>

<div class="card mt-2">
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Credit</th>
          <th scope="col">Roles</th>
          <th scope="col">Status</th>

          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <td scope="col">{{ $user->id }}</td>
          <td scope="col">{{ $user->name }}</td>
          <td scope="col">{{ $user->email }}</td>
          <td scope="col">{{ $user->credit }}</td>
          <td scope="col">
            @foreach($user->roles as $role)
            <span class="badge bg-primary">{{ $role->name }}</span>
            @endforeach
          </td>
          <td scope="col">{{ $user->blocked_status }}</td>
          <td scope="col">
            @can('edit_users')
            <a class="btn btn-primary" href='{{ route('users_edit', [$user->id]) }}'>Edit</a>
            @endcan

            @can('admin_users')
            <a class="btn btn-primary" href='{{ route('edit_password', [$user->id]) }}'>Change Password</a>
            @endcan
            
            @can('delete_users')
            <a class="btn btn-danger" href='{{ route('users_delete', [$user->id]) }}'>Delete</a>
            @endcan
            @canany(['admin_users', 'edit_users'])
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addCreditModal{{ $user->id }}">
              Add Credit
            </button>

            <div class="modal fade" id="addCreditModal{{ $user->id }}" tabindex="-1" aria-labelledby="addCreditModalLabel{{ $user->id }}" aria-hidden="true">
              <div class="modal-dialog">
                <form method="POST" action="{{ route('users_add_credit', $user->id) }}">
                  @csrf
                  <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="addCreditModalLabel{{ $user->id }}">Add Credit for {{ $user->name }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <input type="number" name="credit" min="0" class="form-control" placeholder="Enter credit amount" required oninput="checkNegative(this)" id="creditInput{{ $user->id }}" />
        <small id="creditError{{ $user->id }}" class="form-text text-danger" style="display: none;">Credit cannot be a negative value.</small>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="addCreditButton{{ $user->id }}" style="transition: all 0.3s ease;">Add Credit</button>
    </div>
</div>
              </div>
              </form>
            </div>
  </div>
  @endcanany

  </td>
  </tr>
  @endforeach
  </tbody>
  </table>
</div>
</div>
<script>
function checkNegative(input) {
    const userId = input.id.split('creditInput')[1];  // Extract user ID from input ID
    const errorMessage = document.getElementById('creditError' + userId);
    const addButton = document.getElementById('addCreditButton' + userId);
    
    if (input.value < 0) {
        errorMessage.style.display = 'block';  // Show the error message
        addButton.classList.remove('btn-sm');  // Reset to normal button size
    } else {
        errorMessage.style.display = 'none';  // Hide the error message
        if (input.value > 0) {
            addButton.classList.add('btn-sm');  // Add small button class
        } else {
            addButton.classList.remove('btn-sm');  // Remove small button class if empty or invalid
        }
    }
}
</script>

@endsection
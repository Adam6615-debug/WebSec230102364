@extends('layouts.master')

@section('title', 'Orders')

@section('content')
<div class="row mt-2">
  <div class="col col-10">
    <h1>Orders</h1>
  </div>
</div>

<form>
  <div class="row">
    <div class="col col-sm-2">
      <input name="keywords" type="text" class="form-control" placeholder="Search Orders" value="{{ request()->keywords }}" />
    </div>
    <div class="col col-sm-1">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="col col-sm-1">
      <a href="{{ route('orders') }}" class="btn btn-danger">Reset</a>
    </div>
  </div>
</form>

<div class="card mt-2">
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Order ID</th>
          <th scope="col">Product Name</th>
          <th scope="col">Quantity</th>
          <th scope="col">Total</th>
          <th scope="col">Created At</th>
        </tr>
      </thead>
      <tbody>
        @foreach($orders as $order)
        <tr>
          <td scope="col">{{ $order->id }}</td>
          <td scope="col">{{ $order->product->name }}</td> <!-- Assuming the product has a 'name' field -->
          <td scope="col">{{ $order->quantity }}</td>
          <td scope="col">{{ $order->total }}</td>
          <td scope="col">{{ $order->created_at }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection

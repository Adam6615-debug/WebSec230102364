@extends('layouts.master')

@section('title', 'miniTest')

@section('content')
<div class="container mt-3">
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Item</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
        @php $grandTotal = 0; @endphp 
        @foreach ($bill as $item)
        <tr>
            <td>{{ $item['item'] }}</td>
            <td>{{ $item['quantity'] }}</td>
            <td>${{ number_format($item['price'], 2) }}</td>
            <td>${{ number_format($item['total'], 2) }}</td>
        </tr>
        @php $grandTotal += $item['total']; @endphp 
        @endforeach

        <tr>
            <td colspan="3">Grand Total</td>
            <td>${{ number_format($grandTotal, 2) }}</td>
        </tr>
    </tbody>
  </table>
</div>
@endsection

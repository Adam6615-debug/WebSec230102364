@extends('layouts.master')
<<<<<<< HEAD
@section('title', 'multable')
@section('content')
@php($j = 5)
<div class="card m-4 col-sm-2">
 <div class="card-header">{{$j}} Multiplication Table</div>
 <div class="card-body">
 <table>
 @foreach (range(1, 10) as $i)
 <tr><td>{{$i}} * {{$j}}</td><td> = {{ $i * $j }}</td></li> 
 @endforeach
 </table>
 </div>
</div>
@endsection
=======
@section('title', 'Prime Numbers')
@section('content')
<div class="card m-4 col-sm-3">	
  <div class="card-header">Multiplication Table of {{$j}}</div>
  <div class="card-body">
    <table>
      @foreach (range(1, 10) as $i)
      <tr><td>{{$i}} * {{$j}}</td><td> = {{ $i * $j }}</td></li>    
      @endforeach
    </table>
  </div>
</div>
@endsection
>>>>>>> 80ae6ee (after midterm disccusion)

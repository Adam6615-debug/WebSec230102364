@extends('layouts.master')
@section('title', 'Home')
@section('content')
<script>
 function doSomething() {
 alert("Hello from Java Script");
 }
</script>
<div class="card m-4">
 <div class="card-body">
 <button type="button" class="btn btn-primary" onclick="doSomething()">Press Me</button>
 </div>
</div>
@endsection
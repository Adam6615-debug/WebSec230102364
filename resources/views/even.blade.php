@extends('layouts.master')
@section('title', 'Prime Numbers')

@section('content')
<div class="row mt-2">
    <div class="col col-10">
        <h1>Prime Numbers</h1>
    </div>
</div>

<div class="card m-4">
    <div class="card-header">Prime Numbers from 1 to 100</div>
    <div class="card-body">
        <div class="d-flex flex-wrap">
            @foreach (range(1, 100) as $i)
                @if($i%2==0)
                    <span class="badge bg-primary m-1">{{ $i }}&nbsp;</span>
                @else
                    <span class="badge bg-secondary m-1">{{ $i }}&nbsp;</span>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection

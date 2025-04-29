@extends('layouts.master')

@section('title', 'Multiplication Table')

@section('content')
<div class="card m-4 col-sm-6 col-md-4">
    <div class="card-header text-center">
        <h5>Multiplication Table of {{$j}}</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Multiplier</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                @foreach (range(1, 10) as $i)
                <tr>
                    <td>{{ $i }} * {{ $j }}</td>
                    <td>{{ $i * $j }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

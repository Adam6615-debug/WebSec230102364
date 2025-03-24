@extends('layouts.master')

@section('title', 'Student Grades')

@section('content')
<div class="container mt-3">
  <h2>Student Information</h2>
  <table class="table table-bordered">
    <tr>
      <th>ID</th>
      <td>{{ $student['id'] }}</td>
    </tr>
    <tr>
      <th>Name</th>
      <td>{{ $student['name'] }}</td>
    </tr>
    <tr>
      <th>Department</th>
      <td>{{ $student['department'] }}</td>
    </tr>
    <tr>
      <th>GPA</th>
      <td>{{ number_format($student['gpa'], 2) }}</td>
    </tr>
  </table>

  <h3>Enrolled Courses</h3>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Course Code</th>
        <th>Course Name</th>
        <th>Grade</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($student['courses'] as $course)
        <tr>
            <td>{{ $course['code'] }}</td>
            <td>{{ $course['name'] }}</td>
            <td>{{ $course['grade'] }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection

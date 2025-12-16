@extends('layouts.app')

@section('title','Show Staff')

@section('content')

<h2>Staff Detail</h2>

<table class="table table-bordered">
  <tr><th>TID</th><td>{{ $teacher->tid }}</td></tr>
  <tr><th>Full Name</th><td>{{ $teacher->full_name }}</td></tr>
  <tr><th>Tel</th><td>{{ $teacher->tel }}</td></tr>
  <tr><th>Created At</th><td>{{ $teacher->created_at }}</td></tr>
</table>

<a href="{{ route('staffs.edit', $teacher) }}" class="btn btn-warning">Edit</a>
<a href="{{ route('staffs.index') }}" class="btn btn-secondary">Back</a>

@endsection

@extends('layouts.app')

@section('title','Staffs List')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
  <h1>Staffs</h1>
  <a href="{{ route('staffs.create') }}" class="btn btn-success">Create New</a>
</div>

<table class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>TID</th>
    <th>Full Name</th>
    <th>Tel</th>
    <th>Actions</th>
  </tr>
  </thead>

  <tbody>
  @forelse($teachers as $teacher)
    <tr>
      <td>{{ $teacher->tid }}</td>
      <td>{{ $teacher->full_name }}</td>
      <td>{{ $teacher->tel }}</td>

      <td>
        <a href="{{ route('staffs.show', $teacher) }}" class="btn btn-sm btn-primary">Show</a>
        <a href="{{ route('staffs.edit', $teacher) }}" class="btn btn-sm btn-warning">Edit</a>

        <form action="{{ route('staffs.destroy', $teacher) }}" method="POST" style="display: inline-block"
              onsubmit="return confirm('Delete this record?')">
          @csrf
          @method('DELETE')
          <button class="btn btn-sm btn-danger">Delete</button>
        </form>
      </td>
    </tr>
  @empty
    <tr>
      <td colspan="4">No data found.</td>
    </tr>
  @endforelse
  </tbody>
</table>

{{ $teachers->links() }}

@endsection

@extends('layouts.app')

@section('title','Edit Staff')

@section('content')

<h2>Edit Staff</h2>

@if ($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach($errors->all() as $err)
        <li>{{ $err }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('staffs.update', $teacher) }}" method="POST">
  @csrf
  @method('PUT')

  <div class="mb-3">
    <label class="form-label">Full Name</label>
    <input type="text" name="full_name" value="{{ old('full_name', $teacher->full_name) }}" class="form-control" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Tel</label>
    <input type="text" name="tel" value="{{ old('tel', $teacher->tel) }}" class="form-control">
  </div>

  <button class="btn btn-primary">Update</button>
  <a href="{{ route('staffs.index') }}" class="btn btn-secondary">Cancel</a>

</form>

@endsection

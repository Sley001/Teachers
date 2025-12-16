@extends('layouts.app')

@section('title','Create Staff')

@section('content')

<h2>Create Staff</h2>

@if ($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach($errors->all() as $err)
        <li>{{ $err }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('staffs.store') }}" method="POST">
  @csrf

  <div class="mb-3">
    <label class="form-label">Full Name</label>
    <input type="text" name="full_name" value="{{ old('full_name') }}" class="form-control" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Tel</label>
    <input type="text" name="tel" value="{{ old('tel') }}" class="form-control">
  </div>

  <button class="btn btn-primary">Save</button>
  <a href="{{ route('staffs.index') }}" class="btn btn-secondary">Cancel</a>
</form>

@endsection

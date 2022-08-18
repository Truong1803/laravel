@extends('layouts.app')

@section('content')
    <h1>Edit food information</h1>
    <form action="/foods/{{ $food->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name = 'name' value="{{ $food->name }}">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Count</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name = 'count' value="{{ $food->count }}">
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Description</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name = 'description' value="{{ $food->description }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
@extends('layouts.app')

@section('content')
    <h1>Enter food information</h1>
    <form action="/foods" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <input type="file" class="form-control" id="exampleInputEmail1" name='image'>
      </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name='name'>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Count</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name='count'>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name='description'>
        </div>
        <div>
            <label>Choose a categories</label>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="categories">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p class="text-danger">
                    {{ $error }}
                </p>
            @endforeach
        </div>
    @endif
@endsection

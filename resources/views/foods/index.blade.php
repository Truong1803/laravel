@extends('layouts.app')

@section('content')
    <h1>Foods page </h1>
    <a href="foods/create" class="btn btn-primary btn-lg" tabindex="-1" role="button">
        Add a new Food
    </a>
    <ol class="list-group list-group-numbered">
        @foreach ($foods as $food)
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">
                      <a href="/foods/{{ $food->id }}">
                      {{-- show detail --}}
                        {{ $food->name }}
                      </a>
                    </div>
                    {{ $food->description }}
                </div>
                <span class="badge bg-primary rounded-pill">{{ $food->count }}</span>
                <a href="/foods/{{ $food->id }}/edit">
                    Edit
                </a>
                {{-- delete --}}
                <form action="/foods/{{ $food->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </form>
            </li>
        @endforeach
    </ol>
@endsection

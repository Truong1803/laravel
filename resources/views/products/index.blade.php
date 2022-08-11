@extends('layouts.app')

@section('content')
    <h1>Index function of ProductsController</h1>
    {{-- <h2>Title: {{ $title }}</h2> --}}
    {{-- @for ($i = 0; $i < 4; $i++)
        <div>This is product name: {{ $products[$i] }}</div>
    @endfor --}}
    @foreach ($products as $key => $item)
        <div>This a product: {{ $key }} => {{ $item }}</div>
    @endforeach
@endsection
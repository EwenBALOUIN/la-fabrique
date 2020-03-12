@extends('layouts.products')

@section('content')
    @foreach($categories as $category)
        <h1><a href="{{route('prod.show', $category->category_id)}}">{{ $category->category_name }}</a></h1>
        <p><a href="{{ route('cat.edit', $category->category_id) }}">Editer</a></p>
    @endforeach
@endsection

@extends('layouts.products')

@section('content')
    @foreach($products as $product)
        <h1>{{$product->category_id}}.{{ $product->product_name }}</h1>
        <p>{{ $product->product_description }}</p>
        <p><a href="{{ route('prod.edit', [$product->product_id]) }}">Editer</a></p>

    @endforeach

@stop

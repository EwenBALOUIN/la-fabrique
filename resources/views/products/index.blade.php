@extends('layouts.products')

    @section('content')
        @foreach($products as $product)
            <h1>{{ $product->product_name }}</h1>
            <p>{{ $product->product_description }}</p>
        @endforeach

@stop

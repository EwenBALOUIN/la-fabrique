@extends('layouts.products')

@section('content')
    <div class="backend_container">
        <h1>Catégorie</h1>
        <div class="products_container">
            @foreach($products as $product)
                <div class="product_container">
                    <h2>{{$product->category_id}}.{{ $product->product_name }}</h2>
                    <p>{{ $product->product_description }}</p>
                    <p><a href="{{ route('prod.edit', [$product->product_id]) }}">Editer</a></p>
                </div>
            @endforeach
        </div>
    </div>
@stop

@extends('layouts.products')

@section('content')
    <div class="backend_container">
        <a href="{{route('cat.index')}}">back</a>
        <h1 class="products_cat">{{$products[0]->category_name}}</h1>
        <div class="products_container">
            @foreach($products as $product)
                <div class="product_container">
                    <div class="product_img">
                        <img src="{{ asset('storage/products_images/' . $product->product_image)}}" alt="">
                    </div>
                    <div class="product_info">
                        <h2>{{$product->category_id}}.{{ $product->product_name }}</h2>
                        <p>{{ $product->product_description }}</p>
                        <p><a href="{{ route('prod.edit', [$product->product_id]) }}">Editer</a></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop

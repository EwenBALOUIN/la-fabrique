@extends('layouts.products')

@section('content')
    <a href="{{route('prod.show', $product->category_id)}}">back</a>

    <h1>Editer</h1>


    {{ Form::open(['method' => 'PUT', 'url' => route('prod.update', [$product->product_id]), 'class' => 'form']) }}
    <div class="form-group">
        {{ Form::label('product_name', 'Nom du produit') }}
        {{ Form::text('product_name', $product->product_name, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('product_description', 'Deription du produit') }}
        {{ Form::textarea('product_description', $product->product_description, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('product_prize', 'Prix du produit') }}
        {{ Form::number('product_prize', $product->product_prize, ['class' => 'form-control']) }}
    </div>
    <button class="btn btn-primary">Modifier</button>
    {{ Form::close() }}
@stop

@extends('layouts.products')

@section('content')
    <a href="{{route('cat.index')}}">back</a>

    <h1>Ajouter un produit</h1>


    {{ Form::open(['method' => 'POST', 'url' => route('prod.store'), 'files'=>'true', 'class' => 'form']) }}
    <div class="form-group">
        {{ Form::label('product_name', 'Nom du produit') }}
        {{ Form::text('product_name', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('product_description', 'Description du produit') }}
        {{ Form::textarea('product_description', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('product_prize', 'Prix du produit') }}
        {{ Form::number('product_prize', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('category_id', 'Catégorie') }}
        <select name="category_id">
                @foreach($categories as $category)
                <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                @endforeach
        </select>
    </div>
    <div class="form-group">
        {{ Form::label('product_image', 'Photo du produit') }}
        {{ Form::file('product_image') }}
    </div>
    <button class="btn btn-primary">Créer</button>
    {{ Form::close() }}
@stop

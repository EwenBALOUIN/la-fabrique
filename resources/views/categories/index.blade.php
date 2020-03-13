@extends('layouts.products')

@section('content')
    <div class="backend_container">
        <div class="categories_container">
            <h1>Catégorie</h1>
            @foreach($categories as $category)
                <a href="{{route('prod.show', $category->category_id)}}">
                    <div class="category_container">
                        <h2>{{ $category->category_name }}</h2>
                        {{--                <p><a href="{{ route('cat.edit', $category->category_id) }}">Editer</a></p>--}}
                    </div>
                </a>
            @endforeach
        </div>
        <div class="crt-prod-container">
            <a href="{{route('prod.create')}}">
                <h1>Ajouter un nouveau produit</h1>
            </a>
        </div>
    </div>
@endsection

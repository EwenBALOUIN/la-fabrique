@extends('layouts.products')

@section('title', 'Page Title')

@section('content')
    <div class="title">
        <h1>BABY-FOOTS</h1>
        <hr>
    </div>
    <div id="galery-container">
        <div class="row">
            <div class="img-container img-container-left">
                <img src="{{ asset('images/soccer-tables/ana-rojas-megQMbU64CE-unsplash.jpg') }}" alt="Baby-foot">
            </div>
            <div class="img-container img-container-mid">
                <img src="{{ asset('images/soccer-tables/kelly-sikkema-ehzHvVk0dAw-unsplash.jpg') }}" alt="Baby-foot">
            </div>
            <div class="img-container img-container-right">
                <img src="{{ asset('images/soccer-tables/vital-sinkevich-RWs40AH6QV8-unsplash.jpg') }}" alt="Baby-foot">
            </div>
        </div>
    </div>
@endsection

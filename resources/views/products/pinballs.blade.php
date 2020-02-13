@extends('layouts.products')

@section('title', 'Page Title')

@section('content')
    <div class="title">
        <h1>FLIPPERS</h1>
        <hr>
    </div>
    <div id="galery-container">
        <div class="row">
            <div class="img-container img-container-left">
                <img src="{{ asset('images/pinballs/heather-mckean-we-ah3XnnbM-unsplash.jpg') }}" alt="Flipper">
            </div>
            <div class="img-container img-container-mid">
                <img src="{{ asset('images/pinballs/julian-lozano-PW9cFdI5z9A-unsplash.jpg') }}" alt="Flipper">
            </div>
            <div class="img-container img-container-right">
                <img src="{{ asset('images/pinballs/wes-hicks-UaMy195wttc-unsplash.jpg') }}" alt="Flipper">
            </div>
        </div>
    </div>
@endsection

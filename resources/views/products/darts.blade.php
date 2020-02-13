@extends('layouts.products')

@section('title', 'Page Title')

@section('content')
    <div class="title">
        <h1>FLÉCHETTES</h1>
        <hr>
    </div>
    <div id="galery-container">
        <div class="row">
            <div class="img-container img-container-left">
                <img src="{{ asset('images/darts/anastase-maragos-KRAupyFU-uI-unsplash.jpg') }}" alt="Fléchettes">
            </div>
            <div class="img-container img-container-mid">
                <img src="{{ asset('images/darts/anastase-maragos-X4zx5Vc_LZU-unsplash.jpg') }}" alt="Fléchettes">
            </div>
            <div class="img-container img-container-right">
                <img src="{{ asset('images/darts/artur-matosyan-eryEFcspx9k-unsplash.jpg') }}" alt="Fléchettes">
            </div>
        </div>
        <div class="row">
            <div class="img-container img-container-left">
                <img src="{{ asset('images/darts/janik-siegenthaler-ZWWtcN1Ewm4-unsplash.jpg') }}" alt="Fléchettes">
            </div>
            <div class="img-container img-container-mid">
                <img src="{{ asset('images/darts/pablo-UHI1cFPoBXg-unsplash.jpg') }}" alt="Fléchettes">
            </div>
            <div class="img-container img-container-right">
                <img src="{{ asset('images/darts/proxyclick-visitor-management-system-9P97yKT3Z4Y-unsplash.jpg') }}" alt="Fléchettes">
            </div>
        </div>
        <div class="row">
            <div class="img-container img-container-left">
                <img src="{{ asset('images/darts/will-porada-Zlli7ptD8fg-unsplash.jpg') }}" alt="Fléchettes">
            </div>
            <div class="img-container img-container-mid">
            </div>
            <div class="img-container img-container-right">
            </div>
        </div>
    </div>
@endsection

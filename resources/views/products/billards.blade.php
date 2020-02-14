@extends('layouts.products')

@section('title', 'Billards')

@section('content')
    <div class="title">
        <h1>BILLARDS</h1>
        <hr>
    </div>
    <div id="galery-container">
        <div class="row">
            <div class="img-container img-container-left">
                <img src="{{ asset('images/billards/avi-richards-63upADTGaL4-unsplash.jpg') }}" alt="Billards">
            </div>
            <div class="img-container img-container-mid">
                <img src="{{ asset('images/billards/dimas-ardirosatama-jmhqXeZGSCs-unsplash.jpg') }}" alt="Billards">
            </div>
            <div class="img-container img-container-right">
                <img src="{{ asset('images/billards/helen-thomas-iHJlamSNP3U-unsplash.jpg') }}" alt="Billards">
            </div>
        </div>
        <div class="row">
            <div class="img-container img-container-left">
                <img src="{{ asset('images/billards/jolene-hardy-uuApNXxgcRM-unsplash.jpg') }}" alt="Billards">
            </div>
            <div class="img-container img-container-mid">
                <img src="{{ asset('images/billards/karla-rivera-nVvfu4TkSrg-unsplash.jpg') }}" alt="Billards">
            </div>
            <div class="img-container img-container-right">
                <img src="{{ asset('images/billards/sven-mieke-wg_9zSqXgXE-unsplash.jpg') }}" alt="Billards">
            </div>
        </div>
        <div class="row">
            <div class="img-container img-container-left">
                <img src="{{ asset('images/billards/zakaria-zayane-5j-GyUb92Xg-unsplash.jpg') }}" alt="Billards">
            </div>
            <div class="img-container img-container-mid">
            </div>
            <div class="img-container img-container-right">
            </div>
        </div>
    </div>
@endsection

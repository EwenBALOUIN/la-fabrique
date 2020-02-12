<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=The+Girl+Next+Door&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/phone.css') }}" rel="stylesheet">

</head>
<body>
    <div class="parallax_top">
        <header>
            <nav>
                <ul id="header-name">
                    <li>La Fabrique .</li>
                </ul>
                <ul id="menu">
                    <li><a href="#container-about">Présentation</a></li>
                    <li><a href="#product-container">Réalisations</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </header>
        <div id="container-name">
            <div id="block-name">
                <ul>
                    <li id="firstname">La</li>
                    <li id="lastname">Fabrique</li>
                    <li id="slogan">No Game, No Bar</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="services-container">
        <div id="services-container-op">
            <div class="title">
                <h1>SERVICES</h1>
                <hr>
            </div>
            <div id="services">
                <div class="service service-left">
                    <i class="fas fa-credit-card"></i>
                    <h2>Vente</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                </div>
                <div class="service service-mid">
                    <i class="fas fa-truck-loading"></i>
                    <h2>Location</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                </div>
                <div class="service service-right">
                    <i class="fas fa-tools"></i>
                    <h2>Maintenance</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="about-container">
        <div class="title">
            <h1>PRÉSENTATION</h1>
            <hr>
        </div>
        <div id="about-la-fab">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel pellentesque magna, id consectetur urna. Ut nec semper felis. Nam elementum, sem et mattis pharetra, est ex viverra turpis, aliquet aliquam odio tellus eget nibh. Donec sed scelerisque odio. Lorem.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel pellentesque magna, id consectetur urna. Ut nec semper felis. Nam elementum, sem et mattis pharetra, est ex viverra turpis, aliquet aliquam odio tellus eget nibh. Donec sed scelerisque odio. Lorem.
            </p>
        </div>
    </div>

    <div id="product-container">
        <div class="product">
            <div class="product-img">
                <img src="{{ asset('images/clem-onojeghuo-8AiDiLLGmJs-unsplash.jpg') }}" alt="">
            </div>
            <div class="product-txt">
                <h2>Fléchettes</h2>
            </div>
        </div>
        <div class="product">
            <div class="product-img">
                <img src="{{ asset('images/klara-kulikova-DUcVepObkXk-unsplash.jpg') }}" alt="">
            </div>
            <div class="product-txt">
                <h2>Billards</h2>
            </div>
        </div>
        <div class="product">
            <div class="product-img">
                <img src="{{ asset('images/kyle-johnson-7dy20Hc1wWE-unsplash.jpg') }}" alt="">
            </div>
            <div class="product-txt">
                <h2>Flipper</h2>
            </div>
        </div>
        <div class="product">
            <div class="product-img">
                <img src="{{ asset('images/kelly-sikkema-ehzHvVk0dAw-unsplash.jpg') }}" alt="">
            </div>
            <div class="product-txt">
                <h2>Baby-foot</h2>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>

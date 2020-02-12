<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=The+Girl+Next+Door&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/phone.css') }}" rel="stylesheet">

</head>
<body>
    <div class="parallax_top" data-parallax="scroll" data-image-src="{{ asset('images/nazareno-contreras-p0NvD6umfgY-unsplash.jpg') }}">
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

    <div id="container-about">
        <div class="title">
            <h1 class="pp-med">PRÉSENTATION</h1>
            <hr>
        </div>
        <div id="about-me">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel pellentesque magna, id consectetur urna. Ut nec semper felis. Nam elementum, sem et mattis pharetra, est ex viverra turpis, aliquet aliquam odio tellus eget nibh. Donec sed scelerisque odio. Lorem.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel pellentesque magna, id consectetur urna. Ut nec semper felis. Nam elementum, sem et mattis pharetra, est ex viverra turpis, aliquet aliquam odio tellus eget nibh. Donec sed scelerisque odio. Lorem.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel pellentesque magna, id consectetur urna. Ut nec semper felis. Nam elementum, sem et mattis pharetra, est ex viverra turpis, aliquet aliquam odio tellus eget nibh. Donec sed scelerisque odio. Lorem.
            </p>
        </div>
    </div>

    <div id="product-container">
        <div class="product" style="background: red">
            <div class="product-img">
                <img src="{{ asset('images/clem-onojeghuo-8AiDiLLGmJs-unsplash.jpg') }}" alt="">
            </div>
            <div class="product-txt">
                <h2>Fléchettes</h2>
            </div>
        </div>
        <div class="product" style="background: blue">
            <div class="product-img">
                <img src="{{ asset('images/klara-kulikova-DUcVepObkXk-unsplash.jpg') }}" alt="">
            </div>
            <div class="product-txt">
                <h2>Billards</h2>
            </div>
        </div>
        <div class="product" style="background: red">
            <div class="product-img">
                <img src="{{ asset('images/kyle-johnson-7dy20Hc1wWE-unsplash.jpg') }}" alt="">
            </div>
            <div class="product-txt">
                <h2>Flipper</h2>
            </div>
        </div>
        <div class="product" style="background: blue">
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

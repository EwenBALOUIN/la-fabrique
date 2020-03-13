<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>La Fabrique - Home</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=The+Girl+Next+Door&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/874b363ce5.js" crossorigin="anonymous"></script>
</head>
<body>
    @if (Auth::check())
        @include('admin.header_admin')
    @else
    @endif

    <div class="parallax_top">
        <header id="home-header">
            <nav>
            @if (Auth::check())
                <ul id="header-name">
                    <li>La Fabrique .</li>
                </ul>
                <ul id="menu">
                    <li><a href="#services-container">Services</a></li>
                    <li><a href="#product-container">Créations</a></li>
                    <li><a href="#about-container">À propos</a></li>
                    <li><a href="#contact-container">Contact</a></li>
                </ul>
                @else
                <ul id="header-name">
                    <li>La Fabrique .</li>
                </ul>
                <ul id="menu">
                    <li><a href="#services-container">Services</a></li>
                    <li><a href="#product-container">Créations</a></li>
                    <li><a href="#about-container">À propos</a></li>
                    <li><a href="#contact-container">Contact</a></li>
                     </a>
                         @csrf
                     </form>
                </ul>
                @endif
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

    <div id="services-container" data-parallax="scroll" data-image-src="{{ asset('images/sneaky-elbow-N4FB-VFMNEk-unsplash.jpg') }}">
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

    <div id="product-container">
        <div class="title">
            <h1>NOS CRÉATIONS</h1>
            <hr>
        </div>
        <div id="product-container-flex">
            <div class="product">
                <div class="product-img">
                    <img src="{{ asset('images/clem-onojeghuo-8AiDiLLGmJs-unsplash.jpg') }}" alt="Fléchettes">
                </div>
                <a href="/darts">
                    <div class="product-txt">
                        <h2>Fléchettes</h2>
                    </div>
                </a>

            </div>
            <div class="product">
                <div class="product-img">
                    <img src="{{ asset('images/klara-kulikova-DUcVepObkXk-unsplash.jpg') }}" alt="Billards">
                </div>
                <a href="/billards">
                    <div class="product-txt">
                        <h2>Billards</h2>
                    </div>
                </a>
            </div>
            <div class="product">
                <div class="product-img">
                    <img src="{{ asset('images/kyle-johnson-7dy20Hc1wWE-unsplash.jpg') }}" alt="Flipper">
                </div>
                <a href="/pinballs">
                    <div class="product-txt">
                        <h2>Flipper</h2>
                    </div>
                </a>
            </div>
            <div class="product">
                <div class="product-img">
                    <img src="{{ asset('images/kelly-sikkema-ehzHvVk0dAw-unsplash.jpg') }}" alt="Baby-foot">
                </div>
                <a href="/soccer-tables">
                    <div class="product-txt">
                        <h2>Baby-foot</h2>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div id="about-container">
        <div class="title">
            <h1>À PROPOS</h1>
            <hr>
        </div>
        <div id="about-container-flex">
            <div id="about-la-fab">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel pellentesque magna, id consectetur urna. Ut nec semper felis. Nam elementum, sem et mattis pharetra, est ex viverra turpis, aliquet aliquam odio tellus eget nibh. Donec sed scelerisque odio. Lorem.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel pellentesque magna, id consectetur urna. Ut nec semper felis. Nam elementum, sem et mattis pharetra, est ex viverra turpis, aliquet aliquam odio tellus eget nibh. Donec sed scelerisque odio. Lorem.
                </p>
            </div>
            <div id="about-img">
                <img src="{{ asset('images/filipe-de-rodrigues-RtymUl7Tar4-unsplash.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <div id="contact-container">
        <div class="title">
            <h1>CONTACT</h1>
            <hr>
        </div>
        @include('contact.contact')
    </div>

    <footer>
        <div id="social-media">
            <a href="https://www.facebook.com/LaFabrique_44-100730794853925/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/LaFabrique_44"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/lafabrique_44/"><i class="fab fa-instagram"></i></a>
        </div>
        <p>© 2023 by La Fabrique .</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>

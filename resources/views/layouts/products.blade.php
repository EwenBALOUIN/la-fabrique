<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Fabrique - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=The+Girl+Next+Door&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header id="product-header">
    <nav>
        <ul id="header-back">
            <li><a href="/"><i class="fas fa-arrow-left"></i></a></li>
        </ul>
        <ul id="header-name">
            <li><a href="/">La Fabrique .</a></li>
        </ul>
        <ul id="menu">
            <li><a href="/#services-container">Services</a></li>
            <li><a href="/#product-container">Créations</a></li>
            <li><a href="/#about-container">À propos</a></li>
            <li><a href="/#contact-container">Contact</a></li>
        </ul>
    </nav>
</header>
    @yield('content')
<footer>
    <div id="social-media">
        <a href="https://www.facebook.com/LaFabrique_44-100730794853925/"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/LaFabrique_44"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/lafabrique_44/"><i class="fab fa-instagram"></i></a>
    </div>
    <p>© 2023 by La Fabrique .</p>
</footer>
</body>
</html>

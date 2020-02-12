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
                    <li><a href="#">Présentation</a></li>
                    <li><a href="#">Réalisations</a></li>
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
    <div id="about-container">

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>

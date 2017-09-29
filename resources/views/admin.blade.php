<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <!-- page details -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Gasper Grom">
    <!-- visual info -->
    <title>Nadzorna plošča</title>
    <link rel="icon" type="image/x-icon" href="">
    <meta name="theme-color" content="#161616">
    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,600,900&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('tinymce/skins/lightgray/content.min.css') }}">
    <link rel="stylesheet" href="{{ asset('tinymce/skins/lightgray/skin.min.css') }}">
    <link rel="stylesheet" href="{{ asset("css/main.css") }}">
    @yield('css')
</head>
<body>
<main>
    <header class="header admin">
        <div class="container">
            <div class="flex flex--right flex--middle header__box">
                <nav class="header__links flex flex--middle">
                    <ul class="flex">
                        <li><a href="{{ url('admin/dogodki') }}" class="text-uppercase">Dogodki</a></li>
                        <li><a href="{{ url('admin/novice') }}" class="text-uppercase">Novice</a></li>
                        <li><a href="{{ url('admin/vodstvo') }}" class="text-uppercase">Vodstvo</a></li>
                        <li><a href="{{ url('admin/sponzorji') }}" class="text-uppercase">Sponzorji</a></li>
                        <li><a href="{{ url('admin/galerija') }}" class="text-uppercase">Multimedija</a>
                            <ul>
                                <li><a href="{{ url('admin/galerija') }}">Galerija</a></li>
                                <li><a href="{{ url('admin/videoposnetki') }}">Videoposnetki</a></li>
                            </ul>
                        </li>
                        <li><a href="#" onclick="document.getElementById('logMeOut').submit()" class="text-uppercase">Odjava</a>
                        </li>
                    </ul>
                </nav>
                <button class="header__btn">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="footer">

    </footer>
</main>
{!! Form::open(['url' => 'logout', 'method' => 'POST', 'id' => 'logMeOut']) !!}
{!! Form::close() !!}
<script src="https://code.jquery.com/jquery-2.2.3.min.js"
        integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="></script>
<script src="{{ asset('js/libraries.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
@yield('scripts')
</body>
</html>



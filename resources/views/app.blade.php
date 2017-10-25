<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <!-- page details -->
    <meta name="description" content="Slovensko središče - I feel Slovenia">
    <meta name="keywords"
          content="slovensko sredisce, slovensko, sredisce, rokomet, slovensko sredisce rokometa, rokomet v sloveniji, evropsko prvensto zagreb 2018, I feel Slovenia, z roko v roki. rokomet">
    <meta name="author" content="Slovensko Sredisce">
    <meta name="google-site-verification" content="H-W1U9_ZO5fyQ7r2uWPg8gFFdPIdwuRMTwF8pmn7AoA"/>

    <!-- visual info -->
    <title>Slovensko Središče Rokometa</title>
    <link rel="icon" type="image/x-icon" href="">
    <meta name="theme-color" content="#161616">
    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,600,900" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body lang="@lang('settings.lang')">
<main>
    @include('includes.menu')
    @yield('content')
    <footer class="footer">
        <div class="container pt45">
            <div class="row pb30">
                <div class="col-md-6 pb20">
                    <h4 class="text--white">@lang('footer.center')</h4>
                    <hr class="ml0 mb30">
                    <p>
                        @lang('footer.center_text')
                    </p>
                    <div class="flex pt20">
                        <div class="pr30 pb20">
                            <img src="{{ asset('images/logo_sredisce.png') }}" style="height: 90px">
                        </div>
                        <div class="pb20">
                            <img src="{{ asset('images/logo_white.png') }}" style="height: 90px">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pb20">
                    <h4 class="text--white">@lang('footer.contact')</h4>
                    <hr class="ml0 mb30">
                    <p>
                        Rokometna zveza Slovenije<br>
                        Leskoškova 9e<br>
                        SI - 1000 Ljubljana<br>
                        <a href="tel:+38615476622">+386 1 547 66 22</a><br>
                        <a href="mailto:info@slovensko-sredisce.com">info@slovensko-sredisce.com</a>
                    </p>
                    <h4 class="pt45 text--white">@lang('footer.join_us')</h4>
                    <hr class="ml0 mb30">
                    <div class="flex">
                        <a target="_blank" rel="noreferrer noopener" href="https://www.facebook.com/rokometnazveza/"
                           class="mr5">
                            <svg style="width:32px;height:32px" viewBox="0 0 24 24">
                                <path fill="#fff"
                                      d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z"/>
                            </svg>
                        </a>
                        <a target="_blank" rel="noreferrer noopener" href="https://twitter.com/rzs_si" class="mr5">
                            <svg style="width:32px;height:32px" viewBox="0 0 24 24">
                                <path fill="#fff"
                                      d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z"/>
                            </svg>
                        </a>
                        <a target="_blank" rel="noreferrer noopener"
                           href="https://www.youtube.com/channel/UCbQZQXs0I2DqLfrpE46zuNw" class="mr5">
                            <svg style="width:32px;height:32px" viewBox="0 0 24 24">
                                <path fill="#fff"
                                      d="M10,16.5V7.5L16,12M20,4.4C19.4,4.2 15.7,4 12,4C8.3,4 4.6,4.19 4,4.38C2.44,4.9 2,8.4 2,12C2,15.59 2.44,19.1 4,19.61C4.6,19.81 8.3,20 12,20C15.7,20 19.4,19.81 20,19.61C21.56,19.1 22,15.59 22,12C22,8.4 21.56,4.91 20,4.4Z"/>
                            </svg>
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/rzs_si/"
                           class="mr5">
                            <svg style="width:32px;height:32px" viewBox="0 0 24 24">
                                <path fill="#fff"
                                      d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 pb20">
                    <h4 class="text--white">@lang('footer.links')</h4>
                    <hr class="ml0">
                    <nav class="flex flex--column">
                        <a target="_blank" rel="noreferrer noopener" href="http://www.rokometna-zveza.si/si/"
                           class="mb5">@lang('footer.rzs')</a>
                        <a target="_blank" rel="noreferrer noopener" href="https://www.slovenia.info/sl"
                           class="mb5">@lang('footer.tourist_org')</a>
                        <a target="_blank" rel="noreferrer noopener" href="http://www.eurohandball.com/"
                           class="mb5">@lang('footer.euro_handball')</a>
                    </nav>
                </div>
            </div>
            <div class="copyright flex flex--between pt20 pb20">
                <div>
                    © Copyright Slovensko Središče 2017&nbsp;&nbsp;•&nbsp;&nbsp;
                    Izdelava: <a target="_blank"
                                 rel="noreferrer noopener"
                                 href="http://gromgasper.com">Gašper
                        Grom</a> in
                    <a target="_blank" rel="noreferrer noopener" href="http://zigastrgar.com">Žiga Strgar</a>
                </div>
            </div>
        </div>
    </footer>
</main>
<script src="https://code.jquery.com/jquery-2.2.3.min.js"
        integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin></script>
<script src="{{ asset('js/libraries.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>
@yield('scripts')
</body>
</html>
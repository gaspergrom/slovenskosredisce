@extends('app')

@section('content')
    <section class="video__bg hide-sm">
        <video autoplay loop preload muted>
            <source src="{{ asset('images/main.mp4') }}" type="video/mp4">
            <source src="{{ asset('images/main.mp4') }}" type="video/ogg">
        </video>
        <div class="video__overlay flex flex--center flex--middle">

        </div>
    </section>

    <img src="{{asset('images/1.jpg')}}" class="img show-sm-block">

    <section class="line--bottom">
        <div class="container pt90 pb60">
            <h1 class="text-center">@lang('pages.home.title')</h1>
            <div class="row pt60">
                <div class="col-md-3 pb20 flex--one">
                    <div class="box link--zoom height100">
                        <div class="width100 quadric bg--image radius--top"
                             style="background-image: url('{{ asset('images/3.jpg') }}')">
                            <div class="overlay pt10 pb10 pl10 pr10 flex flex--middle flex--center">
                                <div class="flex flex--column">
                                    <a href="{{ url('sredisce/poslovno_sredisce') }}"
                                       class="text-center text--white link--opacity pb10 text-medium">@lang('menu.center.business.presentation')</a>
                                    <a href="{{ url('sredisce/poslovno_sredisce/dogodki') }}"
                                       class="text-center text--white link--opacity pb10 text-medium">@lang('menu.center.business.events')</a>
                                    <a href="{{ url('sredisce/poslovno_sredisce/sodelujoci') }}"
                                       class="text-center text--white link--opacity pb10 text-medium">@lang('menu.center.business.sponsors')</a>
                                    <a href="{{ url('sredisce/poslovno_sredisce/poslovno_slovenija_hrvaska') }}"
                                       class="text-center text--white link--opacity pb10 text-medium">@lang('menu.center.business.slo_cro')</a>
                                </div>
                            </div>
                        </div>
                        <div class="pt20 pl20 pr20 pb20">
                            <h5 class="text--grey-dark text-center text-uppercase"><a
                                        href="{{ url('sredisce/poslovno_sredisce') }}">@lang('menu.center.business.index')</a
                                >
                            </h5>
                            <p class="pt10">
                                @lang('pages.home.business_description')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pb20 flex--one">
                    <div class="box link--zoom height100">
                        <div class="width100 quadric bg--image radius--top"
                             style="background-image: url('{{ asset('images/6.jpg') }}')">
                            <div class="overlay pt10 pb10 pl10 pr10 flex flex--middle flex--center">
                                <div class="flex flex--column">
                                    <a href="{{ url('navijaci') }}"
                                       class="text-center text--white link--opacity pb10 text-medium">@lang('menu.fans.presentation')</a>
                                    <a href="{{ url('navijaci/dogodki') }}"
                                       class="text-center text--white link--opacity pb10 text-medium">@lang('menu.fans.events')</a>
                                    <a target="_blank" rel="noreferrer noopener"
                                       href="http://cro2018.ehf-euro.com/schedule-results/final-tournament/preliminary-round/group-c/"
                                       class="text-center text--white link--opacity pb10 text-medium">@lang('menu.fans.schedule')</a>
                                    <a target="_blank" rel="noreferrer noopener"
                                       href="http://www.kompas.si/destinacijeRezultat.asp?katalog=496"
                                       class="text-center text--white link--opacity pb10 text-medium">@lang('menu.fans.tickets')</a>
                                    <a target="_blank" rel="noreferrer noopener"
                                       href="https://www.stadionshop.com/si/slovenija/rokometna-zveza-slovenije.html"
                                       class="text-center text--white link--opacity pb10 text-medium">@lang('menu.fans.gear')</a>
                                </div>
                            </div>
                        </div>
                        <div class="pt20 pl20 pr20 pb20">
                            <h5 class="text--grey-dark text-center text-uppercase"><a
                                        href="{{ url('navijaci') }}">@lang('menu.fans.index')</a
                                ></h5>
                            <p class="pt10">
                                @lang('pages.home.fans_description')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pb20 flex--one">
                    <div class="box link--zoom height100">
                        <div class="width100 quadric bg--image radius--top"
                             style="background-image: url('{{ asset('images/Slo4.jpg') }}')">
                            <div class="overlay pt10 pb10 pl10 pr10 flex flex--middle flex--center">
                                <div class="flex flex--column">
                                    <a href="{{ url('slovenija') }}"
                                       class="text-center text--white link--opacity pb10 text-medium">@lang('menu.slovenia.presentation')</a>
                                    <a href="{{ url('slovenija/poslovno_okolje') }}"
                                       class="text-center text--white link--opacity pb10 text-medium">@lang('menu.slovenia.business')</a>
                                    <a href="{{ url('slovenija/turizem') }}"
                                       class="text-center text--white link--opacity pb10 text-medium">@lang('menu.slovenia.tourism')</a>
                                    <a target="_blank" rel="noreferrer noopener"
                                       href="https://www.youtube.com/watch?v=QuTfeHM0Uk4"
                                       class="text-center text--white link--opacity pb10 text-medium">@lang('menu.slovenia.feel_slovenia')</a>
                                </div>
                            </div>
                        </div>
                        <div class="pt20 pl20 pr20 pb20">
                            <h5 class="text--grey-dark text-center text-uppercase"><a
                                        href="{{ url('slovenija') }}">@lang('menu.slovenia.index')</a></h5>
                            <p class="pt10">
                                @lang('pages.home.tourism_description')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pb20 flex--one">
                    <a href="{{ url('novice') }}">
                        <div class="box link--zoom height100">
                            <div class="width100 quadric bg--image radius--top"
                                 style="background-image: url('{{ asset('images/bg2.jpg') }}')">
                                <div class="overlay pt10 pb10 pl10 pr10 flex flex--middle flex--center">

                                </div>
                            </div>
                            <div class="pt20 pl20 pr20 pb20">
                                <h5 class="text--grey-dark text-center text-uppercase"><a
                                            href="{{ url('novice') }}">@lang('pages.home.news')</a
                                    ></h5>
                                <p class="pt10">
                                    @lang('pages.home.news_description')
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container pt45 pb60 line--bottom">
            <h2 class="text-center text-uppercase">@lang('pages.home.upcoming_events')</h2>
            <hr>
            <div class="row flex--center">
                @foreach($events as $event)
                    @include('partials._event')
                @endforeach
            </div>
            <div class="flex flex--center pt45">
                <a href="{{ url('events') }}">
                    <button class="btn btn__default btn--round">
                        @lang('general.more_events')
                    </button>
                </a>
            </div>
        </div>
    </section>

    <section>
        <div class="container pt45 pb60">
            <h2 class="text-center text-uppercase">@lang('pages.home.partners_sponsors')</h2>
            <hr>
            <div class="row flex--center">
                <div class="col-md-10">
                    <div id="sponzorji" class="owl-carousel">
                        @foreach($sponsors as $sponsor)
                            @include('partials._sponsor_small')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
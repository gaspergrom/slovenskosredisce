@extends('admin')

@section('content')
    <section>
        <div class="container pt150 pb60">
            <h1 class="text-center">Vodstvo</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-8">
                    <form>
                        <input type="text" name="name" placeholder="Ime in priimek" class="box mb15">
                        <div class="flex bg--white box mb20">
                            <div class="col-md-4 flex flex--center pt10 pb10" data-tab="#slo">
                                <svg xmlns="http://www.w3.org/2000/svg" height="18" width="30" version="1.1"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 12 6">
                                    <title>Flag of Slovenia</title>
                                    <rect width="12" fill="#ed1c24" height="6"/>
                                    <rect width="12" fill="#005da4" height="4"/>
                                    <rect width="12" fill="#fff" height="2"/>
                                    <g transform="translate(2.2238 1) scale(.12937)">
                                        <svg width="12" viewBox="-120 -190.223125 240 309.188274" height="15.459">
                                            <!-- R0 = 15*sqrt(349) ~ 280.223125  Py= 15*sqrt(285)-90 ~ 163.229145242 -->
                                            <path d="m110.26-19.478l9.74-143.75a280.22 280.22 0 0 0 -240 0l9.74 143.75a155.61 155.61 0 0 0 110.26 138.45 155.61 155.61 0 0 0 110.26 -138.45"
                                                  fill="#005da4"/>
                                            <!-- 30*sqrt(81/4+1) , 30*sqrt(19)-30  -->
                                            <path d="m-90 0a138.29 138.29 0 0 0 90 100.77 138.29 138.29 0 0 0 90 -100.77l-45-60-18 24-27-54-27 54-18-24-45 60"
                                                  fill="#fff"/>
                                            <g id="wave" fill="#005da4" transform="scale(5) translate(0 5.1962)">
                                                <path d="m-17.196-2.1962a6 6 0 0 0 8.1962 2.1962 6 6 0 0 1 6 0 6 6 0 0 0 6 0 6 6 0 0 1 6 0 6 6 0 0 0 8.1962 -2.1962v1.732a6 6 0 0 1 -8.1962 2.1962 6 6 0 0 0 -6 0 6 6 0 0 1 -6 0 6 6 0 0 0 -6 0 6 6 0 0 1 -8.1962 -2.1962z"/>
                                            </g>
                                            <use xlink:href="#wave" transform="translate(0 17.321)"/>
                                            <g id="s" transform="translate(0,-120) scale(2.25)">
                                                <path stroke-width=".2"
                                                      d="m0-5l1 3.2679 3.3301-0.7679-2.3301 2.5 2.3301 2.5-3.3301-0.7679-1 3.2679-1-3.2679-3.3301 0.7679 2.3301-2.5-2.3301-2.5 3.3301 0.7679z"
                                                      fill="#fd0"/>
                                            </g>
                                            <use xlink:href="#s" transform="translate(-33.75,-45)"/>
                                            <use xlink:href="#s" transform="translate(33.75,-45)"/>
                                            <path d="m-111.58-167.05l9.96 146.99a146.95 146.95 0 0 0 101.62 129.95 146.95 146.95 0 0 0 101.62 -129.95l9.96-146.99a280.22 280.22 0 0 0 8.42 3.82l-9.74 143.75a155.61 155.61 0 0 1 -110.26 138.45 155.61 155.61 0 0 1 -110.26 -138.45l-9.74-143.75a280.22 280.22 0 0 0 8.42 -3.82"
                                                  fill="#ed1c24"/>
                                        </svg>
                                    </g>
                                </svg>
                            </div>
                            <div class="col-md-4 flex flex--center pt10 pb10" data-tab="#eng">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30" width="30" height="18">
                                    <clipPath id="t">
                                        <path d="M30,15 h30 v15 z v15 h-30 z h-30 v-15 z v-15 h30 z"/>
                                    </clipPath>
                                    <path d="M0,0 v30 h60 v-30 z" fill="#00247d"/>
                                    <path d="M0,0 L60,30 M60,0 L0,30" stroke="#fff" stroke-width="6"/>
                                    <path d="M0,0 L60,30 M60,0 L0,30" clip-path="url(#t)" stroke="#cf142b"
                                          stroke-width="4"/>
                                    <path d="M30,0 v30 M0,15 h60" stroke="#fff" stroke-width="10"/>
                                    <path d="M30,0 v30 M0,15 h60" stroke="#cf142b" stroke-width="6"/>
                                </svg>
                            </div>
                            <div class="col-md-4 flex flex--center pt10 pb10" data-tab="#ger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" viewBox="0 0 5 3">
                                    <desc>Flag of Germany</desc>
                                    <rect id="black_stripe" width="5" height="3" y="0" x="0" fill="#000"/>
                                    <rect id="red_stripe" width="5" height="2" y="1" x="0" fill="#D00"/>
                                    <rect id="gold_stripe" width="5" height="1" y="2" x="0" fill="#FFCE00"/>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <div id="slo">
                                <h4>Slo</h4>
                                <input type="text" name="position" placeholder="Pozicija (slo)" class="box mb15">
                            </div>
                            <div id="eng" style="display: none">
                                <h4>Eng</h4>
                                <input type="text" name="position" placeholder="Pozicija (eng)" class="box mb15">
                            </div>
                            <div id="ger" style="display: none">
                                <h4>Ger</h4>
                                <input type="text" name="position" placeholder="Pozicija (ger)" class="box mb15">
                            </div>
                        </div>
                        <div class="flex flex--center pb30">
                            <label for="file" class="flex flex--middle">
                                Slika osebe
                                <input type="file" id="file">
                                <span type="button" class="btn btn--round btn__default flex flex--middle ml20">
                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="#ffffff" d="M9,16V10H5L12,3L19,10H15V16H9M5,20V18H19V20H5Z"/>
                </svg>
            </span>
                            </label>
                        </div>
                        <div class="flex flex--center">
                            <button class="btn btn__default btn--round">
                                Dodaj
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
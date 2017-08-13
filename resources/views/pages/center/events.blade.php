@extends('app')

@section('content')
    @include('includes.header_image', ['image' => '5.jpg'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">Dogodki v slovenskem središču</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-sm-4 pb30 ">
                            <a href="single-event.html">
                                <div class="box link--zoom">
                                    <div class="width100 quadric--medium bg--image radius--top relative"
                                         style="background-image: url('{{ asset('images/bg2.jpg') }}')">
                                        <div class="event__date bg--gradient pt20">
                                            <div class="pl5 pr5 text-center" style="padding-bottom: 2px;">
                                                <span class="text-normal text--white">20.04.</span>
                                            </div>
                                            <div class="bg--grey-dark text-center" style="padding: 2px;">
                                                <span class="text--white">2017</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt20 pl20 pr20 pb20">
                                        <h5 class="text--grey-dark">Poslovno središče</h5>
                                        <p class="pt10">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 pb30">
                            <a href="single-event.html">
                                <div class="box link--zoom">
                                    <div class="width100 quadric--medium bg--image radius--top relative"
                                         style="background-image: url('{{ asset('images/bg2.jpg') }}')">
                                        <div class="event__date bg--gradient pt20">
                                            <div class="pl5 pr5 text-center" style="padding-bottom: 2px;">
                                                <span class="text-normal text--white">20.04.</span>
                                            </div>
                                            <div class="bg--grey-dark text-center" style="padding: 2px;">
                                                <span class="text--white">2017</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt20 pl20 pr20 pb20">
                                        <h5 class="text--grey-dark">Poslovno središče</h5>
                                        <p class="pt10">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 pb30">
                            <a href="single-event.html">
                                <div class="box link--zoom">
                                    <div class="width100 quadric--medium bg--image radius--top relative"
                                         style="background-image: url('{{ asset('images/bg2.jpg') }}')">
                                        <div class="event__date bg--gradient pt20">
                                            <div class="pl5 pr5 text-center" style="padding-bottom: 2px;">
                                                <span class="text-normal text--white">20.04.</span>
                                            </div>
                                            <div class="bg--grey-dark text-center" style="padding: 2px;">
                                                <span class="text--white">2017</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt20 pl20 pr20 pb20">
                                        <h5 class="text--grey-dark">Poslovno središče</h5>
                                        <p class="pt10">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 pb30">
                            <a href="single-event.html">
                                <div class="box link--zoom">
                                    <div class="width100 quadric--medium bg--image radius--top relative"
                                         style="background-image: url('{{ asset('images/bg2.jpg') }}')">
                                        <div class="event__date bg--gradient pt20">
                                            <div class="pl5 pr5 text-center" style="padding-bottom: 2px;">
                                                <span class="text-normal text--white">20.04.</span>
                                            </div>
                                            <div class="bg--grey-dark text-center" style="padding: 2px;">
                                                <span class="text--white">2017</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt20 pl20 pr20 pb20">
                                        <h5 class="text--grey-dark">Poslovno središče</h5>
                                        <p class="pt10">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 pb30">
                            <a href="single-event.html">
                                <div class="box link--zoom">
                                    <div class="width100 quadric--medium bg--image radius--top relative"
                                         style="background-image: url('{{ asset('images/bg2.jpg') }}')">
                                        <div class="event__date bg--gradient pt20">
                                            <div class="pl5 pr5 text-center" style="padding-bottom: 2px;">
                                                <span class="text-normal text--white">20.04.</span>
                                            </div>
                                            <div class="bg--grey-dark text-center" style="padding: 2px;">
                                                <span class="text--white">2017</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt20 pl20 pr20 pb20">
                                        <h5 class="text--grey-dark">Poslovno središče</h5>
                                        <p class="pt10">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
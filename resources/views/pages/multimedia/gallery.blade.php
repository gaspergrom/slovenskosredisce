@extends('app')

@section('content')
    @include('includes.header_image', ['image' => '1.jpg'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">Galerija</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-10">
                    <div class="row">

                        <div class="col-sm-4 pb30 ">
                            <a href="galerija-single.html">
                                <div class="box link--zoom">
                                    <div class="width100 quadric--medium bg--image radius--top relative"
                                         style="background-image: url('{{ asset('images/bg2.jpg') }}')">
                                    </div>
                                    <div class="pt20 pl20 pr20 pb20">
                                        <h5 class="text--grey-dark">Poslovno središče</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 pb30 ">
                            <a href="galerija-single.html">
                                <div class="box link--zoom">
                                    <div class="width100 quadric--medium bg--image radius--top relative"
                                         style="background-image: url('{{ asset('images/bg2.jpg') }}')">
                                    </div>
                                    <div class="pt20 pl20 pr20 pb20">
                                        <h5 class="text--grey-dark">Poslovno središče</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 pb30 ">
                            <a href="galerija-single.html">
                                <div class="box link--zoom">
                                    <div class="width100 quadric--medium bg--image radius--top relative"
                                         style="background-image: url('{{ asset('images/bg2.jpg') }}')">
                                    </div>
                                    <div class="pt20 pl20 pr20 pb20">
                                        <h5 class="text--grey-dark">Poslovno središče</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-4 pb30 ">
                            <a href="galerija-single.html">
                                <div class="box link--zoom">
                                    <div class="width100 quadric--medium bg--image radius--top relative"
                                         style="background-image: url('{{ asset('images/bg2.jpg') }}')">
                                    </div>
                                    <div class="pt20 pl20 pr20 pb20">
                                        <h5 class="text--grey-dark">Poslovno središče</h5>
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
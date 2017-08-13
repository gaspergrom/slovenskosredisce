@extends('app')

@section('content')
    @include('includes.header_image', ['image' => '1.jpg'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">Poljska</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-10">
                    <p class="pb30">
                        Leta 2016 je bilo na Poljskem organizirano evropsko rokometno prvenstvo na katerem je sodelovala
                        tudi slovenska rokometna reprezentanca. Prestižni športni dogodek je Rokometna zveza Slovenija
                        skupaj s partnerji izkoristila tudi za vzpostavitev Slovenskega središča – I feel Slovenia na
                        Poljskem, in sicer v mestu Wroclav. V sklopu Slovenskega središča – I feel Slovenia na Poljskem
                        je bilo organiziranih več poslovnih in družabnih prireditev. Vzpostavljeno je bilo tudi
                        Navijaško-družabno središče v centru mesta Wroclav. Častni pokrovitelj Slovenskega središča je
                        bil predsednik Republike Slovenije Borut Pahor.
                        <br><br>
                        Slovensko središče na Poljskem so podprli oziroma gospodarsko delegacijo so predstavljala
                        podjetja kot so: Gorenje Group, Krka, NLB, Telekom Slovenije, GGE, Petrol, Pivovarna Laško,
                        Kovintrade, Hoteli Union, Mercator, Celjske mesnine, ETI, CGP, Evrosad, Bluemarine, Amicus,
                        Multistal & Lohmann SP, Adriatic Slovenica, Kompas, Doctrina in drugi. Gospodarsko delegacijo iz
                        Poljske je sestavljalo več kot 120 poslovnežev iz različnih gospodarskih panog na Poljskem.
                    </p>

                </div>
                <div class="col-md-8">
                    <img src="{{ asset('images/slsredisce_poljska1.jpg') }}" class="img">
                    <p>
                        Slika: Poslovni dogodek »Priložnosti sodelovanja med Slovenijo in Poljsko« v Slovenskem središču
                        na Poljskem (Wroclav)
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
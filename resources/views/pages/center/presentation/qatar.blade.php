@extends('app')

@section('content')
    @include('includes.header_image', ['image' => '1.jpg'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">Katar</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-10">
                    <p class="pb30">
                        Rokometna zveza Slovenije je skupaj s partnerji projekta v času svetovnega rokometnega prvnestva
                        v Katarju leta 2015 prvič vzpostavila Slovensko središče – I feel Slovenia. Tudi ob pomoči
                        Veleposlaništva Republike Slovenije v Egiptu je bilo organiziranih več poslovnih in družabnih
                        prireditev, ki so močno odmevali tudi v katarskih medijih. Častni gostitelji prireditve z
                        naslovom »Priložnosti poslovnega sodelovanja med Slovenijo in Katarjem« so bili njegova
                        ekselenca predsednik Republike Slovenije Borut Pahor in predsednika dveh največjih in
                        najmočnejših poslovnih združenj v Katarju, in sicer njegova ekselenca šejk Faisal Bin Qassim Al
                        Thani in njegova ekselenca šejk Khalifa Bin Jassem Bin Mohammed Al Thani.
                        <br><br>
                        Slovensko gospodarsko delegacijo so predstavljali najvišji predstavniki podjetij kot so:
                        Gorenje, Riko, Halcom, NLB, Telekom Slovenije, Elan Inventa, Hoteli Union, Evrosad, Petrol, HIT,
                        Bluemarine, Amicus, in drugi. Gospodarsko delegacijo iz Katarja je sestavljalo več kot 30
                        poslovnežev iz različnih gospodarskih panog v Katarju. Častni pokrovitelj Slovenskega središča –
                        I feel Slovenia je bil predsednik Republike Slovenije Borut Pahor.
                    </p>

                </div>
                <div class="col-md-8">
                    <img src="{{ asset('images/slsredisce_katar1.jpg') }}" class="img">
                    <p class="pb30">
                        Slika: Poslovni dogodek »Priložnosti sodelovanja med Slovenijo in Katarjem« v Slovenskem
                        središču v Katarju
                    </p>
                    <img src="{{ asset('images/slsredisce_katar2.jpg') }}" class="img">
                    <p>
                        Slika: Sprejem predsednika Republike Slovenije Boruta Pahorja in predsednika Rokometne zveze
                        Slovenije Franja Bobinca v Slovenskem središču v Katarju leta 2015 za poslovno delegacijo,
                        medije, navijače in Slovence, ki živijo v Katarju
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
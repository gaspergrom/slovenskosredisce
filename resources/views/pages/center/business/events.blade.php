@extends('app')

@section('content')
    @include('includes.header_image', ['image' => '3.jpg'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">Dogodki v poslovnem središču</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-10">
                    <p>
                        Poslovno središče predstavlja prostor za organizacijo srečanj na poslovni in politični ravni. Iz
                        vsebinskega
                        vidika bodo v sklopu tega organizirani dogodki, ki so namenjeni okrepitvi poslovnega sodelovanja
                        med
                        podjetji iz Slovenije in Hrvaške, regionalno gospodarsko in politično srečanje, turistični
                        forum, športni
                        forum, poslovno kosilo med gospodarskima delegacijama, individualna srečanja med poslovnimi
                        partnerji,
                        itd. Poslovni in družabni dogodki bodo organizirani v notranjih konferenčnih prostorih
                        hotela......
                        <br><br>Z namenom, da se realizira cilje poslovnega središča, bodo v poslovnem središču
                        organizirani različni
                        poslovni in družabno-kulturni dogodki. Izhajajoč iz tega je pripravljen poslovni program izvedbe
                        aktivnosti
                        oziroma organizacije dogodkov v Slovenskem središču - I feel Slovenia.
                    </p>
                    <div class="table pt30">
                        <table class="responsive">
                            <thead>
                            <tr>
                                <th class="text-center text-bold">Datum</th>
                                <th class="text-center text-bold">Ura</th>
                                <th class="text-center text-bold">Aktivnosti</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($events as $event_group)
                                @foreach($event_group as $event)
                                    @include('partials._business_event')
                                @endforeach
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
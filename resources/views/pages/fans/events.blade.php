@extends('app')

@section('content')
    @include('includes.header_image', ['image' => '5.jpg'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">Dogodki v navijaškem središču</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-10">
                    <div class="row">
                        @foreach($events as $event)
                            @include('partials._event')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
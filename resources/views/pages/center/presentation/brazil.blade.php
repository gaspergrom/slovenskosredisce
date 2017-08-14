@extends('app')

@section('content')
    @include('includes.header_image', ['image' => '1.jpg'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">@lang('center.presentation.brazil.title')</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-10">
                    <p class="pb30">
                        @lang('center.presentation.brazil.text')
                    </p>
                </div>
                <div class="col-md-8">
                    <img src="{{ asset('images/slsredisce_brazilija1.jpg') }}" class="img">
                    <p class="pb30">
                        @lang('center.presentation.brazil.first_image')
                    </p>
                    <img src="{{ asset('images/slsredisce_brazilija2.jpg') }}" class="img">
                    <p class="pb30">
                        @lang('center.presentation.brazil.second_image')
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
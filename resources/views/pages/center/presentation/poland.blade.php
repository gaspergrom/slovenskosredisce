@extends('app')

@section('content')
    @include('includes.header_image', ['image' => '1.jpg'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">@lang('center.presentation.poland.title')</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-10">
                    <p class="pb30">
                        @lang('center.presentation.poland.text')
                    </p>
                </div>
                <div class="col-md-8">
                    <img src="{{ asset('images/slsredisce_poljska1.jpg') }}" class="img">
                    <p>
                        @lang('center.presentation.poland.image')
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
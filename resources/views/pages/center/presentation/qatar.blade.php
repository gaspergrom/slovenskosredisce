@extends('app')

@section('content')
    @include('includes.header_image', ['image' => '1.jpg'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">@lang('center.presentation.qatar.title')</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-10">
                    <p class="pb30">
                        @lang('center.presentation.qatar.text')
                    </p>
                </div>
                <div class="col-md-8">
                    <img src="{{ asset('images/slsredisce_katar1.jpg') }}" class="img">
                    <p class="pb30">
                        @lang('center.presentation.qatar.first_image')
                    </p>
                    <img src="{{ asset('images/slsredisce_katar2.jpg') }}" class="img">
                    <p>
                        @lang('center.presentation.qatar.second_image')
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
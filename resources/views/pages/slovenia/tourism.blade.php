@extends('app')

@section('content')
    @include('includes.header_image_custom', ['image' => 'Slo2.jpg', 'y' => '-400px'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">@lang('slovenia.tourism.title')</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-10">
                    <p>
                        @lang('slovenia.tourism.text')
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('app')

@section('content')
    @include('includes.header_image', ['image' => 'Slo7.png'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">@lang('slovenia.business.title')</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-10">
                    <p>
                        @lang('slovenia.business.text')
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
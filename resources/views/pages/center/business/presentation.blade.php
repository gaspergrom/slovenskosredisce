@extends('app')

@section('content')
    @include('includes.header_image', ['image' => '3.jpg'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">@lang('center.business.presentation.title')</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-10">
                    <p>
                        @lang('center.business.presentation.text')
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
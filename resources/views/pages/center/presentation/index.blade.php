@extends('app')

@section('content')
    @include('includes.header_image', ['image' => '1.jpg'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">@lang('center.presentation.index.title')</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-10">
                    <p>
                        @lang('center.presentation.index.text')
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
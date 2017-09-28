@extends('app')

@section('content')
    @include('includes.header_image', ['image' => 'slo9.png'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">@lang('center.business.sponsors.title')</h1>
            <hr>
            <div class="flex flex--center">
                @foreach($sponsors as $sponsor)
                    @include('partials._sponsor')
                @endforeach
            </div>
        </div>
    </section>
@endsection
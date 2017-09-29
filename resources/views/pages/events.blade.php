@extends('app')

@section('content')
    @include('includes.header_image', ['image' => 'bg2.jpg'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">@lang('pages.events.title')</h1>
            <hr>
            <div class="flex flex--center">
                @foreach($events as $event)
                    @include('partials._event')
                @endforeach
            </div>
        </div>
    </section>
@endsection
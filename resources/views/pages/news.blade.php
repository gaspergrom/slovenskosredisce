@extends('app')

@section('content')
    @include('includes.header_image', ['image' => 'GW1_4423.jpg'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">@lang('pages.news.title')</h1>
            <hr>
            <div class="flex flex--center">
                @foreach($news as $post)
                    @include('partials._news')
                @endforeach
            </div>
        </div>
    </section>
@endsection
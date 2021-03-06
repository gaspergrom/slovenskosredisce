@extends('app')

@section('content')
    @include('includes.header_image', ['image' => 'GW1_3985.jpg'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">@lang('multimedia.videos.title')</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-10">
                    <div class="row">
                        @foreach($videos as $video)
                            @include('partials._video')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="video__popup flex flex--middle flex--center">
        <div style="position: absolute; top: 0; right: 0;" id="video-close">
            <svg style="width:48px;height:48px" viewBox="0 0 24 24">
                <path fill="#ffffff"
                      d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
            </svg>
        </div>
    </div>
@endsection
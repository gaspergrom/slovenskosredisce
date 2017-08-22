@extends('app')

@section('content')
    @include('includes.header_image', ['image' => '1.jpg'])
    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">{{ $gallery->name }}</h1>
            <hr>
            <div class="flex lightgallery" id="lightgallery">
                @each('partials._image', $gallery->images, 'image')
            </div>
        </div>
    </section>
@endsection
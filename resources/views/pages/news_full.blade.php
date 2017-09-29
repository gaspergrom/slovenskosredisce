@extends('app')

@section('content')
    @include('includes.header_image_storage', ['image' => $post->image])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">{{ $post->title }}</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-10">
                    <p>
                        {!! $post->content !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
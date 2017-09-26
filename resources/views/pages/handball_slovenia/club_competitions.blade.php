@extends('app')

@section('content')
    @include('includes.header_image_custom', ['image' => 'SLK_0034a.jpg', 'y' => '-200px'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">@lang('handball_slovenia.club_competitions.title')</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-10">
                    <p>
                        @lang('handball_slovenia.club_competitions.text')
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('app')

@section('content')
    @include('includes.header_image', ['image' => '2.jpg'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2">@lang('center.team.title')</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-10">
                    <div class="row flex--center">
                        @foreach($leadership as $member)
                            @include('partials._team_member')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
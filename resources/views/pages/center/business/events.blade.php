@extends('app')

@section('content')
    @include('includes.header_image', ['image' => '3.jpg'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">@lang('center.business.events.title')</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-10">
                    <p>
                        @lang('center.business.events.text')
                    </p>
                    <div class="table pt30">
                        <table class="responsive">
                            <thead>
                            <tr>
                                <th class="text-center text-bold">@lang('center.business.events.date')</th>
                                <th class="text-center text-bold">@lang('center.business.events.hour')</th>
                                <th class="text-center text-bold">@lang('center.business.events.activities')</th>
                            </tr>
                            </thead>
                            @foreach($events as $event_group)
                                @foreach($event_group as $event)
                                    @include('partials._business_event')
                                @endforeach
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
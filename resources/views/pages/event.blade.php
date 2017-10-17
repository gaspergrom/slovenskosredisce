@extends('app')

@section('content')
    @include('includes.header_image_storage', ['image' => $event->image])

    <section>
        <div class="container pt45 pb60">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center h2">{{ $event->name }}</h1>
                    <hr>
                    <div class="flex flex--middle flex--center pb30">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="#4dbc46"
                                  d="M19,19H5V8H19M16,1V3H8V1H6V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1"/>
                        </svg>
                        <p class="mr30 mb0 text-bold">
                            {{ $event->begins_at->formatLocalized('%d. %B %Y') }}
                        </p>
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="#4dbc46"
                                  d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z"/>
                        </svg>
                        <p class="mb0 text-bold">
                            {{ $event->location }}
                        </p>
                    </div>
                    <p>
                        {!! $event->description !!}
                    </p>
                    <div class="flex flex--center">
                        @include('includes.facebook_share')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
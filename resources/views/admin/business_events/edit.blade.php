@extends('admin')

@section('content')
    <section>
        <div class="container pt150 pb60">
            <h1 class="text-center">Urejanje dogodka</h1>
            <hr>
            @include('partials._errors')
            <div class="flex flex--center">
                <div class="col-md-8">
                    {!! Form::model($event, ['route' => ['poslovni.update', $event['id']], 'method' => 'PATCH']) !!}
                    @include('admin.business_events._form', ['submitBtn' => 'Uredi'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection
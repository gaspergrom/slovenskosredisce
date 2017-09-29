@extends('admin')

@section('content')
    <section>
        <div class="container pt150 pb60">
            <h1 class="text-center">{{ $leadership['name']['sl']}}</h1>
            <hr>
            @include('partials._errors')
            <div class="flex flex--center">
                <div class="col-md-8">
                    {!! Form::model($leadership, ['route' => ['vodstvo.update', $leadership['id']], 'files' => true, 'method' => 'PATCH']) !!}
                    @include('admin.leadership._form', ['submitBtn' => 'Uredi'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection
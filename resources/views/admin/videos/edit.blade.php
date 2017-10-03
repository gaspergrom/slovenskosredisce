@extends('admin')

@section('content')
    <section>
        <div class="container pt150 pb60">
            <h1 class="text-center">Urejanje videoposnetka</h1>
            <hr>
            @include('partials._errors')
            <div class="flex flex--center">
                <div class="col-md-8">
                    {!! Form::model($video, ['route' => ['videoposnetki.update', $video['id']], 'method' => 'PATCH', 'files' => true]) !!}
                    @include('admin.videos._form', ['submitBtn' => 'Uredi'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection
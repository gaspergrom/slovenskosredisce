@extends('admin')

@section('content')
    <section>
        <div class="container pt150 pb60">
            <h1 class="text-center">Urejanje sponzorja</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-8">
                    {!! Form::model($sponsor, ['route' => ['sponzorji.update', $sponsor['id']], 'files' => true, 'method' => 'PATCH']) !!}
                    @include('admin.sponsors._form', ['submitBtn' => 'Uredi'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection
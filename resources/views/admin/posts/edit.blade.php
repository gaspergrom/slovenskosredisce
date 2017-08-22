@extends('admin')

@section('content')
    <section>
        <div class="container pt150 pb60">
            <h1 class="text-center">Urejanje novice</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-8">
                    {!! Form::model($post, ['route' => ['novice.update', $post['id']], 'method' => 'PATCH', 'files' => true]) !!}
                    @include('admin.posts._form', ['submitBtn' => 'Uredi'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection
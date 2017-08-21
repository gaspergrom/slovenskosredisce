@extends('admin')

@section('content')
    <section>
        <div class="container vh100 pt20 pb20 flex flex--center flex--middle">
            <div class="col-md-4 col-sm-6">
                <h1 class="h2 text-center">Registracija</h1>
                <hr>
                <form action="{{ route('register') }}" method="POST" novalidate>
                    {{ csrf_field() }}
                    <input required placeholder="Ime in priimek" name="name" value="{{ old('name') }}" class="inp--round">
                    <input name="email" required data-required="" data-invalid="" type="email"
                           placeholder="E-naslov" class="mt10 inp--round" value="{{ old('email') }}">
                    <input name="password" required type="password" placeholder="Geslo" class="mt10 inp--round">
                    <input name="password_confirmation" required type="password" placeholder="Ponovi geslo"
                           class="mt10 inp--round">
                    <div class="flex flex--center pt20">
                        <button class="btn btn__default btn--round">Registriraj</button>
                    </div>
                    <div class="toast" data-error-text data-error-popup="2000" data-error></div>
                </form>
            </div>
        </div>
    </section>
@endsection
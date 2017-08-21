@extends('admin')

@section('content')
    <section>
        <div class="container vh100 pt20 pb20 flex flex--center flex--middle">
            <div class="col-md-4 col-sm-6">
                <h1 class="h2 text-center">Prijava</h1>
                <hr>
                <form action="{{ route('login') }}" method="POST" novalidate>
                    <input name="email" required data-required="" data-invalid="" type="email"
                           placeholder="E-naslov" class="inp--round">
                    <input name="password" type="password" placeholder="Geslo" class="mt10 inp--round">
                    <div class="flex flex--center pt20">
                        <button class="btn btn__default btn--round">Prijava</button>
                    </div>
                    <div class="toast" data-error-text data-error-popup="2000" data-error></div>
                </form>
            </div>
        </div>
    </section>
@endsection
@extends('app')

@section('content')
    @include('includes.header_image', ['image' => '1.jpg'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2">Kontakt</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-5">
                    <p class="pb45">
                        Rokometna zveza Slovenije<br>
                        Leskoškova 9e<br>
                        SI - 1000 Ljubljana<br>
                        <a href="tel:+38615476622">+386 1 547 66 22</a><br>
                        <a href="mailto:info@slovensko-sredisce.si">info@slovensko-sredisce.si</a><br>
                    </p>
                    <iframe
                            height="450"
                            style="width: 100%; border: 0"
                            frameborder="0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAjpI95M4cipomRt8hmrp24-WtT7-IkcTA&q=Leskoškova+9e,1000+Ljubljana"
                            allowfullscreen>
                    </iframe>
                </div>
                <div class="col-md-5">
                    <form class="pt20 pl15 pr15 pb20" data-ajax novalidate action="" method="">
                        <input class="mb10 box" type="text" name="name" placeholder="Ime in priimek" required
                               data-required="Prosim vnesi ime in priimek">
                        <input class="mb10 box" type="email" name="email" placeholder="Email" required
                               data-required="Prosim vnesi email" data-invalid="Prosim vnesi veljaven email">
                        <textarea placeholder="Sporočilo" class="mb10 box" name="message"></textarea>
                        <div class="flex flex--center">
                            <button class="btn btn--round btn__default">Pošlji</button>
                        </div>
                        <div class="toast" data-error-text data-error-popup="2000"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
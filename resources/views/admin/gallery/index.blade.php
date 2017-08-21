@extends('admin')

@section('content')
    <section>
        <div class="container pt150 pb60">
            <h1 class="text-center">Galerija</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-8">
                    <form>
                        <input type="text" placeholder="Ime albuma" class="inp inp--round box mb20">

                        <div class="flex flex--center">
                            <button class="btn btn__default btn--round">
                                Dodaj
                            </button>
                        </div>
                    </form>
                    <div class="flex pt60">
                        <div class="col-md-6 mb20">
                            <div class="box pl10 pr10 pt10 pb10">
                                <h4 class="pb20">Naslov albuma</h4>
                                <a href="galerija-single.html">
                                    <button class="btn btn__default mb10">
                                        Uredi
                                    </button>
                                </a>
                                <button class="btn btn__default mb10" style="background: #c00">
                                    Odstrani
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 mb20">
                            <div class="box pl10 pr10 pt10 pb10">
                                <h4 class="pb20">Naslov albuma</h4>
                                <a href="galerija-single.html">
                                    <button class="btn btn__default mb10">
                                        Uredi
                                    </button>
                                </a>
                                <button class="btn btn__default mb10" style="background: #c00">
                                    Odstrani
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 mb20">
                            <div class="box pl10 pr10 pt10 pb10">
                                <h4 class="pb20">Naslov albuma</h4>
                                <a href="galerija-single.html">
                                    <button class="btn btn__default mb10">
                                        Uredi
                                    </button>
                                </a>
                                <button class="btn btn__default mb10" style="background: #c00">
                                    Odstrani
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
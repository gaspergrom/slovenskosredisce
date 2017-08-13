@extends('app')

@section('content')
    @include('includes.header_image', ['image' => 'bg2.jpg'])

    <section>
        <div class="container pt45 pb60">
            <div class="row">
                <div class="col-md-9">
                    <h1 class="text-center h2">{{ $event->name }}</h1>
                    <hr>
                    <p>
                        {{ $event->description }}
                    </p>
                </div>
                <div class="col-md-3 pt60">
                    <div class="box">
                        <div class="bg--gradient">
                            <h3 class="text-center text--white">70€</h3>
                        </div>
                        <div class="flex flex--center pt20 pb20">
                            <button class="btn btn__default btn--round" data-popup="prijava">
                                Prijava
                            </button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <div class="popup__overlay flex flex--center flex--middle" id="prijava">
        <div class="popup bg--white" id="app">

            <div class="bg--gradient pl15 pr15 pt10 pb10">
                <h4 class="text--white">Prijava na dogodek</h4>
            </div>

            <div class="pt20 pl15 pr15 pb20 flex flex--column">
                <div class="flex flex--middle flex--center pb20">
                    <p class="mb0">podjetje</p>
                    <label class="switch flex flex--middle ml10 mr15">
                        <input type="checkbox" v-model="samoplacnik" name="samoplacnik">
                        <span></span>
                    </label>
                    <p class="mb0">samoplačnik</p>
                </div>

                <!-- podjetje -->
                <template v-if="!samoplacnik">

                    <h5 class="text--grey-dark mb5">Podjetje</h5>
                    <input type="text" v-model="podjetjeIme" placeholder="Ime podjetja" class="box mb10">
                    <input type="text" v-model="podjetjeNaslov" placeholder="Naslov" class="box mb10">
                    <input type="tel" v-model="podjetjeTelefon" placeholder="Telefonska številka" class="box mb10">
                    <input type="tel" v-model="podjetjeFax" placeholder="Faks" class="box mb10">
                    <input type="email" v-model="podjetjeEmail" placeholder="E-mail naslov" class="box mb10">
                    <input type="text" v-model="podjetjeRacun" placeholder="Poslovni račun" class="box mb10">
                    <input type="url" v-model="podjetjeSpletnaStran" placeholder="Spletna stran" class="box mb10">
                    <label class="radio flex flex--middle mb10">
                        <input type="checkbox" v-model="podjetjeDavcniZavezanec" value="1">
                        <span class="mr10"></span>
                        Davčni zavezanec
                    </label>
                    <h5 class="text--grey-dark mb5">Kontaktna oseba</h5>
                    <input type="text" v-model="podjetjeKontaktIme" placeholder="Ime in priimek" class="box mb10">
                    <input type="email" v-model="podjetjeKontaktEmail" placeholder="E-mail naslov" class="box mb10">
                    <input type="tel" v-model="podjetjeKontaktTelefon" placeholder="Telefon" class="box mb10">


                    <h5 class="text--grey-dark mb5">Osebe</h5>
                    <template v-for="(oseba, i) in podjetjeOsebe">
                        <div class="row pb15">
                            <div class="col-xs-1">
                                <h5>{{i+1}}.</h5>
                                <button class="btn__delete" @click="odstraniOsebo(i)">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="#fff"
                                              d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="col-xs-11">
                                <input type="text" v-model="oseba.ime" placeholder="Ime in priimek" class="box mb10">
                                <input type="email" v-model="oseba.email" placeholder="E-mail naslov" class="box mb10">
                                <input type="text" v-model="oseba.funkcija" placeholder="Funkcija" class="box mb10">
                                <input type="tel" v-model="oseba.telefon" placeholder="Telefon" class="box mb10">
                            </div>
                        </div>
                    </template>
                    <div class="flex flex--center pb30">
                        <button @click="dodajOsebo" class="btn btn--round btn__default">
                            Dodaj osebo
                        </button>
                    </div>

                    <h5 class="text--grey-dark mb5">Ostalo</h5>
                    <textarea v-model="podjetjeAktivnosti" placeholder="Poslovne dejavnosti podjetja (ponudba)"
                              class="box mb10"></textarea>
                    <input v-model="podjetjeZaposleni" type="number" placeholder="Število zaposlenih" class="box mb10">
                    <input v-model="podjetjePromet" type="number" placeholder="Promet podjetja (€)" class="box mb10">
                    <textarea v-model="podjetjeInteres" placeholder="Podrobna opredelitev poslovnega interesa"
                              class="box mb10"></textarea>
                    <textarea v-model="podjetjeSodelovanje" placeholder="S katerimi podjetji bi želeli sodelovati?"
                              class="box mb10"></textarea>

                </template>

                <template v-if="samoplacnik">
                    <h5 class="text--grey-dark mb5">Kontaktni podatki</h5>
                    <input type="text" v-model="ime" placeholder="Ime in priimek" class="box mb10">
                    <input type="email" v-model="email" placeholder="E-mail naslov" class="box mb10">
                    <input type="tel" v-model="telefon" placeholder="Telefon" class="box mb10">
                    <h5 class="text--grey-dark mb5">Status</h5>
                    <div class="flex">
                        <label class="radio flex flex--middle mb10 round mr10">
                            <input type="radio" v-model="status" name="status" value="0">
                            <span class="mr10"></span>
                            Zaposlen
                        </label>
                        <label class="radio flex flex--middle mb10 round mr10">
                            <input type="radio" v-model="status" name="status" value="1">
                            <span class="mr10"></span>
                            Študent
                        </label>
                        <label class="radio flex flex--middle mb10 round">
                            <input type="radio" v-model="status" name="status" value="2">
                            <span class="mr10"></span>
                            Drugo
                        </label>
                    </div>
                    <input type="tel" v-model="delo"
                           :placeholder="status==0?('Delovno mesto'):(status==1?'Smer Izobraževanja':'Drugo')"
                           class="box mb10">
                    <textarea v-model="sporocilo" placeholder="Sporočilo" class="box mb10"></textarea>
                </template>
                <!-- samoplacnik -->


                <div class="flex flex--center pt20">
                    <button class="btn btn__default btn--round" @click="prijava">Prijava</button>
                </div>
            </div>

        </div>
        <script src="https://unpkg.com/vue"></script>
        <script>
            new Vue({
                el: "#app",
                data: {
                    samoplacnik: false,

                    podjetjeIme: "",
                    podjetjeNaslov: "",
                    podjetjeTelefon: "",
                    podjetjeFax: "",
                    podjetjeEmail: "",
                    podjetjeRacun: "",
                    podjetjeSpletnaStran: "",
                    podjetjeDavcniZavezanec: false,
                    podjetjeKontaktIme: "",
                    podjetjeKontaktEmail: "",
                    podjetjeKontaktTelefon: "",
                    podjetjeOsebe: [
                        {ime: "", email: "", funkcija: "", telefon: ""}
                    ],
                    podjetjeAktivnosti: "",
                    podjetjeZaposleni: null,
                    podjetjePromet: null,
                    podjetjeInteres: "",
                    podjetjeSodelovanje: "",

                    ime: "",
                    email: "",
                    telefon: "",
                    status: 0,
                    delo: "",
                    sporocilo: ""
                },
                methods: {
                    prijava: function () {
                        var data = {};
                        data["samoplacnik"] = this.samoplacnik;
                        if (this.samoplacnik) {
                            data["samoplacnikIme"] = this.ime;
                            data["samoplacnikEmail"] = this.email;
                            data["samoplacnikTelefon"] = this.telefon;
                            data["samoplacnikStatus"] = this.status;
                            data["samoplacnikDelo"] = this.delo;
                            data["samoplacnikSporocilo"] = this.sporocilo;
                        }
                        else {
                            data["podjetjeIme"] = this.podjetjeIme;
                            data["podjetjeNaslov"] = this.podjetjeNaslov;
                            data["podjetjeTelefon"] = this.podjetjeTelefon;
                            data["podjetjeFax"] = this.podjetjeFax;
                            data["podjetjeEmail"] = this.podjetjeEmail;
                            data["podjetjeRacun"] = this.podjetjeRacun;
                            data["podjetjeSpletnaStran"] = this.podjetjeSpletnaStran;
                            data["podjetjeDavcniZavezanec"] = this.podjetjeDavcniZavezanec;
                            data["podjetjeKontaktIme"] = this.podjetjeKontaktIme;
                            data["podjetjeKontaktEmail"] = this.podjetjeKontaktEmail;
                            data["podjetjeKontaktTelefon"] = this.podjetjeKontaktTelefon;
                            data["podjetjeOsebe"] = this.podjetjeOsebe;
                            data["podjetjeAktivnosti"] = this.podjetjeAktivnosti;
                            data["podjetjeZaposleni"] = this.podjetjeZaposleni;
                            data["podjetjePromet"] = this.podjetjePromet;
                            data["podjetjeInteres"] = this.podjetjeInteres;
                            data["podjetjeSodelovanje"] = this.podjetjeSodelovanje;
                        }
                        console.log(JSON.stringify(data));
                        //TODO: send ajax
                    },
                    dodajOsebo: function () {
                        this.podjetjeOsebe.push({ime: "", email: "", funkcija: "", telefon: ""});
                    },
                    odstraniOsebo: function (id) {
                        this.podjetjeOsebe.splice(id, 1);
                    }
                }
            })
        </script>
    </div>
@endsection
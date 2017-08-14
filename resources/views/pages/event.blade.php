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
                            <h3 class="text-center text--white">{{ $event->price }} €</h3>
                        </div>
                        <div class="flex flex--center pt20 pb20">
                            <button class="btn btn__default btn--round" data-popup="prijava">
                                @lang('pages.events.button')
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
                <h4 class="text--white">@lang('pages.events.popup.title')</h4>
            </div>
            <div class="pt20 pl15 pr15 pb20 flex flex--column">
                <div class="flex flex--middle flex--center pb20">
                    <p class="mb0">@lang('pages.events.popup.business.title')</p>
                    <label class="switch flex flex--middle ml10 mr15">
                        <input type="checkbox" v-model="samoplacnik" name="samoplacnik">
                        <span></span>
                    </label>
                    <p class="mb0">@lang('pages.events.popup.person.title')</p>
                </div>

                <!-- podjetje -->
                <template v-if="!samoplacnik">

                    <h5 class="text--grey-dark mb5">@lang('pages.events.popup.business.title')</h5>
                    <input type="text" v-model="podjetjeIme" placeholder="@lang('pages.events.popup.business.name')"
                           class="box mb10">
                    <input type="text" v-model="podjetjeNaslov"
                           placeholder="@lang('pages.events.popup.business.address')" class="box mb10">
                    <input type="tel" v-model="podjetjeTelefon"
                           placeholder="@lang('pages.events.popup.business.telephone')" class="box mb10">
                    <input type="tel" v-model="podjetjeFax" placeholder="@lang('pages.events.popup.business.fax')"
                           class="box mb10">
                    <input type="email" v-model="podjetjeEmail" placeholder="@lang('pages.events.popup.business.email')"
                           class="box mb10">
                    <input type="text" v-model="podjetjeRacun"
                           placeholder="@lang('pages.events.popup.business.account')" class="box mb10">
                    <input type="url" v-model="podjetjeSpletnaStran"
                           placeholder="@lang('pages.events.popup.business.webpage')" class="box mb10">
                    <label class="radio flex flex--middle mb10">
                        <input type="checkbox" v-model="podjetjeDavcniZavezanec" value="1">
                        <span class="mr10"></span>
                        @lang('pages.events.popup.business.ddv')
                    </label>
                    <h5 class="text--grey-dark mb5">@lang('pages.events.popup.business.contact.title')</h5>
                    <input type="text" v-model="podjetjeKontaktIme"
                           placeholder="@lang('pages.events.popup.business.contact.name')" class="box mb10">
                    <input type="email" v-model="podjetjeKontaktEmail"
                           placeholder="@lang('pages.events.popup.business.contact.email')" class="box mb10">
                    <input type="tel" v-model="podjetjeKontaktTelefon"
                           placeholder="@lang('pages.events.popup.business.contact.telephone')" class="box mb10">


                    <h5 class="text--grey-dark mb5">@lang('pages.events.popup.person.title')</h5>
                    <template v-for="(oseba, i) in podjetjeOsebe">
                        <div class="row pb15">
                            <div class="col-xs-1">
                                <h5>@{{ i+1 }}.</h5>
                                <button class="btn__delete" @click="odstraniOsebo(i)">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="#fff"
                                              d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="col-xs-11">
                                <input type="text" v-model="oseba.ime"
                                       placeholder="@lang('pages.events.popup.business.person.name')" class="box mb10">
                                <input type="email" v-model="oseba.email"
                                       placeholder="@lang('pages.events.popup.business.person.email')" class="box mb10">
                                <input type="text" v-model="oseba.funkcija"
                                       placeholder="@lang('pages.events.popup.business.person.function')"
                                       class="box mb10">
                                <input type="tel" v-model="oseba.telefon"
                                       placeholder="@lang('pages.events.popup.business.person.telephone')"
                                       class="box mb10">
                            </div>
                        </div>
                    </template>
                    <div class="flex flex--center pb30">
                        <button @click="dodajOsebo" class="btn btn--round btn__default">
                            @lang('pages.events.popup.business.button')
                        </button>
                    </div>

                    <h5 class="text--grey-dark mb5">@lang('pages.events.popup.business.other.title')</h5>
                    <textarea v-model="podjetjeAktivnosti"
                              placeholder="@lang('pages.events.popup.business.other.activity')"
                              class="box mb10"></textarea>
                    <input v-model="podjetjeZaposleni" type="number"
                           placeholder="@lang('pages.events.popup.business.other.employees')" class="box mb10">
                    <input v-model="podjetjePromet" type="number"
                           placeholder="@lang('pages.events.popup.business.other.traffic')" class="box mb10">
                    <textarea v-model="podjetjeInteres"
                              placeholder="@lang('pages.events.popup.business.other.business_interest')"
                              class="box mb10"></textarea>
                    <textarea v-model="podjetjeSodelovanje"
                              placeholder="@lang('pages.events.popup.business.other.cooperation')"
                              class="box mb10"></textarea>

                </template>

                <template v-if="samoplacnik">
                    <h5 class="text--grey-dark mb5">@lang('pages.events.popup.person.contact')</h5>
                    <input type="text" v-model="ime" placeholder="@lang('pages.events.popup.person.name')"
                           class="box mb10">
                    <input type="email" v-model="email" placeholder="@lang('pages.events.popup.person.email')"
                           class="box mb10">
                    <input type="tel" v-model="telefon" placeholder="@lang('pages.events.popup.person.telephone')"
                           class="box mb10">
                    <h5 class="text--grey-dark mb5">@lang('pages.events.popup.person.status')</h5>
                    <div class="flex">
                        <label class="radio flex flex--middle mb10 round mr10">
                            <input type="radio" v-model="status" name="status" value="0">
                            <span class="mr10"></span>
                            @lang('pages.events.popup.person.employed')
                        </label>
                        <label class="radio flex flex--middle mb10 round mr10">
                            <input type="radio" v-model="status" name="status" value="1">
                            <span class="mr10"></span>
                            @lang('pages.events.popup.person.student')
                        </label>
                        <label class="radio flex flex--middle mb10 round">
                            <input type="radio" v-model="status" name="status" value="2">
                            <span class="mr10"></span>
                            @lang('pages.events.popup.person.other')
                        </label>
                    </div>

                    <textarea v-model="sporocilo" placeholder="@lang('pages.events.popup.person.message')"
                              class="box mb10"></textarea>
                </template>
                <!-- samoplacnik -->
                <input type="text" v-model="delo"
                       :placeholder="status==0?('@lang('pages.events.popup.person.work_place')'):(status==1?'@lang('pages.events.popup.person.study_field')':'@lang('pages.events.popup.person.other')')"
                       class="box mb10">
                <div class="flex flex--center pt20">
                    <button class="btn btn__default btn--round"
                            @click="prijava">@lang('pages.events.popup.submit')</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
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
@endsection
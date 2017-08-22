<div class="flex flex--middle flex--center pb20">
    <p class="mb0">Navijaško središče</p>
    <label class="switch flex flex--middle ml10 mr15">
        {!! Form::checkbox('type', 'slo', null) !!}
        <span></span>
    </label>
    <p class="mb0">Slovensko središče</p>
</div>
{!! Form::number('price', null, ['class' => 'box mb15', 'placeholder' => 'Cena dogodka']) !!}
{!! Form::date('begins_at', null, ['class' => 'box mb15', 'placeholder' => 'Datum dogodka']) !!}
<div class="flex flex--center">
    <label for="file" class="flex flex--middle mb20">
        Dodaj sliko
        {!! Form::file('image') !!}
        <span type="button" class="btn btn--round btn__default flex flex--middle ml20">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="#ffffff" d="M9,16V10H5L12,3L19,10H15V16H9M5,20V18H19V20H5Z"/>
                                </svg>
                            </span>
    </label>
</div>
@include('admin._flags')
<div>
    <div id="slo">
        <h4>Slo</h4>
        {!! Form::text('name[sl]', null, ['class' => 'box mb15', 'placeholder' => 'Ime dogodka (slo)']) !!}
        {!! Form::textarea('excerpt[sl]', null, ['class' => 'box mb15', 'placeholder' => 'Kratek opis (slo)']) !!}
        {!! Form::textarea('description[sl]', null, ['class' => 'box mb15', 'placeholder' => 'Opis (slo)']) !!}
    </div>
    <div id="eng" style="display: none">
        <h4>Eng</h4>
        {!! Form::text('name[en]', null, ['class' => 'box mb15', 'placeholder' => 'Ime dogodka (eng)']) !!}
        {!! Form::textarea('excerpt[en]', null, ['class' => 'box mb15', 'placeholder' => 'Kratek opis (eng)']) !!}
        {!! Form::textarea('description[en]', null, ['class' => 'box mb15', 'placeholder' => 'Opis (eng)']) !!}
    </div>
    <div id="ger" style="display: none">
        <h4>Ger</h4>
        {!! Form::text('name[de]', null, ['class' => 'box mb15', 'placeholder' => 'Ime dogodka (ger)']) !!}
        {!! Form::textarea('excerpt[de]', null, ['class' => 'box mb15', 'placeholder' => 'Kratek opis (ger)']) !!}
        {!! Form::textarea('description[de]', null, ['class' => 'box mb15', 'placeholder' => 'Opis (ger)']) !!}
    </div>
</div>

<div class="flex flex--center">
    <button class="btn btn__default btn--round">
        {{ $submitBtn }}
    </button>
</div>
@include('admin._flags')
<div>
    <div id="slo">
        <h4>Slo</h4>
        {!! Form::textarea('excerpt[sl]', null, ['class' => 'box mb15', 'placeholder' => 'Kratek opis (slo)']) !!}
    </div>
    <div id="eng" style="display: none">
        <h4>Eng</h4>
        {!! Form::textarea('excerpt[en]', null, ['class' => 'box mb15', 'placeholder' => 'Kratek opis (eng)']) !!}
    </div>
    <div id="ger" style="display: none">
        <h4>Ger</h4>
        {!! Form::textarea('excerpt[de]', null, ['class' => 'box mb15', 'placeholder' => 'Kratek opis (ger)']) !!}
    </div>
</div>
{!! Form::text('hour', null, ['class' => 'box mt15 mb15', 'placeholder' => 'Čas dogodka (prosti vnos)']) !!}
{!! Form::date('begins_at', null, ['class' => 'box mb15', 'placeholder' => 'Datum dogodka']) !!}
<div class="flex flex--center">
    <button class="btn btn__default btn--round">
        {{ $submitBtn }}
    </button>
</div>
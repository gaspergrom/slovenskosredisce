@include('admin._flags')
<div>
    <div id="slo">
        <h4>Slo</h4>
        {!! Form::text('title[sl]', null, ['class' => 'box mb15', 'placeholder' => 'Naslov novice (slo)']) !!}
        {!! Form::textarea('excerpt[sl]', null, ['class' => 'box mb15', 'placeholder' => 'Krateka vsebina novice (slo)']) !!}
        {!! Form::textarea('content[sl]', null, ['class' => 'box mb15 content', 'placeholder' => 'Vsebina novice (slo)']) !!}
    </div>
    <div id="eng" style="display: none">
        <h4>Eng</h4>
        {!! Form::text('title[en]', null, ['class' => 'box mb15', 'placeholder' => 'Naslov novice (eng)']) !!}
        {!! Form::textarea('excerpt[en]', null, ['class' => 'box mb15', 'placeholder' => 'Krateka vsebina novice (eng)']) !!}
        {!! Form::textarea('content[en]', null, ['class' => 'box mb15 content', 'placeholder' => 'Vsebina novice (eng)']) !!}
    </div>
    <div id="ger" style="display: none">
        <h4>Ger</h4>
        {!! Form::text('title[de]', null, ['class' => 'box mb15', 'placeholder' => 'Naslov novice (ger)']) !!}
        {!! Form::textarea('excerpt[de]', null, ['class' => 'box mb15', 'placeholder' => 'Krateka vsebina novice (ger)']) !!}
        {!! Form::textarea('content[de]', null, ['class' => 'box mb15 content', 'placeholder' => 'Vsebina novice (ger)']) !!}
    </div>
</div>
<div class="flex flex--center">
    <label for="file" class="flex flex--middle mb20">
        Dodaj sliko
        {!! Form::file('image', ['id' => 'file']) !!}
        <span type="button" class="btn btn--round btn__default flex flex--middle ml20">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="#ffffff" d="M9,16V10H5L12,3L19,10H15V16H9M5,20V18H19V20H5Z"/>
                                </svg>
                            </span>
    </label>
</div>
<div class="flex flex--center">
    <button class="btn btn__default btn--round">
        {{ $submitBtn }}
    </button>
</div>
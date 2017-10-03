@include('admin._flags')
<div>
    <div id="slo">
        <h4>Slo</h4>
        {!! Form::text('name[sl]', null, ['class' => 'box mb15', 'placeholder' => 'Naslov videa (slo)']) !!}
    </div>
    <div id="eng" style="display: none">
        <h4>Eng</h4>
        {!! Form::text('name[en]', null, ['class' => 'box mb15', 'placeholder' => 'Naslov videa (eng)']) !!}
    </div>
    <div id="ger" style="display: none">
        <h4>Ger</h4>
        {!! Form::text('name[de]', null, ['class' => 'box mb15', 'placeholder' => 'Naslov videa (ger)']) !!}
    </div>
</div>
<div class="flex flex--center pb30">
    <label for="file" class="flex flex--middle">
        Video
        {!! Form::file('video', ['id' => 'file']) !!}
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
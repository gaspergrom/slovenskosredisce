<button class="mt30 btn btn__facebook btn--round" href="#"
        onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+ encodeURI('{{ url()->current() }}'), 'facebook-share-dialog', 'width=626,height=436'); return false;">
    <span class="fb-share-text">@lang('general.share')</span>
</button>

@section('styles')
    <style>
        .btn__facebook {
            color: #fff;
            background-color: #3b5998;
        }

        .fb-share-text {
            position: relative;
            top: -1px;
        }
    </style>
@endsection
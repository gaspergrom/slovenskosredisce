<button class="mt30 btn btn__facebook btn--round" href="#"
        onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+ encodeURI('{{ url()->current() }}'), 'facebook-share-dialog', 'width=626,height=436'); return false;">
    <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
               x="0px" y="0px" viewBox="0 0 155.139 155.139" style="enable-background:new 0 0 155.139 155.139;"
               xml:space="preserve" width="16px" height="16px">
<g>
	<path id="f_1_"
          d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184   c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452   v20.341H37.29v27.585h23.814v70.761H89.584z"
          fill="#FFFFFF"/>
</g></svg></span><span class="fb-share-text">@lang('general.share')</span>
</button>

@section('styles')
    <style>
        .btn__facebook {
            color: #fff;
            background-color: #3b5998;
        }

        .fb-share-text {
            position: relative;
            top: -2px;
            left: 5px;
        }
    </style>
@endsection
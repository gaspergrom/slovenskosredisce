<div class="col-md-10 pb45">
    <a href="{{ url("novice/".$post->id) }}">
        <div class="box bg--white pt30 pb30 pl45 pr45 link--zoom">
            <h4 class="text-center">{{ $post->title }}</h4>
            <hr>
            <p>
                {{ $post->excerpt }}
            </p>
            <p class="text--green text-bold">@lang('pages.news.read_more')</p>
        </div>
    </a>
</div>
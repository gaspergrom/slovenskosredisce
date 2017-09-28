<div class="col-md-10 pb45">
    <div class="box bg--white pt30 pb30 pl45 pr45 link--zoom">
        <div class="row">
            <div class="col-sm-6">
                <h4>{{ $sponsor->name }}</h4>
                <hr class="ml0">
            </div>
            <div class="col-sm-6">
                <a href="{{ $sponsor->url }}" target="_blank" rel="noreferrer noopener">
                    <div class="flex flex--right">
                        <div>
                            <img src="{{ asset('storage/'.$sponsor->logo) }}" style="max-height: 70px; width: auto;">
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <p>
            {{ $sponsor->description }}
        </p>
    </div>
</div>
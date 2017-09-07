<div class="col-md-10 pb45">
    <div class="box bg--white pt30 pb30 pl45 pr45 link--zoom">
        <div class="row">
            <div class="col-sm-6">
                <h4>{{ $sponsor->name }}</h4>
                <hr class="ml0">
            </div>
            <div class="col-sm-6">
                <div class="flex flex--right">
                    <img src="{{ asset('storage/'.$sponsor->logo) }}" style="height: 90px;">
                </div>
            </div>
        </div>

        <p>
            {{ $sponsor->description }}
        </p>
    </div>
</div>
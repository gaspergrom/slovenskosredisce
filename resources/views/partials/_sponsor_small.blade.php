<a href="{{ $sponsor->url }}" target="_blank" rel="noreferrer noopener">
    <div class="item flex flex--middle flex--center quadric bg--white box">
        <div class="flex flex--center flex--middle" style="position: absolute; top: 0;left: 0; right: 0; bottom: 0">
            <div>
                <img src="{{ asset('storage/'.$sponsor->logo) }}" style="height: 90px; width: auto;">
            </div>
        </div>
        <div class="overlay pt10 pb10 pl10 pr10 flex flex--middle flex--center">
            <div class="flex flex--column">
                <h4 class="text-center text--white">{{ $sponsor->name }}</h4>
            </div>
        </div>
    </div>
</a>
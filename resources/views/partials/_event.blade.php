<div class="col-sm-4 pb30">
    <a href="{{ url('event/'.$event->id) }}">
        <div class="box link--zoom">
            <div class="width100 quadric--medium bg--image radius--top relative"
                 style="background-image: url('{{ $event->image }}')">
                <div class="event__date bg--gradient pt20">
                    <div class="pl5 pr5 text-center" style="padding-bottom: 2px;">
                        <span class="text-normal text--white">{{ $event->begins_at->format('d. m.') }}</span>
                    </div>
                    <div class="bg--grey-dark text-center" style="padding: 2px;">
                        <span class="text--white">{{ $event->begins_at->format('Y') }}</span>
                    </div>
                </div>
            </div>
            <div class="pt20 pl20 pr20 pb20">
                <h5 class="text--grey-dark">{{ $event->name }}</h5>
                <p class="pt10">
                    {{ $event->excerpt }}
                </p>
            </div>
        </div>
    </a>
</div>
<div class="col-sm-4 pb30 ">
    <a href="{{ url('multimedija/galerija/'.$gallery->id) }}">
        <div class="box link--zoom">
            <div class="width100 quadric--medium bg--image radius--top relative"
                 style="background-image: url('{{ asset('storage/'.$gallery->image->path) }}')">
            </div>
            <div class="pt20 pl20 pr20 pb20">
                <h5 class="text--grey-dark">{{ $gallery->name }}</h5>
            </div>
        </div>
    </a>
</div>
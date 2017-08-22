<div data-gallery="{{ $gallery->id }}" class="col-md-6 mb20">
    <div class="box pl10 pr10 pt10 pb10">
        <h4 class="pb20">{{ $gallery->name }}</h4>
        <a href="{{ route('galerija.edit', $gallery->id)  }}">
            <button class="btn btn__default mb10">
                Uredi
            </button>
        </a>
        <button onclick="deleteGallery({{ $gallery->id }});" class="btn btn__default mb10" style="background: #c00">
            Odstrani
        </button>
    </div>
</div>
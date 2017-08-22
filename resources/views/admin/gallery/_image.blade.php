<div data-image="{{ $image['id'] }}" class="col-md-4 mb20">
    <div class="quadric--medium bg--image" style="background-image: url('{{ asset('storage/'.$image['path']) }}')">

    </div>
    <div class="box pl10 pr10 pt10">
        <button onclick="deleteImage({{ $image['id'] }});" class="btn btn__default mb10" style="background: #c00">
            Odstrani
        </button>
    </div>
</div>
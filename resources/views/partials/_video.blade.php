<div class="col-md-4 pb30">
    <p>{{ $video->name }}</p>
    <div class="quadric--medium bg--image" data-video="{{ asset('storage/'.$video->path) }}"
         style="background-image: url('{{ asset($video->image) }}')"></div>
</div>
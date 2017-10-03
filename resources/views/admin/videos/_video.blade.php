<div data-video="{{ $video->id }}" class="col-md-4 pb30">
    <p>{{ $video->name }}</p>
    <div class="quadric--medium bg--image" data-video="{{ $video->path }}"
         style="background-image: url('{{ asset($video->image) }}')"></div>
    <a href="{{ route('videoposnetki.edit', $video->id) }}">Uredi</a>
    <button onclick="deleteVideo({{ $video->id }});">Izbriši</button>
</div>
<div class="col-md-4 pb60">
    <div class="quadric bg--image" style="background-image: url('{{ asset('storage/'.$member->image) }}')"></div>
    <h5 class="text-center text--black pt20"><b>{{ $member->name }}</b></h5>
    <p class="text-center">{{ $member->position }}</p>
</div>
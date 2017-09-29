@extends('admin')

@section('content')
    <section>
        <div class="container pt150 pb60">
            <h1 class="text-center">Naslov albuma</h1>
            <hr>
            @include('partials._errors')
            <div class="flex flex--center">
                <div class="col-md-8">
                    {!! Form::model($gallery, ['method' => 'PATCH', 'files' => true, 'route' => ['galerija.update', $gallery['id']]]) !!}
                    @include('admin.gallery._form', ['submitBtn' => 'Uredi'])
                    {!! Form::close() !!}
                </div>
                <div class="col-md-12">
                    <div class="flex pt60">
                        @each('admin.gallery._image', $images, 'image')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        function deleteImage(id) {
            $.ajax({
                url: "/admin/images/" + id,
                type: 'DELETE',
                data: {'_token': '{{ csrf_token() }}'},
                success: function () {
                    $("div[data-image=" + id + "]").remove();
                }
            })
        }
    </script>
@endsection
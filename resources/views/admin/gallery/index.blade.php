@extends('admin')

@section('content')
    <section>
        <div class="container pt150 pb60">
            <h1 class="text-center">Galerija</h1>
            <hr>
            @include('partials._errors')
            <div class="flex flex--center">
                <div class="col-md-8">
                    {!! Form::open(['url' => '/admin/galerija', 'files' => true]) !!}
                    @include('admin.gallery._form', ['submitBtn' => 'Dodaj'])
                    {!! Form::close() !!}
                    <div class="flex pt60">
                        @each('admin.gallery._gallery', $galleries, 'gallery')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        function deleteGallery(id) {
            $.ajax({
                url: '/admin/galerija/' + id,
                type: 'DELETE',
                data: {'_token': '{{ csrf_token() }}'},
                success: function () {
                    $("div[data-gallery=" + id + "]").remove();
                }
            })
        }
    </script>
@endsection
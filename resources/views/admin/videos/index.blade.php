@extends('admin')

@section('content')
    <section>
        <div class="container pt150 pb60">
            <h1 class="text-center">Videoposnetki</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-8">
                    {!! Form::open() !!}
                    @include('admin.videos._form', ['submitBtn' => 'Dodaj'])
                    {!! Form::close() !!}
                </div>
                <div class="col-md-8 pt60">
                    @each('admin.videos._video', $videos, 'video')
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        function deleteVideo(id) {
            $.ajax({
                url: '/admin/videoposentki/' + id,
                type: 'DELETE',
                data: {'_token': '{{ csrf_token() }}'},
                success: function () {
                    $("div[data-video=" + id + "]").remove();
                }
            });
        }
    </script>
@endsection
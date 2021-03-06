@extends('admin')

@section('content')
    <section>
        <div class="container pt150 pb60">
            <h1 class="text-center">Novice</h1>
            <hr>
            @include('partials._errors')
            <div class="flex flex--center">
                <div class="col-md-8">
                    {!! Form::open(['url' => 'admin/novice', 'files' => true]) !!}
                    @include('admin.posts._form', ['submitBtn' => 'Dodaj'])
                    {!! Form::close() !!}
                </div>
                <div class="col-md-8 pt60 table">
                    <table class="responsive">
                        <tr>
                            <td class="text-center text-bold">Naslov novice</td>
                            <td class="text-center text-bold">Datum objave</td>
                            <td class="text-center text-bold">Akcija</td>
                        </tr>
                        @each('admin.posts._post', $posts, 'post')
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        function deletePost(id) {
            $.ajax({
                url: '/admin/novice' + id,
                type: 'DELETE',
                data: {'_token': '{{ csrf_token() }}'},
                success: function () {
                    $("tr[data-post=" + id + "]").remove()
                }
            })
        }
    </script>
    @include('includes.tinymce')
@endsection
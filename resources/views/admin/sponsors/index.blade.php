@extends('admin')

@section('content')
    <section>
        <div class="container pt150 pb60">
            <h1 class="text-center">Sponzorji</h1>
            <hr>
            @include('partials._errors')
            <div class="flex flex--center">
                <div class="col-md-8">
                    {!! Form::open(['url' => '/admin/sponzorji', 'files' => true]) !!}
                    @include('admin.sponsors._form', ['submitBtn' => 'Dodaj'])
                    {!! Form::close() !!}
                </div>
                <div class="col-md-8 table pt60">
                    <table class="responsive">
                        <tr>
                            <td class="text-center text-bold">Ime podjetja</td>
                            <td class="text-center text-bold">Akcija</td>
                        </tr>
                        @each('admin.sponsors._sponsor', $sponsors, 'sponsor')
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        function deleteSponsor(id) {
            $.ajax({
                url: '/admin/sponzorji/' + id,
                type: 'DELETE',
                data: {'_token': '{{ csrf_token() }}'},
                success: function () {
                    $("tr[data-sponsor=" + id + "]").remove()
                }
            })
        }
    </script>
    @include('includes.tinymce')
@endsection
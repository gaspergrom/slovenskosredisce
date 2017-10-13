@extends('admin')

@section('content')
    <section>
        <div class="container pt150 pb60">
            <h1 class="text-center">Dogodki</h1>
            <hr>
            @include('partials._errors')
            <div class="flex flex--center">
                <div class="col-md-8">
                    {!! Form::open(['route' => 'poslovni.store']) !!}
                    @include('admin.business_events._form', ['submitBtn' => 'Dodaj'])
                    {!! Form::close() !!}
                </div>
                <div class="col-md-8 pt60 table">
                    <table class="responsive">
                        <tr>
                            <td class="text-center text-bold">
                                Opis dogodka
                            </td>
                            <td class="text-center text-bold">
                                Akcija
                            </td>
                        </tr>
                        @each('admin.business_events._event', $events, 'event')
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @include('includes.tinymce')
    <script>
        function deleteEvent(id) {
            $.ajax({
                url: '/admin/poslovni/' + id,
                type: 'DELETE',
                data: {'_token': '{{ csrf_token() }}'},
                success: function () {
                    $("tr[data-id=" + id + "]").remove();
                }
            })
        }
    </script>
@endsection
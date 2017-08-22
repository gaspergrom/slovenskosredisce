@extends('admin')

@section('content')
    <section>
        <div class="container pt150 pb60">
            <h1 class="text-center">Dogodki</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-8">
                    {!! Form::open(['route' => 'dogodki.store', 'files' => true]) !!}
                    @include('admin.events._form', ['submitBtn' => 'Dodaj'])
                    {!! Form::close() !!}
                </div>
                <div class="col-md-8 pt60 table">
                    <table class="responsive">
                        <tr>
                            <td class="text-center text-bold">
                                Ime dogodka
                            </td>
                            <td class="text-center text-bold">
                                Datum dogodka
                            </td>
                            <td class="text-center text-bold">
                                Akcija
                            </td>
                        </tr>
                        @each('admin.events._event', $events, 'event')
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        function deleteEvent(id) {
            $.ajax({
                url: '/admin/dogodki/' + id,
                type: 'DELETE',
                data: {'_token': '{{ csrf_token() }}'},
                success: function () {
                    $("tr[data-id=" + id + "]").remove();
                }
            })
        }
    </script>
@endsection
@extends('admin')

@section('content')
    <section>
        <div class="container pt150 pb60">
            <h1 class="text-center">Vodstvo</h1>
            <hr>
            @include('partials._errors')
            <div class="flex flex--center">
                <div class="col-md-8">
                    {!! Form::open(['url' => '/admin/vodstvo', 'files' => true]) !!}
                    @include('admin.leadership._form', ['submitBtn' => 'Dodaj'])
                    {!! Form::close() !!}
                </div>
                <div class="col-md-8">
                    <div class="table pt60">
                        <table class="responsive">
                            <tr>
                                <td class="text-center text-bold">Ime in priimek</td>
                                <td class="text-center text-bold">Akcija</td>
                            </tr>
                            @each('admin.leadership._leader', $leaderships, 'leader')
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        function deleteLeader(id) {
            $.ajax({
                url: '/admin/vodstvo/' + id,
                type: 'DELETE',
                data: {'_token': '{{ csrf_token() }}'},
                success: function () {
                    $("tr[data-leader=" + id + "]").remove()
                }
            })
        }
    </script>
@endsection
@extends('app')

@section('content')
    @include('includes.header_image', ['image' => 'Slo5.jpg'])

    <section>
        <div class="container pt45 pb60">
            <h1 class="text-center h2 text-uppercase">@lang('center.business.slo_cro.title')</h1>
            <hr>
            <div class="flex flex--center">
                <div class="col-md-10">
                    <p>
                        @lang('center.business.slo_cro.text')
                    </p>
                    <div class="table pt30">
                        <p>
                            @lang('center.business.slo_cro.table_text')
                        </p>
                        <table class="responsive">
                            <thead>
                            <tr>
                                <th class="text-center text-bold">@lang('center.business.slo_cro.year')</th>
                                <th class="text-center text-bold">@lang('center.business.slo_cro.export')</th>
                                <th class="text-center text-bold">@lang('center.business.slo_cro.import')</th>
                                <th class="text-center text-bold">@lang('center.business.slo_cro.sum')</th>
                                <th class="text-center text-bold">@lang('center.business.slo_cro.saldo')</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">2009</td>
                                <td class="text-center">1.282.012</td>
                                <td class="text-center">642.480</td>
                                <td class="text-center">1.924.492</td>
                                <td class="text-center">639.532</td>
                            </tr>
                            <tr>
                                <td class="text-center">2010</td>
                                <td class="text-center">1.264.416</td>
                                <td class="text-center">793.182</td>
                                <td class="text-center">2.057.598</td>
                                <td class="text-center">471.234</td>
                            </tr>
                            <tr>
                                <td class="text-center">2011</td>
                                <td class="text-center">1.424.025</td>
                                <td class="text-center">926.700</td>
                                <td class="text-center">2.350.725</td>
                                <td class="text-center">497.325</td>
                            </tr>
                            <tr>
                                <td class="text-center">2012</td>
                                <td class="text-center">1.356.693</td>
                                <td class="text-center">943.463</td>
                                <td class="text-center">2.300.156</td>
                                <td class="text-center">413.230</td>
                            </tr>
                            <tr>
                                <td class="text-center">2013</td>
                                <td class="text-center">1.484.298</td>
                                <td class="text-center">1.069.049</td>
                                <td class="text-center">2.553.347</td>
                                <td class="text-center">415.249</td>
                            </tr>
                            <tr>
                                <td class="text-center">2014</td>
                                <td class="text-center">1.774.997</td>
                                <td class="text-center">1.084.053</td>
                                <td class="text-center">2.859.050</td>
                                <td class="text-center">690.944</td>
                            </tr>
                            <tr>
                                <td class="text-center">2015</td>
                                <td class="text-center">1.870.906</td>
                                <td class="text-center">1.370.201</td>
                                <td class="text-center">3.241.107</td>
                                <td class="text-center">500.705</td>
                            </tr>
                            </tbody>
                        </table>
                        <p>
                            @lang('center.business.slo_cro.source')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
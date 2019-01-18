@extends('layouts.application')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <h2 class="text-muted">Dashboard</h2>
            <div class="col-md-6 col-sm-6 pt-5 offset-md-3">
                <h4 class="text-center text-muted pb-3">¿La información es correcta?</h4>
                <canvas id="chart1" class="chart"></canvas>
                <script>
                    var ctx = document.getElementById('chart1').getContext('2d');
                    var chart = new Chart(ctx, {
                        // The type of chart we want to create
                        type: 'pie',

                        // The data for our dataset
                        data: {
                            labels: ["Sí", "No", "Más o menos"],
                            datasets: [{
                                label: "¿La información es correcta?",
                                backgroundColor: ["#4E98C0", "#0066A1", "#0288f1"],
                                data: [
                                    @foreach( $chart_data as $data )
                                    {{$data}},

                                    @endforeach
                                ],
                            }]
                        },

                        // Configuration options go here
                        options: {}
                    });
                </script>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.dashboard')
@section('content')
<canvas id="meuChart"></canvas>
@php

@endphp
<script type="text/javascript">
    var canvas = document.getElementById('meuChart');
    var myChart = new Chart(canvas, {
        type: 'line',
        data: {
            labels: [
                'janeiro',
                'fevereiro',
                'março',
                'abril',
                'junho'
            ],
            datasets: [
                {
                    data: [
                        350,
                        460,
                        465,
                        480,
                        450,
                    ]
                }
            ]
        }
    });
</script>
@endsection

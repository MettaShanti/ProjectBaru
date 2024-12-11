@extends('layouts.main')
@section('content')
<!-- {{-- html --}}
    {{-- copasus hightchart html--}}
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

{{-- ini untuk membuat grafik ke samping --}}
<div class="row">
    <div class="col">
        <figure class="highcharts-figure">
            <div id="container"></div>
        </figure>
    </div>
    <div class="col">
        <figure class="highcharts-figure">
            <div id="container2"></div>
        </figure>
    </div>
</div>

{{-- css --}}
{{-- copasus hightchart css--}}
<style>
    .highcharts-figure,
.highcharts-data-table table {
    min-width: 310px;
    max-width: 800px;
    margin: 1em auto;
}

#container {
    height: 400px;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

</style>
{{-- Highcharts JavaScript --}}
<div id="container" style="height: 400px; width: 100%;"></div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Data yang diterima dari controller
        const data = {
            hadir: 0,
            mangkir: 0,
            tidakHadir: 0,
        };

        @foreach ($absenreports as $row)
            @if ($row->Status === 'hadir')
                data.hadir = {{ $row->jumlah }};
            @elseif ($row->Status === 'mangkir')
                data.mangkir = {{ $row->jumlah }};
            @elseif ($row->Status === 'tidak hadir')
                data.tidakHadir = {{ $row->jumlah }};
            @endif
        @endforeach

        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Rekapitulasi Kehadiran Pegawai',
                align: 'left'
            },
            subtitle: {
                text: 'Source: Attendance zSystem',
                align: 'left'
            },
            xAxis: {
                categories: ['Hadir', 'Mangkir', 'Tidak Hadir'],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Pegawai'
                }
            },
            tooltip: {
                valueSuffix: ' Pegawai'
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Pegawai',
                data: [data.hadir, data.mangkir, data.tidakHadir]
            }]
        });
    });
</script> -->

@endsection
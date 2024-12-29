@extends('layouts.main')
@section('content')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<div class="row">
    <div class="col">
        <figure class="highcharts-figure">
            <div id="container"></div>
        </figure>
    </div>
</div>

<style>
    .highcharts-figure {
        min-width: 310px;
        max-width: 800px;
        margin: 1em auto;
    }

    #container {
        height: 400px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Data yang diterima dari controller
        const data = {
            hadir: 0,
            mangkir: 0,
            tidakHadir: 0,
        };

        @foreach ($absenreports as $row)
            @if ($row->status === 'Hadir')
                data.hadir = {{ $row->jumlah }};
            @elseif ($row->status === 'Mangkir')
                data.mangkir = {{ $row->jumlah }};
            @elseif ($row->status === 'Tidak Hadir')
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
                text: 'Source: Attendance System',
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
</script>
@endsection


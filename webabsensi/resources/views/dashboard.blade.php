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
        // Data dari PHP ke dalam JavaScript
        const data = {
            hadir: 0,
            mangkir: 0,
            tidakHadir: 0,
        };

        // Mengisi data berdasarkan hasil query
        @foreach ($absenreports as $row)
            @if ($row->status === 'Hadir')
                data.hadir = {{ $row->jumlah }};
            @elseif ($row->status === 'Mangkir')
                data.mangkir = {{ $row->jumlah }};
            @elseif ($row->status === 'Tidak Hadir')
                data.tidakHadir = {{ $row->jumlah }};
            @endif
        @endforeach

        // Konfigurasi Highcharts
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Rekapitulasi Kehadiran Pegawai - {{ \Carbon\Carbon::now()->translatedFormat("F Y") }}',
                align: 'left'
            },
            subtitle: {
                text: 'Sumber: Sistem Kehadiran',
                align: 'left'
            },
            xAxis: {
                categories: ['Hadir', 'Mangkir', 'Tidak Hadir'],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Kehadiran'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y} Pegawai</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Jumlah Pegawai',
                data: [data.hadir, data.mangkir, data.tidakHadir]
            }]
        });
    });
</script>
@endsection

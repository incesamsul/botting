@extends('layouts.v_template')

@section('content')
<section class="section">
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-title">Admin</div>
                    <div class="row py-3">
                        <div class="col-md-4 d-flex flex-column justify-content-around">
                            <div>
                                <h6 class="fw-bold text-uppercase text-danger op-8">Total Pengguna</h6>
                                <h3 class="fw-bold">{{ count($pengguna) }}</h3>
                            </div>
                            <div>
                                <h6 class="fw-bold text-uppercase text-success op-8">Total Undangan</h6>
                                <h3 class="fw-bold">{{ count($undangan) }}</h3>
                            </div>
                        </div>
                        <div class="col-md-8  text-center">
                            <div id="chart-container ">
                                <i class="fas fa-chart-bar " style="font-size: 140px"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Statistik tamu</div>
                        <div class="card-tools">
                            {{-- <a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                <span class="btn-label">
                                    <i class="fa fa-pencil"></i>
                                </span>
                                Export
                            </a>
                            <a href="#" class="btn btn-info btn-border btn-round btn-sm">
                                <span class="btn-label">
                                    <i class="fa fa-print"></i>
                                </span>
                                Print
                            </a> --}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-container" >
                        <canvas id="myChart2" ></canvas>
                    </div>
                    <div id="myChartLegend"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-primary">
                <div class="card-header">
                    <div class="card-title">Total tamu</div>
                    <div class="card-category">March 25 - April 02</div>
                </div>
                <div class="card-body pb-0">
                    <div class="mb-4 mt-2">
                        <h1>{{ count($undangan) }}</h1>
                    </div>
                    <div class="pull-in">
                        <canvas id="dailySalesChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body pb-0">
                    <div class="h1 fw-bold float-right text-warning">+7%</div>
                    <h2 class="mb-2"><h1></h1></h2>
                    <p class="text-muted">Jumlah komentar</p>
                    <div class="pull-in sparkline-fix">
                        <div id="lineChart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>
@endsection

@section('script')
<script>

const data = {
    labels: ['hadir','tdk hadir'],
    datasets: [
        {
        label: 'Jumlah tamu',
        data: [
            '{{ count($undangan) }}',
            '{{ count($pengguna) }}',
        ],
        fill: false,
        borderColor: '#44c',
        backgroundColor: '#22c0e8',
        }
    ]
    };




    var ctx = document.getElementById('myChart2');
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
        responsive: true,
        scales: {
        x: {
            display: true,
            title: {
            display: true,
            text: 'Month',
            color: '#911',
            font: {
                family: 'Comic Sans MS',
                size: 20,
                weight: 'bold',
                lineHeight: 1.2,
            },
            padding: {top: 20, left: 0, right: 0, bottom: 0}
            }
        },
        y: {
            display: true,
            title: {
            display: true,
            text: 'Value',
            color: '#191',
            font: {
                family: 'Times',
                size: 20,
                style: 'normal',
                lineHeight: 1.2
            },
            padding: {top: 30, left: 0, right: 0, bottom: 0}
            }
        }
        }
    },
    });


    $('#liDashboard').addClass('active');

</script>
@endsection

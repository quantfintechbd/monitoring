@extends("Main::layouts.app")

@section("content")
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Dashboard </h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Dashboard </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row dashboard">
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Today Turnover</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="200"></span>M
                        </h4>
                    </div>
                    <div class="col-6">
                        <div id="mini-chart1" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                    </div>
                </div>
                <div class="text-nowrap">
                    <!-- <span class="badge bg-soft-success text-success"></span> -->
                    <span class="ms-1 text-muted font-size-13">Today</span>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Today Trades</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="200"></span>M
                        </h4>
                    </div>
                    <div class="col-6">
                        <div id="mini-chart2" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                    </div>
                </div>
                <div class="text-nowrap">
                    <!-- <span class="badge bg-soft-danger text-danger"></span>  -->
                    <span class="ms-1 text-muted font-size-13">Today</span>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Broker Limit</span>
                        <h4 class="mb-3">
                            <span >200/400</span>
                        </h4>
                    </div>
                    <div class="col-6">
                        <div id="mini-chart3" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                    </div>
                </div>
                <div class="text-nowrap">
                    <span class="badge bg-soft-success text-success"></span>
                    <span class="ms-1 text-muted font-size-13">Today</span>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-xl-3 col-md-6 " >
        <!-- card -->
        <div class="card card-h-100 dashboard-active-user">
            <!-- card body -->
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Active User</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="270"></span>
                        </h4>
                    </div>
                    <div class="col-6">
                        <div id="mini-chart4" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                    </div>
                </div>
                <div class="text-nowrap">
                    <!-- <span class="badge bg-soft-success text-success"></span> -->
                    <span class="ms-1 text-muted font-size-13">Today</span>
                </div>
            </div>
            <!-- end card body -->
            <div class="dashboard-active-user-hover mt-3
                mb-3">
                <ul class="">
                    <li> <i class="mdi mdi-circle align-middle font-size-10 me-2 text-success"></i>Destop :400</li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li> <i class="mdi mdi-circle align-middle font-size-10 me-2 text-warning"></i>Mobile: 455</li>
                </ul>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->  
</div>
<!-- end row-->
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Turnover / Buy / Sell</h4>
            </div>
            <div class="card-body mb-3">
                <div id="turnover-buy-sell"></div>
            </div>
            <!--end card body-->
        </div>
        <!--end card-->
    </div>
    <!-- col  -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Trade / Buy / Sell</h4>
            </div>
            <div class="card-body">
                <div id="line_chart_datalabel" data-colors='["#ffbf53", "#2ab57d", "#fd625e"]' class="apex-charts" dir="ltr"></div>
            </div>
            <!--end card body--> 
        </div>
        <!--end card --> 
    </div>
    <!-- end col -->
</div>
<!-- end row  -->
<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Top 5 Dealer</h4>
            </div>
            <div class="card-body">
                <div id="wallet-balance" data-colors='["#ffbf53", "#5156be", "#fd7e14", "#d63384", "#2ab57d"]' class="apex-charts">
                </div>
                <div class="col-xs-6 offset-md-3 mt-3 mb-4 pt-3 clearfix" id="top_dealer5">
                    <ul>
                        <li>
                            <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2 " style="color:#ffbf53"></i> Dealer 1</p>
                        </li>
                        <li>
                            <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2 " style="color:#5156be"></i> Dealer 2</p>
                        </li>
                        <li>
                            <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2 " style="color:#fd7e14"></i> Dealer 3</p>
                        </li>
                        <li>
                            <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2 " style="color:#d63384"></i> Dealer 4</p>
                        </li>
                        <li>
                            <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2 " style="color:#2ab57d"></i> Others</p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- card body  -->
        </div>
        <!-- card  -->
    </div>
    <!--col-->
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Top 5 Stock</h4>
                <div class="flex-shrink-0">
                    <select class="form-select form-select-sm mb-0 my-n1">
                        <option value="Today" selected="">Today</option>
                        <option value="Yesterday">Yesterday</option>
                        <option value="Week">Last Week</option>
                        <option value="Month">Last Month</option>
                    </select>
                </div>
            </div>
            <!-- end card header -->
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-nowrap align-middle">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="mdi mdi-circle align-middle font-size-10 me-2 text-primary"></i> Stock name</td>
                                <td> 334534</td>
                            </tr>
                            <!--  end list -->
                            <tr>
                                <td><i class="mdi mdi-circle align-middle font-size-10 me-2 text-warning"></i> Stock name</td>
                                <td> 334534</td>
                            </tr>
                            <!--  end list -->
                            <tr>
                                <td><i class="mdi mdi-circle align-middle font-size-10 me-2 text-danger"></i> Stock name</td>
                                <td> 334534</td>
                            </tr>
                            <!--  end list -->
                            <tr>
                                <td><i class="mdi mdi-circle align-middle font-size-10 me-2 text-success"></i> Stock name</td>
                                <td> 334534</td>
                            </tr>
                            <!--  end list -->
                            <tr>
                                <td><i class="mdi mdi-circle align-middle font-size-10 me-2 text-info"></i> Stock name</td>
                                <td> 334534</td>
                            </tr>
                            <!--  end list -->
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row  -->
@endsection

@push("scripts")

<!-- apexcharts init -->
<script src="{{ asset('assets/js/pages/apexcharts.init.js') }}"></script>
<!-- dashboard init -->
<script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

<script>
    var options = {
        series: [{
        name: 'Buy',
        data: [44, 55, 41, 67, 22, 43]
        }, {
    
        name: 'Sell',
        data: [21, 7, 25, 13, 22, 8]
        }],
        colors: ["#2ab57d", "#fd625e"],
        chart: {
        type: 'bar',
        height: 350,
        stacked: true,
        toolbar: {
            show: true
        },
        zoom: {
            enabled: true
        }
        },
        responsive: [{
        breakpoint: 480,
        options: {
            legend: {
            position: 'bottom',
            offsetX: -10,
            offsetY: 0
            }
        }
        }],
        plotOptions: {
        bar: {
            horizontal: false,
        },
        },
        xaxis: {
        type: 'datetime',
        categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT',
            '01/05/2011 GMT', '01/06/2011 GMT'
        ],
        },
        legend: {
        position: 'right',
        offsetY: 40
        },
        fill: {
        opacity: 1
        }
        };
    
    var chart = new ApexCharts(document.querySelector("#turnover-buy-sell"), options);
    
    chart.render();
    
</script>
@endpush
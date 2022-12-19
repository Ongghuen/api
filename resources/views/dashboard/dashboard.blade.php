@extends('../layouts.mainlayout')

@section('title', 'Dashboard')

@section('aside')
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-0 fixed-start ms-0 my-lg-0 ms-lg-0 my-md-0 ms-md-0 my-sm-0 ms-sm-0 my-xl-3 ms-xl-4" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="./dashboard">
                <img src="{{asset('/images/icon.png')}}" class="navbar-brand-img h-100" alt="main_logo" />
                <span class="ms-1 font-weight-bold">Suki Dashboard</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0" />
        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/dashboard">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-television text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/order">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-shopping-cart text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Transactions</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-shopping-bag text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Products</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/custom">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-archive text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Customs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/user">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-user-circle text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/report">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-pie-chart text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Report</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
@endsection

@section('content')
    @if(Session::has('status'))
        <div class="alert alert-success alert-dismissible fade show mb-4 font-weight-bold" role="alert">
            {{Session::get('message')}}
        </div>
    @endif
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                    Today's Money
                                </p>
                                <h6 class="font-weight-bolder">
                                    {{"Rp " . number_format($todaysMoney, 0, ".", '.')}}
                                </h6>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                <i class="fa fa-money text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                Total Sales
                                </p>
                                <h6 class="font-weight-bolder">
                                    {{"Rp " . number_format($sales, 0, ".", '.')}}
                                </h6>
                                <p class="mb-0">
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                <i class="fa fa-globe text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                    Total Users
                                </p>
                                <h6 class="font-weight-bolder">
                                    {{$todaysUser}}
                                </h6>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                <i class="fa fa-user-circle text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                Total Products
                                </p>
                                <h6 class="font-weight-bolder">
                                    {{$todaysProduct}}
                                </h6>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                <i class="fa fa-shopping-cart text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h6 class="text-capitalize">Sales overview</h6>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card card-carousel overflow-hidden h-100 p-0">
                <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                <div class="carousel-inner border-radius-lg h-100">
                    <div class="carousel-item h-100 active" style="
                        background-image: url('../../images/nv-bg.jpg');
                        background-size: cover;
                        ">
                        <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                            <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                            <i class="ni ni-camera-compact text-dark opacity-10"></i>
                            </div>
                            <h5 class="text-white mb-1">Get started with Argon</h5>
                            <p>
                            There’s nothing I really wanted to do in life that I
                            wasn’t able to get good at.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item h-100" style="
                        background-image: url('../assets/img/carousel-2.jpg');
                        background-size: cover;
                        ">
                        <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                            <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                            <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                            </div>
                            <h5 class="text-white mb-1">
                            Faster way to create web pages
                            </h5>
                            <p>
                            That’s my skill. I’m not really specifically talented at
                            anything except for the ability to learn.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item h-100" style="
                        background-image: url('../assets/img/carousel-3.jpg');
                        background-size: cover;
                        ">
                        <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                            <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                            <i class="ni ni-trophy text-dark opacity-10"></i>
                            </div>
                            <h5 class="text-white mb-1">
                            Share with us your design tips!
                            </h5>
                            <p>
                            Don’t be afraid to be wrong because you can’t learn
                            anything from a compliment.
                            </p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-header pb-0 p-3">
                <div class="d-flex justify-content-between">
                    <h6 class="mb-2">Top Produk</h6>
                </div>
                </div>
                <div class="table-responsive">
                <table class="table align-items-center">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                No
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Image
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Nama
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Harga
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Terjual
                            </th>
                        </tr>
                    </thead>
                      <tbody>
                        @foreach ($topProducts as $data)
                            <tr>
                                <td class="align-middle text-center py-3">
                                    <span class="text-secondary text-xs font-weight-bold">{{$loop->iteration}}</span>
                                </td>
                                <td class="align-middle text-center py-3">
                                    <span class="text-secondary text-xs font-weight-bold">
                                        <img src="{{ $data->image ? asset('storage/' . $data->image) : asset('/images/box.png') }}" class="avatar avatar-sm me-2" alt="{{$data->name}}" />    
                                    </span>
                                </td>
                                <td class="align-middle text-center py-3">
                                    <span class="text-secondary text-xs font-weight-bold">{{$data->name}}</span>
                                </td>
                                <td class="align-middle text-center py-3">
                                    <span class="text-secondary text-xs font-weight-bold">{{"Rp " . number_format($data->harga, 0, ".", '.')}}</span>
                                </td>
                                <td class="align-middle text-center py-3">
                                    <span class="text-secondary text-xs font-weight-bold">{{$data->transactions_sum_transaction_detailsqty}}</span>
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                </table>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
        <div class="card">
            <div class="card-header pb-0 p-3">
            <h6 class="mb-0">Transactions Status</h6>
            </div>
            <div class="card-body p-3">
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape icon-sm me-3 bg-gradient-warning shadow text-center">
                            <i class="fa fa-pause text-white opacity-10"></i>
                            </div>
                            <div class="d-flex flex-column">
                            <h6 class="mb-1 text-dark text-sm">Pending</h6>
                            <span class="text-xs">
                                {{$trxStatus[0]['total']}} Orders
                            </span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <a href="/order-pending" class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape icon-sm me-3 bg-gradient-danger shadow text-center">
                            <i class="fa fa-credit-card-alt text-white opacity-10"></i>
                            </div>
                            <div class="d-flex flex-column">
                            <h6 class="mb-1 text-dark text-sm">Belum Bayar</h6>
                            <span class="text-xs">
                                {{$trxStatus[1]['total']}} Orders
                            </span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <a href="/order-belumBayar" class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape icon-sm me-3 bg-gradient-primary shadow text-center">
                            <i class="fa fa-square-o text-white opacity-10"></i>
                            </div>
                            <div class="d-flex flex-column">
                            <h6 class="mb-1 text-dark text-sm">Menunggu Konfirmasi</h6>
                            <span class="text-xs">
                                {{$trxStatus[2]['total']}} Orders
                            </span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <a href="/order-mKonfirmasi" class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape icon-sm me-3 bg-gradient-secondary shadow text-center">
                            <i class="fa fa-check-square-o text-white opacity-10"></i>
                            </div>
                            <div class="d-flex flex-column">
                            <h6 class="mb-1 text-dark text-sm">Terkonfirmasi</h6>
                            <span class="text-xs font-weight-bold">
                                {{$trxStatus[3]['total']}} Orders
                            </span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <a href="/order-terkonfirmasi" class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape icon-sm me-3 bg-gradient-info shadow text-center">
                            <i class="fa fa-truck text-white opacity-10"></i>
                            </div>
                            <div class="d-flex flex-column">
                            <h6 class="mb-1 text-dark text-sm">Dikirim</h6>
                            <span class="text-xs font-weight-bold">
                                {{$trxStatus[4]['total']}} Orders
                            </span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <a href="/order-dikirim" class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-1 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape icon-sm me-3 bg-gradient-success shadow text-center">
                                <i class="fa fa-check text-white opacity-10"></i>
                            </div>
                            <div class="d-flex flex-column">
                            <h6 class="mb-1 text-dark text-sm">Selesai</h6>
                            <span class="text-xs font-weight-bold">
                                {{$trxStatus[5]['total']}} Orders
                            </span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <a href="/order-selesai" class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{asset('js/core/popper.min.js')}}"></script>
    <script src="{{asset('js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/plugins/chartjs.min.js')}}"></script>
    <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");
    var data = {!! json_encode($cart) !!};
    var month = {!! json_encode($chart) !!};
    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);
    gradientStroke1.addColorStop(1, "rgba(94, 114, 228, 0.2)");
    gradientStroke1.addColorStop(0.2, "rgba(94, 114, 228, 0.0)");
    gradientStroke1.addColorStop(0, "rgba(94, 114, 228, 0)");
    var label = [];
    for ($i=0; $i < month.length; $i++) { 
        if(month[$i]['month'] == 11){
            label.push('Nov')
        } else if(month[$i]['month'] == 12){
            label.push('Des')
        } else if(month[$i]['month'] == 1){
            label.push('Jan')
        } else if(month[$i]['month'] == 2){
            label.push('Feb')
        } else if(month[$i]['month'] == 3){
            label.push('Mar')
        } else if(month[$i]['month'] == 4){
            label.push('Apr')
        } else if(month[$i]['month'] == 5){
            label.push('Mei')
        } else if(month[$i]['month'] == 6){
            label.push('Jun')
        } else if(month[$i]['month'] == 7){
            label.push('Jul')
        } else if(month[$i]['month'] == 8){
            label.push('Aug')
        } else if(month[$i]['month'] == 9){
            label.push('Sep')
        } else if(month[$i]['month'] == 10){
            label.push('Okt')
        }
    }
    new Chart(ctx1, {
        type: "line",
        data: {
        labels: label
        ,
        datasets: [{
            label: "Sales",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#5e72e4",
            backgroundColor: gradientStroke1,
            borderWidth: 3,
            fill: true,
            data: data,
            maxBarThickness: 6,
        }, ],
        },
        options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
            display: false,
            },
        },
        interaction: {
            intersect: false,
            mode: "index",
        },
        scales: {
            y: {
            grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
            },
            ticks: {
                display: true,
                padding: 10,
                color: "#ccc",
                font: {
                size: 11,
                family: "Open Sans",
                style: "normal",
                lineHeight: 2,
                },
            },
            },
            x: {
            grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5],
            },
            ticks: {
                display: true,
                color: "#ccc",
                padding: 20,
                font: {
                size: 11,
                family: "Open Sans",
                style: "normal",
                lineHeight: 2,
                },
            },
            },
        },
        },
    });
    </script>
    <script>
    var win = navigator.platform.indexOf("Win") > -1;
    if (win && document.querySelector("#sidenav-scrollbar")) {
        var options = {
        damping: "0.5",
        };
        Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
    }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('js/argon-dashboard.min.js')}}"></script>
@endsection
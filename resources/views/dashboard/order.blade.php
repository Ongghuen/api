@extends('../layouts.mainlayout')

@section('title', 'Orders')

@section('aside')
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="/dashboard">
                <img src="../assets/images/icon.png" class="navbar-brand-img h-100" alt="main_logo" />
                <span class="ms-1 font-weight-bold">Suki Dashboard</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0" />
        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/order">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-cart text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Orders</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-bag-17 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Products</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/custom">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-app text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Customs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/user">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-circle-08 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Users</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">
                        Account pages
                    </h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
@endsection

@section('action')
    <div class="card shadow-lg mx-4 mt-3">
        <div class="card-body">
            <div class="row gx-4">
                <div class="dropdown col-auto">
                    <button class="btn btn-sm bg-gradient-dark dropdown-toggle mb-1 px-3" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Month
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">January</a></li>
                        <li><a class="dropdown-item" href="#">February</a></li>
                        <li><a class="dropdown-item" href="#">March</a></li>
                        <li><a class="dropdown-item" href="#">April</a></li>
                        <li><a class="dropdown-item" href="#">May</a></li>
                        <li><a class="dropdown-item" href="#">June</a></li>
                        <li><a class="dropdown-item" href="#">July</a></li>
                        <li><a class="dropdown-item" href="#">August</a></li>
                        <li><a class="dropdown-item" href="#">September</a></li>
                        <li><a class="dropdown-item" href="#">October</a></li>
                        <li><a class="dropdown-item" href="#">November</a></li>
                        <li><a class="dropdown-item" href="#">December</a></li>
                    </ul>
                    </div>
                        <div class="dropdown col-auto">
                        <button class="btn btn-sm bg-gradient-dark dropdown-toggle mb-1 px-4" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Year
                        </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">2020</a></li>
                                <li><a class="dropdown-item" href="#">2021</a></li>
                                <li><a class="dropdown-item" href="#">2022</a></li>
                                <li><a class="dropdown-item" href="#">2023</a></li>
                                <li><a class="dropdown-item" href="#">2024</a></li>
                            </ul>
                        </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                            <form class="input-group" action="" method="get">
                                <div class="input-group">
                                <input type="text" class="form-control ms-4" name="keyword" placeholder="Type here..." aria-label="Type here..." aria-describedby="button-addon2">
                                <button class="btn bg-gradient-dark  mb-0" type="submit" name="caridata" id="button-addon2">
                                    <i class="fas fa-search" aria-hidden="true"></i>
                                </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
            <div class="d-flex align-items-center">
                <h6>Orders table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Order No.
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            @sortablelink('status', 'Status')
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            @sortablelink('users.name', 'Customer')
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            @sortablelink('total_harga', 'Total Harga')
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            @sortablelink('tgl_transaksi', 'Tanggal Transaksi')
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            @sortablelink('tgl_selesai', 'Tanggal Selesai')
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderList as $data)
                        <tr>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">{{$loop->iteration + $orderList->firstItem() - 1}}</span>
                            </td>
                            @if ($data->status == "Pending")
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-warning px-3">Pending</span>
                                </td>
                            @elseif ($data->status == "Belum_Bayar")
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-danger px-3">B. Bayar</span>
                                </td>
                            @elseif ($data->status == "Dikirim")
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-info px-3">Dikirim</span>
                                </td>
                            @elseif ($data->status == "Selesai")
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success px-3">Selesai</span>
                                </td>
                            @endif
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">{{$data->users['name']}}</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold text-truncate">{{"Rp " . number_format($data->total_harga, 0, ".", '.')}}</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">{{$data->tgl_transaksi}}</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">{{$data->tgl_selesai}}</span>
                            </td>
                            <td class="align-middle text-center text-sm ms-auto">
                                <form action="dtOrder/{{$data->id}}" method="get">
                                    <a data-bs-toggle="modal" data-bs-target="#detailModal{{$data->id}}">
                                        <i class="fas fa-eye text-green-300 pe-2"></i>
                                    </a>
                                    <a data-bs-toggle="modal" data-bs-target="#updateModal{{$data->id}}">
                                        <i class="fas fa-edit text-green-300"></i>
                                    </a>
                                </form>
                            </td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
                </div>
                <div class="my-4 ms-2 me-2">
                    {!! $orderList->appends(Request::except('page'))->render('pagination::bootstrap-5') !!}
                </div>
            </div>
            @foreach ($orderList as $item)
                <!-- Detail Modal -->
                <div class="modal fade" id="detailModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Detail Order</h4>
                        <a type="button" data-bs-dismiss="modal" aria-label="Close">
                            <b>X</b>
                        </a>
                        </div>
                        <div class="modal-body">
                            Customer : {{$item->users->name}} <br>
                            Tanggal transaksi : {{$item->tgl_transaksi}} <br><br>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Harga</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($item->products as $list)
                                    <tr>
                                        <td>{{$list->name}}</td>
                                        <td>{{"Rp " . number_format($list->harga, 0, ".", '.')}}</td>
                                        <td>{{$list->pivot->qty}}</td>
                                        <td>{{"Rp " . number_format($list->pivot->sub_total, 0, ".", '.')}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            Total Harga : {{"Rp " . number_format($item->total_harga, 0, ".", '.')}} <br>
                            Alamat pengiriman : {{$item->users->address}}
                        </div>
                    </div>
                    </div>
                </div>
                <!-- End Detail Modal -->
            @endforeach
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
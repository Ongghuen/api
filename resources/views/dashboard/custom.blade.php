@extends('../layouts.mainlayout')

@section('title', 'Customs')

@section('aside')
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="./dashboard">
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
                    <a class="nav-link" href="/order">
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
                    <a class="nav-link active" href="/custom">
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
                    <form action="" method="post">
                        <button class="btn btn-sm bg-gradient-dark dropdown-toggle mb-1 px-3" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Sort
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <button class="dropdown-item" name="urutnama" type="submit">Name</button>
                        </ul>
                    </form>
                </div>
                <div class="dropdown col-auto">
                    <form action="" method="post">
                        <button class="btn btn-sm bg-gradient-dark dropdown-toggle mb-1 px-3" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Kategori
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <button class="dropdown-item" value="kasur" name="tampilkategori" type="submit">Kasur</button>
                            <button class="dropdown-item" value="lemari" name="tampilkategori" type="submit">Lemari</button>
                            <button class="dropdown-item" value="meja" name="tampilkategori" type="submit">Meja</button>
                            <button class="dropdown-item" value="kursi" name="tampilkategori" type="submit">Kursi</button>
                        </ul>
                    </form>
                </div>
                <div class="dropdown col-auto">
                    <form action="" method="post">
                        <button class="btn btn-sm bg-gradient-dark dropdown-toggle mb-1 px-3" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Bahan
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <button class="dropdown-item" value="kayu" name="tampilbahan" type="submit">Kayu</button>
                        <button class="dropdown-item" value="besi" name="tampilbahan" type="submit">Besi</button>
                        </ul>
                    </form>
                </div>
                <div class="dropdown col-auto">
                    <form action="" method="post">
                        <button class="btn btn-sm bg-gradient-dark dropdown-toggle mb-1 px-4" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        By
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <button class="dropdown-item" name="urutasc" type="submit">Asc (A-Z)</button>
                            <button class="dropdown-item" name="urutdesc" type="submit">Desc (Z-A)</button>
                    </form>
                </ul>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                            <form class="input-group" action="" method="post">
                                <div class="input-group">
                                <input type="text" class="form-control ms-4" name="data" placeholder="Type here..." aria-label="Type here..." aria-describedby="button-addon2">
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
                <h6>Custom table</h6>
                <button class="btn btn-success btn-sm ms-auto " data-modal-target="#modal-add">
                Add Custom
                </button>
            </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
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
                            Kategori
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Bahan
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Detail
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">1</span>
                        </td>
                        <td class="align-middle text-center">
                            <img src="" class="avatar avatar-sm me-2" alt="user1" />
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">Asbak kontol</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">Asbak</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">Kayu jati</span>
                        </td>
                        <td class="align-middle text-center">
                            <button class="btn btn-secondary btn-sm px-3 py-1 me-1 mt-3" data-modal-target="">Detail</button>
                        </td>
                        <td class="align-middle text-center">
                            <button class="btn btn-dark btn-sm px-3 py-1 me-1 mt-3" data-modal-target="">Edit</button>
                            <button class="btn btn-danger btn-sm px-3 py-1 me-1 mt-3" data-modal-target="">Delete</button>
                        </td>
                    </tr>
                </tbody>
                </table>
            </div>
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
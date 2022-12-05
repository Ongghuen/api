@extends('../layouts.mainlayout')

@section('title', 'Products')

@section('aside')
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="/dashboard">
                <img src="{{asset('/images/icon.png')}}" class="navbar-brand-img h-100" alt="main_logo" />
                <span class="ms-1 font-weight-bold">Suki Dashboard</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0" />
        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">
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
                    <a class="nav-link active" href="/product">
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
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">
                        Account pages
                    </h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-user text-warning text-sm opacity-10"></i>
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
                <form class="row gx-4 dropdown col-auto" action="" method="post">
                    <div class="dropdown col-auto">
                        <button class="btn btn-sm bg-gradient-dark dropdown-toggle mb-1 px-3" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Kategori
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <button class="dropdown-item" value="kasur" name="tampilkategori" type="submit">Kasur</button>
                            <button class="dropdown-item" value="lemari" name="tampilkategori" type="submit">Lemari</button>
                            <button class="dropdown-item" value="meja" name="tampilkategori" type="submit">Meja</button>
                            <button class="dropdown-item" value="kursi" name="tampilkategori" type="submit">Kursi</button>
                        </ul>
                    </div>
                </form>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <form class="input-group" action="" method="get">
                            <div class="input-group">
                            <input type="text" class="form-control ms-4" name="keyword" placeholder="Type here..." aria-label="Type here..." aria-describedby="button-addon2">
                            <button class="btn bg-gradient-dark  mb-0" name="caridata" type="submit" id="button-addon2">
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
                <h6>Products table</h6>
                <button class="btn btn-success btn-sm ms-auto" data-bs-toggle="modal" data-bs-target="#createModal">
                New Product
                </button>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
            @if(Session::has('status'))
                <div class="alert alert-success ms-1 my-3 font-weight-bold" role="alert">
                    {{Session::get('message')}}
                </div>
            @endif
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
                            @sortablelink('name', 'Nama')
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            @sortablelink('harga', 'Harga')
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            @sortablelink('qty', 'Stok')
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            @sortablelink('categories', 'Kategori')
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productList as $data)
                    <tr>
                        <td class="align-middle text-center py-4">
                            <span class="text-secondary text-xs font-weight-bold">{{$loop->iteration + $productList->firstItem() - 1}}</span>
                        </td>
                        <td class="align-middle text-center">
                            <img src="{{ $data->image ? asset('storage/' . $data->image) : asset('/images/box.png') }}" class="avatar avatar-sm me-2" alt="{{$data->name}}" />
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{$data->name}}</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{"Rp " . number_format($data->harga, 0, ".", '.')}}</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{$data->qty}}</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{$data->categories}}</span>
                        </td>
                        <td class="align-middle text-center">
                            <a data-bs-toggle="modal" data-bs-target="#detailModal{{$data->id}}">
                                <i class="fas fa-eye text-green-300"></i>
                            </a>
                            <a data-bs-toggle="modal" data-bs-target="#updateModal{{$data->id}}">
                                <i class="fas fa-edit text-green-300 px-2"></i>
                            </a>
                            <a data-bs-toggle="modal" data-bs-target="#deleteModal{{$data->id}}">
                                <i class="fas fa-trash text-green-300"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            <div class="my-4 ms-2 me-2">
                {!! $productList->appends(Request::except('page'))->render('pagination::bootstrap-5') !!}
            </div>
            </div>
            @foreach ($productList as $item)

                <!-- Detail Modal -->
                <div class="modal fade" id="detailModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Detail Product</h4>
                        <a type="button" data-bs-dismiss="modal" aria-label="Close">
                            <b>X</b>
                        </a>
                        </div>
                        <div class="modal-body">
                            <div class="row d-flex">
                                <div class="col-4">
                                    <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('/images/box.png') }}" class="rounded" width="150px" alt="{{$item->name}}" />
                                </div>
                                <div class="col-8">
                                    <span class="font-weight-bold">Nama produk :</span> {{$item->name}} <br>
                                    <span class="font-weight-bold">Deskripsi produk :</span> {{$item->desc}}
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- End Detail Modal -->

                <!-- Update Modal -->
                <div class="modal fade" id="updateModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Product</h4>
                                <a type="button" data-bs-dismiss="modal" aria-label="Close">
                                    <b>X</b>
                                </a>
                            </div>
                            <div class="modal-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li><b>{{$error}}</b></li>
                                            @endforeach
                                        </ul>
                                    </div>    
                                @endif
                                <form action="/product/{{$item->id}}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Nama Product</label>
                                        <input class="form-control" type="text" name="name" id="name" value="{{$item->name}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Upload Foto</label> <br>
                                        <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('/images/box.png') }}" class="rounded pb-3" width="100px" alt="{{$item->name}}" /> <br>
                                        <div class="input-group">
                                            <input type="file" name="image" class="form-control" id="image" aria-describedby="inputGroupFileAddon04" aria-label="Upload" value="{{$item->image}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text">Rp. </div>
                                            </div>
                                            <input type="number" class="form-control" name="harga" id="harga" value="{{$item->harga}}" required>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="qty">Qty</label>
                                        <input class="form-control" type="number" name="qty" id="qty" value="{{$item->qty}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="categories">Kategory</label>
                                        <input class="form-control" type="text" name="categories" id="categories" value="{{$item->categories}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">Deskripsi</label>
                                        <textarea class="form-control" type="text" name="desc" id="desc" rows="3" required>{{$item->desc}}</textarea>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <button type="submit" class="btn btn-success">Update</button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Update Modal -->

                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Delete Product</h4>
                            <a type="button" data-bs-dismiss="modal" aria-label="Close">
                                <b>X</b>
                            </a>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-danger font-weight-bold" role="alert">Apakah anda yakin akan menghapus data produk {{$item->name}}?</div>
                        </div>
                        <div class="modal-footer">
                            <form action="/product-destroy/{{$item->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" >Delete</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- End Delete Modal -->
            @endforeach

            <!-- Create Modal -->
            <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">New Product</h4>
                            <a type="button" data-bs-dismiss="modal" aria-label="Close">
                                <b>X</b>
                            </a>
                        </div>
                        <div class="modal-body">
                            @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li><b>{{$error}}</b></li>
                                            @endforeach
                                        </ul>
                                    </div>    
                                @endif
                            <form action="product" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama Product</label>
                                    <input class="form-control" type="text" name="name" id="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Upload Foto</label>
                                    <div class="input-group">
                                        <input type="file" name="image" class="form-control" id="image" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">Rp. </div>
                                        </div>
                                        <input type="number" class="form-control" name="harga" id="harga" required>
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label for="qty">Qty</label>
                                    <input class="form-control" type="number" name="qty" id="qty" required>
                                </div>
                                <div class="form-group">
                                    <label for="categories">Kategory</label>
                                    <input class="form-control" type="text" name="categories" id="categories" required>
                                </div>
                                <div class="form-group">
                                    <label for="desc">Deskripsi</label>
                                    <textarea class="form-control" type="text" name="desc" id="desc" rows="3" required></textarea>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <button type="submit" class="btn btn-success">Save</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Create Modal -->
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
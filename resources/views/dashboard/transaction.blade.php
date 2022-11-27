@extends('../layouts.mainlayout')

@section('title', 'Transactions')

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
                    <a class="nav-link" href="/order">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-cart text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Oders</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/transaction">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tag text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Transaksi</span>
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
                <li class="nav-item">
                    <a class="nav-link" href="/report">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-chart-bar-32 text-warning text-sm opacity-10"></i>
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
                    <form class="" action="" method="post">
                        <button class="btn btn-sm bg-gradient-dark dropdown-toggle mb-1 px-3" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Sort By
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <button class="dropdown-item" name="namaasc" type="submit"> Nama Asc (A-Z)</button>
                        <button class="dropdown-item" name="namadesc" type="submit"> Nama Desc (Z-A)</button>
                        <button class="dropdown-item" name="totalasc" type="submit">Total Desc (Z-A)</button>
                        <button class="dropdown-item" name="totaldesc" type="submit">Total Asc (A-Z)</button>
                        </ul>
                    </form>
                </div>
                <div class="dropdown col-auto">
                    <form class="" action="" method="post">
                        <button class="btn btn-sm bg-gradient-dark dropdown-toggle mb-1 px-3" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Date
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        </ul>
                    </form>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                <div class="nav-wrapper position-relative end-0">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <form class="input-group" action="" method="post">
                        <div class="input-group">
                        <input type="text" class="form-control ms-4" name="data" placeholder="Type here..." aria-label="Type here..." aria-describedby="button-addon2">
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
                <h6>Transactions table</h6>
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
                                    Nama
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Total
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Tanggal
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
                                    <span class="text-secondary text-xs font-weight-bold">Daffa Afifi Syahrony</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">Rp.150.000</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">27-10-2022</span>
                                </td>
                                <td class="align-middle text-center">
                                    <button class="btn btn-secondary btn-sm px-3 py-1 me-1 mt-3" data-modal-target="#modal-delete">Detail</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Popup Delete -->
            {{-- <div class="modal-delete" id="modal-delete">
            <form class="yayyay" action="transaksi_detail.php" method="post">
                <div class="modal-header-delete">
                <h2 class="delete">Detail</h2>
                <div class="modal-body-delete">
                    <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                No
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Nama
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Produk
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Harga
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Qty
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Total
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Tanggal
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold"><?php echo $nomer; ?></span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold"><?php echo $reportNama; ?></span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold"><?php echo $reportProduct; ?></span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">Rp. <?php echo $reportHarga; ?></span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold"><?php echo $reportQty; ?></span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">Rp. <?php echo $reportTotal; ?></span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold"><?php echo $reportTanggal; ?></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="align-middle text-center">
                    <button class="btn btn-danger btn-sm ms-auto" name="submit" data-close-delete>Close</button>
                    </div>
                </div>
                </div>
            </form>
            </div> --}}

            <style>
            p.detailya {
                font-weight: 100;
            }

            .modal-delete {
                position: fixed;
                left: 0;
                top: 0;
                background: rgb(0, 0, 0, 0.6);
                height: 100%;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                opacity: 0;
                pointer-events: none;
                transition: all 0.3s ease-in-out;
                z-index: 10000;
            }

            .modal-body-delete {
                padding: 10px;
                bottom: 10px;
            }

            .modal-header-delete {
                background: white;
                width: 900px;
                max-width: 100%;
                padding: 20px;
                border-radius: 4x;
                position: relative;
                transform: translateY(-100);
                transition: all 0.3s ease-in-out;
            }

            .btn-open {
                background: black;
                padding: 10px 40px;
                color: white;
                border-radius: 5px;
                font-size: 15px;
                cursor: pointer;
            }

            p.delete {
                line-height: 1.6;
                margin-bottom: 20px;
                text-align: center;
            }

            h2.delete {
                text-align: center;
                /* padding-bottom: 15px;
                font-weight: 200; */
            }

            .modal-header-delete button.close-btn-delete {
                position: absolute;
                right: 10px;
                top: 10px;
                font-size: 32px;
                background: none;
                outline: none;
                border: none;
                cursor: pointer;
            }

            .modal-header-delete button.close-btn-delete:hover {
                color: #6b46c1;
            }

            .active-delete {
                opacity: 1;
                pointer-events: auto;
            }

            .modal-delete.active-delete .modal-header-delete {
                transform: translateY(0px);
            }
            </style>
            <script>
            const openModalDelete = document.querySelectorAll("[data-modal-target]");
            const closeModalDelete = document.querySelectorAll(
                "[data-close-delete]"
            );

            openModalDelete.forEach((button) => {
                button.addEventListener("click", () => {
                const modal = document.querySelector(button.dataset.modalTarget);
                openModal(modal);
                });
            });

            closeModalDelete.forEach((button) => {
                button.addEventListener("click", () => {
                const modal = button.closest(".modal-delete");
                closeModal(modal);
                });
            });

            function openModal(modal) {
                if (modal == null) return;
                modal.classList.add("active-delete");
            }

            function closeModal(modal) {
                if (modal == null) return;
                modal.classList.remove("active-delete");
            }
            </script>
            <!-- end Pop up Delete -->
        </div>
        </div>
    </div>

    <!-- Pop up Add -->
    <div class="modal-add" id="modal-add">
        <div class="modal-header-add">
        <h2 class="add">Add Form</h2>
        <div class="modal-body-add">
            <form class="hahahhaaaa" id="form" action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Name</label>
                    <input class="form-control" type="text" placeholder="Enter Name" name="txt_nama" maxlength="30" required />
                </div>
                <div class="form-group">
                    <label class="custom-file-label" for="customFileLang">Upload Photo</label>
                    <input type="file" class="form-control" name="foto" required>
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Harga</label>
                    <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^\d]+/, '').replace(/(\..*?)\..*/g, '$1');" maxlength="8" placeholder="Enter Harga" name="txt_harga" required />
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Qty</label>
                    <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^\d]+/, '').replace(/(\..*?)\..*/g, '$1');" maxlength="4" placeholder="Enter Qty" name="txt_qty" required />
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kategori</label>
                    <select class="form-control" name="txt_kategori" required>
                    </select>
                </div>
                <div class="align-middle text-center">
                    <button class="btn btn-success btn-sm ms-auto" type="submit" name="add-product">Add</button>
                    <button class="btn btn-danger btn-sm ms-auto" data-close-add>Close</button>
                </div>
            </form>
        </div>
        </div>
    </div>
    <style>
        .modal-add {
        position: fixed;
        left: 0;
        top: 0;
        background: rgb(0, 0, 0, 0.6);
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        pointer-events: none;
        transition: all 0.3s ease-in-out;
        }

        .modal-body-add {
        padding: 10px;
        bottom: 10px;
        }

        .modal-header-add {
        background: white;
        width: 560px;
        max-width: 90%;
        padding: 20px;
        border-radius: 4px;
        position: relative;
        transform: translateY(-100);
        transition: all 0.3s ease-in-out;
        }

        .btn-open {
        background: black;
        padding: 10px 40px;
        color: white;
        border-radius: 5px;
        font-size: 15px;
        cursor: pointer;
        }

        p.add {
        line-height: 1.6;
        margin-bottom: 20px;
        }

        h2.add {
        text-align: center;
        /* padding-bottom: 15px;
        font-weight: 200; */
        }

        .modal-header-add button.close-btn-add {
        position: absolute;
        right: 10px;
        top: 10px;
        font-size: 32px;
        background: none;
        outline: none;
        border: none;
        cursor: pointer;
        }

        .modal-header-add button.close-btn-add:hover {
        color: #6b46c1;
        }

        .active-add {
        opacity: 1;
        pointer-events: auto;
        }

        .modal-add.active-add .modal-header-add {
        transform: translateY(0px);
        }
    </style>
    <script>
        const openModalAdd = document.querySelectorAll("[data-modal-target]");
        const closeModalAdd = document.querySelectorAll(
        "[data-close-add]"
        );

        openModalAdd.forEach((button) => {
        button.addEventListener("click", () => {
            const modal = document.querySelector(button.dataset.modalTarget);
            openModal(modal);
        });
        });

        closeModalAdd.forEach((button) => {
        button.addEventListener("click", () => {
            const modal = button.closest(".modal-add");
            closeModal(modal);
        });
        });

        function openModal(modal) {
        if (modal == null) return;
        modal.classList.add("active-add");
        }

        function closeModal(modal) {
        if (modal == null) return;
        modal.classList.remove("active-add");
        }
    </script>
    <!-- end Pop up Add -->
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
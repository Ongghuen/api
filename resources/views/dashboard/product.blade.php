@extends('../layouts.mainlayout')

@section('title', 'Products')

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
                    <a class="nav-link" href="/transaction">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tag text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Transaksi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/product">
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
                                Sort
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <button class="dropdown-item" name="urutnama" type="submit">Name</button>
                            <button class="dropdown-item" name="urutharga" type="submit">Harga</button>
                            <button class="dropdown-item" name="urutqty" type="submit">Qty</button>
                        </ul>
                    </form>
                </div>
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
                <form class="row gx-4 dropdown col-auto" action="" method="post">
                    <div class="dropdown col-auto">
                        <button class="btn btn-sm bg-gradient-dark dropdown-toggle mb-1 px-3" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        By
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <button class="dropdown-item" name="namaasc" type="submit"> Nama Asc (A-Z)</button>
                            <button class="dropdown-item" name="namadesc" type="submit"> Nama Desc (Z-A)</button>
                            <button class="dropdown-item" name="hargaasc" type="submit">Harga Asc (A-Z)</button>
                            <button class="dropdown-item" name="hargadesc" type="submit">Harga Desc (Z-A)</button>
                            <button class="dropdown-item" name="qtyasc" type="submit">Qty Asc (A-Z)</button>
                            <button class="dropdown-item" name="qtydesc" type="submit">Qty Desc (Z-A)</button>
                        </ul>
                    </div>
                </form>
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
                <h6>Products table</h6>
                <button class="btn btn-success btn-sm ms-auto " data-modal-target="#modal-add">
                Add Product
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
                        Name
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Harga
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Qty
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Kategori
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Deskripsi
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
                        <span class="text-secondary text-xs font-weight-bold">Bakso Kontol</span>
                        </td>
                        <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Rp.120.000.000</span>
                        </td>
                        <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">2</span>
                        </td>
                        <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Kelamin</span>
                        </td>
                        <td class="align-middle text-center">
                        <button class="btn btn-secondary btn-sm px-3 py-1 me-1 mt-3" data-modal-target="#modal-detail">Cek Deskripsi</button>

                        </td>
                        <td class="align-middle text-center">
                        <button class="btn btn-dark btn-sm ms-auto" data-modal-target="#modal-edit">Edit</button>
                        <button class="btn btn-danger btn-sm ms-auto" data-modal-target="#modal-delete">Delete</button>
                        </td>

                    </tr>


                    <!-- Pop up Detail -->

                    <div class="modal-detail" id="modal-detail">
                        <div class="modal-header-detail">
                        <h2 class="detail">Detail Form</h2>
                        <div class="modal-body-detail">
                            <form class="anjasmara" action="edit_product.php" method="post">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Detail</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" maxlength="500" rows="5"></textarea>
                            </div>
                            <div class="align-middle text-center">
                                <button class="btn btn-danger btn-sm ms-auto" type="submit" name="close" data-close-button-detail>Close</button>
                                <!-- <a class="btn btn-danger btn-sm ms-auto" type="submit" data-close-button-edit>Close</a> -->
                            </div>
                            </form>

                        </div>
                        </div>
                    </div>

                    <style>
                        .modal-detail {
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
                        z-index: 1;
                        }

                        .modal-body-detail {
                        padding: 10px;
                        bottom: 10px;
                        }

                        .modal-header-detail {
                        background: white;
                        width: 560px;
                        max-width: 90%;
                        padding: 20px;
                        border-radius: 4x;
                        position: relative;
                        transform: translateY(-100);
                        transition: all 0.3s ease-in-out;
                        }

                        .btn-open-detail {
                        background: black;
                        padding: 10px 40px;
                        color: white;
                        border-radius: 5px;
                        font-size: 15px;
                        cursor: pointer;
                        }

                        p.detail {
                        line-height: 1.6;
                        margin-bottom: 20px;
                        }

                        h2.detail {
                        text-align: center;
                        /* padding-bottom: 15px;
                        font-weight: 200; */
                        }

                        .modal-header-detail button.close-btn-detail {
                        position: absolute;
                        right: 10px;
                        top: 10px;
                        font-size: 32px;
                        background: none;
                        outline: none;
                        border: none;
                        cursor: pointer;
                        }

                        .modal-header-detail button.close-btn-detail:hover {
                        color: #6b46c1;
                        }

                        .active-detail {
                        opacity: 1;
                        pointer-events: auto;
                        }

                        .modal-detail.active-detail .modal-header-detail {
                        transform: translateY(0px);
                        }
                    </style>
                    <script>
                        const openModalButtons = document.querySelectorAll("[data-modal-target]");
                        const closeModalButtons = document.querySelectorAll(
                        "[data-close-button-detail]"
                        );

                        openModalButtons.forEach((button) => {
                        button.addEventListener("click", () => {
                            const modal = document.querySelector(button.dataset.modalTarget);
                            openModal(modal);
                        });
                        });

                        closeModalButtons.forEach((button) => {
                        button.addEventListener("click", () => {
                            const modal = button.closest(".modal-detail");
                            closeModal(modal);
                        });
                        });

                        function openModal(modal) {
                        if (modal == null) return;
                        modal.classList.add("active-detail");
                        }

                        function closeModal(modal) {
                        if (modal == null) return;
                        modal.classList.remove("active-detail");
                        }
                    </script>
                    <!-- end Pop up Detail -->


                    <!-- Popup Delete -->

                    <div class="modal-delete" id="modal-delete">
                        <div class="modal-header-delete">
                        <h2 class="delete">Warning</h2>
                        <!-- <button data-close-delete class="close-btn-delete">&times;</button> -->

                        <div class="modal-body-delete">
                            <div class="row">

                            <p class="delete">
                                Yakin dek mau ngehapus data orang? dosah loh dek
                            </p>

                            </div>
                            <div></div>
                            <div></div>
                            <form class="yayyay" action="hapus_product.php" method="post">
                            <div class="align-middle text-center">
                                <a class="btn btn-danger btn-sm ms-auto" href="hapus_product.php?id=">Delete</a>
                                <button class="btn btn-success btn-sm ms-auto" name="submit" data-close-delete>Close</button>
                            </form>
                        </div>


                        </div>
                    </div>
            </div>


            <style>
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
                z-index: 1;
                }

                .modal-body-delete {
                padding: 10px;
                bottom: 10px;
                }

                .modal-header-delete {
                background: white;
                width: 560px;
                max-width: 90%;
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

            <!-- Pop up Edit -->

            <div class="modal-edit" id="modal-edit">
                <div class="modal-header-edit">
                <h2 class="edit">Edit Form</h2>
                <div class="modal-body-edit">
                    <form action="edit_product.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Name</label>
                        <input class="form-control" name="nama" type="text" value="" maxlength="30" placeholder="Enter Nama" required />
                    </div>

                    <div class="form-group">
                        <label class="custom-file-label" for="customFileLang">Upload Photo</label>
                        <input type="file" class="form-control" name="foto">

                    </div>

                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Harga</label>
                        <input class="form-control" name="harga" type="text" value="" oninput="this.value = this.value.replace(/[^\d]+/, '').replace(/(\..*?)\..*/g, '$1');" maxlength="8" placeholder="Enter harga" required />
                    </div>


                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Qty</label>
                        <input class="form-control" name="qty" type="text" value="" oninput="this.value = this.value.replace(/[^\d]+/, '').replace(/(\..*?)\..*/g, '$1');" maxlength="4" placeholder="Enter Qty" required />
                    </div>



                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Kategori</label>
                        <select class="form-control" name="kategori" required>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" maxlength="500" name="deskripsi" placeholder="Enter Detail" rows="3"></textarea>
                    </div>

                    <div class="align-middle text-center">
                        <button class="btn btn-success btn-sm ms-auto" name="submit">Edit</button>
                        <button class="btn btn-danger btn-sm ms-auto" type="submit" name="close" data-close-button-edit>Close</button>
                        <!-- <a class="btn btn-danger btn-sm ms-auto" type="submit" data-close-button-edit>Close</a> -->
                    </div>
                    </form>

                </div>
                </div>
            </div>

            <style>
                .modal-edit {
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
                z-index: 1;
                }

                .modal-body-edit {
                padding: 10px;
                bottom: 10px;
                }

                .modal-header-edit {
                background: white;
                width: 560px;
                max-width: 90%;
                padding: 20px;
                border-radius: 4x;
                position: relative;
                transform: translateY(-100);
                transition: all 0.3s ease-in-out;
                }

                .btn-open-edit {
                background: black;
                padding: 10px 40px;
                color: white;
                border-radius: 5px;
                font-size: 15px;
                cursor: pointer;
                }

                p.edit {
                line-height: 1.6;
                margin-bottom: 20px;
                }

                h2.edit {
                text-align: center;
                /* padding-bottom: 15px;
                font-weight: 200; */
                }

                .modal-header-edit button.close-btn-edit {
                position: absolute;
                right: 10px;
                top: 10px;
                font-size: 32px;
                background: none;
                outline: none;
                border: none;
                cursor: pointer;
                }

                .modal-header-edit button.close-btn-edit:hover {
                color: #6b46c1;
                }

                .active-edit {
                opacity: 1;
                pointer-events: auto;
                }

                .modal-edit.active-edit .modal-header-edit {
                transform: translateY(0px);
                }
            </style>
            <script>
                const openModalButtons = document.querySelectorAll("[data-modal-target]");
                const closeModalButtons = document.querySelectorAll(
                "[data-close-button-edit]"
                );

                openModalButtons.forEach((button) => {
                button.addEventListener("click", () => {
                    const modal = document.querySelector(button.dataset.modalTarget);
                    openModal(modal);
                });
                });

                closeModalButtons.forEach((button) => {
                button.addEventListener("click", () => {
                    const modal = button.closest(".modal-edit");
                    closeModal(modal);
                });
                });

                function openModal(modal) {
                if (modal == null) return;
                modal.classList.add("active-edit");
                }

                function closeModal(modal) {
                if (modal == null) return;
                modal.classList.remove("active-edit");
                }
            </script>
            <!-- end Pop up Edit -->
            </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
    </div>

    <!-- Pop up Add -->

    <div class="modal-add" id="modal-add">
    <div class="modal-header-add">
        <h2 class="add">Add Form</h2>
        <!-- <button data-close-add class="close-btn-add">&times;</button> -->

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

            <div class="form-group">
            <label for="exampleFormControlTextarea1">Deskripsi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" maxlength="500" name="txt_desc" placeholder="Enter Detail" rows="3"></textarea>
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
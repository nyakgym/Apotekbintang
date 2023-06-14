<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Apotek Bintang</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
        <!--Header-->
        @include('layout.header')
        <!--End Header-->
    
        <div class="container-lg">
            <div class="row mb-5">
                <!---Sidebar-->
                <div class="col-lg-3">
                    <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Pilihan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1 ">
                                        <li class="nav-item">
                                            <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='home') ?'active link-light bg-success' : 'link-dark'; ?>" aria-current="page" href="home"><i class="bi bi-house-fill"></i> Dasboard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='obat')?'active link-light bg-success' : 'link-dark'; ?>" href="obat"><i class="bi bi-capsule"></i> Daftar Obat</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ps-2 <?php echo ((isset ($_GET['x']) && $_GET['x']=='katobat') || !isset($_GET['x']))?'active link-light bg-success' : 'link-dark'; ?>" href="katobat"><i class="bi bi-tags"></i> Kategori Obat</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='pemasok')?'active link-light bg-success' : 'link-dark'; ?>" href="pemasok"><i class="bi bi-box-seam"></i></i> Pemasok/Supplier</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='penjualan')?'active link-light bg-success' : 'link-dark'; ?>" href="penjualan"><i class="bi bi-cart4"></i> Faktur Penjualan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='pembelian')?'active link-light bg-success' : 'link-dark'; ?>" href="pembelian"><i class="bi bi-cart4"></i> Pembelian</a>
                                        </li>
                
                                        <li class="nav-item">
                                            <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='karyawan')?'active link-light bg-success' : 'link-dark'; ?>" href="karyawan"><i class="bi bi-person-fill"></i> Data Karyawan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='laporan')?'active link-light bg-success' : 'link-dark'; ?>" href="laporan"><i class="bi bi-clipboard2-fill"></i> Laporan Penjualan</a>
                                        </li>
                
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!--End Sidebar-->
    
                <!--Content-->
                <div class="col-lg-9 mt-2">
                    <div class="card">
                        <div class="card-header">
                            Halaman Kategori Obat
                        </div>
                
                        <div class="card-body">
                            <div class="row">
                                <div class="col d-flex justify-content-end">
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalTambahUser"> + Kategori Menu</button>
                                </div>
                            </div>
                
                            <!-- Modal Tambah Kategori Menu Baru-->
                            <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                
                                        <div class="modal-body">
                                            <form class="needs-validation" novalidate action="#" method="POST">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-floating mb-3">
                                                            <select class="form-select" name="jenismenu" id="">
                                                                <option value="1">Kapsul</option>
                                                                <option value="2">Semprot</option>
                                                                <option value="3">Sirup</option>
                                                                <option value="4">Tablet</option>
                                                            </select>
                                                            <label for="floatingInput">Jenis Obat</label>
                                                            <div class="invalid-feedback">
                                                                Masukkan Jenis Obat
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                
                                                    <div class="col-lg-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="floatingInput"
                                                                placeholder="Kategori Menu" name="katmenu" required>
                                                            <label for="floatingInput">Kategori Obat</label>
                                                            <div class="invalid-feedback">
                                                                Masukkan Kategori Obat
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="input_katmenu_validate" value="12345">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir modal tambah user baru -->
                
                
                            <?php
                            //}
                            if (empty($result)) {
                                echo "Data Kategori obat tidak ada";
                            } else {
                            ?>
                            <!--Tabel Daftar Kategori Menu -->
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Jenis Menu</th>
                                            <th scope="col">Kategori Menu</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                
                                        <?php
                                        $no = 1;
                                        foreach ($result as $row) {
                                        ?>
                
                                        <tr>
                                            <th scope="row">
                                                <?php echo $no++ ?>
                                            </th>
                                            <td>
                                                <?php echo ($row['jenis_menu']==1) ? "Makanan" : "Minuman" ?>
                                            </td>
                                            <td>
                                                <?php echo $row['kategori_menu'] ?>
                                            </td>
                
                                            <td class="d-flex">
                                                <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                                    data-bs-target="#ModalEdit<?php echo $row['id_kat_menu'] ?>"><i
                                                        class="bi bi-pencil-square"></i></button>
                                                <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal"
                                                    data-bs-target="#ModalDelete<?php echo $row['id_kat_menu'] ?>"><i
                                                        class="bi bi-trash3-fill"></i></button>
                                            </td>
                                        </tr>
                
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!--Tabel Daftar Kategori Menu -->
                            <?php
                            }
                            ?>
                
                        </div>
                    </div>
                </div>
                <!--End Content-->
            </div>
        </div>
    
        <div class="fixed-bottom text-center bg-light py-2">
            Copyright 2023 Nyak Gymnastiar Syah
        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (() => {
                'use strict'
    
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms = document.querySelectorAll('.needs-validation')
    
                // Loop over them and prevent submission
                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
            })()
        </script>
    </body>
    
</html>
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
                                            <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='dashboard') ?'active link-light bg-success' : 'link-dark'; ?>" aria-current="page" href="dashboard"><i class="bi bi-house-fill"></i> Dasboard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ps-2 <?php echo ((isset ($_GET['x']) && $_GET['x']=='obat')|| !isset($_GET['x']))?'active link-light bg-success' : 'link-dark'; ?>" href="obat"><i class="bi bi-capsule"></i></i> Daftar Obat</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='katobat')?'active link-light bg-success' : 'link-dark'; ?>" href="katobat"><i class="bi bi-tags"></i> Kategori Obat</a>
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
                            Halaman Data Obat
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col d-flex justify-content-end">
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalTambahUser"> + Obat</button>
                                </div>
                            </div>
                
                            <!-- Modal Tambah menu baru-->
                            <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Obat</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body lg-9">
                                            <form class="needs-validation" novalidate action="/obats" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    {{-- <div class="col-lg-12">
                                                        <div class="input-group mb-3">
                                                            <input type="file" class="form-control" id="uploadFoto" placeholder="your name" name="foto" required>
                                                            <label class="input-group-text"for="uploadFoto">Upload Foto Obat</label>
                                                            <div class="invalid-feedback">
                                                                Masukkan File Foto Obat
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                    <div class="col-lg-12">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control py-3" id="floatingInput" placeholder="Nama Menu" name="nama" required>
                                                            <label for="floatingInput">Nama Obat</label>
                                                            <div class="invalid-feedback">
                                                                Masukkan Nama Obat
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-floating mb-3">
                                                            <select class="form-select" aria-label="Default select example" name="kategoriobat" required>
                                                            <option selected hidden value="">Pilih Kategori Obat</option>
                                                                <option value="1">Anti Depresan</option>
                                                                <option value="2">Vitamin</option>
                                                            </select>
                                                            <label for="floatingInput">Kategori Obat</label>
                                                            <div class="invalid-feedback">
                                                                Pilih Kategori Obat
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-floating mb-3">
                                                            <input type="number" class="form-control" id="floatingInput" placeholder="harga_obat" name="harga_obat" required>
                                                            <label for="floatingInput">Harga Obat</label>
                                                            <div class="invalid-feedback">
                                                                Masukkan Harga Obat
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-floating mb-3">
                                                            <input type="number" class="form-control" id="floatingInput" placeholder="stock" name="stock" required>
                                                            <label for="floatingInput">Stok</label>
                                                            <div class="invalid-feedback">
                                                                Masukkan Stok
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-floating mb-3">
                                                            <input type="date" class="form-control" id="floatingInput" placeholder="tanggal_kadaluarsa" name="tgl_kadaluarsa">
                                                            <label for="floatingInput">Tanggal Kadaluarsa</label>
                                                        </div>
                                                    </div>
                                                </div>
                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="/obats" value="12345">Save changes</button>
                                                </div>
                                        </div>
                
                                        </form>
                                    </div>
                                </div>
                            </div>
                
                            <!-- Akhir Modal Tambah Menu baru-->
                            <?php
                            // if (empty($result)) {
                            //     echo "Data Obat tidak ada";
                            // } else {
                            // foreach ($result as $row) {
                            ?>

                
                  
                
                            <?php
                            
                            
                            ?>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr class="text-nowrap">
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Obat</th>
                                                <th scope="col">Kategori Obat</th>
                                                <th scope="col">Harga Obat</th>
                                                <th scope="col">Stok</th>
                                                <th scope="col">Tanggal Kadaluarsa</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Vitamin C</td>
                                                    <td>Vitamin</td>
                                                    <td>Rp 3000</td>
                                                    <td>23</td>
                                                    <td>12-09-2023</td>
                                                    <td>
                                                        <div class="d-flex">
                                                        <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView"><i class="bi bi-eye"></i></button>
                                                        <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit"><i class="bi bi-pencil-square"></i></button>
                                                        <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete"><i class="bi bi-trash"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                        </tbody>
                                    </table>
                                </div>

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
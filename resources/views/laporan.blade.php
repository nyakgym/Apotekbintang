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
                                            <a class="nav-link ps-2 <?php echo ((isset ($_GET['x']) && $_GET['x']=='laporan') || !isset($_GET['x']))?'active link-light bg-success' : 'link-dark'; ?>" href="laporan"><i class="bi bi-clipboard2-fill"></i> Laporan Penjualan</a>
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
                            Halaman Laporan Penjualan
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col d-flex justify-content-end">
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalTambahUser"> + Laporan</button>
                                </div>
                            </div>
                
                            <!-- Modal Tambah menu baru-->
                            <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Laporan Penjualan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="needs-validation" novalidate action="#" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="input-group mb-3">
                                                            <input type="file" class="form-control" id="uploadFoto" placeholder="your name" name="foto" required>
                                                            <label class="input-group-text"for="uploadFoto">Upload Foto Menu</label>
                                                            <div class="invalid-feedback">
                                                                Masukkan File Foto Menu
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control py-3" id="floatingInput" placeholder="Nama Menu" name="nama_menu" required>
                                                            <label for="floatingInput">Nama Menu</label>
                                                            <div class="invalid-feedback">
                                                                Masukkan Nama Menu
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="floatingInput" placeholder="keterangan" name="keterangan">
                                                            <label for="floatingPassword">Keterangan</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-floating mb-3">
                                                            <select class="form-select" aria-label="Default select example" name="kat_menu" required>
                                                            <option selected hidden value="">Pilih Kategori Menu</option>
                                                            <?php
                                                            // foreach($select_kat_menu as $value){
                                                            //     echo "<option value=".$value['id_kat_menu'].">$value[kategori_menu]</option>";
                                                            //}
                                                            ?>
                                                            </select>
                                                            <label for="floatingInput">Kategori Makanan atau Minuman</label>
                                                            <div class="invalid-feedback">
                                                                Pilih Kategori Makanan atau Minuman
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-floating mb-3">
                                                            <input type="number" class="form-control" id="floatingInput" placeholder="harga" name="harga" required>
                                                            <label for="floatingInput">Harga</label>
                                                            <div class="invalid-feedback">
                                                                Masukkan Harga Menu
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-floating mb-3">
                                                            <input type="number" class="form-control" id="floatingInput" placeholder="stok" name="stok" required>
                                                            <label for="floatingInput">Stok</label>
                                                            <div class="invalid-feedback">
                                                                Masukkan Stok
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="input_menu_validate" value="12345">Save changes</button>
                                                </div>
                                        </div>
                
                                        </form>
                                    </div>
                                </div>
                            </div>
                
                            <!-- Akhir Modal Tambah Menu baru-->
                            <?php
                            if (empty($result)) {
                                echo "Laporan Penjualan tidak ada";
                            } else {
                            foreach ($result as $row) {
                            ?>
                                <!--Modal View-->
                                {{-- <div class="modal fade" id="ModalView<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Menu Makanan dan Minuman</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="needs-validation" novalidate action="proses/proses_input_menu.php" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-floating mb-3">
                                                            <input disabled type="text" class="form-control py-3" id="floatingInput" value="<?php echo $row['nama_menu'] ?>">
                                                            <label for="floatingInput">Nama Menu</label>
                                                            <div class="invalid-feedback">
                                                                Masukkan Nama Menu
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-floating mb-3">
                                                            <input disabled type="text" class="form-control" id="floatingInput" value="<?php echo $row['keterangan'] ?>">
                                                            <label for="floatingPassword">Keterangan</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-floating mb-3">
                                                            <select disabled class="form-select" aria-label="Default select example" value="<?php echo $row['kat_menu'] ?>">
                                                            <option selected hidden value="">Pilih Kategori Menu</option>
                                                            <?php
                                                            foreach($select_kat_menu as $value){
                                                                if($row['kategori'] == $value['id_kat_menu']){
                                                                    echo "<option selected value=".$value['id_kat_menu'].">$value[kategori_menu]</option>";
                                                                }else{
                                                                    echo "<option value=".$value['id_kat_menu'].">$value[kategori_menu]</option>";
                                                                }
                                                            }
                                                            ?>
                                                            </select>
                                                            <label disabled for="floatingInput">Kategori Makanan atau Minuman</label>
                                                            <div class="invalid-feedback">
                                                                Pilih Kategori Makanan atau Minuman
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-floating mb-3">
                                                            <input disabled type="number" class="form-control" id="floatingInput" value="<?php echo $row['harga'] ?>">
                                                            <label for="floatingInput">Harga</label>
                                                            <div class="invalid-feedback">
                                                                Masukkan Harga Menu
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-floating mb-3">
                                                            <input disabled type="number" class="form-control" id="floatingInput" value="<?php echo $row['stok'] ?>">
                                                            <label for="floatingInput">Stok</label>
                                                            <div class="invalid-feedback">
                                                                Masukkan Stok
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                
                                    
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="input_menu_validate" value="12345">Save changes</button>
                                                </div>
                                        </div>
                
                                        </form>
                                    </div>
                                </div>
                                </div> --}}
                                <!--Akhir Modal View-->
                
                                <!--Modal Edit-->
                                {{-- <div class="modal fade" id="ModalEdit<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Menu Makanan dan Minuman</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="needs-validation" novalidate action="proses/proses_edit_menu.php" method="post" enctype="multipart/form-data">
                                                <input type="hidden" value ="<?php echo $row['id'] ?>" name= "id">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="input-group mb-3">
                                                            <input type="file" class="form-control" id="uploadFoto" placeholder="your name" name="foto" required>
                                                            <label class="input-group-text" for="uploadFoto">Upload Foto Menu</label>
                                                            <div class="invalid-feedback">
                                                                Masukkan File Foto Menu
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control py-3" id="floatingInput" placeholder="Nama Menu" name="nama_menu" required value="<?php echo $row['nama_menu'] ?>">
                                                            <label for="floatingInput">Nama Menu</label>
                                                            <div class="invalid-feedback">
                                                                Masukkan Nama Menu
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="floatingInput" placeholder="keterangan" name="keterangan" value="<?php echo $row['keterangan'] ?>">
                                                            <label for="floatingPassword">Keterangan</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-floating mb-3">
                                                        <select class="form-select" aria-label="Default select example" name="kat_menu">
                                                            <option selected hidden value="">Pilih Kategori Menu</option>
                                                            <?php
                                                            // foreach($select_kat_menu as $value){
                                                            //     if($row['kategori'] == $value['id_kat_menu']){
                                                            //         echo "<option selected value=".$value['id_kat_menu'].">$value[kategori_menu]</option>";
                                                            //     }else{
                                                            //         echo "<option value=".$value['id_kat_menu'].">$value[kategori_menu]</option>";
                                                            //     }
                                                            // }
                                                            ?>
                                                            </select>
                                                            <label for="floatingInput">Kategori Makanan atau Minuman</label>
                                                            <div class="invalid-feedback">
                                                                Pilih Kategori Makanan atau Minuman
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-floating mb-3">
                                                            <input type="number" class="form-control" id="floatingInput" placeholder="harga" name="harga" required value="<?php echo $row['harga'] ?>">
                                                            <label for="floatingInput">Harga</label>
                                                            <div class="invalid-feedback">
                                                                Masukkan Harga Menu
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-floating mb-3">
                                                            <input type="number" class="form-control" id="floatingInput" placeholder="stok" name="stok" required value="<?php echo $row['stok'] ?>">
                                                            <label for="floatingInput">Stok</label>
                                                            <div class="invalid-feedback">
                                                                Masukkan Stok
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                
                                    
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="input_menu_validate" value="12345">Save changes</button>
                                                </div>
                                        </div>
                
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                                <!--Akhir Modal Edit-->
                
                                <!--Modal Delete-->
                                {{-- <div class="modal fade" id="ModalDelete<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-md modal-fullscreen-md-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data User</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="needs-validation" novalidate action="proses/proses_delete_menu.php" method="post">
                                                    <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                                    <input type="hidden" value="<?php echo $row['foto'] ?>" name="foto">
                                                    <div class="col-lg-12">
                                                        Apakah anda ingin menghapus menu <b><?php echo $row['nama_menu'] ?> ? </b>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger" name="input_user_validate" value="12345">Hapus</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <!--Akhir Modal Delete-->
                
                            <?php
                            }
                            
                            ?>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr class="text-nowrap">
                                                <th scope="col">No</th>
                                                <th scope="col">Foto Menu</th>
                                                <th scope="col">Nama Menu</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Jenis Menu</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Stok</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($result as $row) {
                                            ?>
                                                <tr>
                                                    <th scope="row"><?php echo $no++ ?></th>
                                                    <td>
                                                        <div style="width: 90px;">
                                                        <img src="assets/img/<?php echo $row['foto'] ?>" class="img-thumbnail" alt="...">
                                                        </div>
                                                    </td>
                                                    <td><?php echo $row['nama_menu'] ?></td>
                                                    <td><?php echo $row['keterangan'] ?></td>
                                                    <td><?php echo ($row['jenis_menu'] == 1) ? "Makanan" : "Minuman" ?></td>
                                                    <td><?php echo $row['kategori_menu'] ?></td>
                                                    <td><?php echo $row['harga'] ?></td>
                                                    <td><?php echo $row['stok'] ?></td>
                                                    <td>
                                                        <div class="d-flex">
                                                        <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView<?php echo $row['id'] ?>"><i class="bi bi-eye"></i></button>
                                                        <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $row['id'] ?>"><i class="bi bi-pencil-square"></i></button>
                                                        <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete<?php echo $row['id'] ?>"><i class="bi bi-trash"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
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
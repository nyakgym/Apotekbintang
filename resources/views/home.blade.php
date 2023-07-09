@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
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
                                    <a class="nav-link ps-2 <?php echo ((isset ($_GET['x']) && $_GET['x']=='dashboard') || !isset($_GET['x'])) ?'active link-light bg-success' : 'link-dark'; ?>" aria-current="page" href="dashboard"><i class="bi bi-house-fill"></i> Dasboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='obat')?'active link-light bg-success' : 'link-dark'; ?>" href="obat"><i class="bi bi-capsule"></i></i> Daftar Obat</a>
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
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Data Obat</h5>
                      <p class="card-text">Hanya penjelasan singkat.</p>
                      <a href="obat" class="btn btn-success">Klik Disini</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Data Pemasok/Supplier</h5>
                      <p class="card-text">Hanya penjelasan singkat.</p>
                      <a href="pemasok" class="btn btn-success">Klik Disini</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Faktur Penjualan</h5>
                      <p class="card-text">Hanya penjelasan singkat.</p>
                      <a href="penjualan" class="btn btn-success">Klik Disini</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Faktur Pembelian</h5>
                      <p class="card-text">Hanya penjelasan singkat.</p>
                      <a href="pembelian" class="btn btn-success">Klik Disini</a>
                    </div>
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
@endsection

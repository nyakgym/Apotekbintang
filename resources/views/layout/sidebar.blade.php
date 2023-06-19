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
                <div class="offcanvas-body">
                    <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1 ">
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo ((isset ($_GET['x']) && $_GET['x']=='dashboard') || !isset($_GET['x']))?'active link-light bg-success' : 'link-dark'; ?>" aria-current="page" href="dashboard"><i class="bi bi-house-fill"></i> Dasboard</a>
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
                            <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='laporan')?'active link-light bg-success' : 'link-dark'; ?>" href="laporan"><i class="bi bi-clipboard2-fill"></i> Laporan Penjualan</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
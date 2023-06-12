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
                @include('layout.sidebar')
                <!--End Sidebar-->
    
                <!--Content-->
                <div class="col-lg-9 mt-2">
                    <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Data Obat</h5>
                              <p class="card-text">Hanya penjelasan singkat.</p>
                              <a href="#" class="btn btn-success">Klik Disini</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Data Supplier</h5>
                              <p class="card-text">Hanya penjelasan singkat.</p>
                              <a href="#" class="btn btn-success">Klik Disini</a>
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
                              <a href="#" class="btn btn-success">Klik Disini</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Faktur Supplier</h5>
                              <p class="card-text">Hanya penjelasan singkat.</p>
                              <a href="#" class="btn btn-success">Klik Disini</a>
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
    </body>
    
</html>
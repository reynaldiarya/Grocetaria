@extends('maintemplatedashboard')
@section('content')
@extends('partials.sidebar')

<body id="page-top">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">


                <div class="container-fluid" style="background: var(--bs-blue);padding: 25px;color: rgb(255, 255, 255);">
                    <h2>Selamat Datang!</h2>
                    <p style="margin: 0px;">Hai {{ strtoupper(Auth()->user()->name) }}, selamat datang di halaman Dashboard Grocetaria</p>
                    <p style="margin: 0px;">Silahkan klik menu pilihan yang ada dibagian kiri.</p>

                </div>
                <div class="container-fluid">
                    <div class="row mt-4">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span><a href="/pembelian"> Riwayat Pembelian</a></span></div>

                                        </div>
                                        <div class="col-auto"><i class="fa-solid fa-calendar fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span><a href="/rekam-medis" class="text-success"> Rekam Medis</a></span></div>

                                        </div>
                                        <div class="col-auto"><i class="fa-solid fa-notes-medical fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>

    </div>

        <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright 2022 Grocetaria </span></div>
                </div>
            </footer>
        </div>
    </div>


    <!-- Logout Modal-->

</body>

@endsection
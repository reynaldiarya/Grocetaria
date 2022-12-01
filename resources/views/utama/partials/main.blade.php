<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Grocetaria</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css"
        integrity="sha512-aNH2ILn88yXgp/1dcFPt2/EkSNc03f9HBFX0rqX3Kw37+vjipi1pK3L9W08TZLhMg4Slk810sPLdJlNIjwygFw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/css/Hero-Carousel-images.css">
    <link rel="stylesheet" href="/assets/css/custom.css">
    <link rel="stylesheet" href="/assets/css/MUSA_timeline.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-light navbar-expand-md fixed-top py-3"
            style="background-color: rgba(255, 255, 255, 0.8);">
            <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><img
                        src="/assets/img/logo.png" width="161" height="29"></a><button data-bs-toggle="collapse"
                    class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle
                        navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-2">
                    @if (Auth::user())
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}"><a
                                    class="nav-link text-black" href="/toko">TOKO</a></li>
                            <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}"><a
                                    class="nav-link text-black" href="/tentang-kami">TENTANG KAMI</a></li>
                            <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}"><a
                                    class="nav-link text-black" href="/kontak-kami">KONTAK KAMI</a></li>
                            <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}"><a
                                    class="nav-link text-black" href="/pelacakan">PELACAKAN</a></li>



                        </ul>
                        <a class="text-black ms-4 me-4" role="button" href="/keranjang-belanja"><i
                                class="fa-solid fa-cart-shopping"></i></a>


                            <div class="nav-item dropdown no-arrow ms-3">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline small text-dark">Douglas McGee</span>
                                    <img class="img-profile rounded-circle" style="height: 30px" src="assets/img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    {{-- <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                    </a> --}}
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                        data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </div>

                    @else
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}"><a
                                    class="nav-link text-black" href="/toko">TOKO</a></li>
                            <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}"><a
                                    class="nav-link text-black" href="/tentang-kami">TENTANG KAMI</a></li>
                            <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}"><a
                                    class="nav-link text-black" href="/kontak-kami">KONTAK KAMI</a></li>
                            <form class="d-flex">
                                <div class="text-center ms-5">
                                    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                                        data-bs-target="#loginModal">
                                        Masuk
                                    </button>
                                </div>
                            </form>
                            <form class="d-flex">
                                <div class="text-center ms-2">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                                        data-bs-target="#daftarModal">
                                        Daftar
                                    </button>
                                </div>
                            </form>
                        </ul>
                    @endif
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="text-center py-4" style="padding: 50px 50px; background-color: rgba(65, 65, 65, 0.13)">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-3 my-auto">
                <div class="col my-5"><img src="/assets/img/logo.png" style="width: 80%"></div>
                <div class="col"></div>
                <div class="col my-5">
                    <ul class="navbar-nav ms-auto" style="text-align: left;">
                        <li class="nav-item"><i class="fa-solid fa-map-location-dot"></i>&nbsp;Jalan Kejawan Putih 4,
                            Surabaya</li>
                        <li class="nav-item"><i class="fa-regular fa-envelope"></i>&nbsp;grocetaria98@gmail.com</li>
                        <li class="nav-item"><i class="fa-solid fa-phone"></i>&nbsp;082 243 227 694</li>
                        <li class="nav-item"><i class="fa-brands fa-instagram"></i>&nbsp;@grocetariashop</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
</body>

</html>

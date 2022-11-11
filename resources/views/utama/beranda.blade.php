
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css" integrity="sha512-aNH2ILn88yXgp/1dcFPt2/EkSNc03f9HBFX0rqX3Kw37+vjipi1pK3L9W08TZLhMg4Slk810sPLdJlNIjwygFw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/css/Hero-Carousel-images.css">
    <link rel="stylesheet" href="/assets/css/Navbar-Right-Links-icons.css">
</head>

<body>
    <header>
    <nav class="navbar navbar-light navbar-expand-md fixed-top py-3" style="background-color: rgba(255, 255, 255, 0.8);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img src="/assets/img/logo.png" width="161" height="29"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}"><a class="nav-link text-black" href="#">TOKO</a></li>
                    <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}"><a class="nav-link text-black" href="#">TENTANG KAMI</a></li>
                    <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}"><a class="nav-link text-black" href="#">KONTAK KAMI</a></li>
                    <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}"><a class="nav-link text-black" href="#">PELACAKAN</a></li>
                </ul><a class="text-black ms-md-5" role="button" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
    </nav>
    </header>
    <main>
    <div class="carousel slide" data-bs-ride="carousel" id="carousel-1" style="height: 720px;">
        <div class="carousel-inner h-100">
            <div class="carousel-item active h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" src="/assets/img/beranda.png" alt="Slide Image" style="z-index: -1;">
                <div class="container d-flex flex-column justify-content-center h-100">
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <h1 class="text-uppercase text-white fw-bold" style="font-size: 42px">Welcome To</h1>
                            <h1 class="text-uppercase text-white fw-bold" style="font-size: 48px; font-family: Georgia, serif;">Grocetaria</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" src="/assets/img/beranda-2.png" alt="Slide Image" style="z-index: -1;">
                <div class="container d-flex flex-column justify-content-center h-100">
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <h1 class="text-uppercase text-white fw-bold" style="font-size: 42px">Welcome To</h1>
                            <h1 class="text-uppercase text-white fw-bold" style="font-size: 48px; font-family: Georgia, serif;">Grocetaria</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" src="/assets/img/beranda-3.png" alt="Slide Image" style="z-index: -1;">
                <div class="container d-flex flex-column justify-content-center h-100">
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <h1 class="text-uppercase text-white fw-bold" style="font-size: 42px">Welcome To</h1>
                            <h1 class="text-uppercase text-white fw-bold" style="font-size: 48px; font-family: Georgia, serif;">Grocetaria</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="visually-hidden">Next</span></a></div>
        <ol class="carousel-indicators">
            <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
            <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
        </ol>
    </div>
    </main>
    <div class="container py-4 py-xl-5">
        <div class="row mt-5 mb-3">
            <div class="col">
                <h2>Produk <span style="color: #60D05E">Terpopuler</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 my-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card"><img class="card-img-top w-100 d-block">
                            <div class="card-body">
                                <h4 class="card-title">Sayur Kol 500g</h4>
                                <p class="card-text">Rp 7.000,-</p>
                                <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card"><img class="card-img-top w-100 d-block">
                            <div class="card-body">
                                <h4 class="card-title">Sayur Kol 500g</h4>
                                <p class="card-text">Rp 7.000,-</p>
                                <p class="card-text">Terjual 250+</p><button class="btn btn-primary" type="button">Button</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card"><img class="card-img-top w-100 d-block">
                            <div class="card-body">
                                <h4 class="card-title">Sayur Kol 500g</h4>
                                <p class="card-text">Rp 7.000,-</p>
                                <p class="card-text">Terjual 250+</p><button class="btn btn-primary" type="button">Button</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card"><img class="card-img-top w-100 d-block">
                            <div class="card-body">
                                <h4 class="card-title">Sayur Kol 500g</h4>
                                <p class="card-text">Rp 7.000,-</p>
                                <p class="card-text">Terjual 250+</p><button class="btn btn-primary" type="button">Button</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card"><img class="card-img-top w-100 d-block">
                            <div class="card-body">
                                <h4 class="card-title">Sayur Kol 500g</h4>
                                <p class="card-text">Rp 7.000,-</p>
                                <p class="card-text">Terjual 250+</p><button class="btn btn-primary" type="button">Button</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card"><img class="card-img-top w-100 d-block">
                            <div class="card-body">
                                <h4 class="card-title">Sayur Kol 500g</h4>
                                <p class="card-text">Rp 7.000,-</p>
                                <p class="card-text">Terjual 250+</p><button class="btn btn-primary" type="button">Button</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card"><img class="card-img-top w-100 d-block">
                            <div class="card-body">
                                <h4 class="card-title">Sayur Kol 500g</h4>
                                <p class="card-text">Rp 7.000,-</p>
                                <p class="card-text">Terjual 250+</p><button class="btn btn-primary" type="button">Button</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card"><img class="card-img-top w-100 d-block">
                            <div class="card-body">
                                <h4 class="card-title">Sayur Kol 500g</h4>
                                <p class="card-text">Rp 7.000,-</p>
                                <p class="card-text">Terjual 250+</p><button class="btn btn-primary" type="button">Button</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center py-4" style="padding: 50px 50px; background-color: rgba(65, 65, 65, 0.13)">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-3 my-auto">
                <div class="col my-5"><img src="/assets/img/logo.png" style="width: 80%"></div>
                <div class="col"></div>
                <div class="col my-5">
                    <ul class="navbar-nav ms-auto" style="text-align: left;">
                        <li class="nav-item"><i class="fa-solid fa-map-location-dot"></i>&nbsp;Jalan Kejawan Putih 4, Surabaya</li>
                        <li class="nav-item"><i class="fa-regular fa-envelope"></i>&nbsp;grocetaria98@gmail.com</li>
                        <li class="nav-item"><i class="fa-solid fa-phone"></i>&nbsp;082 243 227 694</li>
                        <li class="nav-item"><i class="fa-brands fa-instagram"></i>&nbsp;@grocetariashop</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
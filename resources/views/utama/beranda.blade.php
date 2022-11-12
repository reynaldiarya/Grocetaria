@extends('utama.partials.main')
@section('content')

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

    <div class="container py-4 py-xl-5">
        <div class="row mt-5 mb-3">
            <div class="col">
                <h2>Produk <span style="color: #60D05E">Terpopuler</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 my-2">
                <div class="card-body">
                    <div class="card"><img class="card-img-top w-100 d-block" style="height: 200px; width: 200px; padding: 25px" src="/assets/img/sayur-kol.png">
                        <div class="card-body">
                            <h4 class="card-title">Sayur Kol 500g</h4>
                            <p class="card-text">Rp 7.000,-</p>
                            <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card-body">
                    <div class="card"><img class="card-img-top w-100 d-block" style="height: 200px; width: 200px; padding: 25px" src="/assets/img/tomat.png">
                        <div class="card-body">
                            <h4 class="card-title">Tomat 250g</h4>
                            <p class="card-text">Rp 8.500,-</p>
                            <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card-body">
                    <div class="card"><img class="card-img-top w-100 d-block" style="height: 200px; width: 200px; padding: 25px" src="/assets/img/wortel.png">
                        <div class="card-body">
                            <h4 class="card-title">Wortel 500g</h4>
                            <p class="card-text">Rp 7.500,-</p>
                            <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card-body">
                    <div class="card"><img class="card-img-top w-100 d-block" style="height: 200px; width: 200px; padding: 25px" src="/assets/img/kentang.png">
                        <div class="card-body">
                            <h4 class="card-title">Kentang 1000g</h4>
                            <p class="card-text">Rp 9.000,-</p>
                            <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card-body">
                    <div class="card"><img class="card-img-top w-100 d-block" style="height: 200px; width: 200px; padding: 25px" src="/assets/img/sayur-kol.png">
                        <div class="card-body">
                            <h4 class="card-title">Sayur Kol 500g</h4>
                            <p class="card-text">Rp 7.000,-</p>
                            <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card-body">
                    <div class="card"><img class="card-img-top w-100 d-block" style="height: 200px; width: 200px; padding: 25px" src="/assets/img/tomat.png">
                        <div class="card-body">
                            <h4 class="card-title">Tomat 250g</h4>
                            <p class="card-text">Rp 8.500,-</p>
                            <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card-body">
                    <div class="card"><img class="card-img-top w-100 d-block" style="height: 200px; width: 200px; padding: 25px" src="/assets/img/wortel.png">
                        <div class="card-body">
                            <h4 class="card-title">Wortel 500g</h4>
                            <p class="card-text">Rp 7.500,-</p>
                            <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card-body">
                    <div class="card"><img class="card-img-top w-100 d-block" style="height: 200px; width: 200px; padding: 25px" src="/assets/img/kentang.png">
                        <div class="card-body">
                            <h4 class="card-title">Kentang 1000g</h4>
                            <p class="card-text">Rp 9.000,-</p>
                            <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4 py-xl-5">
        <div class="row mt-5 mb-3">
            <div class="col">
                <h2>Produk <span style="color: #60D05E">Terlaris</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 my-2">
                <div class="card-body">
                    <div class="card"><img class="card-img-top w-100 d-block" style="height: 200px; width: 200px; padding: 25px" src="/assets/img/sayur-kol.png">
                        <div class="card-body">
                            <h4 class="card-title">Sayur Kol 500g</h4>
                            <p class="card-text">Rp 7.000,-</p>
                            <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card-body">
                    <div class="card"><img class="card-img-top w-100 d-block" style="height: 200px; width: 200px; padding: 25px" src="/assets/img/tomat.png">
                        <div class="card-body">
                            <h4 class="card-title">Tomat 250g</h4>
                            <p class="card-text">Rp 8.500,-</p>
                            <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card-body">
                    <div class="card"><img class="card-img-top w-100 d-block" style="height: 200px; width: 200px; padding: 25px" src="/assets/img/wortel.png">
                        <div class="card-body">
                            <h4 class="card-title">Wortel 500g</h4>
                            <p class="card-text">Rp 7.500,-</p>
                            <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card-body">
                    <div class="card"><img class="card-img-top w-100 d-block" style="height: 200px; width: 200px; padding: 25px" src="/assets/img/kentang.png">
                        <div class="card-body">
                            <h4 class="card-title">Kentang 1000g</h4>
                            <p class="card-text">Rp 9.000,-</p>
                            <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
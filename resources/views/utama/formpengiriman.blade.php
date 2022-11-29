@extends('utama.partials.main')
@section('content')
<section class="py-4 py-xl-5">
    <div class="col-lg-11">
        <h1 class="grotitle"> Form Pengiriman</h1>
    </div>
    <div class="col-lg-12 mt-5 d-flex justify-content-center">
        <h4 class="p-3 ps-5 pe-5 rounded" style="background-color: #66D654">Silahkan isi form untuk melanjutkan checkout</h4>
    </div>
</section>
<section class="breadcrumb">
    <div class="col-lg-8 p-5 mx-auto">
        <div class="card mb-5">
            <div class="card-body">
                <div class="col-lg-11">
                    <p> Isi form dibawah ini untuk pengiriman produk anda</p>
                </div>
                <form method="post">
                    <div class="col-lg-12 mb-3">Nama<input class="form-control" type="text" id="name-2" name="name" placeholder="Nama"></div>
                    <div class="col-lg-12 mb-3">No Telpon<input class="form-control" type="telp" id="telp-2" name="telp" placeholder="Telpon"></div>
                    <div class="col-lg-12 mb-3">Email<input class="form-control" type="email" id="email-2" name="email" placeholder="Email"></div>
                    <div class="col-lg-12 mb-3">Alamat Pengiriman<input class="form-control" type="text" id="alamat-2" name="alamat" placeholder="Alamat"></div>
                    <div class="d-flex flex-row-reverse">
                        <div class="col-2 mx-2"><button class="btn btn-gro text-center d-block w-100" type="submit">Simpan </button></div>
                        <div class="col-2 mx-2"><button class="btn btn-danger text-center d-block w-100" type="submit">Batal </button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
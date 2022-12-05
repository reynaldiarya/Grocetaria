@extends('utama.partials.main')
@section('content')
<section class="py-4 py-xl-5">
    <div class="col-lg-11">
        <h1 class="grotitle"> Review Pesanan</h1>
    </div>
</section>
<div class="container" style="margin-bottom: 150px">
    <section class="h-100 h-custom">
        <div class="container h-100 py-5">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">

              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Produk</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Jumlah</th>
                      <th scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="align-middle">
                        <div class="d-flex flex-row">
                        <img src="/assets/img/wortel.png" class="rounded-3"
                            style="width: 120px;" alt="Book">
                        <p class="my-auto" style="font-weight: 500;">Wortel 500g</p>
                        </div>
                      </td>
                      <td class="align-middle">
                        <p class="mb-0" style="font-weight: 500;">Rp 7.500</p>
                      </td>
                      <td class="align-middle">
                        <p class="mb-0" style="font-weight: 500;">1</p>
                      </td>
                      <td class="align-middle">
                        <p class="mb-0" style="font-weight: 500;">Rp 7.500</p>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <div class="border my-5"></div>
              <div class="mb-5 mb-lg-0">
                <div class="p-4">

                  <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-6">
                    </div>
                    <div class="col-lg-4 col-xl-3">
                      <div class="d-flex justify-content-between" style="font-weight: 500;">
                        <p class="mb-2">Subtotal</p>
                        <p class="mb-2">Rp 30.000</p>
                      </div>

                      <div class="d-flex justify-content-between" style="font-weight: 500;">
                        <p class="mb-2">Diskon</p>
                        <p class="mb-2">Rp 0</p>
                      </div>

                      <hr class="my-4">

                      <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                        <p class="mb-2">Total</p>
                        <p class="mb-2">Rp 38.000</p>
                      </div>

                      <button type="button" class="btn btn-gro btn-block btn-lg">
                          Berikutnya
                      </button>

                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
</div>
@endsection
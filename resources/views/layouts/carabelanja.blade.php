@extends('template-nocart')
@section('content')
    <div class="container" style="margin-top: 80px;">
        <div class="row align-middle">
            <div class="col-sm-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb px-0 button_breadcrumb">
                        <li class="breadcrumb-item" style="color: #4db849 !important;"><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cara Berbelanja</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row section_content">
            <div class="col-sm-12 col-md-6 mb-5">
                <div class="card mx-auto item_product h-100">
                    <div class="row card-body">
                    <div class="col-12 col-md-6 float-left my-auto d-none d-md-inline-block">
                        <img src="assets/image/search_product.png" class="card-img-top" alt="...">
                    </div>
                    <div class="col-12 col-md-6 float-right my-auto">
                        <h5 class="card-title">1. Cari Produk</h5>
                        <img src="assets/image/search_product.png" class="card-img-top d-md-none d-inline-block" alt="...">
                        <p>Di Imaji Shop terdapat banyak pilihan untuk kebutuhan harian kamu, dan dapat dilihat dan dicari di halaman utama dan category.</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mb-5">
                <div class="card mx-auto item_product h-100">
                    <div class="row card-body">
                    <div class="col-12 col-md-6 float-left my-auto d-none d-md-inline-block">
                        <img src="{{ asset('assets/image/add_to_cart.png') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="col-12 col-md-6 float-right my-auto">
                        <h5 class="card-title">2. Masukkan dalam keranjang belanja</h5>
                        <img src="{{ asset('assets/image/add_to_cart.png') }}" class="card-img-top d-md-none d-inline-block" alt="...">
                        <p>Bila kamu sudah menemukannya, masukkan pilihan produk yang kamu
                            butuhkan dengan menekan tombol Add to Cart pada bagian bawah.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row section_content">
            <div class="col-sm-12 col-md-6 mb-5">
                <div class="card mx-auto item_product h-100">
                    <div class="row card-body">
                    <div class="col-12 col-md-6 float-left my-auto d-none d-md-inline-block">
                        <img src="{{ asset('assets/image/add_document.png') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="col-12 col-md-6 float-right my-auto">
                        <h5 class="card-title">3. Isi Data</h5>
                        <img src="{{ asset('assets/image/add_document.png') }}" class="card-img-top d-md-none d-inline-block" alt="...">
                        <p>Proses bisa kamu lanjutkan dengan mengisi data pemesan, penerima, dan pengiriman.
                            Lalu kamu konfirmasikan daftar ini di halaman Konfirmasi Pemesanan sebelum kamu
                            mengirimkan kepada admin Imaji Shop.</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mb-5">
                <div class="card mx-auto item_product h-100">
                    <div class="row card-body">
                    <div class="col-12 col-md-6 float-left my-auto d-none d-md-inline-block">
                        <img src="{{ asset('assets/image/order_confirmed.png') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="col-12 col-md-6 float-right my-auto">
                        <h5 class="card-title">4. Konfirmasi via WhatsApp</h5>
                        <img src="{{ asset('assets/image/order_confirmed.png') }}" class="card-img-top d-md-none d-inline-block" alt="...">
                        <p>Bila sudah dipastikan, tinggal tekan tombol Kirim Pesanan ke Imaji Shop.
                            Order yang kamu masukkan akan secara otomatis kami buatkan dan kamu tinggal
                            menyampaikannya kepada admin WhatsApp kami.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row section_content">
            <div class="col-12 mb-5">
                <div class="mx-auto">
                    <div class="clearfix">
                        <a href="/" class="btn btn-block btn-success button_see_product">Lihat Semua Produk</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
    </div>
@endsection

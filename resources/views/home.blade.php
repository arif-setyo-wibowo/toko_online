<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- bootstrap 3 and affix -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- end  -->
    <link rel="stylesheet" href="{{ asset('assets/') }}/css/style.css">
    <title>Toko_Onlen</title>
    <script src="https://kit.fontawesome.com/9bcecd6318.js" crossorigin="anonymous"></script>
</head>

<body>

    <div id="overlay"></div>

    <div class="header">
        <div class="item-header-1 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <img class="mr-2" src="assets/img/1.png" alt="">
                <span>Download Tokopedia App</span>
            </div>

            <div class="d-flex">
                <span class="mr-4">Tentang Tokopedia</span>
                <span class="mr-4">Mitra Tokopedia</span>
                <span class="mr-4">Mulai Berjualan</span>
                <span class="mr-4">Promo</span>
                <span class="mr-4">Tokopedia Care</span>
            </div>
        </div>

        <div class="item-header-2 d-flex flex-column">
            <div class="d-flex justify-content-between align-items-center">
                <img class="img-tokopedia" src="assets/img/2.png" alt="">
                <span class="mx-2 text-kategory" onclick="kategoryOn()">Kategory</span>
                <div class="wrap-search">
                    <input type="text" class="form-control" placeholder="Cari barang" data-toggle="modal"
                        data-target="#exampleModal">
                    <div class=" wrap-icon-search">
                        <img class="img-search" src="assets/img/3.png" alt="">
                    </div>
                </div>

                <div class="wrap-img-shop mx-3" onclick="on()">
                    <img class="img-shop" src="assets/img/4.png" alt="">
                </div>

                <span class="mr-3 line">|</span>

                <div class="d-flex">
                    @if (Session::get('login'))
                    <a href="{{ route('logout') }}" class="btn font-weight-bold mr-3 btn-danger">Logout</a>
                    @else
                    <a href="{{ route('login') }}" class="btn font-weight-bold mr-3">Masuk</a>
                    <a href="{{ route('register') }}" class="btn font-weight-bold text-white">Daftar</a>
                    @endif
                </div>
            </div>
            <div class="text-under-search d-flex mt-2">
                <span class="mr-3">Jersey Sepeda</span>
                <span class="mr-3">Jersey Sepeda</span>
                <span class="mr-3">Jersey Sepeda</span>
                <span class="mr-3">Jersey Sepeda</span>
                <span class="mr-3">Jersey Sepeda</span>
            </div>
        </div>

        <div class="menu-bar flex-column justify-content-between align-items-center" id="menuBar">
            <img src="assets/img/5.png" alt="">
            <h4 class="mt-2">Wah keranjang belanjaanmu kosong</h4>
            <p class="text-center">Daripada dianggurin, mending diisi dengan barang barang </br>impianmu. Yuk cek
                sekarang!</p>
            <button class="btn">Lihat Rekomendasi</button>
        </div>
    </div>

    <div class="kategory" id="kategory">
        <div class="head-kategory d-flex w-100">
            <span>Belanja</span>
            <span>Featured</span>
            <span>Featured</span>
            <span>Brand&nbsp;Unggulan</span>
            <span>Halal&nbsp;Corner</span>
            <span>Investasi&nbsp;Asuransi&nbsp;&&nbsp;Pinjaman</span>
            <span>Pajak</span>
            <span>Pendidikan</span>
            <span>Tagihan</span>
            <span>Top&nbsp;-&nbsp;Up</span>
            <span>Travel&nbsp;Entertaiment</span>
            <span>OS&nbsp;Pupuler</span>
            <span>Lainnya</span>
        </div>
        <div class="row">
            <div class="col-2">
                <div class="head-left">
                    <h6 class="mb-0">Buku</h6>
                    <h6 class="mb-0">Elektronik</h6>
                    <h6 class="mb-0">Dapur</h6>
                </div>
            </div>
            <div class="col-10">
                <div class="head-left">
                    <div class="w-100 d-flex align-items-center">
                        <img src="assets/img/6.png" alt="">
                        <span class="h4 m-0 p-0 font-weight-bold">Buku</span>
                    </div>
                    <div class="row mt-5">
                        <div class="col-3">
                            <h5>Title</h5>
                            <h6>Deskripsi</h6>
                            <h6>Deskripsi</h6>
                            <h6>Deskripsi</h6>
                            <h6>Deskripsi</h6>
                            <h6>Deskripsi</h6>
                            <h6>Deskripsi</h6>
                        </div>
                        <div class="col-3">
                            <h5>Title</h5>
                            <h6>Deskripsi</h6>
                            <h6>Deskripsi</h6>
                            <h6>Deskripsi</h6>
                            <h6>Deskripsi</h6>
                            <h6>Deskripsi</h6>
                            <h6>Deskripsi</h6>
                        </div>
                        <div class="col-3">
                            <h5>Title</h5>
                            <h6>Deskripsi</h6>
                            <h6>Deskripsi</h6>
                            <h6>Deskripsi</h6>
                            <h6>Deskripsi</h6>
                            <h6>Deskripsi</h6>
                            <h6>Deskripsi</h6>
                        </div>
                        <div class="col-3">
                            <h5>Title</h5>
                            <h6>Deskripsi</h6>
                            <h6>Deskripsi</h6>
                            <h6>Deskripsi</h6>
                            <h6>Deskripsi</h6>
                            <h6>Deskripsi</h6>
                            <h6>Deskripsi</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
    <!-- caraousel -->
    <div id="carouselExampleIndicators" class="carousel slide d-flex flex-column align-items-center"
        data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/') }}/img/slide/3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/') }}/img/slide/4.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- kategory pilihan -->
    <div class="kategory-pilihan">
        <div class="row mx-0 p-0">
            <div class="col-6 mx-0 p-0">
                <h1>Kategory Pilihan</h1>
                <div id="carouselExampleControls" class="carousel carousel2 slide mt-4" data-ride="carousel">
                    <div class="carousel-inner carousel-inner2">
                        <div class="carousel-item active">
                            <div class="row mx-0 p-0">
                                <div class="col-3 pl-0 pr-2">
                                    <div
                                        class="d-flex p-2 flex-column align-items-center justify-content-center card-category">
                                        <img src="{{ asset('assets/') }}/img/produk/1.png" alt="">
                                        <h2 class="mb-0">Makanan</h2>
                                        <h3 class="mb-0">Kering</h3>

                                    </div>
                                </div>
                                <div class="col-3 pl-0 pr-2">
                                    <div
                                        class="d-flex p-2 flex-column align-items-center justify-content-center card-category">

                                        <img src="{{ asset('assets/') }}/img/produk/1.png" alt="">
                                        <h2 class="mb-0">Makanan</h2>
                                        <h3 class="mb-0">Kering</h3>

                                    </div>
                                </div>
                                <div class="col-3 pl-0 pr-2">
                                    <div
                                        class="d-flex p-2 flex-column align-items-center justify-content-center card-category">

                                        <img src="{{ asset('assets/') }}/img/produk/1.png" alt="">
                                        <h2 class="mb-0">Makanan</h2>
                                        <h3 class="mb-0">Kering</h3>

                                    </div>
                                </div>
                                <div class="col-3 pl-0 pr2">
                                    <div
                                        class="d-flex p-2 flex-column align-items-center justify-content-center card-category">

                                        <img src="{{ asset('assets/') }}/img/produk/1.png" alt="">
                                        <h2 class="mb-0">Makanan</h2>
                                        <h3 class="mb-0">Kering</h3>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <div class="row mx-0 p-0">
                                <div class="col-3 pl-0 pr-2">
                                    <div
                                        class="d-flex p-2 flex-column align-items-center justify-content-center card-category">
                                        <img src="{{ asset('assets/') }}/img/produk/1.png" alt="">
                                        <h2 class="mb-0">Makanan</h2>
                                        <h3 class="mb-0">Kering</h3>

                                    </div>
                                </div>
                                <div class="col-3 pl-0 pr-2">
                                    <div
                                        class="d-flex p-2 flex-column align-items-center justify-content-center card-category">

                                        <img src="{{ asset('assets/') }}/img/produk/1.png" alt="">
                                        <h2 class="mb-0">Makanan</h2>
                                        <h3 class="mb-0">Kering</h3>

                                    </div>
                                </div>
                                <div class="col-3 pl-0 pr-2">
                                    <div
                                        class="d-flex p-2 flex-column align-items-center justify-content-center card-category">

                                        <img src="{{ asset('assets/') }}/img/produk/1.png" alt="">
                                        <h2 class="mb-0">Makanan</h2>
                                        <h3 class="mb-0">Kering</h3>

                                    </div>
                                </div>
                                <div class="col-3 pl-0 pr2">
                                    <div
                                        class="d-flex p-2 flex-column align-items-center justify-content-center card-category">

                                        <img src="{{ asset('assets/') }}/img/produk/1.png" alt="">
                                        <h2 class="mb-0">Makanan</h2>
                                        <h3 class="mb-0">Kering</h3>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h1>Top Up & Tagihan <span style="font-size: 16px; color: #03ac0e;">Lihat Semua</span> </h1>
                <div class="row mx-0 overflow-hidden border mt-4" style="border-radius: 12px;">
                    <div class="d-flex justify-content-between align-items-center w-100 border-bottom">
                        <div class="item-menu w-100 h-100 d-flex align-items-center justify-content-center">
                            <span>Pulsa</span>
                        </div>
                        <div class="item-menu w-100 h-100 d-flex align-items-center justify-content-center">
                            <span>Paket data</span>
                        </div>
                        <div class="item-menu w-100 h-100 d-flex align-items-center justify-content-center">
                            <span>Listrik PLN</span>
                        </div>
                        <div class="item-menu w-100 h-100 d-flex align-items-center justify-content-center">
                            <span>Flight</span>
                        </div>
                        <div class="item-menu d-flex px-2 align-items-center justify-content-center border-left">
                            <img src="assets/img/10.png" alt="">
                        </div>
                    </div>

                    <div class="d-flex w-100 justify-content-between align-items-end p-3">
                        <div class="form-row mx-0 w-100">
                            <div class="form-group w-100 mr-3 mb-0">
                                <label for="" class="font-weight-bold">Nomor Telepon</label>
                                <input type="text" class="form-control w-100" placeholder="0896309112">
                            </div>
                        </div>
                        <div class="form-row mx-0 w-100">
                            <div class="form-group w-100 mr-3 mb-0">
                                <label for="" class="font-weight-bold">Nominal</label>
                                <select name="" id="" class="form-control" disabled>
                                    <option value="">asdfsadfsafdsdf</option>
                                    <option value="">asdfsadfsafdsdf</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn px-3" style="background-color: #4950572e;">Beli</button>
                    </div>
                </div>
            </div>

            <div class="row flex-nowrap mx-0 mt-4 menu-scroll">
                <div class="item-scroll  col-1  d-flex align-items-center border py-1 px-3 mr-2">
                    <span class="mx-auto">Kategory</span>
                </div>
                <div class="item-scroll  col-1  d-flex align-items-center border py-1 px-3 mr-2">
                    <span class="mx-auto">Kategory</span>
                </div>
                <div class="item-scroll  col-1  d-flex align-items-center border py-1 px-3 mr-2">
                    <span class="mx-auto">Kategory</span>
                </div>
                <div class="item-scroll  col-1  d-flex align-items-center border py-1 px-3 mr-2">
                    <span class="mx-auto">Kategory</span>
                </div>
                <div class="item-scroll  col-1  d-flex align-items-center border py-1 px-3 mr-2">
                    <span class="mx-auto">Kategory</span>
                </div>
                <div class="item-scroll  col-1  d-flex align-items-center border py-1 px-3 mr-2">
                    <span class="mx-auto">Kategory</span>
                </div>
                <div class="item-scroll  col-1  d-flex align-items-center border py-1 px-3 mr-2">
                    <span class="mx-auto">Kategory</span>
                </div>
                <div class="item-scroll  col-1  d-flex align-items-center border py-1 px-3 mr-2">
                    <span class="mx-auto">Kategory</span>
                </div>
                <div class="item-scroll  col-1  d-flex align-items-center border py-1 px-3 mr-2">
                    <span class="mx-auto">Kategory</span>
                </div>
                <div class="item-scroll  col-1  d-flex align-items-center border py-1 px-3 mr-2">
                    <span class="mx-auto">Kategory</span>
                </div>

            </div>

        </div>

    </div>

    <hr class="position-relative" style="top:170px">

    <div class="trending">
        <h3>Lagi trending nih! <img src="assets/img/reload.png" alt=""> <span style="color: #03ac0e;">Muat
                Lainnya</span> </h3>

        <div class="row mt-4">
            <div class="col-3">
                <div class="card-trend">
                    <div class="wrap-img-trend">
                        <img class="w-100 h-100" src="{{ asset('assets/') }}/img/produk/11.jpg" alt="">
                    </div>
                    <div class="ml-4 d-flex flex-column justify-content-center">
                        <span class="mb-1 font-weight-bold">Mini PC</span>
                        <span style="font-weight: 400; color: #dfdfdf;">67rb produk</span>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card-trend">
                    <div class="wrap-img-trend">
                        <img class="w-100 h-100" src="{{ asset('assets/') }}/img/produk/11.jpg" alt="">
                    </div>
                    <div class="ml-4 d-flex flex-column justify-content-center">
                        <span class="mb-1 font-weight-bold">Mini PC</span>
                        <span style="font-weight: 400; color: #dfdfdf;">67rb produk</span>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card-trend">
                    <div class="wrap-img-trend">
                        <img class="w-100 h-100" src="{{ asset('assets/') }}/img/produk/11.jpg" alt="">
                    </div>
                    <div class="ml-4 d-flex flex-column justify-content-center">
                        <span class="mb-1 font-weight-bold">Mini PC</span>
                        <span style="font-weight: 400; color: #dfdfdf;">67rb produk</span>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card-trend">
                    <div class="wrap-img-trend">
                        <img class="w-100 h-100" src="{{ asset('assets/') }}/img/produk/11.jpg" alt="">
                    </div>
                    <div class="ml-4 d-flex flex-column justify-content-center">
                        <span class="mb-1 font-weight-bold">Mini PC</span>
                        <span style="font-weight: 400; color: #dfdfdf;">67rb produk</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-3">
                <div class="card-trend">
                    <div class="wrap-img-trend">
                        <img class="w-100 h-100" src="{{ asset('assets/') }}/img/produk/11.jpg" alt="">
                    </div>
                    <div class="ml-4 d-flex flex-column justify-content-center">
                        <span class="mb-1 font-weight-bold">Mini PC</span>
                        <span style="font-weight: 400; color: #dfdfdf;">67rb produk</span>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card-trend">
                    <div class="wrap-img-trend">
                        <img class="w-100 h-100" src="{{ asset('assets/') }}/img/produk/11.jpg" alt="">
                    </div>
                    <div class="ml-4 d-flex flex-column justify-content-center">
                        <span class="mb-1 font-weight-bold">Mini PC</span>
                        <span style="font-weight: 400; color: #dfdfdf;">67rb produk</span>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card-trend">
                    <div class="wrap-img-trend">
                        <img class="w-100 h-100" src="{{ asset('assets/') }}/img/produk/11.jpg" alt="">
                    </div>
                    <div class="ml-4 d-flex flex-column justify-content-center">
                        <span class="mb-1 font-weight-bold">Mini PC</span>
                        <span style="font-weight: 400; color: #dfdfdf;">67rb produk</span>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card-trend">
                    <div class="wrap-img-trend">
                        <img class="w-100 h-100" src="{{ asset('assets/') }}/img/produk/11.jpg" alt="">
                    </div>
                    <div class="ml-4 d-flex flex-column justify-content-center">
                        <span class="mb-1 font-weight-bold">Mini PC</span>
                        <span style="font-weight: 400; color: #dfdfdf;">67rb produk</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrap-affix mt-4">
        <div class="d-flex" data-spy="affix" data-offset-top="1200">
            <div class="position-relative mr-3 box-affix bg-affix1">
                <div class="line1"></div>
                <h4>For Your</h4>
            </div>
            <div class="position-relative mr-3 box-affix bg-affix2">
                <div class="line1"></div>
                <h4>Spesial Diskon</h4>
            </div>
        </div>

        <div class="row mx-0 mt-5">
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="{{ asset('assets/') }}/img/produk/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="{{ asset('assets/') }}/img/produk/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="{{ asset('assets/') }}/img/produk/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="{{ asset('assets/') }}/img/produk/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="{{ asset('assets/') }}/img/produk/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="{{ asset('assets/') }}/img/produk/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-0 mt-2">
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="{{ asset('assets/') }}/img/produk/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="{{ asset('assets/') }}/img/produk/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="{{ asset('assets/') }}/img/produk/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="{{ asset('assets/') }}/img/produk/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="{{ asset('assets/') }}/img/produk/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="{{ asset('assets/') }}/img/produk/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mx-0 mt-5 justify-content-center">
            <button class="btn btn-green">Muat Lebih Banyak</button>
        </div>
    </div>

    <div class="kategory-foot">
        <div class="row mx-0">
            <div class="d-flex w-100 justify-content-between align-items-center">
                <h4 class="font-weight-bold" style="font-size: 20px;">Kategory</h4>
                <h4 style="color: #03ac0e;">Lihat Semua</h4>
            </div>
        </div>
        <div class="border p-3">
            <div class="row mx-0 p-2 border-bottom">
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>

            </div>
            <div class="row mx-0 p-2 border-bottom">
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>

            </div>
            <div class="row mx-0 p-2 border-bottom">
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>

            </div>
            <div class="row mx-0 p-2 border-bottom">
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>

            </div>
            <div class="row mx-0 p-2 border-bottom">
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="kategory-foot2">
        <div class="row mx-0">
            <div class="d-flex justify-content-between align-items-center w-100">
                <div>
                    <h4 class="font-weight-bold" style="color: #ff8b00;">Punya Toko Online? Buka cabangnya di Tokopedia
                    </h4>
                    <h5 class="mt-5 font-weight-normal">Mudah, nyaman dan bebas komisi transaksi. <span
                            class="font-weight-bold">GRATIS!</span> </h5>
                    <div class="d-flex align-items-center">
                        <button class="btn mr-4 text-white" style="background-color: #03ac0e;">Buka Toko GRATIS</button>
                        <a href="" style="color: #03ac0e;">Pelajari lebih lanjut</a>
                    </div>
                </div>
                <img src="assets/img/17.png" alt="">
            </div>


        </div>


    </div>

    <hr style="position: relative; top: 190px; border-top: 1px dashed black; margin: 10px 20px;">

    <div class="kategory-foot3">

        <a href="" style="color: #03ac0e;">Selengkapnya</a>

        <div class="row mx-0 mt-5">
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <img class="mr-3" src="assets/img/18.png" alt="">
                    <div class="d-flex flex-column">
                        <span class="mb-3 font-weight-bold" style="color: #03ac0e;">Transparent</span>
                        <p>Pembayaran Anda baru saja diteruskan kepenjual setelah barang diterima</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <img class="mr-3" src="assets/img/18.png" alt="">
                    <div class="d-flex flex-column">
                        <span class="mb-3 font-weight-bold" style="color: #03ac0e;">Transparent</span>
                        <p>Pembayaran Anda baru saja diteruskan kepenjual setelah barang diterima</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <img class="mr-3" src="assets/img/18.png" alt="">
                    <div class="d-flex flex-column">
                        <span class="mb-3 font-weight-bold" style="color: #03ac0e;">Transparent</span>
                        <p>Pembayaran Anda baru saja diteruskan kepenjual setelah barang diterima</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mx-0 mt-5" style="padding: 50px;">
            <div class="col-3">
                <div class="d-flex flex-column">
                    <h4 class="font-weight-bold">Tokopedia</h4>
                    <a href="" class="text-decoration-none text-dark">Tentang Tokopedia</a>
                    <a href="" class="text-decoration-none text-dark">Hak Kekayaan Intelektual</a>
                    <a href="" class="text-decoration-none text-dark">Karir</a>
                    <a href="" class="text-decoration-none text-dark">Blog</a>
                    <a href="" class="text-decoration-none text-dark">Mitra Blog</a>
                    <a href="" class="text-decoration-none text-dark">Bridestory</a>
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex flex-column">
                    <h4 class="font-weight-bold">Buy</h4>
                    <a href="" class="text-decoration-none text-dark">Tagihan & Top Up</a>
                    <a href="" class="text-decoration-none text-dark">Tukar Tambah Handphone</a>
                    <a href="" class="text-decoration-none text-dark">Tokopedia COD</a>
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex flex-column">
                    <h4 class="font-weight-bold">Help and Support</h4>
                    <a href="" class="text-decoration-none text-dark">Tokopedia Care</a>
                    <a href="" class="text-decoration-none text-dark">Syarat dan Ketentuan</a>
                    <a href="" class="text-decoration-none text-dark">Kebijakan Privasi</a>
                </div>
            </div>

            <div class="col-3">
                <div class="d-flex flex-column align-items-center">
                    <img src="{{ asset('assets/') }}/img/footer/footer_img.png" width="400" alt="">
                    <div class="d-flex mt-3">
                        <img width="150" class="mr-3" src="assets/img/22.png" alt="">
                        <img width="150" src="assets/img/23.png" alt="">
                    </div>
                    <span class="text-success">Blesing and Outcoming Challenges Through Courage, Hardwork, and Resistence</span>
                </div>
            </div>
        </div>
    </div>




    </div>













    <!-- Modal pencarian -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content m-c-head">
                <div class="d-flex justify-content-between">
                    <span class="font-weight-bold title">Pencarian Terakhir</span>
                    <span class="font-weight-bold" style="color: #d50000;">Hapus Semua</span>
                </div>
                <span class="ml-2 mt-2" style="font-size: 14px;">Jersey sepeda</span>
                <span class="ml-2 mt-2" style="font-size: 14px;">Lampu Emergency</span>
                <span class="ml-2 mt-2" style="font-size: 14px;">Lampu Emergency</span>
                <span class="font-weight-bold mt-2 mb-2 title">Populer</span>
                <div class="d-flex flex-wrap">
                    <button class="btn mr-2">text button</button>
                    <button class="btn mr-2">text button</button>
                    <button class="btn mr-2">text button</button>
                </div>
            </div>
        </div>





        <script src="{{ asset('assets/') }}/js/index.js"></script>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
</body>

</html>

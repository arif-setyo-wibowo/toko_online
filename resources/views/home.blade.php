@extends('template.header')

@section('content')
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
                            <img src="{{ asset('assets') }}/img/6.png" alt="">
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
                                <img src="{{ asset('assets') }}/img/10.png" alt="">
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
        <h3>Lagi trending nih! <img src="{{ asset('assets') }}/img/reload.png" alt=""> <span style="color: #03ac0e;">Muat
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
                            <span class="badge badge-pill" style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
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
                            <span class="badge badge-pill" style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
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
                            <span class="badge badge-pill" style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
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
                            <span class="badge badge-pill" style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
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
                            <span class="badge badge-pill" style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
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
                            <span class="badge badge-pill" style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
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
                            <span class="badge badge-pill" style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
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
                            <span class="badge badge-pill" style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
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
                            <span class="badge badge-pill" style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
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
                            <span class="badge badge-pill" style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
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
                            <span class="badge badge-pill" style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
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
                            <span class="badge badge-pill" style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="{{ asset('assets') }}/img/icon-bintang.png" alt="">
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
                        <img class="mr-3" src="{{ asset('assets') }}/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="{{ asset('assets') }}/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="{{ asset('assets') }}/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="{{ asset('assets') }}/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>

            </div>
            <div class="row mx-0 p-2 border-bottom">
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <img class="mr-3" src="{{ asset('assets') }}/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="{{ asset('assets') }}/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="{{ asset('assets') }}/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="{{ asset('assets') }}/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>

            </div>
            <div class="row mx-0 p-2 border-bottom">
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <img class="mr-3" src="{{ asset('assets') }}/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="{{ asset('assets') }}/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="{{ asset('assets') }}/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="{{ asset('assets') }}/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>

            </div>
            <div class="row mx-0 p-2 border-bottom">
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <img class="mr-3" src="{{ asset('assets') }}/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="{{ asset('assets') }}/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="{{ asset('assets') }}/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="{{ asset('assets') }}/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>

            </div>
            <div class="row mx-0 p-2 border-bottom">
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <img class="mr-3" src="{{ asset('assets') }}/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="{{ asset('assets') }}/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="{{ asset('assets') }}/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="{{ asset('assets') }}/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="kategory-foot2">
        


    </div>

    <hr style="position: relative; top: 190px; border-top: 1px dashed black; margin: 10px 20px;">

    <div class="kategory-foot3">

        <a href="" style="color: #03ac0e;">Selengkapnya</a>

        <div class="row mx-0 mt-5">
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <img class="mr-3" src="{{ asset('assets') }}/img/18.png" alt="">
                    <div class="d-flex flex-column">
                        <span class="mb-3 font-weight-bold" style="color: #03ac0e;">Transparent</span>
                        <p>Pembayaran Anda baru saja diteruskan kepenjual setelah barang diterima</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <img class="mr-3" src="{{ asset('assets') }}/img/18.png" alt="">
                    <div class="d-flex flex-column">
                        <span class="mb-3 font-weight-bold" style="color: #03ac0e;">Transparent</span>
                        <p>Pembayaran Anda baru saja diteruskan kepenjual setelah barang diterima</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <img class="mr-3" src="{{ asset('assets') }}/img/18.png" alt="">
                    <div class="d-flex flex-column">
                        <span class="mb-3 font-weight-bold" style="color: #03ac0e;">Transparent</span>
                        <p>Pembayaran Anda baru saja diteruskan kepenjual setelah barang diterima</p>
                    </div>
                </div>
            </div>
        </div>

        @endsection
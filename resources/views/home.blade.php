@extends('template.header')

@section('content')
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
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
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
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
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
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
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
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
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
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
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
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
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
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
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
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
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
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
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
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
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
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
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
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
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
@endsection
    

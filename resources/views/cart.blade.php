@extends('template.header')

@section('content')

<!-- Breadcrum -->
<div class="container">
    <section class="wrapper  ">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
        </nav>
    </section>
    <section class="wrapper  mt-15 container px-5 ">
        <div class=" py-3 py-md-5">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a class="text-success" href="#" style="text-decoration:none;">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                </ol>
                <!-- /nav -->
        </div>
    </section>

    <!-- Keranjang kosong -->
    <section class="wrapper bg-light">
        <div class="container">
            <div class="row">
            <div class="col-lg-9 col-xl-8 mx-auto d-flex justify-content-center align-items-center">
                <figure class="mb-3"><img style="max-width: 300px;" class="img" src="{{ asset('assets') }}/img/checkout/cart.jpg"  alt=""></figure>
            </div>
            <!-- /column -->
            <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
                <h1 class=" text-bold">Your Cart Is Empty</h1>
                <p class="lead  px-md-12 px-lg-5 px-xl-7">Make your dream come true now!</p>
                <a href="" class="btn py-1 text-white" style="background-color: #03ac0e;">Shop Now</a>
            </div>
            <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- /section -->
    <!-- Detail Produk -->
    <section class="">
        <form action="">
            <div class="row gx-md-8 gx-xl-12 gy-8">
                <div class="col-lg-8">
                    <div class="post-header mb-5">
                        <h2 class="post-title display-5">Cart</h2>
                    </div>
                    <!-- /.post-header -->
                    <hr class="mt-n2 mb-4" style="border-width:5px;">
                    <div class="px-5 row">
                        <div class="row ">
                            <h4 class="fw-bold mb-n1">Toko Anugrah</h4>
                            <span>Surabaya</span>
                            <div class="author-info d-md-flex align-items-center mb-10 mt-2">
                                <div class="d-flex align-items-center">
                                    <figure class="mr-2"><img style="max-width: 200px;" class="rounded" alt="" src="{{ asset('assets') }}/sandbox/img/photos/shs1-th.jpg" /></figure>
                                    <div>
                                        <span class=" fs-16">Shampo anak dewasa yang sangat bagus sekali</span>
                                        <h6><a href="#" class="link-dark">Rp 40.000</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-8 text-end">
                                <!-- Item 1 -->
                                <a class="" href=""><i class="fa-solid fa-trash"></i></a>
                            </div>
                            <div class="col-4 text-end">
                                <!-- Tombol Count -->
                                <a onclick="decreaseCount()" class="text-success me-4"><i class="fa-solid fa-minus"></i></a>
                                <span id="count">0</span>
                                <a onclick="increaseCount()" class="text-success ms-4"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <hr class="my-2" style="border-width:5px;">
                    </div>
                </div>
                <!-- /column -->
                <div class="col-lg-4">
                    <div class="post-header mb-5">
                        <!-- <h2 class="post-title display-5"><a href="" class="link-dark">Curology Skincare Set</a></h2> -->
                    </div>
                    <!-- /.post-header -->
                    <div class="card">
                        <div class="card-header p-2 pb-0">
                            <h4 class="fw-bold">Shopping Summary</h4>
                        </div>
                        <div class="card-body p-2 p-3">
                            <div class="row">
                                <div class="col-lg-6 text-center rounded" style="">
                                    <p>Total price (item)</p>
                                </div>
                                <div class="col-lg-6 text-end">
                                    <p class="mb-1">Rp. 12.000</p>
                                    <p class="mb-1">Rp. 12.000</p>
                                    <p class="mb-1">Rp. 12.000</p>
                                    <p class="mb-1">Rp. 12.000</p>
                                </div>
                            </div>
                            <hr class="my-1">
                            <div class="d-flex justify-content-between pt-3">
                                <h6 class=" fw-bold ">Grand Total</h6>
                                <div class="harga">
                                    <span class="fw-bold"> Rp 40.000</span>
                                </div>
                            </div>
                            <div class="row p-2 gap-1 text-center">
                               <a href="{{ route('checkout') }}"> <button  class="btn py-1 text-white" style="background-color: #03ac0e;">Checkout</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </form>
    </section>

    <!-- Recomendation Produck -->
    <section class="mt-5">
        <h3>Reommended For You</h3>
        <div class="row mx-0 mt-5">
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="{{ asset('assets/') }}/img/produk/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body p-2">
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
                    <div class="card-body p-2">
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
                    <div class="card-body p-2">
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
                    <div class="card-body p-2">
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
                    <div class="card-body p-2">
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
                    <div class="card-body p-2">
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
        <div class="row mx-0 mt-5">
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="{{ asset('assets/') }}/img/produk/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body p-2">
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
                    <div class="card-body p-2">
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
                    <div class="card-body p-2">
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
                    <div class="card-body p-2">
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
                    <div class="card-body p-2">
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
                    <div class="card-body p-2">
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
    </section>

    <div class="kategory-foot3">
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
                    <img src="{{ asset('assets') }}/img/footer/footer_img.png" width="400" alt="">
                    <div class="d-flex mt-3">
                        <img width="150" class="mr-3" src="{{ asset('assets') }}/img/22.png" alt="">
                        <img width="150" src="{{ asset('assets') }}/img/23.png" alt="">
                    </div>
                    <span class="text-success">Blesing and Outcoming Challenges Through Courage, Hardwork, and Resistence</span>
                </div>
            </div>
        </div>
    </div>
</div>

    <script>
        let count = 0;

        function increaseCount() {
            count++;
            document.getElementById('count').innerHTML = count;
        }

        function decreaseCount() {
            if (count > 0) {
                count--;
                document.getElementById('count').innerHTML = count;
            }
        }
    </script>
    @endsection
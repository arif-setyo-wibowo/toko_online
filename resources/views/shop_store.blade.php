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
        <div class=" d-flex gap-3 py-3 py-md-5">
            <!-- <a class="fw-bold text-muted " href="">Product</a> -->
            <!-- <a class="fw-bold  text-success border-bottom" href="">Shop</a> -->
        </div>
    </section>

    <!-- /section -->
    <!-- Search not Found -->
    <section class="wrapper bg-light mb-3">
        <div class="container">
            <div class="row border rounded p-5">
                <div class="col-lg-4  mx-auto">
                    <figure class="mb-3"><img style="max-width: 300px;" class="img" src="{{ asset('assets') }}/img/checkout/not-found.png"  alt=""></figure>
                </div>
                <!-- /column -->
                <div class="col-lg-8  mx-auto my-auto">
                    <h1 class=" text-bold">Oops,we think it hides somewhere</h1>
                    <p class="lead  ">Try another keyword or check product recommendation below</p>
                    <a href="" class="btn py-1 text-white" style="background-color: #03ac0e;">Go back home</a>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    
    <!-- Produck -->
    <section class="mb-10">
        <h6>Menampilkan 4+ produk untuk "Toko"</h6>
        <div class="row mx-0 mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12 pl-0 mb-2">
                <div class="card">
                    <div class="card-header">
                        <div class="author-info d-md-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <figure class="user-avatar"><img class="rounded-circle" alt=""
                                        src="{{ asset('assets') }}/sandbox/img/avatars/u5.jpg" /></figure>
                                <div>
                                    <h6><a href="#" class="link-dark">Toko Anugrah</a></h6>
                                    <span class="post-meta fs-15 mt-n2">Jakarta</span>
                                </div>
                            </div>
                            <div class="mt-3 mt-md-0 ms-auto">
                                <a href="#"
                                    class="btn btn-sm btn-soft-green rounded border border-success btn-icon btn-icon-start mb-0">view
                                    shop</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-2 d-flex justify-content-center flex-wrap">
                        <div class="mr-3">
                            <figure class=""><img style="max-width: 100px;" class="rounded" alt=""
                                    src="{{ asset('assets') }}/sandbox/img/avatars/u5.jpg" /></figure>
                            <h6 class="">Rp.23.000</h6>
                        </div>
                        <div class="mr-3">
                            <figure class=""><img style="max-width: 100px;" class="rounded" alt=""
                                    src="{{ asset('assets') }}/sandbox/img/avatars/u5.jpg" /></figure>
                            <h6 class="">Rp.23.000</h6>
                        </div>
                        <div class="mr-3">
                            <figure class=""><img style="max-width: 100px;" class="rounded" alt=""
                                    src="{{ asset('assets') }}/sandbox/img/avatars/u5.jpg" /></figure>
                            <h6 class="">Rp.23.000</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pl-0 mb-2">
                <div class="card">
                    <div class="card-header">
                        <div class="author-info d-md-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <figure class="user-avatar"><img class="rounded-circle" alt=""
                                        src="{{ asset('assets') }}/sandbox/img/avatars/u5.jpg" /></figure>
                                <div>
                                    <h6><a href="#" class="link-dark">Toko Anugrah</a></h6>
                                    <span class="post-meta fs-15 mt-n2">Jakarta</span>
                                </div>
                            </div>
                            <div class="mt-3 mt-md-0 ms-auto">
                                <a href="#"
                                    class="btn btn-sm btn-soft-green rounded border border-success btn-icon btn-icon-start mb-0">view
                                    shop</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-2 d-flex justify-content-center flex-wrap">
                        <div class="mr-3">
                            <figure class=""><img style="max-width: 100px;" class="rounded" alt=""
                                    src="{{ asset('assets') }}/sandbox/img/avatars/u5.jpg" /></figure>
                            <h6 class="">Rp.23.000</h6>
                        </div>
                        <div class="mr-3">
                            <figure class=""><img style="max-width: 100px;" class="rounded" alt=""
                                    src="{{ asset('assets') }}/sandbox/img/avatars/u5.jpg" /></figure>
                            <h6 class="">Rp.23.000</h6>
                        </div>
                        <div class="mr-3">
                            <figure class=""><img style="max-width: 100px;" class="rounded" alt=""
                                    src="{{ asset('assets') }}/sandbox/img/avatars/u5.jpg" /></figure>
                            <h6 class="">Rp.23.000</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pl-0 mb-2">
                <div class="card">
                    <div class="card-header">
                        <div class="author-info d-md-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <figure class="user-avatar"><img class="rounded-circle" alt=""
                                        src="{{ asset('assets') }}/sandbox/img/avatars/u5.jpg" /></figure>
                                <div>
                                    <h6><a href="#" class="link-dark">Toko Anugrah</a></h6>
                                    <span class="post-meta fs-15 mt-n2">Jakarta</span>
                                </div>
                            </div>
                            <div class="mt-3 mt-md-0 ms-auto">
                                <a href="#"
                                    class="btn btn-sm btn-soft-green rounded border border-success btn-icon btn-icon-start mb-0">view
                                    shop</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-2 d-flex justify-content-center flex-wrap">
                        <div class="mr-3">
                            <figure class=""><img style="max-width: 100px;" class="rounded" alt=""
                                    src="{{ asset('assets') }}/sandbox/img/avatars/u5.jpg" /></figure>
                            <h6 class="">Rp.23.000</h6>
                        </div>
                        <div class="mr-3">
                            <figure class=""><img style="max-width: 100px;" class="rounded" alt=""
                                    src="{{ asset('assets') }}/sandbox/img/avatars/u5.jpg" /></figure>
                            <h6 class="">Rp.23.000</h6>
                        </div>
                        <div class="mr-3">
                            <figure class=""><img style="max-width: 100px;" class="rounded" alt=""
                                    src="{{ asset('assets') }}/sandbox/img/avatars/u5.jpg" /></figure>
                            <h6 class="">Rp.23.000</h6>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

        <!-- Recomendation Produck -->
        <section >
        <h3 class="mt-20">Reommended For You</h3>
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

    



    @endsection
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- bootstrap 3 and affix -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- end  -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/fontawesome/css/all.css">
    <!-- sandbox -->
    <link rel="stylesheet" href="{{ asset('assets') }}/sandbox/css/plugins.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/sandbox/css/style.css">
    <title>TokoPedia</title>
    <script src="https://kit.fontawesome.com/9bcecd6318.js" crossorigin="anonymous"></script>
</head>

<body>

    <div id="overlay"></div>

    <div class="header">
        <div class="item-header-1 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <img class="mr-2" src="{{ asset('assets') }}/img/1.png" alt="">
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
                <img class="img-tokopedia" src="{{ asset('assets') }}/img/logo/2.png" alt="">
                <span class="mx-2 text-kategory" onclick="kategoryOn()">Kategory</span>
                <div class="wrap-search">
                    <input type="text" class="form-control" placeholder="Cari barang" data-toggle="modal" data-target="#exampleModal">
                    <div class=" wrap-icon-search">
                        <img class="img-search" src="{{ asset('assets') }}/img/3.png" alt="">
                    </div>
                </div>





                <div class="d-flex">
                    @if (Session::get('login'))
                    <div class="wrap-img-shop mx-1" onclick="on()">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>

                    <div class="wrap-img-shop mx-1" onclick="">
                        <i class="fa-regular fa-comment-dots"></i>
                    </div>
                    <div class="wrap-img-shop mx-1" onclick="">
                        <img class="img-shop" src="{{ asset('assets') }}/img/logo/ic-toped.jpg" alt="">
                    </div>

                    <div class="wrap-img-shop mx-1" onclick="">
                        <img class="img-shop" src="{{ asset('assets') }}/img/logo/user.png" alt="">
                    </div>

                    <span class="mr-3 line">|</span>
                    <a href="{{ route('logout') }}" class="btn font-weight-bold mr-3 btn-danger">Logout</a>
                    @else
                    <a href="{{ route('login') }}" class="btn font-weight-bold ml-3 mr-3">Masuk</a>
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
            <img src="{{ asset('assets') }}/img/5.png" alt="">
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
                        <li class="breadcrumb-item active" aria-current="page">Detail</li>
                    </ol>
                    <!-- /nav -->
            </div>
        </section>

        <!-- Detail Produk -->
        <section class="">
            <div class="row gx-md-8 gx-xl-12 gy-8">
                <div class="col-lg-4">
                    <div class="swiper-container swiper-thumbs-container" data-margin="10" data-dots="false" data-nav="true" data-thumbs="true">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <figure class="rounded"><img src="{{ asset('assets') }}/sandbox/img/photos/shs1.jpg" srcset="{{ asset('assets') }}/sandbox/img/photos/shs1@2x.jpg 2x" alt="" /><a class="item-link" href="{{ asset('assets') }}/sandbox/img/photos/shs1@2x.jpg" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <figure class="rounded"><img src="{{ asset('assets') }}/sandbox/img/photos/shs2.jpg" srcset="{{ asset('assets') }}/sandbox/img/photos/shs2@2x.jpg 2x" alt="" /><a class="item-link" href="{{ asset('assets') }}/sandbox/img/photos/shs2@2x.jpg" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <figure class="rounded"><img src="{{ asset('assets') }}/sandbox/img/photos/shs3.jpg" srcset="{{ asset('assets') }}/sandbox/img/photos/shs3@2x.jpg 2x" alt="" /><a class="item-link" href="{{ asset('assets') }}/sandbox/img/photos/shs3@2x.jpg" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <figure class="rounded"><img src="{{ asset('assets') }}/sandbox/img/photos/shs4.jpg" srcset="{{ asset('assets') }}/sandbox/img/photos/shs4@2x.jpg 2x" alt="" /><a class="item-link" href="{{ asset('assets') }}/sandbox/img/photos/shs4@2x.jpg" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                                </div>
                                <!--/.swiper-slide -->
                            </div>
                            <!--/.swiper-wrapper -->
                        </div>
                        <!-- /.swiper -->
                        <div class="swiper swiper-thumbs">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="{{ asset('assets') }}/sandbox/img/photos/shs1-th.jpg" srcset="{{ asset('assets') }}/sandbox/img/photos/shs1-th@2x.jpg 2x" class="rounded" alt="" /></div>
                                <div class="swiper-slide"><img src="{{ asset('assets') }}/sandbox/img/photos/shs2-th.jpg" srcset="{{ asset('assets') }}/sandbox/img/photos/shs2-th@2x.jpg 2x" class="rounded" alt="" /></div>
                                <div class="swiper-slide"><img src="{{ asset('assets') }}/sandbox/img/photos/shs3-th.jpg" srcset="{{ asset('assets') }}/sandbox/img/photos/shs3-th@2x.jpg 2x" class="rounded" alt="" /></div>
                                <div class="swiper-slide"><img src="{{ asset('assets') }}/sandbox/img/photos/shs4-th.jpg" srcset="{{ asset('assets') }}/sandbox/img/photos/shs4-th@2x.jpg 2x" class="rounded" alt="" /></div>
                            </div>
                            <!--/.swiper-wrapper -->
                        </div>
                        <!-- /.swiper -->
                    </div>
                    <!-- /.swiper-container -->
                </div>
                <!-- /column -->
                <div class="col-lg-5">
                    <div class="post-header mb-5">
                        <h2 class="post-title display-5">Curology Skincare Set</h2>
                        <a href="#" class="link-body ratings-wrapper">Terjual 40+ |<span class="ml-2 ratings four"></span><span>(3 Reviews)</span></a>
                        <p class="price fs-24 mb-2 fw-bold">
                        <h1 class="amount">Rp 40.000</h1>
                        </p>
                    </div>
                    <hr class="my-2">
                    <form>
                        <fieldset class="picker">
                            <legend class="h6 fs-16  mb-3">Choose Variant</legend>
                            <a class=" varian-active  rounded px-4 py-1  m-1 ">Pedas </a>
                            <a class=" varian  rounded px-4 py-1  m-1">biasa </a>
                        </fieldset>
                        <!-- /.post-header -->
                        <hr class="mt-n2 mb-1">
                        <h4 class="fw-bold border-bottom border-success text-success">Detail</h4>
                        <p class="mb-6">
                            <span class="tag">Kondisi : </span><span>Baru</span><br>
                            <span class="tag">Sambal cumi By Resep Keluarga cocok untuk teman makan dan lauk dengan rasa pedas yang nikmat. <br>
                                - Dibuat dan diolah dengan bahan pilihan yang segar dan berkualitas <br>
                                - Cita rasa yang gurih dijamin ENAK! <br>
                                - Tidak menggunakan pengawet <br>
                                - Dengan aroma yang mengiurkan membuat makan menjadi lebih nikmatbr>
                        </p>
                        <div class="author-info d-md-flex align-items-center mb-15">
                            <div class="d-flex align-items-center">
                                <figure class="user-avatar"><img class="rounded-circle" alt="" src="{{ asset('assets') }}/sandbox/img/avatars/u5.jpg" /></figure>
                                <div>
                                    <h6><a href="#" class="link-dark">Toko Anugrah</a></h6>
                                    <span class="post-meta fs-15">Online 3 jam lalu</span>
                                </div>
                            </div>
                            <div class="mt-3 mt-md-0 ms-auto">
                                <a href="#" class="btn btn-sm btn-soft-green rounded border border-success btn-icon btn-icon-start mb-0">follow</a>
                            </div>
                        </div>
                    
                    <!-- review -->
                    <h5 class="fw-bolder">FOTO & VIDIO PEMBELI</h5>
                        <div class="d-flex align-items-center mb-2 gap-2 ">
                            <figure class=""><img style="max-width: 100px;" class="rounded" alt="" src="{{ asset('assets') }}/sandbox/img/avatars/u5.jpg" /></figure>
                            <figure class=""><img style="max-width: 100px;" class="rounded" alt="" src="{{ asset('assets') }}/sandbox/img/avatars/u5.jpg" /></figure>
                            <figure class=""><img style="max-width: 100px;" class="rounded" alt="" src="{{ asset('assets') }}/sandbox/img/avatars/u5.jpg" /></figure>
                        </div>
                    <hr class="m-0 mb-1">
                    <h5>Review</h5>
                    <!-- 1 review -->
                        <div class="row ">
                            <a class="link-body ratings-wrapper"><span class=" ratings four"></span><span class="fs-14">2 jam lalu</span></a>
                            <div class="d-flex align-items-center mb-2">
                                <figure class="user-avatar"><img class="rounded-circle" alt="" src="{{ asset('assets') }}/sandbox/img/avatars/u5.jpg" /></figure>
                                <div>
                                    <h6><a href="#" class="link-dark">Romli</a></h6>
                                </div>
                            </div>
                            <div class="mt-3 mt-md-0 ms-auto">
                                <span>Barang Enak dan Berkualitas</span>
                                <figure class=""><img style="max-width: 100px;" class="rounded" alt="" src="{{ asset('assets') }}/sandbox/img/avatars/u5.jpg" /></figure>
                            </div>
                            <hr class="my-2">
                        </div>
                    <!-- 1 review -->
                        <div class="row ">
                            <a class="link-body ratings-wrapper"><span class=" ratings four"></span><span class="fs-14">2 jam lalu</span></a>
                            <div class="d-flex align-items-center mb-2">
                                <figure class="user-avatar"><img class="rounded-circle" alt="" src="{{ asset('assets') }}/sandbox/img/avatars/u5.jpg" /></figure>
                                <div>
                                    <h6><a href="#" class="link-dark">Romli</a></h6>
                                </div>
                            </div>
                            <div class="mt-3 mt-md-0 ms-auto">
                                <span>Barang Enak dan Berkualitas</span>
                                <figure class=""><img style="max-width: 100px;" class="rounded" alt="" src="{{ asset('assets') }}/sandbox/img/avatars/u5.jpg" /></figure>
                            </div>
                            <hr class="my-2">
                        </div>
                    <!-- review empty -->
                        <div class="row shadow">
                            <div class="author-info d-md-flex align-items-center mb-4">
                                <div class="d-flex align-items-center">
                                    <figure class=""><img style="max-width: 200px;" alt="" src="{{ asset('assets') }}/img/general/no-review.png" /></figure>
                                    <div>
                                        <h2 class="text">There is no Riview yet</h2>
                                        <span class="post-meta fs-15">Be the first one to buy and review the product</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                 
                </div>
                <!-- /column -->
                <div class="col-lg-3">
                    <div class="post-header mb-5">
                        <!-- <h2 class="post-title display-5"><a href="" class="link-dark">Curology Skincare Set</a></h2> -->
                    </div>
                    <!-- /.post-header -->
                    <div class="card">
                        <div class="card-header p-2 pb-0">
                            <h6 class="fw-bold">Atur jumlah dan Catat</h6>
                            <p>Varian : Pedas</p>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-lg-5 text-center rounded ml-3" style="">
                                        <a onclick="decreaseCount()" class=" me-2 text-success"><i class="fa-solid fa-minus"></i></a>
                                        <span id="count">0</span>
                                        <a onclick="increaseCount()" class=" ms-2  text-success"><i class="fa-solid fa-plus"></i></a>
                                </div>
                                <div class="col-lg-4">
                                    Stok : 5
                                </div>
                            </div>
                            <hr class="my-1">
                            <div class="d-flex justify-content-between pt-3">
                                <h6 class="text-muted fw-normal ">SubTotal</h6>
                                <div class="harga">
                                    <span class="fw-bold"> Rp 40.000</span>
                                </div>
                            </div>
                            <div class="row p-2 gap-1">
                                <button class="btn py-1 text-white" style="background-color: #03ac0e;">+ Keranjang</button>
                                <button class="btn py-1 btn-outline-success" style="">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
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

        <script src="{{ asset('assets') }}/sandbox/js/plugins.js"></script>
        <script src="{{ asset('assets') }}/sandbox/js/theme.js"></script>
        <script src="{{ asset('assets/') }}/js/index.js"></script>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        
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
</body>

</html>
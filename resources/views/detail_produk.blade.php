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
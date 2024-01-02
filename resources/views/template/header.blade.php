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
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/fontawesome/css/all.css">
    <!-- Sandbox -->
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
                    <input type="text" class="form-control" placeholder="Cari barang" data-toggle="modal"
                        data-target="#exampleModal">
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
            <img src="{{ asset('assets') }}/img/checkout/cart.jpg" alt="">
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

    
    @yield('content');

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
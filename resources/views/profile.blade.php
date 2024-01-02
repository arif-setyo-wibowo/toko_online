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
        <link rel="stylesheet" href="{{ asset('assets')}}/style.css" />
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
    <!-- Profile Page -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-3 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="container">
                <div class="row d-flex flex-row">
                  <div class="col-lg-3 align-items-center">
                    <img
                      src="{{ asset('assets')}}/default.jpg"
                      alt=""
                      width="60px"
                      height="60px"
                      class="img-fluid"
                      style="border-radius: 50%"
                    />
                  </div>
                  <div class="col-lg">
                    <span class="fw-bold">Yasya Indra Shop</span>
                    <p class="fw-light text-secondary">0812343434</p>
                  </div>
                </div>
                <div class="row mt-4 justify-content-between">
                  <div class="col-lg">
                    <h5 class="card-title">Saldo</h5>
                  </div>
                  <div class="col-lg-6">Rp. 2.000.000</div>
                </div>
                <div class="row mt-4 justify-content-between">
                  <div class="col-lg">
                    <h5 class="card-title">Pembelian</h5>
                    <span class="text-secondary">Daftar Transaksi</span>
                  </div>
                </div>
                <div class="row mt-4 justify-content-between">
                  <div class="col-lg">
                    <h5 class="card-title">Pengguna</h5>
                    <span class="text-secondary">Pengaturan</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg">
          <div class="card">
            <div class="card-body">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button
                    class="nav-link active fw-bold"
                    id="nav-biodata-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#nav-biodata"
                    type="button"
                    role="tab"
                    aria-controls="nav-biodata"
                    aria-selected="true"
                  >
                    Biodata Diri
                  </button>
                  <button
                    class="nav-link fw-bold"
                    id="nav-toko-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#nav-toko"
                    type="button"
                    role="tab"
                    aria-controls="nav-toko"
                    aria-selected="true"
                  >
                    Biodata Diri
                  </button>
                  <button
                    class="nav-link fw-bold"
                    id="nav-alamat-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#nav-alamat"
                    type="button"
                    role="tab"
                    aria-controls="nav-alamat"
                    aria-selected="false"
                  >
                    Daftar Alamat
                  </button>
                  <button
                    class="nav-link fw-bold"
                    id="nav-rekening-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#nav-rekening"
                    type="button"
                    role="tab"
                    aria-controls="nav-rekening"
                    aria-selected="false"
                  >
                    Rekening
                  </button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div
                  class="tab-pane fade show active"
                  id="nav-biodata"
                  role="tabpanel"
                  aria-labelledby="nav-biodata-tab"
                  tabindex="0"
                >
                  <div class="container mt-4">
                    <div class="row">
                      <div class="col-lg-3 text-center">
                        <img
                          src="{{ asset('assets')}}/default.jpg"
                          alt=""
                          class="img-fluid mb-4 rounded"
                          style="width: 200px; height: 200px"
                        />
                        <a
                          class="col-lg btn btn-success w-full fw-bold mb-2"
                          style="color: #098a4e; background-color: #fff"
                          >Ubah Foto</a
                        >
                      </div>
                      <div class="col-lg">
                        <div>
                          <h4>Biodata Diri</h4>
                        </div>
                        <div class="row mb-3">
                          <div class="col-lg-3">
                            <label for="" class="fw-bold">Name</label>
                          </div>
                          <div class="col-lg">
                            <span>Yasya Indra</span>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col-lg-3">
                            <label for="" class="fw-bold">Tanggal Lahir</label>
                          </div>
                          <div class="col-lg">
                            <span>5/12/00</span>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col-lg-3">
                            <label for="" class="fw-bold">Jenis Kelamin</label>
                          </div>
                          <div class="col-lg">
                            <span>Laki Laki</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-end">
                      <div class="col-lg-9">
                        <div>
                          <h4>Ubah Kontak</h4>
                        </div>
                        <div class="row mb-3">
                          <div class="col-lg-3">
                            <label for="" class="fw-bold">Email</label>
                          </div>
                          <div class="col-lg">
                            <span>indram@gmail.com</span>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col-lg-3">
                            <label for="" class="fw-bold">Nomer Hape</label>
                          </div>
                          <div class="col-lg">
                            <span>08122299</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="nav-rekening"
                  role="tabpanel"
                  aria-labelledby="nav-rekening-tab"
                  tabindex="0"
                >
                  <div class="container mt-3">
                    <a href="" class="btn btn-success mb-3"
                      >Tambah No Rekening</a
                    >
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="row d-flex align-items-center">
                          <div class="col-lg-2">
                            <img src="{{ asset('assets')}}/bca.gif" alt="" class="img-fluid" />
                          </div>
                          <div class="col-lg">
                            <span class="fs-6 text-secondary"
                              >PT. BCA (BANK CENTRAL ASIA) TBK</span
                            >
                            <p class="fw-bold" style="margin-bottom: 0">
                              7788888888
                            </p>
                            <span>a.n YASYA INDRA</span>
                          </div>
                          <div class="col-lg-2 align-self-center">
                            <a href="" class="btn btn-secondary">Hapus</a>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        <div class="tab-pane fade" id="nav-alamat" role="tabpanel" aria-labelledby="nav-alamat-tab" tabindex="0">
            <div class="container mt-3">
                <a href="" class="btn btn-success mb-3">Tambah Alamat</a>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg">
                                <h6 class="card-subtitle mb-2 text-body-secondary">
                                    Rumah
                                </h6>
                                <h5 class="card-text">Yasya Indra</h5>
                                <p>0812222888</p>
                                <p>Mekarsari, Rajeg</p>
                                <div class="row">
                                    <div class="col">
                                        <span class="fw-bold">Share</span>
                                        <span class="mx-5 fw-bold">Ubah Alamat</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 align-self-center">
                                <a href="" class="btn btn-success">Pilih</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 address-active">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg">
                                <h6 class="card-subtitle mb-2 text-body-secondary">
                                    Rumah
                                </h6>
                                <h5 class="card-text">Yasya Indra</h5>
                                <p>0812222888</p>
                                <p>Mekarsari, Rajeg</p>
                                <div class="row">
                                    <div class="col">
                                        <span class="fw-bold">Share</span>
                                        <span class="mx-5 fw-bold">Ubah Alamat</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 align-self-center">
                                <a href="" class="btn btn-success">Dipilih</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade show" id="nav-toko" role="tabpanel" aria-labelledby="nav-toko-tab" tabindex="0">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-lg-3 text-center">
                        <img src="{{ asset('assets')}}/default.jpg" alt="" class="img-fluid mb-4 rounded" style="width: 200px; height: 200px" />
                        <a class="col-lg btn btn-success w-full fw-bold mb-2" style="color: #098a4e; background-color: #fff">Ubah Foto</a
                        >
                      </div>
                      <div class="col-lg">
                        <div>
                          <h4>Detail Toko</h4>
                        </div>
                        <div class="row mb-3">
                          <div class="col-lg-3">
                            <label for="" class="fw-bold">Name</label>
                          </div>
                          <div class="col-lg">
                            <span>Yasya Indra Shop</span>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col-lg-3">
                            <label for="" class="fw-bold">Dibuat Pada</label>
                          </div>
                          <div class="col-lg">
                            <span>5/12/00</span>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col-lg-3">
                            <label for="" class="fw-bold">Deskripsi</label>
                          </div>
                          <div class="col-lg">
                            <span
                              >Lorem ipsum dolor, sit amet consectetur
                              adipisicing elit. Incidunt, facere?</span
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Profile Page -->
    <footer>
      <div class="container">
        <div class="row d-flex justify-content-between mt-5">
          <div class="col-lg-3 mb-3">
            <div class="mb-3">
              <h5 class="fw-bold">Tokopedia</h5>
              <li>Tentang Tokopedia</li>
              <li>Karir</li>
              <li>Blog</li>
            </div>
            <div>
              <h5 class="fw-bold">Beli</h5>
              <li>Tagihan & Top Up</li>
              <li>Karir</li>
              <li>Blog</li>
            </div>
          </div>
          <div class="col-lg-3 mb-3">
            <div class="mb-3">
              <h5 class="fw-bold">Bantuan dan Panduan</h5>
              <li>Tokopedia Care</li>
              <li>Syarat dan Ketentuan</li>
            </div>
          </div>
          <div class="col-lg-4 mb-3 d-none d-lg-block">
            <img
              src="{{ asset('assets')}}/footer_tokped.png"
              alt=""
              style="width: 455px; height: 192px"
            />
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
  <script
    src="https://kit.fontawesome.com/4c03683015.js"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
    crossorigin="anonymous"
  ></script>
</html>
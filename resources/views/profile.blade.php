@extends('template.header')

@section('content')
    
    <div class="col-lg-3 mb-3" style="margin-top:150px;">
        <div class="card ">
        <div class="card-body">
            <div class="container">
            <div class="row d-flex flex-row">
                <div class="col-lg-3 align-items-center">
                <img
                    src="{{ asset('assets')}}/img/default.jpg"
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
    <div class="col-lg" style="margin-top:150px;">
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
                        src="{{ asset('assets')}}/img/default.jpg"
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
                    <img src="{{ asset('assets')}}/img/default.jpg" alt="" class="img-fluid mb-4 rounded" style="width: 200px; height: 200px" />
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
    <!-- End Profile Page -->
@endsection

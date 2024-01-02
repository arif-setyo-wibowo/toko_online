<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>tokoNJedia</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/>
<link rel="stylesheet" href="{{ asset('assets') }}/styles/style.css"/>
<link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
</head>
<body>
<!-- Navbar -->
<div id="overlay"></div>
<div class="header">
	<div class="item-header-1 d-flex justify-content-between align-items-center">
		<div class="d-flex align-items-center">
			<img class="mr-2" src="{{ asset('assets') }}/img/1.png" alt="">
			<span>Download tokoNJedia App</span>
		</div>
		<div class="d-flex">
			<span style="margin-right:1.5rem;">Tentang tokoNJedia</span>
			<span style="margin-right:1.5rem;">Mitra tokoNJedia</span>
			<span style="margin-right:1.5rem;">Mulai Berjualan</span>
			<span style="margin-right:1.5rem;">Promo</span>
			<span style="margin-right:1.5rem;">tokoNJedia Care</span>
		</div>
	</div>
	<div class="item-header-2 d-flex flex-column">
		<div class="d-flex justify-content-between align-items-center">
            <a href="/"><img class="img-tokopedia" src="{{ asset('assets') }}/img/logo/2.png" alt=""></a>

			<span class="mx-2 text-kategory" onclick="kategoryOn()">Kategory</span>
			<div class="wrap-search">
				<input type="text" class="form-control" placeholder="Cari barang" data-toggle="modal" data-target="#exampleModal">
				<div class=" wrap-icon-search">
					<img class="img-search" src="{{ asset('assets') }}/img/3.png" alt="">
				</div>
			</div>
			<div class="d-flex">
				 @if (Session::get('login'))
				<div class="wrap-img-shop" style="margin:0.25rem" onclick="on()">
					<i class="fa-solid fa-cart-shopping"></i>
				</div>
				<div class="wrap-img-shop " style="margin:0.25rem" onclick="">
					<i class="fa-regular fa-comment-dots"></i>
				</div>
				<div class="wrap-img-shop " style="margin:0.25rem" onclick="">
					<img class="img-shop" src="{{ asset('assets') }}/img/logo/ic-toped.jpg" alt="">
				</div>
				<div class="wrap-img-shop " style="margin:0.25rem" onclick="">
					<a href="{{ route('profil') }}"><img class="img-shop" src="{{ asset('assets') }}/img/logo/user.png" alt=""></a>
				</div>
				<span class=" line" style="margin-right:3px;">|</span>
				<a href="{{ route('logout') }}" class="btn font-weight-bold  text-white" style="margin-right:3px;">Logout</a>
				@else <a href="{{ route('login') }}" class="btn font-weight-bold ml-3 "style="margin-right:3px;">Masuk</a>
				<a href="{{ route('register') }}" class="btn font-weight-bold text-white">Daftar</a>
				@endif
			</div>
		</div>
		<div class="text-under-search d-flex mt-2">
			<span style="margin-right:1rem;">Jersey Sepeda</span>
			<span style="margin-right:1rem;">Jersey Sepeda</span>
			<span style="margin-right:1rem;">Jersey Sepeda</span>
			<span style="margin-right:1rem;">Jersey Sepeda</span>
			<span style="margin-right:1rem;">Jersey Sepeda</span>
		</div>
	</div>
	<div class="menu-bar flex-column justify-content-between align-items-center" id="menuBar">
		<img src="{{ asset('assets') }}/img/checkout/cart.jpg" alt="">
		<h4 class="mt-2">Wah keranjang belanjaanmu kosong</h4>
		<p class="text-center">
			Daripada dianggurin, mending diisi dengan barang barang </br>impianmu. Yuk cek sekarang!
		</p>
		<button class="btn">Lihat Rekomendasi</button>
	</div>
</div>
<!-- Profile Page -->
<div class="container">
	<div class="row">
		<div class="col-lg-3 mb-3 "style="margin-top: 170px;">
			<div class="card">
				<div class="card-body">
					<div class="container">
						<div class="row d-flex flex-row">
							<div class="col-lg-3 align-items-center">
								<img src="{{ asset('assets') }}/img/default.jpg" alt="" width="60px" height="60px" class="img-fluid" style="border-radius: 50%"/>
							</div>
							<div class="col-lg">
								<span class="fw-bold">{{ $profil['username'] }}</span>
								<p class="fw-light text-secondary">{{ $profil['phone'] }}</p>
							</div>
						</div>
						<div class="row mt-4 justify-content-between">
							<div class="col-lg">
								<h5 class="card-title">Saldo</h5>
							</div>
							<div class="col-lg-6">-</div>
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
		<div class="col-lg" style=" margin-top: 170px;">
			<div class="card">
				<div class="card-body">
					<nav>
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<button class="nav-link active fw-bold" id="nav-biodata-tab" data-bs-toggle="tab" data-bs-target="#nav-biodata" type="button" role="tab" aria-controls="nav-biodata" aria-selected="true">Biodata Diri</button>
						<button class="nav-link fw-bold" id="nav-alamat-tab" data-bs-toggle="tab" data-bs-target="#nav-alamat" type="button" role="tab" aria-controls="nav-alamat" aria-selected="false">Daftar Alamat</button>
						<button class="nav-link fw-bold" id="nav-rekening-tab" data-bs-toggle="tab" data-bs-target="#nav-rekening" type="button" role="tab" aria-controls="nav-rekening" aria-selected="false">Rekening</button>
					</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-biodata" role="tabpanel" aria-labelledby="nav-biodata-tab" tabindex="0">
							<div class="container mt-4">
								<div class="row">
									<div class="col-lg-3 text-center">
										<img src="{{ asset('storage/' . $profil['image']) }}" alt="" class="img-fluid mb-4 rounded" style="width: 200px; height: 200px"/>
										<label>
										<input type="file" name="gambar" onchange="handleFileChange(event)" style="display:none;">
										<a class="col-lg btn btn-success w-full fw-bold mb-2 " style="color: #098a4e; background-color: #fff">Ubah foto</a>
										</label>
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
												<span>{{ $profil['username'] }}</span>
												<button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#nama" style="text-decoration: none" color="#000">Ubah</button>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-lg-3">
												<label for="" class="fw-bold">Tanggal Lahir</label>
											</div>
											<div class="col-lg">
												<span>{{ date('d F Y', strtotime($profil['dob'])) }}</span>
												<button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#tgl" style="text-decoration: none" color="#000">Ubah</button>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-lg-3">
												<label for="" class="fw-bold">Jenis Kelamin</label>
											</div>
											<div class="col-lg">
												<span>{{ $profil['gender'] }}</span>
												<button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#gender" style="text-decoration: none" color="#000">Ubah</button>
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
												<span>{{ $profil['email'] }}</span>
												<button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#email" style="text-decoration: none" color="#000">Ubah</button>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-lg-3">
												<label for="" class="fw-bold">Nomer Telp</label>
											</div>
											<div class="col-lg">
												<span>{{ $profil['phone'] }}</span>
												<button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#telp" style="text-decoration: none" color="#000">Ubah</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="nav-rekening" role="tabpanel" aria-labelledby="nav-rekening-tab" tabindex="0">
							<div class="container mt-3">
								<button type="button" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#tambahrekening" style="text-decoration: none" color="#000">Tambah rekening</button>
								@foreach ($rekening as $key => $value)
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-2">
                                                    <img src="{{ asset('assets') }}/img/bca.gif" alt="" class="img-fluid"/>
                                                </div>
                                                <div class="col-lg">
                                                    <span class="fs-6 text-secondary">{{ $value['nama_bank']}}</span>
                                                    <p class="fw-bold" style="margin-bottom: 0">{{ $value['no_rekening']}}</p>
                                                    <span>a.n {{ $value['nama_pemilik']}}</span>
                                                </div>
                                                <div class="col-lg-2 align-self-center">
                                                    <a href="/profil/rekening-delete/{{$value['id']}}" class="btn btn-secondary">Hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
							</div>
						</div>
						<div class="tab-pane fade" id="nav-alamat" role="tabpanel" aria-labelledby="nav-alamat-tab" tabindex="0">
							<div class="container mt-3">
								<button type="button" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#alamattambah" style="text-decoration: none" color="#000">Tambah Alamat</button>
								@foreach ($alamat as $key => $value)
                                <div class="card mb-3 address-active">
									<div class="card-body">
										<div class="row">
											<div class="col-lg">
												<h6 class="card-subtitle mb-2 text-body-secondary">{{$value['nama_alamat']}}</h6>
												<h5 class="card-text">{{$value['pemilik_alamat']}}</h5>
												<p>
													{{$value['alamat']}}
												</p>
												<div class="row">
													<div class="col">
														<button type="button" class="btn btn-link mb-4" id="btnUbahAlamat" data-id="{{$value['id']}}" data-nama="{{$value['nama_alamat']}}" data-pemilik="{{$value['pemilik_alamat']}}" data-alamat="{{$value['alamat']}}" style="text-decoration: none" color="#000"><span class="mx-5 fw-bold text-dark ">Ubah Alamat</span></button>
													</div>
												</div>
											</div>
											<div class="col-lg-2 align-self-center">
												<a class="btn btn-success">Dipilih</a>
											</div>
										</div>
									</div>
								</div>
                                @endforeach
							</div>
						</div>
						<div class="tab-pane fade show" id="nav-toko" role="tabpanel" aria-labelledby="nav-toko-tab" tabindex="0">
							<div class="container mt-4">
								<div class="row">
									<div class="col-lg-3 text-center">
										<img src="{{ asset('assets') }}/img/default.jpg" alt="" class="img-fluid mb-4 rounded" style="width: 200px; height: 200px"/>
										<a class="col-lg btn btn-success w-full fw-bold mb-2" style="color: #098a4e; background-color: #fff">Ubah Foto</a>
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
												<span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt, facere?</span>
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
 {{-- modal --}}
<div class="modal fade mt-5" style="border-radius:10px;" id="nama" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Nama</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<p>
					Pastikan nama sudah benar.
				</p>
				<form action="{{route('update-profile-name')}}" method="POST">
					 @csrf
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">nama:</label>
						<input type="text" name="username" class="form-control" id="recipient-name" value="{{ $profil['username'] }}">
                    </div>
					<button type="submit" class="btn btn-success">Update</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade mt-5" style="border-radius:10px;" id="telp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Telp</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<p>
					Pastikan telp sudah benar.
				</p>
				<form action="{{route('update-profile-phone')}}" method="POST">
                    @csrf
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Telp :</label>
						<input type="number" name="phone" class="form-control" id="recipient-name" value="{{ $profil['phone'] }}">
                    </div>
                        <button type="submit" class="btn btn-success">Update</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade mt-5" style="border-radius:10px;" id="email" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Email</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<p>
					Pastikan email sudah benar.
				</p>
				<form action="{{route('update-profile-email')}}" method="POST">
                    @csrf
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Email :</label>
						<input type="email" name="email" class="form-control" id="recipient-name" value="{{ $profil['email'] }}">
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade mt-5" style="border-radius:10px;" id="gender" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Ubah gender</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<p>
					Pastikan gender anda sudah benar.
				</p>
				<form action="{{route('update-profile-gender')}}" method="POST">
                    @csrf
					<div class="form-check">
						<input class="form-check-input" name="gender" type="radio" id="exampleRadios1" value="laki-laki" checked>
						<label class="form-check-label" for="exampleRadios1">Laki-Laki</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" name="gender" type="radio" id="exampleRadios1" value="perempuan" checked>
						<label class="form-check-label" for="exampleRadios1">Perempuan</label>
					</div>
                    <button type="submit" class="btn btn-success">Update</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade mt-5" style="border-radius:10px;" id="tgl" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Ubah tgl lahir</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<p>
					Pastikan tgl lahir sudah benar.
				</p>
				<form action="{{route('update-profile-dob')}}" method="POST">
					 @csrf
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">tgl :</label>
						<input type="date" name="dob" class="form-control" id="recipient-name"></div>
					<button type="submit" class="btn btn-success">Update</button>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
<div class="modal fade mt-5" style="border-radius:10px;" id="alamattambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Alamat</h1>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<form action="{{route('insert-alamat')}}" method="POST">
                @csrf
				<div class="mb-3">
					<label for="recipient-name" class="col-form-label">Nama Alamat :</label>
					<input type="text" class="form-control" id="recipient-name" name="nama_alamat"></div>
				<div class="mb-3">
					<label for="recipient-name" class="col-form-label">Pemilik Alamat :</label>
					<input type="text" class="form-control" id="recipient-name" name="pemilik_alamat"></div>
				<div class="mb-3">
					<label for="recipient-name" class="col-form-label">Alamat :</label>
					<textarea class="form-control" id="floatingTextarea" name="alamat"></textarea>
				</div>
                <button type="submit" class="btn btn-success">Tambah</button>
			</form>
		</div>
	</div>
</div>
</div>
<div class="modal fade mt-5" style="border-radius:10px;" id="ubahalamat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h1 class="modal-title fs-5" id="exampleModalLabel">Update Alamat</h1>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<form action="{{route('update-alamat')}}" method="POST">
                @csrf
				<div class="mb-3">
					<label for="recipient-name" class="col-form-label">Nama Alamat :</label>
					<input type="text" class="form-control" id="nama_alamat_update" name="nama_alamat"></div>
				<div class="mb-3">
					<label for="recipient-name" class="col-form-label">Pemilik Alamat :</label>
					<input type="text" class="form-control" id="pemilik_alamat_update" name="pemilik_alamat"></div>
				<div class="mb-3">
					<label for="recipient-name" class="col-form-label">Alamat :</label>
					<textarea class="form-control" id="alamat_update" name="alamat"></textarea>
				</div>
                <input type="hidden" name="id" id="id_alamat_update">
                <button type="submit" class="btn btn-success">Update</button>
			</form>
			<div class="row">
				<div class="col-md-12">

				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="modal fade mt-5" style="border-radius:10px;" id="tambahrekening" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h1 class="modal-title fs-5" id="exampleModalLabel">Rekening</h1>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<form action="{{route('insert-rekening')}}" method="POST">
                @csrf
				<div class="mb-3">
					<label for="recipient-name" class="col-form-label">Nama Bank :</label>
					<input type="text" class="form-control" id="recipient-name" name="nama_bank"></div>
				<div class="mb-3">
					<label for="recipient-name" class="col-form-label">No rekening :</label>
					<input type="text" class="form-control" id="recipient-name" name="no_rekening"></div>
				<div class="mb-3">
					<label for="recipient-name" class="col-form-label">Nama Pemilik :</label>
					<input type="text" class="form-control" id="recipient-name" name="nama_pemilik">
                </div>
                <button type="submit" class="btn btn-success">Tambah</button>
			</form>
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
			<h5 class="fw-bold">tokoNJedia</h5>
			<li>Tentang tokoNJedia</li>
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
			<li>tokoNJedia Care</li>
			<li>Syarat dan Ketentuan</li>
		</div>
	</div>
	<div class="col-lg-4 mb-3 d-none d-lg-block">
		<img src="{{ asset('assets') }}/img/footer_tokped.png" alt="" style="width: 455px; height: 192px"/>
	</div>
</div>
</div>
</footer>
<!-- End Footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/4c03683015.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script>
function handleFileChange(event) {
    const selectedFile = event.target.files[0];

    if (selectedFile) {
        const formData = new FormData();
        formData.append('file', selectedFile);

        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        const xhr = new XMLHttpRequest();
        xhr.open('POST', '/profil/update-photo', true);

        xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);

        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log('File berhasil diunggah!');
                } else {
                    console.error('Gagal mengunggah file');
                }
            }
            location.reload();
        };

        xhr.send(formData);
    } else {
        console.log('Tidak ada file yang dipilih');
    }
}

$('#btnUbahAlamat').on('click', function() {
    // Mengambil nilai dari atribut data
    var id = $(this).data('id');
    var nama = $(this).data('nama');
    var pemilik = $(this).data('pemilik');
    var alamat = $(this).data('alamat');

    // Memasukkan nilai atribut data ke dalam input di dalam form
    $('#nama_alamat_update').val(nama);
    $('#pemilik_alamat_update').val(pemilik);
    $('#alamat_update').val(alamat);
    $('#id_alamat_update').val(id);

    // Menampilkan modal jika diperlukan
    $('#ubahalamat').modal('show');
});
</script>

</html>

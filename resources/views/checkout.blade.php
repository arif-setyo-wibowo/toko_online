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
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
                <!-- /nav -->
        </div>
    </section>

    <!-- /section -->
    <!-- Detail Produk -->
    <section class="">
        <form action="">
            <div class="row gx-md-8 gx-xl-12 gy-8">
                <div class="col-lg-8">
                    <div class="post-header mb-5">
                        <h2 class="post-title display-5">Checkout</h2>
                        <h5>Shipping Address</h5>
                        <div class="mt-2">
                            <span class="fw-bold">Hendra Ahmad</span><br>
                            <span>Jakarta, Indonesia</span><br>
                            <span class="text-muted">Binus Square 1234</span><br>
                        </div>
                        <div class="mt-2">
                            <button type="button" class="btn btn-sm border" data-toggle="modal" data-target="#AddressModal">
                                Choose other address
                            </button>
                        </div>
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
                                        <span class=" fs-16">Shampo anak dewasa yang sangat bagus sekali</span><br>
                                        <span class="text-muted">total 7 item</span>
                                        <h6><a href="#" class="link-dark">Rp 40.000</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <hr class="my-2" style="border-width:5px;">
                    </div>
                    <div class="px-5 row">
                        <div class="row ">
                            <h4 class="fw-bold mb-n1">Toko Anugrah</h4>
                            <span>Surabaya</span>
                            <div class="author-info d-md-flex align-items-center mb-10 mt-2">
                                <div class="d-flex align-items-center">
                                    <figure class="mr-2"><img style="max-width: 200px;" class="rounded" alt="" src="{{ asset('assets') }}/sandbox/img/photos/shs1-th.jpg" /></figure>
                                    <div>
                                        <span class=" fs-16">Shampo anak dewasa yang sangat bagus sekali</span><br>
                                        <span class="text-muted">total 7 item</span>
                                        <h6><a href="#" class="link-dark">Rp 20.000</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <hr class="my-2" style="border-width:5px;">
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <h3>Total</h3>
                        <h3>Rp. 60.000</h3>
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
                                <div class="col-lg-7 text-start rounded" style="">
                                    <p>Total price (1 Product)</p>
                                </div>
                                <div class="col-lg-5 text-end">
                                    <p class="mb-1">Rp. 40.000</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 text-start rounded" style="">
                                    <p>Shipping (0 Product)</p>
                                </div>
                                <div class="col-lg-6 text-end">
                                    <p class="mb-1">Rp. 0</p>
                                </div>
                            </div>
                            <hr class="my-1">
                            <div class="d-flex justify-content-between pt-3">
                                <h6 class=" fw-bold ">Shopping Total</h6>
                                <div class="harga">
                                    <span class="fw-bold"> Rp 60.000</span>
                                </div>
                            </div>
                            <div class="row p-2 gap-1">
                                <button class="btn py-1 text-white" style="background-color: #03ac0e;">Proccess Transaction</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </form>
    </section>

    


<!-- Modal -->
<div class="modal fade" id="AddressModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Select Shipment Address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Hendri Ahmad</h5>
                <p class="card-text">Yogyakarta, Indonesia</p>
                <p class="card-text">Rumah, 55555</p>
                <a href="#" class="card-link">Choose</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Hendri Ahmad</h5>
                <p class="card-text">Yogyakarta, Indonesia</p>
                <p class="card-text">Rumah, 55555</p>
                <a href="#" class="card-link">Choose</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
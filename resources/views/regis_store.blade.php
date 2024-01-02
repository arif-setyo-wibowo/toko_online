@extends('template.header')

@section('content')

    <!-- Breadcrum -->
    <div class="container">
        <section class="wrapper  ">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    
                </ol>
            </nav>
        </section>
        <section class="wrapper  mt-15 container px-5 ">
            <div class=" py-3 py-md-5">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        
                    </ol>
                    <!-- /nav -->
            </div>
        </section>

        <!-- Detail Produk -->
        <section class="">
            <div class="row gx-md-8 gx-xl-12 gy-8">
                <div class="col-lg-5 justify-content-center  mt-xs-20 mt-sm-15">
                    <div class="row">
                    <div class="d-flex align-items-center gap-2">
                        <figure class=""><img class="" style="min-width: 100px;" alt="" src="{{ asset('assets') }}/img/merchants/free-benefit.png" /></figure>
                        <div>
                            <span class=" fs-18">Open a merchant Account <span class="fw-bold">Free</span> without any charges.</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <figure class=""><img class="" style="min-width: 100px;" alt="" src="{{ asset('assets') }}/img/merchants/reach-benefit.png" /></figure>
                        <div>
                            <span class=" fs-18">More than <span class="fw-bold">90 millions</span> active isers every month.</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <figure class=""><img class="" style="min-width: 100px;" alt="" src="{{ asset('assets') }}/img/merchants/user-benefit.png" /></figure>
                        <div>
                            <span class=" fs-18"><span class="fw-bold">Reach 97% </span> potential user across Indonesia</span>
                        </div>
                    </div>
                    </div>
                    
                </div>
                <!-- /column -->
                <div class="col-lg-7">
                    <div class="post-header mb-5">
                        <h3 class="post-title display-6">Hello, Jumali lets fill in your merchant detail</h3>
                    </div>
                    <hr class="my-2">
                    <form>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="icon btn btn-circle btn-lg btn-success pe-none  text-white"> <i class="uil uil-phone-volume"></i></div>
                            <div class="my-auto">
                                <span class=" fs-20 fw-bold">Enter Your Phone Number</span>
                            </div>
                        </div>
                        <div class="mb-3 px-5">
                            <label for="recipient-name" class="col-form-label">Phone Number *</label>
                            <input type="text" name="username" class="form-control" placeholder="08XXXXXXX">
                        </div>              
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="icon btn btn-circle btn-lg btn-success pe-none  text-white"> <i class="uil uil-store"></i></div>
                            <div class="my-auto">
                                <span class=" fs-20 fw-bold">Enter Your Merchant Name</span>
                            </div>
                        </div>
                        <div class="mb-3 px-5">
                            <label for="recipient-name" class="col-form-label">Merchant Name *</label>
                            <input type="text" name="username" class="form-control mb-2" placeholder="ABC Store">
                            <span class="text-muted">Merchant name will be displayed on your product</span>
                        </div>              
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="icon btn btn-circle btn-lg btn-success pe-none  text-white"><i class="uil uil-location-point"></i></div>
                            <div class="my-auto">
                                <span class=" fs-20 fw-bold">Enter Your Location</span>
                            </div>
                        </div>
                        <div class="mb-2 px-5">
                            <label for="recipient-name" class="col-form-label">City *</label>
                            <input type="text" name="username" class="form-control" placeholder="ex. Jakarta">
                        </div>              
                        <div class="mb-2 px-5">
                            <label for="recipient-name" class="col-form-label">Country *</label>
                            <input type="text" name="username" class="form-control" placeholder="ex. Indonesia">
                        </div>              
                        <div class="mb-2 px-5">
                            <label for="recipient-name" class="col-form-label">Address *</label>
                            <input type="text" name="username" class="form-control" placeholder="ex. Mister Potato Street no 10">
                        </div>              
                        <div class="mb-2 px-5">
                            <label for="recipient-name" class="col-form-label">Postal Code *</label>
                            <input type="text" name="username" class="form-control" placeholder="ex. 12045">
                        </div>              
                        <div class="mb-3 px-5">
                            <label for="recipient-name" class="col-form-label">Notes</label>
                            <input type="text" name="username" class="form-control" placeholder="ex. White building, Yellow roof">
                        </div>
                        <div class=" px-5">
                            <button type="submit" class="btn btn-success w-100 text-white">submit</button>
                        </div>
                        
                    </form>           
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </section>

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
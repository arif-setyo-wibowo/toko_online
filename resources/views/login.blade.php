<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/') }}/css/style.css">
</head>
<body>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- header -->
    <div class="container d-flex justify-content-center align-items-center pt-3 mb-5">
    <img style="max-width:15%;" class="logo" src="{{ asset('assets/') }}/img/logo/2.png" alt="">
  </div>

<!-- Login Form  -->
    <section class="login-form">
      <div class="container">
          <div class="d-flex justify-content-center align-items-center">
              <img src="{{ asset('assets/') }}/img/backgrounds/login-bg.png" alt="" >
              <div class="card shadow-lg px-3" style="max-width:25rem;min-width: 25rem; position: absolute;">
                  <div class="card-body">
                    <div class="row mb-3 text-center">
                      <h4 class="card-title fw-bold">Welcome Back!</h4>
                      <p class="card-text mt-n2">Dont have an account? <a class="text-success" href="">register!</a></p>
                    </div>
                    <div class="row">
                      <a href="#" class="btn border"><i class="fa fa-google fa-fw">
                      </i> Google
                    </a>
                    </div>
                    <div class="mt-2 mb-2 text-center">
                      <span class="text-gray">or</span>
                    </div>
                    <div class="row">
                      <form>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label fw-bold">Email</label>
                          <input type="email" class="form-control" placeholder="Example Toko@tokopedia.com" >
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
                          <input type="password" class="form-control" placeholder="enter password">
                        </div>
                        <button type="submit" class="btn btn-success col-12">Login</button>
                      </form>
                    </div>
                  </div>
              </div>
          </div>
      </div>
    </section>

  
  
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

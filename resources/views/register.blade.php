<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/') }}/css/style.css">
</head>
<body>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- header -->

    <div class="container d-flex justify-content-center align-items-center pt-3 mb-5">
    <img style="max-width:15%;" class="logo" src="assets/img/logo/2.png" alt="">
  </div>

<!-- Login Form  -->
    <section class="login-form">
      <div class="container">
          <div class="d-flex justify-content-center align-items-center">
              <img src="assets/img/backgrounds/login-bg.png" alt="" >
              <div class="card shadow-lg px-3" style="max-width:25rem;min-width: 25rem; position: absolute; margin-top: 100px;">
                  <div class="card-body">
                    <div class="row mb-3 text-center">
                      <h4 class="card-title fw-bold">Register Now!</h4>
                      <p class="card-text mt-n2">Already have an account? <a class="text-success" href="{{ route('login') }}">Login!</a></p>
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
                      <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label fw-bold">Email</label>
                          <input type="email" name="email" class="form-control" placeholder="Example Toko@tokopedia.com" pattern="^[^\.].*[^\.]@.*\.com$" title="Email must end with '.com' and should not start with '.com'" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label fw-bold">Password</label>
                          <input type="password" name="password" class="form-control" placeholder="Input password" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label fw-bold">Username</label>
                          <input type="text" name="username" class="form-control" placeholder="Input username" required>
                        </div>
                        <div>
                          <p>
                            <span class="">Requirment</span><br>
                            <span class="req">All field must be filled</span><br>
                            <span class="req">Email must be unique</span><br>
                            <span class="req">Email must end with ".com"</span><br>
                            <span class="req">Password must be between 5 and 20 characters</span><br>
                            <span class="req">User Name must be unique</span><br>
                          </p>
                        </div>
                        <button type="submit" class="btn btn-success col-12">Registrasi</button>
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

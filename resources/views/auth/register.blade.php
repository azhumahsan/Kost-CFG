
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}}">
   <nav style="width: 100%;" id="navbar-wrapper" class="">
            <div class="container-fluid d-block">
                <div class="d-flex justify-content-evenly align-items-center">
                    <a style="height: 8.5rem;" class="navbar-brand text-center text-center d-block m-0" id="nav-left" href="#head">
                        <img src="http://127.0.0.1:8000/images/logo_png.png" alt="" class="img-fluid h-100">
                    </a>       
                </div>
            </div>
    </nav>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    

    <title>Register</title>
  </head>
  
  <body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
                <div class="card-body">
                <h2 class="fw-light fs-3 text-center" style="font-family: cormorant, sans-serif, width:30%" >Create Account</h2>
                <h5 class="fw-lighther fs-6 text-center" style="font-family: poppins">Please create acoount details bellow </h5>
                <br>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                            <label for="inputName" class="form-label">Name</label>
                                <input type="text" class="form-control"aria-label="Name">
                            </div>
                            <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        </div>
<br>
                       
                        <div class="row mb-2 flex-column">
                            <div class="col-md-8 offset-md-4 flex">
                                    <div class="d-grid gap-2 col-6">
                                         <button class="btn btn-primary" type="button">Create your account</button>
                                    </div>
                            </div>

                            <div class="d-flex justify-content-center align-items-center my-2">
                                <h5 class="fw-light fs-6 text-center m-0" style="font-family: poppins">
                                    Alredy have an Account?
                                    @if (Route::has('password.request'))
                                    <a href="" class="">
                                        {{ __('Sign in') }}
                                    </a>
                                    @endif
                                </h5>
                            </div>

                            <br>

                            <h5 class="fw-light fs-6 text-center" style="font-family: poppins">Or with</h5>

                           

                            <div class="d-flex justify-content-center my-2">
                                <img src="{{ asset('images/google.jpeg') }}" width="35" style="padding-right: 5px; padding-bottom: 5px;">
                                <img src="{{ asset('images/facebook.jpeg') }}" width="35" style="padding-left: 5px; padding-bottom: 5px;">
                            </div>

                        </div>
                        

                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap 5.0.x cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Google fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,500,600,700,800">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Parisienne">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cormorant">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://kit.fontawesome.com/bfcc361c81.css" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/home.css')}}">
  <title>KostCFG - Home</title>
</head>
<body>
  <!-- JQuery 3.x -->
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/bfcc361c81.js" crossorigin="anonymous"></script>
  <!-- Navbar -->
  <nav style="width: 50%; border-bottom: solid rgba(0, 0, 0, 0.45);" id="navbar-wrapper" class="navbar navbar-expand-lg navbar-light border-1">
    <div class="container-fluid d-block">
      <div class="d-flex justify-content-evenly align-items-center">
        <a style="height: 4.5rem;" class="navbar-brand text-center text-center d-block m-0" id="nav-left" href="#head">
          <img src="{{asset('assets/images/Logo PNG.png')}}" alt="" class="img-fluid h-100">
        </a>
        <a href="/signup" class="nav nav-link">Create Account</a>
        <a href="/signin" class="nav nav-link">Login</a>
      </div>
    </div>
  </nav>
  <!-- Head -->
  <div id="head" class="container-fluid row p-0 m-auto">
    <div id="head-left-content" class="col-md-6">
      <div id="wrapper-left" class="container d-flex justify-content-center align-items-lg-start flex-column">
        <h1 id="title-landing" class="h1 cormorant">
          <span class="secondary-color handwritten">Memorable</span>
          <br>Hotel for
          <br>moments <span class="secondary-color handwritten">Rich</span>
          <br>in emotions
        </h1>
        <h4 class="h4">Book now and get the best prices</h4>
      </div>
    </div>
    <div id="head-right-content" class="col-md-6"></div>
  </div>
</body>
</html>
@extends('layouts.app')

@section('content')
<div id="head" class="sector">
  <div id="head-content" class="container-fluid row p-0 m-auto">
    <div id="head-left-content" class="col-md-6 border-bottom">
      <div id="wrapper-left" class="d-flex h-100">
        <div id="wrapper-text-landing" class="position-relative w-100">
          <div id="text-landing" class="position-absolute">
            <h1 id="title-landing" class="h1 cormorant m-0">
              <span class="secondary-color handwritten h1">Memorable</span>
              <br>Hotel for
              <br>moments <span class="secondary-color handwritten h1">Rich</span>
              <br>in emotions
            </h1> 
            <h5 class="h5 py-4">Book now and get the best prices</h5>
          </div>
        </div>
      </div>
    @include('layout.floatingOrder')
    </div>
    <div id="head-right-content" class="col-md-6">
      <div id="box-img-landing" class="position-absolute">
        <img src="{{asset('images/thumbnail_landing.png')}}" class="img-full-h" alt="">
      </div>
    </div>
  </div>
  <div id="desc" class="row m-auto border-bottom">
    <div class="col-md-6 ps-0">
      <div class="box-desc">
        <h1 class="h1 cormorant">
          Here, local talents<br>
          come together
        </h1>
      </div>
    </div>
    <div class="col-md-6 ps-0 border-start">
      <div class="box-desc text-wrap">
        <h5 class="h5">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor placerat quam sit amet pharetra. Mauris in dictum turpis. Proin congue erat quis nisl euismod hendrerit.
        </h5>
      </div>
    </div>
  </div>
</div>
<div class="sector border-bottom">
  <!-- Carousel YSSlider -->
  <div id="box-carousel">
    <div class="ysslider">
      <div class="item animate__animated animate__fadeIn"><img src="{{asset('images/thumbnail_landing.png')}}" /></div>
      <div class="item animate__animated animate__fadeIn"><img src="{{asset('images/thumbnail_landing.png')}}" /></div>
      <div class="item animate__animated animate__fadeIn"><img src="{{asset('images/thumbnail_landing.png')}}" /></div>
      <div class="item animate__animated animate__fadeIn"><img src="{{asset('images/thumbnail_landing.png')}}" /></div>
      <div class="controlbar">
        <a href="javascript:void(0);" class="prev">Prev</a>
        <a href="javascript:void(0);" class="next">Next</a>
      </div>
    </div>
  </div>
</div>
@endsection
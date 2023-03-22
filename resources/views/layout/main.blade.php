@extends('layouts.app')

@section('landing')
<div id="head" class="container-fluid row p-0 m-auto">
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
  </div>
  <div id="head-right-content" class="col-md-6">
    <div id="box-img-landing" class="position-absolute">
      <img src="{{asset('images/thumbnail_landing.png')}}" class="img-full-h" alt="">
    </div>
  </div>
</div>
@include('layout.floatingOrder')
@endsection
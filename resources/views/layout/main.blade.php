@extends('layouts.app')

@section('content')
<div id="head" class="sector">
  <div id="head-content" class="row p-0 m-auto position-relative">
    <div id="head-left-content" class="col-md-6 p-0 border-bottom">
      <div id="wrapper-left" class="d-flex flex-column h-100">
        <nav id="navbar-wrapper" class="navbar navbar-expand-lg navbar-light border-bottom">
            <div class="container-fluid d-block">
                <div class="d-flex justify-content-evenly align-items-center">
                    <a style="height: 4.5rem;" class="navbar-brand text-center text-center d-block m-0" id="nav-left" href="#head">
                        <img src="{{asset('images/logo_png.png')}}" alt="" class="img-fluid h-100">
                    </a>
                    @guest
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav nav-link">{{ __('Create Account') }}</a>
                        @endif
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="nav nav-link">{{ __('Login') }}</a>
                        @endif
                    @else
                        <a id="navbarDropdownUser" class="nav nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdownUser">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    @endguest
                </div>
            </div>
        </nav>
        <div class="w-100 h-100 d-flex flex-column justify-content-center">
          <div id="wrapper-text-landing">
            <h1 id="title-landing" class="h1 cormorant m-0">
              <span class="secondary-color handwritten h1">Memorable</span>
              <br>Hotel for
              <br>moments <span class="secondary-color handwritten h1">Rich</span>
              <br>in emotions
            </h1> 
            <h5 class="h5 py-4">Book now and get the best prices</h5>
          </div>
        </div>
        @include('layout.floatingOrder')
      </div>
    </div>
    <div id="head-right-content" class="col-md-6 position-relative p-0 border-bottom">
      <div id="box-img-landing">
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
<div class="sector border-bottom py-5">
  <div class="row car-sect my-5">
    <div id="box-carousel" class="row m-auto p-0 w-100">
      <div class="col-md-2 px-auto position-relative">
        <div class="d-flex justify-content-end h-100">
          <button type="button" class="car-button my-auto" data-bs-target="#carousel-main" data-bs-slide="prev">
            <i class="fa-solid fa-chevron-left"></i>
          </button>
        </div>
      </div>
      <div id="carousel-main" class="carousel slide col-md-8" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('images/thumbnail_landing.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/dump.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/thumbnail_landing.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/dump.png') }}" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <div class="col-md-2 px-auto position-relative">
        <div class="d-flex justify-content-start h-100">
          <button type="button" class="car-button my-auto" data-bs-target="#carousel-main" data-bs-slide="next">
            <i class="text-end fa-solid fa-chevron-right"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center car-sect mb-5">
    <h6 class="h6 text-center w-75">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor placerat quam sit amet pharetra. Mauris in dictum turpis. Proin congue erat quis nisl euismod hendrerit.
    </h6>
  </div>
</div>
<div class="sector border-bottom py-5">
  <div class="support-booking">
    <div class="container">
      <div class="d-flex flex-column">
        <div id="title-booking">
          <h2 class="h2 cormorant fw-bold">
            JENIS KAMAR
            <span class="h4 cormorant">GESER KE SAMPING</span>
          </h2>
        </div>
        <div class="bookings d-flex w-100 flex-column">
          <div class="support-booking w-100">
            <div class="book-grid">
              <div class="grid-item item-tall"></div>
              <div class="grid-item item-normal"></div>
              <div class="grid-item item-footer"></div>
            </div>
          </div>
          <div class="desc-room">
            <div class="wrapper-room-left">
              <div class="title-room">
                <h2 class="h2 mb-4 fw-bold cormorant">Exclussive Room Kost, 3rd Floor{{-- Here goes the title data --}}</h2>
              </div>
              <a href="" class="share-room-btn btn btn-light support-shadow rounded-1">
                <h5 class="h5 my-1 secondary-color text-center d-flex align-items-center">
                  <img src="{{ asset('images/share_ic.svg') }}" alt="[]" style="height: 1em" class="pe-2">
                  Share
                </h5>
              </a>
            </div>
            <div class="wrapper-room-right">
              <div class="support-shadow rounded-1 order-card d-flex flex-column">
                <h2 class="h2 cormorant">Rp 1.900.000{{-- Here goes the price data --}}<span class="h5 cormorant"> / month</span></h2>
                <a href="" class="btn bg-secondary-color rounded-0 mt-3 py-2 h5 text-light fw-bold">
                  CEK DETAIL KAMAR
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
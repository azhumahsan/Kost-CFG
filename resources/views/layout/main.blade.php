@extends('layouts.app')

@section('content')
    {{-- Desktop Version --}}
    <div class="desktop">
        <div id="head" class="sector">
            <div id="head-content" class="row p-0 m-auto position-relative">
                <div id="head-left-content" class="col-md-6 p-0 border-bottom">
                    <div id="wrapper-left" class="d-flex flex-column h-100">
                        <nav id="navbar-wrapper" class="shadow-0 navbar navbar-expand-lg navbar-light border-bottom">
                            <div class="container-fluid d-block">
                                <div class="d-flex justify-content-evenly align-items-center">
                                    <a style="height: 4.5rem;" class="navbar-brand text-center text-center d-block m-0"
                                        id="nav-left" href="#head">
                                        <img src="{{ asset('images/logo_png.png') }}" alt=""
                                            class="img-fluid h-100">
                                    </a>
                                </div>
                            </div>
                        </nav>
                        <div class="w-100 h-100 d-flex flex-column justify-content-center">
                            <div id="wrapper-text-landing">
                                <h1 id="title-landing" class="h1 cormorant m-0" style="font-size: 4.5rem">
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
                <div id="head-right-content" class="col-md-6 position-relative p-0 border-bottom">
                    <div id="box-img-landing">
                        <img src="{{ asset('images/p_1.png') }}" class="img-full-h" alt="">
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
                            Kami menyediakan beragam pilihan kost modern dan nyaman yang dirancang khusus untuk memenuhi
                            kebutuhan para mahasiswa dan pekerja dengan tepat yang strategis.
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- carousel -->
        @if (!empty($carousel) && count($carousel) > 0)
            <div class="sector border-bottom py-5">
                <div class="row car-sect my-5">
                    <div id="box-carousel" class="row m-auto p-0 w-100">
                        <div class="col-md-2 px-auto position-relative">
                            <div class="d-flex justify-content-end h-100">
                                <button type="button" class="car-button my-auto" data-bs-target="#carousel-main"
                                    data-bs-slide="prev">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </button>
                            </div>
                        </div>
                        <div id="carousel-main" class="carousel slide col-md-8" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($carousel as $index => $item)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                        <img src="{{ asset($item->photo_links) }}" class="d-block w-100" alt="...">
                                        <div class="position-absolute support-bg-indicator"></div>
                                        <div class="carousel-caption d-none d-md-block mb-5 ">
                                            <h5 class="h5 text-light">{{ $item->photo_descs }}</h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Carousel Indicators -->
                            <ol class="carousel-indicators mb-4">
                                @foreach ($carousel as $index => $item)
                                    <li data-bs-target="#carousel-main" data-bs-slide-to="{{ $index }}"
                                        class="{{ $index === 0 ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>
                        </div>
                        <div class="col-md-2 px-auto position-relative">
                            <div class="d-flex justify-content-start h-100">
                                <button type="button" class="car-button my-auto" data-bs-target="#carousel-main"
                                    data-bs-slide="next">
                                    <i class="text-end fa-solid fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center car-sect mb-5">
                    <h6 class="h6 text-center w-75">
                        Berikut diatas adalah foto lingkungan sekitar di kost cfg.
                    </h6>
                </div>
            </div>
        @else
            <div></div>
        @endif
        <!-- End of carousel -->
        <!-- Grids section -->
        <!-- Check if there's any data from the DB -->
        @if (!empty($data) && count($data) > 0)
            {{-- Table data is exist --}}
            <div class="sector border-bottom py-5">
                <div class="support-booking">
                    <div class="container">
                        <div class="d-flex flex-column">
                            <div id="title-booking">
                                <h2 class="h2 cormorant fw-bold">
                                    JENIS KAMAR
                                    <span class="h4 cormorant">Top in week</span>
                                </h2>
                            </div>
                            {{-- @dd($data) --}}
                            <div class="bookings d-flex w-100 flex-column">
                                <div class="support-booking w-100">
                                    <div class="book-grid">
                                        @foreach ($data as $key => $item)
                                            <div
                                                class="grid-item p-0 item-tall">
                                                <img src="{{ asset('storage/images/kamar/' . $item->photo_link1) }}" class="h-100 w-100 img-fluid"
                                                    alt="">
                                            </div>
                                            <div
                                                class="grid-item p-0 item-normal">
                                                <img src="{{ asset('storage/images/kamar/' . $item->photo_link2) }}" class="h-100 w-100 img-fluid"
                                                    alt="">
                                            </div>
                                            <div
                                                class="grid-item p-0 item-footer">
                                                <img src="{{ asset('storage/images/kamar/' . $item->photo_link3) }}" class="h-100 w-100 img-fluid"
                                                    alt="">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="desc-room">
                                    <div class="wrapper-room-left">
                                        <div class="title-room">
                                            <h2 class="h2 mb-4 fw-bold cormorant">Exclusive room, 3rd
                                                floor{{-- Here goes the title data --}}</h2>
                                        </div>
                                        <a href="" class="share-room-btn btn btn-light support-shadow rounded-1">
                                            <h5 class="h5 my-1 secondary-color text-center d-flex align-items-center">
                                                <img src="{{ asset('images/share_ic.svg') }}" alt="[]"
                                                    style="height: 1em" class="pe-2">
                                                Share
                                            </h5>
                                        </a>
                                    </div>
                                    <div class="wrapper-room-right">
                                        <div class="support-shadow rounded-1 order-card d-flex flex-column">
                                            <h2 class="h2 cormorant">Rp 1.900.000{{-- Here goes the price data --}}<span
                                                    class="h5 cormorant"> / month</span></h2>
                                            <a href="{{ route('detailkamar') }}"
                                                class="btn bg-secondary-color rounded-0 mt-3 py-2 h5 text-light">
                                                DETAIL
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            {{-- Table data is empty --}}
            <div></div>
        @endif
        <!-- End of Grids section -->
        <!-- Our Facility section -->
        <div class="sector border-bottom py-5">
            <div class="mx-5">
                <div id="facility-title">
                    <h2 class="h2 cormorant text-center fw-bold">
                        Fasilitas-Fasilitas Umum<br>Kost CFG
                    </h2>
                    <br>
                    <h5 class="h5 text-center">
                        Kami menyediakan fasilitas-fasilitas umum yang dapat memudahkan anda saat berada di kost cfg
                    </h5>
                </div>
                <div id="facility-icon-title">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="box-f-image">
                            <img src="{{ asset('images/car_park.svg') }}" alt="">
                        </div>
                        <div id="mid-f-support" class="box-f-image">
                            <img src="{{ asset('images/laundry_machine.svg') }}" alt="">
                        </div>
                        <div class="box-f-image">
                            <img src="{{ asset('images/service_customer.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div id="facility-content">
                    <div class="row w-100 mx-auto">
                        <div class="col-md-4 p-3">
                            <div class="facility-desc">
                                <div class="img-facility">
                                    <img src="{{ asset('images/tmpt_parkir.png') }}" alt="">
                                </div>
                                <div class="text-desc-facility my-5">
                                    <h3 class="h3 cormorant text-center secondary-color">Tempat Parkir</h3>
                                    <h6 class="h6 text-center mt-3 mb-0">
                                        Tempat parkir yang luas jadi anda tidak perlu khawatir tempat parkir yang penuh.
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-3">
                            <div class="facility-desc">
                                <div class="img-facility">
                                    <img src="{{ asset('images/kantin.png') }}" alt="">
                                </div>
                                <div class="text-desc-facility my-5">
                                    <h3 class="h3 cormorant text-center secondary-color">Kantin</h3>
                                    <h6 class="h6 text-center mt-3 mb-0">
                                        Menyediakan makanan yang beragam dan pastinya harga anak kost .
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-3">
                            <div class="facility-desc">
                                <div class="img-facility">
                                    <img src="{{ asset('images/taman.png') }}" alt="">
                                </div>
                                <div class="text-desc-facility my-5">
                                    <h3 class="h3 cormorant text-center secondary-color">Taman</h3>
                                    <h6 class="h6 text-center mt-3 mb-0">
                                        Anda dapat bersantai di taman yang asri dan indah kami sediakan .
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Mobile Version --}}
    <div class="mobile"></div>
@endsection

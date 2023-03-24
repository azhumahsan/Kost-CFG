<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    {{-- <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
        
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5.0.x cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,500,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Parisienne">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cormorant">
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <title>{{ config('app.name', 'Kost-CFG') }}</title>
</head>
<body>
    @include('res.maincss')
    <div id="app">
        <nav style="width: 50%;" id="navbar-wrapper" class="navbar navbar-expand-lg navbar-light border-bottom">
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
        <main>
            @yield('content')
        </main>
    </div>
    @include('res.mainjs')
</body>
</html>

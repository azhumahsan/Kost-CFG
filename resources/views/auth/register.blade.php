<!doctype html>
<html lang="en">

<head>
    @include('res.heads')
    <title>Register</title>
</head>

<body class="container">
    @include('res.authcss')
    <nav id="navbar-wrapper" class="container-fluid my-5">
        <div class="d-flex justify-content-evenly align-items-center">
            <a class="navbar-brand text-center text-center d-block m-0" href="" style="height: 7rem">
                <img src="http://127.0.0.1:8000/images/logo_png.png" alt="" class="img-fluid h-100">
            </a>
        </div>
    </nav>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card cast-shadow border-0 py-4">
                    <div class="card-header bg-white border-0 mt-3">
                        <h3 class="h3 text-center cormorant">{{ __('Welcome') }}</h3>
                        <h6 class="h6 text-center poppins" style="opacity: .5;">{{ __('Please enter your details below') }}</h6>
                    </div>
                    <div class="card-body">
                        <div id="ext-auth" class="mb-4">
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <div class="d-flex flex-row justify-content-between">
                                    <a href="" class="buttons-auth col-auto">
                                        <img src="{{ asset('images/G button.png') }}" class="img-fluid h-100" alt="">
                                    </a>
                                    <a href="" class="buttons-auth col-auto">
                                        <img src="{{ asset('images/F button.png') }}" class="img-fluid h-100" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <h6 style="opacity: .5;" class="h6 text-center mb-3 poppins">Or use email</h6>
                        <div class="form-wrap">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md">

                                        <h6 class="h6 label-forms">Name</h6>

                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <div class="col-md">

                                        <h6 class="h6 label-forms">Email</h6>
                                        
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">
    
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-5">
                                    <div class="col-md">

                                        <h6 class="h6 label-forms">Password</h6>
                                        
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required>
    
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-5">
                                    <div class="col-md d-flex justify-content-center">
                                        <button type="submit" class="btn bg-secondary-color btn-sub">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="container">
                                <h6 class="h6 text-center">
                                    already have an account? <a href="{{ route('login') }}" class="secondary-color btn-log">{{ __('login') }}</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

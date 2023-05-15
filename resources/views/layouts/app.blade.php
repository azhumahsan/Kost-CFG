<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    {{-- <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
        
    @include('res.heads')

    <title>{{ config('app.name', 'Kost-CFG') }}</title>
</head>
<body>
    @include('res.maincss')
    <div id="app">
        @guest
        <main>
            @yield('content')
        </main>
        @else
        <main>
            @yield('content')
        </main>
        @endguest
    </div>
    @include('res.mainjs')
</body>
</html>

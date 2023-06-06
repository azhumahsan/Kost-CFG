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
        <main>
            @yield('content')
            @include('layout.footer')
        </main>
    </div>
    @include('res.mainjs')
</body>
</html>

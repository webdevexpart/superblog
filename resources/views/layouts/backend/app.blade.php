<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

        @include('backend.partials.header')

        <div class="app-main">
            @include('backend.partials.sidebar')
            <div class="app-main__outer">
                @yield('content')
                @include('backend.partials.footer')
            </div>
{{--            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>--}}
        </div>


    </div>
</body>

<!-- Scripts -->
<script src="{{ asset('assets/scripts/main.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>


</html>

<!DOCTYPE html>
<!-- html lang={{ App::getLocale() }}-->

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <meta name="msapplication-TileColor" content="#136f8b">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#136f8b">

    <title>{{ $title ?? 'UNIVERSTITY WEB PAGE' }}</title>

    @isset($description)
        <meta name="description" content="{{ $description }}">
    @endisset

    

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preload" href="{{ asset('site/css/sandbox/fonts/unicons.css') }}" as="style"
        onload="this.rel='stylesheet'">
    <link rel="stylesheet" href="{{ asset('site/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/sandbox/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/sandbox/style.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/sandbox/colors/orange.css') }}">

    <link rel="stylesheet" href="{{ asset('site/css/common.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('head')

</head>

<body>

    @include('site.layouts.navbar')
    @yield('content')
    @include('site.layouts.footer')


    @yield('js-up')    

    <script src="{{ asset('site/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('site/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('site/js/sandbox/plugins.js') }}"></script>
    <script src="{{ asset('site/js/sandbox/theme.js') }}"></script>
    <script src="{{ asset('site/js/script.js') }}"></script>
    
    @yield('js')

</body>

</html>

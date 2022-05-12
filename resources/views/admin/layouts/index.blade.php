<!DOCTYPE html>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <title>{{ $title ?? 'gulsen-kilic-university' }}</title>

    @isset($description)
        <meta name="description" content="{{ $description }}">
    @endisset

    @isset($description)
        <meta name="keywords" content="{{ $keywords }}">
    @endisset

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="{{ asset('admin/css/common.css') }}">

    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('admin/css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ asset('admin/css/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->

    @yield('head')
    <meta name="theme-color" content="#136f8b">
</head>

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    @include('admin.layouts.navbar')
    @include('admin.layouts.menu')

    @yield('content')
    
    @include('admin.layouts.footer')

    @yield('js-up')


    <script src="{{ asset('admin/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('admin/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/script.js') }}"></script>
    <script src="{{ asset('admin/js/datatables.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/fullcalendar.bundle.js') }}"></script>
    <!--end::Page Vendors Javascript-->
    @yield('js')

</body>

</html>

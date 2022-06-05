<html>

<head>
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery-3.6.0.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('admin/css/login.css') }}">
</head>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div class="wrapper fadeInDown">
        <div class="d-flex flex-center mb-15">
            <a href="#">
                <img src="{{ asset('site/images/logo/logo.png') }}" class="max-h-100px" alt="">
            </a>
        </div>
        <br>
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <p class="lead">Gulsen Kilic University Admin Panel</p>
            </div>
            <!-- Login Form -->
            @if ($errors->any())
                <div class="alert alert-danger" style="margin: 10px">
                    {{ $errors->first() }}
                </div>
            @endif
            
            <form action="{{ route('adminLoginProcess') }}" method="Post">
                @csrf
                <input type="text" id="login" class="fadeIn second" name="userName" placeholder="username">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Log In" onclick="window.location='{{ route('adminDashboardPage')}}'">
            </form>

            <!-- Remind Passowrd -->
        

        </div>
    </div>
</body>

</html>

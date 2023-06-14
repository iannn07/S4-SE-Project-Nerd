<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V18</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="{{ asset('Admin Assets/Login/images/icons/favicon.ico') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Admin Assets/Login/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Admin Assets/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Admin Assets/Login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin Assets/Login/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Admin Assets/Login/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Admin Assets/Login/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin Assets/Login/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Admin Assets/Login/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin Assets/Login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin Assets/Login/css/main.css') }}">
</head>

<body style="background-color: #666666">
    <main class="limiter">
        <div class="content">
            @yield('content')
        </div>
    </main>
</body>

</html>

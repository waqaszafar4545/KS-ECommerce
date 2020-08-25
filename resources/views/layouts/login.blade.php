<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin AloExpo | Dashboard </title>
    <link rel="icon" type="image/jpg" href="{{asset('assets/images/logo_new.png')}}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <link href="{{asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}" rel="stylesheet">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css"
          integrity="sha512-6S2HWzVFxruDlZxI3sXOZZ4/eJ8AcxkQH1+JjSe/ONCEqR9L4Ysq5JdT5ipqtzU7WHalNwzwBv+iE51gNHJNqQ=="
          crossorigin="anonymous"/>
    <!-- Theme style -->

    <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/toastr/custom.css')}}">

    <!-- Google Font: Source Sans Pro -->

    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="//fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>var baseURL = <?php echo json_encode(url('/')); ?>  </script>
    <!-- Styles -->
</head>
<body class="hold-transition layout-fixed layout-navbar-fixed layout-footer-fixed login">
<div class="wrapper">

    <!-- Navbar -->

    <nav class="navbar-white navbar-success" style="background: white; height: 185px;">

        <!-- Left navbar links -->
        <div style="text-align: center;"><img src="{{asset('assets/images/logo_new.png')}}" alt="AloExpo Logo"
                                              class="brand-image  " style="max-width: 400px; width:100%;
    margin-top: 30px;
}"></div>
        <div class="card-header" style="text-align: center;">{{ __('WELCOME TO AloExpo ADMIN PANEL') }}</div>


    </nav>

    <div class="container-fluid">

        @yield('content')

    </div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"
        integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ=="
        crossorigin="anonymous"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>

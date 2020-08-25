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

    <!-- Theme style -->

    <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/organiser.css')}}">

    <!-- Google Font: Source Sans Pro -->

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Scripts -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <span class="text-center">
                <a href="{{route('login')}}"><b class="text-white ml-4" style="color: black;"> Organiser Admin Panel </b></a>
            </span>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#"> <img src="{{asset('assets/images/logo_new.png')}}" alt="User Image" style="  width: 32px;"></a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right arrow down">
                        <span class="dropdown-item dropdown-header">Welcome</span>
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"> <i class="fa fa-fw fa-cog mr-2"></i> Change Password </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{route('logout')}}" class="dropdown-item"> <i class="fa fa-fw fa-power-off mr-2"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        @section('sidebar')
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Brand Logo -->
            <a href="#" class="brand-link" style="background: white;">
                <img src="{{asset('assets/images/logo_new.png')}}" alt="AloExpo" class="brand-image" style="opacity:8">
            </a>
            <!-- Sidebar -->

            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column list-groupzee" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <p style="color:black;"> Admin Users </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <p style="color:black;"> Add Users </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('exhibitor')}}" class="nav-link">
                                <p style="color:black;"> Exhibitors </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <p style="color:black;"> Literature </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('showguide')}}" class="nav-link">
                                <p style="color:black;"> Show Guide </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('orseminarlist')}}" class="nav-link">
                                <p style="color:black;"> Seminars </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('orletrature')}}" class="nav-link">
                                <p style="color:black;"> Literature </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('orsoftware')}}" class="nav-link">
                                <p style="color:black;"> Software Downloads </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- /.sidebar -->
        </aside>
        @show

        <div class="content-wrapper  zcontent">
            <!-- top controles start -->
            @section('topControl')
            <section class="content control_section">
                <div class="row">
                    <div class="col-md-2 zcontroll">
                        <div class="card text-center p-2" style="background-color: #EAE8E8">
                            <a href="{{route('exhibition')}}"><img src="{{asset('assets/images/art-and-design.png')}}" style=" width:  100px" alt=""></a>
                            <small>Exhibitions</small>
                        </div>
                    </div>
                    <div class="col-md-2 zcontroll">
                        <div class="card text-center p-2" style="background-color: #EAE8E8">
                            <a href="{{route('exhibitor')}}"><img src="{{asset('assets/images/Meetings.png')}}" style=" width: 100px" alt=""></a>
                            <small>Exhibitors</small>
                        </div>
                    </div>

                    <div class="col-md-2 zcontroll">
                        <div class="card text-center p-2" style="background-color: #EAE8E8">
                            <a href="{{route('showguide')}}"><img src="{{asset('assets/images/u3.png')}}" style=" width: 100px" alt=""></a>
                            <small>Show Guide</small>
                        </div>
                    </div>
                    <div class="col-md-2 zcontroll">
                        <div class="card text-center p-2" style="background-color: #FFFFFF">
                            <a href="{{route('orletrature')}} "><img src="{{asset('assets/images/leads.png')}}" style=" width: 100px" alt=""></a>
                            <small>Literature </small>
                        </div>
                    </div>

                    <div class="col-md-2 zcontroll">
                        <div class="card text-center p-2" style="background-color: #EAE8E8">
                            <a href=" {{route('orseminarlist')}}"><img src="{{asset('assets/images/u1.png')}}" style=" width: 100px" alt=""></a>
                            <small>Seminars</small>
                        </div>
                    </div>
                    <div class="col-md-2 zcontroll">
                        <div class="card text-center p-2" style="background-color: #EAE8E8">
                            <a href="{{route('orsoftware')}}"><img src="{{asset('assets/images/download.png')}}" style=" width: 100px" alt=""></a>
                            <small>Software</small>
                        </div>
                    </div>

                </div>
            </section>
            @show
            <!-- top control end -->
            <div>
                @yield('content')
            </div>
        </div>

</body>
@section('js')
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src=" {{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src=" {{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src=" {{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
<script src=" {{asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src=" {{asset('assets/dist/js/adminlte.js')}}"></script>
<script src=" {{asset('assets/dist/js/pages/dashboard.js')}}"></script>
<script src=" {{asset('assets/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src=" {{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<script src=" {{asset('assets/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src=" {{asset('assets/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<script src=" {{asset('assets/plugins/chart.js/Chart.min.js')}}"></script>
<script src=" {{asset('assets/plugins/sparklines/sparkline.js')}}"></script>
<script src=" {{asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src=" {{asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src=" {{asset('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<script src=" {{asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src=" {{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src=" {{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src=" {{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src=" {{asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src=" {{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example1').DataTable({
            "paging": true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

<style type="text/css">
    #example1_filter {
        margin-left: 44.5em;
    }
</style>
@show

</html>
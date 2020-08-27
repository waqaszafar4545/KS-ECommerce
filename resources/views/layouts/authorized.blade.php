<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('vendor/bootstrap-fileinput/css/fileinput.min.css')}}" media="all" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.min.css')}}" media="all" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/toastr/build/toastr.min.css')}}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/parsley.css')}}" rel="stylesheet">
    <link href="{{asset('css/common.css')}}" rel="stylesheet">

    @yield('customStyles')

</head>

<body id="page-top">
    <div id="app">
        <!-- Page Wrapper -->
        <div id="wrapper">

            @include('layouts.components.sidebar')

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    @include('layouts.components.topbar')

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                    <!-- End of Page Content -->

                </div>
                <!-- End of Main Content -->

                @include('layouts.components.footer')

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Jquery-easing-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.1.3.js')}}"></script>

    <script>
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    </script>

    <script src="{{asset('vendor/bootstrap-fileinput/js/fileinput.min.js')}}"></script>

    <script src="{{asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.min.js')}}"></script>

    <script src="{{asset('vendor/toastr/build/toastr.min.js')}}"></script>

    <script src="{{asset('vendor/parsleyjs/dist/parsley.min.js')}}"></script>

    <script src="{{asset('js/common.js')}}"></script>

    @yield('customScripts')

</body>

</html>

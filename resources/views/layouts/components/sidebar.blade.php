<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img alt="logo" class="home_logo" src="{{asset('images/logo.svg')}}">
        </div>
        <div class="sidebar-brand-text mx-3">{{ config('app.name', 'Laravel') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
<<<<<<< HEAD
        {{-- <a class="nav-link" href="{{ route('videos.showList') }}"> --}}
        <i class="fas fa-fw fa-video"></i>
        <span>Videos</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseManageUsers" aria-expanded="true" aria-controls="collapseManageUsers">
=======
        {{-- <!-- <a class="nav-link" href="{{ route('videos.showList') }}">  --> --}}
            <i class="fas fa-fw fa-video"></i>
            <span>Videos</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseManageUsers" aria-expanded="true"
            aria-controls="collapseManageUsers">
>>>>>>> mudassir
            <i class="fas fa-fw fa-folder"></i>
            <span>Manage Users</span>
        </a>
        <div id="collapseManageUsers" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
<<<<<<< HEAD
                {{-- <a class="collapse-item" href="{{ route('students.showList') }}">Students</a>
                <a class="collapse-item" href="{{ route('teachers.showList') }}">Teachers</a> --}}
=======
                {{--<!-- <a class="collapse-item" href="{{ route('students.showList') }}">Students</a>
                <a class="collapse-item" href="{{ route('teachers.showList') }}">Teachers</a> -->--}}
>>>>>>> mudassir
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle" style="width:2.5rem !important;"></button>
    </div>

</ul>
<!-- End of Sidebar -->

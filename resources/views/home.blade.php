@extends('layouts.authorized')

@section('customStyles')
<link href="{{asset('css/style-page-1.css')}}" rel="stylesheet">
<link href="{{asset('vendor/video.js/dist/video-js.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-4 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Students Count</div>
                        {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{$studentsCount}}
                    </div> --}}
                </div>
                <div class="col-auto">
                    <i class="fas fa-user fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-4 col-md-4 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Teachers Count</div>
                    {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{$teachersCount}}
                </div> --}}
            </div>
            <div class="col-auto">
                <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-4 col-md-4 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Courses Count</div>
                    {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{$coursesCount}}
                </div> --}}
            </div>
            <div class="col-auto">
                <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@include('layouts.components.alert')

<h1 class="h3 mb-4 text-gray-800">Courses List</h1>
<div class="pd-wrapper pd-create-course card shadow">
    <div class="row pd-box">
        <div class="col-6"></div>
        <div class="col-lg-6 row">
            <form method="GET" action="{{route('home')}}">
                @csrf
                <div class="col-lg-6 pd-flex">
                    {{-- <input type="text" name="search" placeholder="Search..." id="search" class="form-control" value="{{$search}}"> --}}
                    <span><button type="submit" class="btn btn-small btn-primary pd-searchBtn"> <i class="fas fa-search"></i></button></span>
                </div>
            </form>
            <div class="col-lg-6">
                {{-- <a class="btn btn-primary  btn-md pd-create-video" href="{{ route('courses.showCreate') }}"> --}}
                <span>+</span>Create Course</a>
            </div>
        </div>


        <!-- table -->

        <div class="col-lg-12 pd-table-div">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Subject</th>
                        <th scope="col">No Of Students Enrolled</th>
                        <th scope="col">Classes</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($courses as $course)
                    <tr>
                        <td>{{$course->id}}</td>
                    <td width="20%">{{$course->title}}</td>
                    <td>
                        @if($course->status)
                        <span class="badge badge-success badge-md">Active</span>
                        @else
                        <span class="badge badge-warning badge-md">InActive</span>
                        @endif
                    </td>
                    <td width="20%">{{$course->subject->name}}</td>
                    <td>{{$course->studentsOfClasses()->count()}}</td>
                    <td>
                        <button type="button" data-classes="{{$course->classes}}" class="btn btn-sm btn-success view-classes-btn">View</button>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-primary view-course-btn" type="button">Preview</button>
                        <a class="btn btn-sm btn-info" href="{{route('courses.showEdit',['id'=>$course->id])}}">Edit</a>
                        <button class="btn btn-sm btn-danger course-delete-btn" data-delete-url="{{route('courses.tryDelete',['id'=>$course->id])}}">Delete</button>
                    </td>
                    </tr>
                    @endforeach --}}
                </tbody>
            </table>
            {{-- {{ $courses->links() }} --}}
        </div>
        <!-- row end -->
    </div>
</div>

@include('layouts.components.modals.videoPreviewModal')
@include('layouts.components.modals.coursePreviewModal')
@include('layouts.components.modals.courseClassesModal')
@include('layouts.components.modals.deleteConfirmModal')
@endsection

@section('customScripts')
<script src="{{asset('vendor/video.js/dist/video.min.js')}}"></script>
<script src="{{asset('vendor/videojs-youtube/dist/Youtube.min.js')}}"></script>
<script src="{{asset('js/views/home.js')}}"></script>
@endsection

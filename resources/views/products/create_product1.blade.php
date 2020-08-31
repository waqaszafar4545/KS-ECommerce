@extends('layouts.authorized')

@section('customStyles')
<link href="{{asset('css/style-page-1.css')}}" rel="stylesheet">
<link href="{{asset('vendor/video.js/dist/video-js.min.css')}}" rel="stylesheet">
<style>
    .file-drop-zone-title {
        padding: 10px;
    }
</style>
@endsection

@section('content')

@include('layouts.components.alert')

<h1 class="h3 mb-4 text-gray-800">Create Course</h1>
<div class="pd-wrapper pd-create-course card shadow">
    {{-- <!-- <form method="POST" id="create-course-form" action="{{route('courses.tryCreate')}}" novalidate> --> --}}
    <form method="POST" id="create-course-form" action="" novalidate>
        @csrf
        <div class="row pd-box">

            <div class="col-6 pd-form-left-sec">
                <div class="form-group">
                    <label for="title">Product Name</label>
                    <input type="text" required class="form-control" name="title" id="title" aria-describedby="couretitle" placeholder="Enter Product Name">
                </div>
                <br>
                <div class="row">
                    <div class="col-12">
                        <p>Course Cover Image</p>
                        {{-- <!-- <input type="file" id="course-cover-image-uploader" accept="image/*"
                            data-upload-url="{{route('courses.tryUpload')}}"> --> --}}
                        <input type="file" id="course-cover-image-uploader" accept="image/*" data-upload-url="">
                        <input type="hidden" id="uploaded-cover-image-name" name="cover_image">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12">
                        <p>Course Thumbnail Image</p>
                        {{-- <!-- <input type="file" accept="image/*" id="course-thumbnail-image-uploader"
                            data-upload-url="{{route('courses.tryUpload')}}"> --> --}}
                        <input type="file" accept="image/*" id="course-thumbnail-image-uploader" data-upload-url="">
                        <input type="hidden" id="uploaded-thumbnail-image-name" name="thumbnail">
                    </div>
                </div>
                <br>
                <br>
            </div>
            <div class="col-6 pd-right-sec">
                <div class="row">

                    <div class="col-4 pad-0">
                        <p class="pd-w-100">Select School</p>
                        <!-- grade -->
                        <div class="form-group">
                            {{-- <!-- <select class="form-control" required name="school_id" id="exampleFormControlSelect1">
                                <option value="" selected disabled>Select School</option>
                                @foreach ($schools as $school)
                                <option value="{{$school->id}}">{{$school->name}}</option>
                            @endforeach
                            </select> --> --}}
                            <select class="form-control" required name="school_id" id="exampleFormControlSelect1">
                                <option value="" selected disabled>Select School</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 pad-left-15">
                        <p class="pd-w-100">Select Class</p>

                        <!-- grade -->
                        <div class="form-group">
                            {{-- <!-- <select name="class[]" class="form-control" id="class" multiple required>
                                @foreach($classes as $classArray)
                                <optgroup label="Grade - {{$classArray[0]->grade->name}}">
                            @foreach($classArray as $classO)
                            <option value="{{$classO->id}}">{{$classO->name}}</option>
                            @endforeach
                            </optgroup>
                            @endforeach
                            </select> --> --}}
                            <select name="class[]" class="form-control" id="class" multiple required>

                            </select>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <p class="pd-w-100">Select Subject</p>
                        <!-- grade -->
                        <div class="form-group">
                            {{-- <!-- <select class="form-control" required name="subject_id" id="exampleFormControlSelect1">
                                <option value="" selected disabled>Select Subject</option>
                                @foreach ($subjects as $subject)
                                <option value="{{$subject->id}}">{{$subject->name}}</option>
                            @endforeach
                            </select> --> --}}
                            <select class="form-control" required name="subject_id" id="exampleFormControlSelect1">

                            </select>
                            <!-- grade end -->

                        </div>
                    </div>
                </div>
                <br>
                <!-- row end -->
                <div class="row pd-row-back-dang">

                    <div class="col-lg-2 text-center">
                        <label>Select Free</label>
                        <br>
                        <label class="switch">
                            <input type="checkbox" name="is_free">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="col-10 d-none" id="free-video-details">
                        <div class="alert alert-info">
                            <h4 class="alert-heading">Free Video!</h4>
                            <p>This will be a free video</p>
                        </div>
                    </div>
                    <div id="paid-video-details" style="display:contents;">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="text" class="form-control" required name="price">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Discount</label>
                                <input type="text" class="form-control" required name="discount">
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <br />
                <div class="row">
                    <div class="form-group pd-w-100">
                        <label for="exampleFormControlTextarea1">Course Description</label>
                        <textarea class="form-control" required name="description" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                </div>
            </div>

            <!-- col-6 end -->
            <!-- <div class="col-12">
                <p class="pd-w-100">Create Videos by Module</p>
                <div class="col-12 pd-background-vid-overl">
                    <div id="course-modules-wrapper"></div>
                    <button type="button" class="btn btn-primary" id="add-more-module-btn">Add More</button>
                </div>
            </div>
            <div class="col-12 seperator pd-par-stats">

                <label>Active Inactive <span> / Notify Student's parents</span></label>
                <br>
                <label class="switch">
                    <input type="checkbox" name="is_active" checked>
                    <span class="slider round"></span>
                </label>
            </div> -->

            <div class="col-12">
                <button class="btn btn-primary seperator" type="button" id="submit-create-course-btn"><b>Publish</b></button>
            </div>
            <br>


            <!-- row end -->
        </div>
        <input type="hidden" name="selected_videos_and_modules">
    </form>
</div>
{{-- <!-- @include('layouts.components.modals.videoPreviewModal')
@include('layouts.components.modals.selectVideosListModal') --> --}}
@endsection

@section('customScripts')
<script src="{{asset('vendor/video.js/dist/video.min.js')}}"></script>
<script src="{{asset('vendor/videojs-youtube/dist/Youtube.min.js')}}"></script>
<script src="{{asset('js/views/createCourse.js')}}"></script>
@endsection
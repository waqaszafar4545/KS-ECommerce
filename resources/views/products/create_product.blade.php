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

<h1 class="h3 mb-4 text-gray-800">Create Product</h1>
<div class="pd-wrapper pd-create-course card shadow">
    {{-- <!-- <form method="POST" id="create-course-form" action="{{route('courses.tryCreate')}}" novalidate> --> --}}

    <form method="POST" id="create-course-form" action="{{'api/store_product'}}" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="row pd-box">

            <div class="col-6 pd-form-left-sec">
                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" required class="form-control" name="product_name" id="product_name" aria-describedby="couretitle" placeholder="Enter Product Name">
                    @if ($errors->has('product_name'))
                    <span class="invalid feedback" role="alert">
                        <strong>{{ $errors->first('product_name') }}.</strong>
                    </span>
                    @endif
                </div>
                <br>
            </div>
            <div class="col-6 pd-right-sec">
                <!-- row end -->
                <div class="row pd-row-back-dang">
                    <div id="paid-video-details" style="display:contents;">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="text" class="form-control" required name="product_price" placeholder="Enter Product Price">
                                @if ($errors->has('product_price'))
                                <span class="invalid feedback" role="alert">
                                    <strong>{{ $errors->first('product_price') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <br />
            </div>
            <div class="row col-12">
                <div class="form-group pd-w-100">
                    <label for="exampleFormControlTextarea1">Product Description</label>
                    <textarea class="form-control" required name="product_description" id="exampleFormControlTextarea1" rows="5"></textarea>
                    @if ($errors->has('product_description'))
                    <span class="invalid feedback" role="alert">
                        <strong>{{ $errors->first('product_description') }}.</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="col-6 pd-form-left-sec">
                <div class="form-group">
                    <label for="image_title">Image Title</label>
                    <input type="text" required class="form-control" name="image_title" id="image_title" aria-describedby="couretitle" placeholder="Enter Image Title">
                    @if ($errors->has('image_title'))
                    <span class="invalid feedback" role="alert">
                        <strong>{{ $errors->first('image_title') }}.</strong>
                    </span>
                    @endif
                </div>
                <br>
                <div class="row col-12">
                    <div class="form-group pd-w-100">
                        <label for="exampleFormControlTextarea1">Image Description</label>
                        <textarea class="form-control" required name="image_description" id="exampleFormControlTextarea1" rows="5"></textarea>
                        @if ($errors->has('image_description'))
                        <span class="invalid feedback" role="alert">
                            <strong>{{ $errors->first('image_description') }}.</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-6 pd-right-sec">
                <!-- row end -->
                <div class="row pd-row-back-dang">
                    <div class="col-12">
                        <p>Product Cover Image</p>
                        {{-- <!-- <input type="file" id="course-cover-image-uploader" accept="image/*"
                        data-upload-url="{{route('courses.tryUpload')}}"> --> --}}
                        <input type="file" name="product_image" id="course-cover-image-uploader" accept="image/*" data-upload-url="">
                        <!-- <input type="hidden" id="uploaded-cover-image-name" name="product_image"> -->
                        @if ($errors->has('product_image'))
                        <span class="invalid feedback" role="alert">
                            <strong>{{ $errors->first('product_image') }}.</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <br />
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="categoty_title">Category Title</label>
                    <input type="text" required class="form-control" name="categoty_title" id="categoty_title" aria-describedby="couretitle" placeholder="Enter Category Title">
                    @if ($errors->has('categoty_title'))
                    <span class="invalid feedback" role="alert">
                        <strong>{{ $errors->first('categoty_title') }}.</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="col-12">
                <!-- <button class="btn btn-primary seperator" type="button" id="submit-create-course-btn"><b>Create</b></button> -->
                <button class="btn btn-primary seperator" type="submit"><b>Create</b></button>
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
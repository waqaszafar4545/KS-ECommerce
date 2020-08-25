@extends('layouts.app')

@section('content')
<section class="content" style="    margin-top: 20px;">
  <div class="row">

    <div class="col-12">
      <!-- /.card -->
      <div class="card">

        <!-- /.card-header -->
        <div class="card-body ">
          <div class="row zrow py-4">
            <div class="col-md-3 text-center">
              <img class="p-4" src="{{asset('assets/images/window.png')}} " width="139px">
            </div>
            <div class="col-md-3 text-center">
              <img class="p-4" src="{{asset('assets/images/iphone.png')}}" width="139px">
            </div>
            <div class="col-md-3 text-center">
              <img class="p-4" src="{{asset('assets/images/phone.png')}}" width="139px">
            </div>
            <div class="col-md-3 text-center">
              <img class="p-4" src="{{asset('assets/images/iphone.png')}}" width="139px">
              <b class="ios">ios</b>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
@endsection
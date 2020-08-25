@extends('layouts.app')
@section('content') 
@section('topControl') 
   <section class="content" style="margin-top: 40px;"> 
   <div class="container-fluid mt-4">
      <div class="row">
        <div class="col-md-3">
        <canvas id="lineChart1" height=" 300px"></canvas>
        </div>
        <div class="col-md-3">
        <canvas id="lineChart" height=" 300px"></canvas>

        </div>
        <div class="col-md-6">
          <div class="card py-3 mt-3 rounded-0">
           <h5 class="mb-3"> <b class="text-left pl-2 mt-2 d-block">User Management</b></h5>
           <div class="row text-center py-2">
             <div class="col">
               <a href="" class="d-block"><img src="{{asset('assets/images/add.png')}}" style=" width:  75px" alt=""></a>
               <small class="pt-2">Add user</small>
             </div>
             <div class="col">
              <a href="{{route('exhibitor')}}" class="d-block"><img src="{{asset('assets/images/administrator.png')}}" style=" width:  75px" alt=""></a>
              <small class="pt-2">Exhibitors</small>
             </div>
             <div class="col">
              <a href="{{route('showguide')}}" class="d-block"><img src="{{asset('assets/images/u3.png')}}" style="width:  75px" alt=""></a>
              <small class="pt-2">Show Guide</small>
             </div>
              <div class="col">
              <a href="{{route('orletrature')}}" class="d-block"><img src="{{asset('assets/images/u2.png')}}" style="width:  75px" alt=""></a>
              <small class="pt-2">Literature</small>
             </div>
              <div class="col">
              <a href="{{route('orseminarlist')}}" class="d-block"><img src="{{asset('assets/images/u1.png')}}" style="width:  75px" alt=""></a>
              <small class="pt-2">Seminars</small>
             </div>

           </div>
          </div>
        </div>
      </div>
 
@stop 
 
      <div class="row mt-4">
        <div class="col-md-3">
          <div class="card p-2 scroll">
            <small>Stands</small>
            <ul class="list-group">
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-2 scroll">
            <small>Top Visited Stands</small>
            <ul class="list-group">
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-2 scroll">
            <small>Top Search Query</small>
            <ul class="list-group">
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-2 scroll">
            <small>Least Visited Stands</small>
            <ul class="list-group">
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-6">
          <div class="card-map d-flex">
          <div class="w-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317715.711936925!2d-0.38178583985785314!3d51.52873519604862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2s!4v1593884330900!5m2!1sen!2s" width="300" height="244" frameborder="0" style="border:0; margin-bottom:-9px" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <div class="w-100"> <ul class="list-group w-100">
            <li class="justify-content-between d-flex p-1">
              <small>Pak</small>
              <small>566</small>
            </li>
            <li class="justify-content-between d-flex p-1">
              <small>Pak</small>
              <small>566</small>
            </li>
            <li class="justify-content-between d-flex p-1">
              <small>Pak</small>
              <small>566</small>
            </li>
            <li class="justify-content-between d-flex p-1">
              <small>Pak</small>
              <small>566</small>
            </li>
            <li class="justify-content-between d-flex p-1">
              <small>Pak</small>
              <small>566</small>
            </li>
            <li class="justify-content-between d-flex p-1">
              <small>Pak</small>
              <small>566</small>
            </li>
          </ul></div>
        </div>
        </div>
        <div class="col-md-3"> 
           <div class="card p-2 scroll1">
          <small>Top Visited Location</small>
          <ul class="list-group">
            <li class="justify-content-between d-flex p-1">
              <small>device name</small>
              <small>566</small>
            </li>
            <li class="justify-content-between d-flex p-1">
              <small>device name</small>
              <small>566</small>
            </li>
            <li class="justify-content-between d-flex p-1">
              <small>device name</small>
              <small>566</small>
            </li>
            <li class="justify-content-between d-flex p-1">
              <small>device name</small>
              <small>566</small>
            </li>
            <li class="justify-content-between d-flex p-1">
              <small>device name</small>
              <small>566</small>
            </li>
            <li class="justify-content-between d-flex p-1">
              <small>device name</small>
              <small>566</small>
            </li>
          </ul>
        </div></div>
        <div class="col-md-3">

          <div class="card p-2 scroll1">
            <small>Stands Owners</small>
            <ul class="list-group">
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>Pak</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
              <li class="justify-content-between d-flex p-1">
                <small>device name</small>
                <small>566</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
      </div>
    </section>
 
     
    <strong>Copyright &copy; 2020 AloExpo.</strong>
    All rights reserved Powered By  <a href="https://codebyuk.com/" target=”_blank”>CodeByUK</a> 
     
    <!-- /.content -->
    @endsection
    @section('js')
    @parent
<script>
  //line
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
type: 'line',
data: {
labels: ["January", "February", "March", "April", "May", "June", "July"],
datasets: [{
label: "Ative User    67090",
data: [6, 29, 20, 45, 35, 65, 75],
backgroundColor: [
'#76a7cf30',
],
borderColor: [
'#76a7cf',
],
borderWidth: 2
},

]
},
options: {
responsive: true
}
});
var ctxL1 = document.getElementById("lineChart1").getContext('2d');
var myLineChart = new Chart(ctxL1, {
type: 'line',
data: {
labels: ["January", "February", "March", "April", "May", "June", "July"],
datasets: [{
label: "Total User   959870",
data: [6, 29, 20, 45, 35, 65, 90],
backgroundColor: [
'#76a7cf30',
],
borderColor: [
'#76a7cf',
],
borderWidth: 2
},

]
},
options: {
responsive: true
}
});
</script>
@stop
@extends('layouts.app')
@section('content')
      <section class="content">
      <div class="row">
           
        <div class="col-12">
           <!-- /.card -->
          <div class="card"> 
            <!-- /.card-header -->
            <div class="card-body"> 
              <div class="row zrow">
               
               <div class="col-md-6 Literature">
                        <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Title</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input rounded-0" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01">
                          <label class="custom-file-label rounded-0 " for="inputGroupFile01"></label> 

                        </div>
                           <div class="input-group-prepend">
                             <span class="input-group-text plus" >  <a href="#">+</a></span>
                          </div>
                      </div>
                        <div class="input-group mt-4 pb-4">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Title</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input rounded-0" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01">
                          <label class="custom-file-label rounded-0 " for="inputGroupFile01"></label> 
                          
                        </div>
                            <div class="input-group-prepend">
                           <span class="input-group-text plus" >  <a href="#">+</a></span>
                          </div>
                      </div>

               </div>
                <div class="col-md-6 az-right Literature">
                  
                  <table id="example" class="table table-bordered" style="width:100% ;background-color: white;">
                    <tr>
                      <th  style="font-size: 10px;    width: 4%;">Brochure 1</th>
                      <td style="font-size: 10px;    width: 4%;">Https://amoexpo.com/hfhh3wjf/1/showguide.pdf</td>
                      <td  style="font-size: 10px;    width: 4%;"><a class="edit float-left">X</a><a class="float-right"><img src="{{asset('assets/images/view.png')}}" width="25px;"></a></td>
                    </tr>
                    <tr>
                      <th  style="font-size: 10px;    width: 4%;">Brochure 2</th>
                      <td  style="font-size: 10px;    width: 4%;">Https://amoexpo.com/hfhh3wjf/1/showguide.pdf</td>
                      <td  style="font-size: 10px;    width: 4%;"><a class="edit float-left">X</a><a class="float-right"><img src="{{asset('assets/images/view.png')}}" width="25px;"></a></td>
                    </tr>
                  </table>
                </div>

              </div>
            <!-- /.card-body -->
          </div>
 
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    @endsection

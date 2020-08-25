@extends('layouts.app')

@section('content')
<section class="content" style="    margin-top: 20px;">
      <div class="row">
           
        <div class="col-12">
           <!-- /.card -->
          <div class="card"> 
               
            <div class="row">
            
            <!-- /.card-header -->
            <div class="card-body"> 
              <div class="row zrow">
               
               <div class="form Exhibitions">
               	<div class="max-exhibitions">
               	<div class="input-group">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="inputGroupFileAddon01">PDF Upload</span>
					  </div>
					  <div class="custom-file">
					    <input type="file" class="custom-file-input rounded-0" id="inputGroupFile01"
					      aria-describedby="inputGroupFileAddon01">
					    <label class="custom-file-label rounded-0 " for="inputGroupFile01"></label> 

					  </div>
					</div>
						<div class="input-group mt-4 pb-4">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="inputGroupFileAddon01">CSV Upload</span>
					  </div>
					  <div class="custom-file">
					    <input type="file" class="custom-file-input rounded-0" id="inputGroupFile01"
					      aria-describedby="inputGroupFileAddon01">
					    <label class="custom-file-label rounded-0 " for="inputGroupFile01"></label> 

					  </div>
					</div>

					<table id="example" class="table table-bordered mt-4" style="width:100%">
						<tr>
							<th>Show Guide PDF</th>
							<td>/abc/exmaple.pdf</td>
							<td><a class="edit float-left">X</a><a class="float-right"><img src="{{asset('assets/images/view.png')}}" width="25px;"></a></td>
						</tr>
            <tr>
              <th>Show Guide PDF</th>
              <td>/abc/exmaple.pdf</td>
              <td><a class="edit float-left">X</a><a class="float-right"><img src="{{asset('assets/images/view.png')}}" width="25px;"></a></td>
            </tr>
					</table>
          </div>
          <button type="submit" class="btn btn-primary mb-2 float-right rounded-0 px-4 btn-save">Save</button> 
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

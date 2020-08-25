@extends('layouts.app')

@section('content')
<section class="content" style="    margin-top: 20px;">
  <div class="row">

    <div class="col-12">
      <!---tabs-->
      <ul class="nav nav-pills " id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active rounded-0 mr-2" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Exhibition List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link rounded-0" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Exhibition Details</a>
        </li>

      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <!-- /.card -->
          <div class="card">

            <div class="row">

              <!-- /.card-header -->
              <div class="card-body">
                <div class="row zrow">
                  <h3 class="zh3">Exhibitors</h3>
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      <tr>

                        <th style="font-size: 10px;    width: 15%;">Contact Name</th>
                        <th style="font-size: 10px;    width: 10%;">Company</th>
                        <th style="font-size: 10px;    width: 8%;">Title</th>
                        <th style="font-size: 10px;    width: 8%;">Email</th>
                        <th style="font-size: 10px;    width: 8%;">Mobail No</th>
                        <th style="font-size: 10px;    width: 8%;">Group</th>
                        <th style="font-size: 10px;    width: 8%;">Cards</th>
                        <th style="font-size: 10px;    width: 8%;">Notes</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td></td>
                        <td></td>
                        <td> </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td></td>
                        <td> </td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td></td>
                        <td> </td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td></td>
                        <td> </td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td></td>
                        <td></td>
                        <td> </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>

                    </tbody>

                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <!-- /.card -->
          <div class="card">

            <div class="row">

              <!-- /.card-header -->
              <div class="card-body">
                <div class="row zrow">
                  <h3 class="zh3">Exhibitors Details</h3>
                  <div class="form Exhibitions">
                    <div class="max-exhibitions">
                      <div class="form-group row">
                        <label for="input1" class="col-sm-3 col-form-label">Exhibitions Title</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control rounded-0" id="input1">
                        </div>
                      </div>
                      <!---form-group--->

                      <div class="form-group row">
                        <label for="input2" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control rounded-0" id="input2">
                        </div>
                      </div>
                      <!---form-group--->

                      <div class="form-group row">
                        <label for="input3" class="col-sm-3 col-form-label">Logo</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control rounded-0" id="input3">
                        </div>
                      </div>
                      <!---form-group--->

                      <div class="form-group row">
                        <label for="input4" class="col-sm-3 col-form-label">Start Date</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control rounded-0" id="input4">
                        </div>
                      </div>
                      <!---form-group--->

                      <div class="form-group row">
                        <label for="input5" class="col-sm-3 col-form-label">End Date</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control rounded-0" id="input5">
                        </div>
                      </div>
                      <!---form-group--->

                      <div class="form-group row">
                        <label for="input6" class="col-sm-3 col-form-label">Planned Visitors</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control rounded-0" id="input6">
                        </div>
                      </div>
                      <!---form-group--->
                    </div>
                    <!---max width-->

                    <div class="col-auto ">
                      <button type="submit" class="btn btn-primary mb-2 float-right rounded-0 px-4 btn-save">Save</button>
                    </div>

                  </div>
                  <!----form-->
              </div>
            <!-- /.card-body -->
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>

        </div>
        <!--tabs--->


        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>
@endsection
<!-- /.content -->
 
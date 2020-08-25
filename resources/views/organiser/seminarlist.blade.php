@extends('layouts.app')
@section('content')
<section class="content" style="    margin-top: 20px;">
  <div class="row">

    <div class="col-12">
      <ul class="nav nav-pills" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active mr-2 rounded-0" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Seminar List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link rounded-0" id="pills-profile-tab " data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Add Seminar</a>
        </li>

      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <!-- /.card -->
          <div class="card">



            <!-- /.card-header -->
            <div class="card-body">
              <div class="row zrow">
                <div class="col-md-2">
                  <button type="submit" class="btn btn-primary mb-2 float-right rounded-0 px-4 btn-save w-100">Theatre 1</button>
                  <button type="submit" class="btn btn-primary mb-2 float-right rounded-0 px-4 btn-save w-100">Theatre 2</button>
                  <button type="submit" class="btn btn-primary mb-2 float-right rounded-0 px-4 btn-save w-100">Theatre 3</button>
                  <button type="submit" class="btn btn-primary mb-2 float-right rounded-0 px-4 btn-save w-100">Theatre 4</button>
                  <button type="submit" class="btn btn-primary mb-2 float-right rounded-0 px-4 btn-save w-100">Theatre 5</button>
                  <button type="submit" class="btn btn-primary mb-2 float-right rounded-0 px-4 btn-save w-100">Theatre 6</button>
                  <button type="submit" class="btn btn-primary mb-2 float-right rounded-0 px-4 btn-save w-100">Theatre 7</button>

                </div>
                <div class="col-md-10">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      <tr>

                        <th class="seminorlist_td" >Date</th>
                        <th class="seminorlist_td">Start</th>
                        <th class="seminorlist_td">End</th>
                        <th class="seminorlist_td">Host</th>
                        <th class="seminorlist_td">Title</th>
                        <th class="seminorlist_td">Host Link</th>
                        <th class="seminorlist_td"></th>

                    </thead>
                    <tbody>
                      <tr>
                        <td>15/11/20 </td>
                        <td>9:00 </td>
                        <td> 11:00</td>
                        <td>Dr Theodore </td>
                        <td>Effects of Diabetes with Medication Control Over a long period of time </td>
                        <td>Https://amoexpo.com/hfhh3wj f/1/showguide.pdf</td>
                        <td><a class="edit float-left">X</a><a class="float-right"><img src="{{asset('assets/images/view.png')}}" width="25px;"></td>

                      </tr>
                      <tr>
                        <td>15/11/20 </td>
                        <td>9:00 </td>
                        <td> 11:00</td>
                        <td>Dr Theodore </td>
                        <td>Effects of Diabetes with Medication Control Over a long period of time </td>
                        <td>Https://amoexpo.com/hfhh3wj f/1/showguide.pdf</td>
                        <td><a class="edit float-left">X</a><a class="float-right"><img src="{{asset('assets/images/view.png')}}" width="25px;"></td>

                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

        </div>
        <!---tabs-->
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row zrow">
                <div class="col-md-2">
                  <button type="submit" class="btn btn-primary mb-2 float-right rounded-0 px-4 btn-save w-100">Theatre 1</button>
                  <button type="submit" class="btn btn-primary mb-2 float-right rounded-0 px-4 btn-save w-100">Theatre 2</button>
                  <button type="submit" class="btn btn-primary mb-2 float-right rounded-0 px-4 btn-save w-100">Theatre 3</button>
                  <button type="submit" class="btn btn-primary mb-2 float-right rounded-0 px-4 btn-save w-100">Theatre 4</button>
                  <button type="submit" class="btn btn-primary mb-2 float-right rounded-0 px-4 btn-save w-100">Theatre 5</button>
                  <button type="submit" class="btn btn-primary mb-2 float-right rounded-0 px-4 btn-save w-100">Theatre 6</button>
                  <button type="submit" class="btn btn-primary mb-2 float-right rounded-0 px-4 btn-save w-100">Theatre 7</button>
                </div>
                <div class="col-md-10">
                  <div class="form-group row Seminar">
                    <label for="input1" class="col-sm-1 col-form-label">Date</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control rounded-0" id="input1">
                    </div>
                    <label for="input1" class="col-sm-1 col-form-label">Start</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control rounded-0" id="input2">
                    </div>
                    <label for="input1" class="col-sm-1 col-form-label">End</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control rounded-0" id="input3">
                    </div>
                  </div>
                  <div class="form-group row Seminar">
                    <label for="input1" class="col-sm-2 col-form-label">Host</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control rounded-0" id="input1">
                    </div>
                  </div>
                  <div class="form-group row Seminar">
                    <label for="input1" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control rounded-0" id="input1">
                    </div>
                  </div>
                  <div class="form-group row Seminar">
                    <label for="input1" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                      <textarea type="text" class="form-control rows=" 3" rounded-0" id="input1"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary mb-2 float-right rounded-0 px-4 btn-save">Save</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!---tabs-->

      </div>

      <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection
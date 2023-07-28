@extends('backend.dashboard_layout.main')
@section('main-content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Start Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Reservation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="m-0">Edit Reservation</h5>
                </div>
                <div class="card-body">
                <form action="{{url('update_reservation',$data->id)}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                  <div class="row">
                  <div class="col-6">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" value="{{$data->name}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" value="{{$data->email}}">
                        </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone Number" value="{{$data->phone}}">
                        </div>
                    </div>
                  <div class="col-6"> 
                    <div class="form-group">
                        <label for="exampleInputEmail1">Date</label>
                        <input type="date" name="date" class="form-control" id="exampleInputEmail1" placeholder="Enter Date" value="{{$data->date}}">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Time</label>
                        <input type="time" name="time" class="form-control" id="exampleInputEmail1" value="{{$data->time}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Guest</label>
                        <input type="number" name="guest" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter Number of Guest" value="{{$data->guest}}">
                      </div>                      
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">.</label>
                            <input type="submit" class="btn btn-primary btn-block" value="Save">
                            </div>
                    </div>
                  <!-- /.card-body -->
                </form>
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
            
          </div>
          <!-- /.row -->
      </div>
    <!-- /.content -->
  </div>
@endsection
  <!-- Content Wrapper. Contains page content -->
  

<!-- ./wrapper -->

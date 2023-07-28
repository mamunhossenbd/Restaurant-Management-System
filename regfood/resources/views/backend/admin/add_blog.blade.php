
@extends('backend.dashboard_layout.main'); 
@section('main-content');
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
              <li class="breadcrumb-item active">About</li>
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
                <h5 class="m-0">Add Blog</h5>
              </div>
              <div class="card-body">
              <form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder=" Enter Name" >
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Bloger Name</Details></label>
                      <input type="text" name="bloger_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Details" >
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Date</label>
                      <input type="date" name="date" class="form-control" id="exampleInputEmail1" placeholder="Enter date" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title" >
                    </div>

                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Details</label>
                        <input type="text" name="details" class="form-control" id="exampleInputEmail1" placeholder="Enter details" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Like</label>
                        <input type="text" name="like" class="form-control" id="exampleInputEmail1" placeholder="Enter like" >
                    </div>

                    <div class="form-group">
                      <label for="exampleInputFile">Photo</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputFile">Bloger Photo</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="bloger_photo" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1"></label>
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

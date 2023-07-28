


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
                <h5 class="m-0">Edit About</h5>
              </div>
              <div class="card-body">
              <form action="{{route('ab.update',$out->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Title" value="{{$out->title}}" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Details</Details></label>
                      <input type="text" name="details" class="form-control" id="exampleInputEmail1" placeholder="Enter Details" value="{{$out->details}}" >
                  </div>
                    </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Experience</label>
                        <input type="text" name="experience" class="form-control" id="exampleInputEmail1" placeholder="Enter experience" value="{{$out->experience}}" >
                    </div>
                    
                    <div>
                        <label for="">Old photo</label>
                        <img src="{{ asset('/uploads/'.$out->photo) }}" style='height:60px; width:80px;'/>
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



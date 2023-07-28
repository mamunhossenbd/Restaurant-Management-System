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
              <li class="breadcrumb-item active">Product Category</li>
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
                <h5 class="m-0">Edit Product Category</h5>
              </div>
              <div class="card-body">
              <form action="{{route('category.update',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="card-body">
                <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$data->name}}" >
                    </div>
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

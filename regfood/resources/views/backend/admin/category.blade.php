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
                <h5 class="m-0">Add Product Category</h5>
              </div>
              <div class="card-body">
              <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Product Category Name" >
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
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">             
            <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0">Product Category List</h5>
            </div>
          
            <div class="card-body">
              <table class="table table-bordered">
                  <tr>
                      <th>SL</th>
                      <th>Name</th>
                      <th>Action</th>
                  </tr>
                  @foreach ($list as $k=>$v)
                  <tr>
                    <td>{{$k+1}}</td>
                    <td>{{$v->name}}</td>
                    <td>
                      <a href="{{route('category.edit',$v->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                      <form action="{{route('category.destroy',$v->id)}}" method="post">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-danger"><i class='fas fa-trash'></i></button>
                      </form>
                    </td>
                </tr>
                  @endforeach
                     
              </table>
            </div>
          </div>
    </div><!-- /.container-fluid -->
            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
        
      </div>
      <!-- /.row -->
  </div>
@endsection
  <!-- Content Wrapper. Contains page content -->
  

<!-- ./wrapper -->

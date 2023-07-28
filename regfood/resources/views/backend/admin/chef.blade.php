
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
                <h5 class="m-0">Chefs List</h5>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Photo</th>
                        <th>Designation</th>
                        <th>Action</th>
                    </tr>
                       
                    @foreach($hello as $key=>$v)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$v->name}}</td>
                            <td><img src="{{ asset('/uploads/'.$v->photo) }}" style='height:60px; width:80px;'/></td>
                            <td>{{$v->designation}}</td>
                            <td>
                              <a href="{{route('cheff.edit',$v->id)}}" class="btn btn-success btn-xs"><input type="submit" value="Edit"></a>
                              <form  method="post" action="{{route('cheff.destroy',$v->id)}}" class="btn btn-danger btn-xs">
                                 @method('DELETE')
                                 @csrf
                                 <input type="submit" value="Delete">
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
    <!-- /.content -->
  </div>
@endsection


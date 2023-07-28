
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
                <h5 class="m-0">Reservation List</h5>
              </div>
              <a href="{{url('reservation_create')}}"><button class="btn btn-success large">Add Reservation</button>+</a>
            
              <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Guest</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($list as $k=>$v)
                    <tr>
                      <td>{{$k+1}}</td>
                      <td>{{$v->name}}</td>
                      <td>{{$v->email}}</td>
                      <td>{{$v->phone}}</td>
                      <td>{{$v->date}}</td>
                      <td>{{$v->time}}</td>
                      <td>{{$v->guest}}</td>
                      <td>
                        <a href="{{url('reservation_edit',$v->id)}}" class="btn btn-primary"><i class="fa fa-edit"style="font-size:24px"></i></a>
                        <form action="{{url('reservation_delete',$v->id)}}" method="post" style="display: inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger"><i class='fas fa-trash' style="font-size:24px"></i></button>
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


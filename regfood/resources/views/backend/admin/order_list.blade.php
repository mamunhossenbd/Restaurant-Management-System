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
              <li class="breadcrumb-item active">Product</li>
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
                <h5 class="m-0">Order List</h5>
              </div>
              {{-- <a href="{{route('product.create')}}"><button class="btn btn-success large">Add Product</button>+</a> --}}

              <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($order_list as $k=>$v)
                    <tr>
                      <td>{{$k+1}}</td>
                      <td>{{$v->first_name}}</td>
                      <td>{{$v->last_name}}</td>
                      <td>{{$v->email}}</td>
                      <td>{{$v->phone}}</td>
                      <td>{{$v->amount}}</td>
                      <td>{{$v->status}}</td>
                      <td>
                        <a href="{{url('edit_order',$v->id)}}" class="btn btn-primary"><i class="fa fa-edit" style="font-size:24px"></i></a>
                        <form action="{{url('delete_order',$v->id)}}" method="post" style="display: inline">
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


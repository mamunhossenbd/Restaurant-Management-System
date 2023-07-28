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
              <li class="breadcrumb-item active">Coupon</li>
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
                <h5 class="m-0">Coupon List</h5>
              </div>
              <a href="{{route('coupon.create')}}"><button class="btn btn-success large">Add Coupon</button>+</a>

              <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Coupon Name</th>
                        <th>Discount</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($coupon as $k=>$v)
                    <tr>
                      <td>{{$k+1}}</td>
                      <td>{{$v->coupon_name}}</td>
                      <td>{{$v->discount}}</td>
                      <td>{{$v->status}}</td>
                      <td>
                        <a href="{{route('coupon.edit',$v->id)}}" class="btn btn-primary"><i class="fa fa-edit" style="font-size:24px"></i></a>
                        <form action="{{route('coupon.destroy',$v->id)}}" method="post" style="display: inline">
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


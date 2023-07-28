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
                                <h5 class="m-0">Add Coupon</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('coupon.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Coupon Name</label>
                                                    <input type="text" name="coupon_name" class="form-control"
                                                        id="exampleInputEmail1" placeholder="Coupon Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Discount Amount</label>
                                                    <input type="text" name="discount" class="form-control"
                                                        id="exampleInputEmail1" placeholder="Discount Amount">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Status</label>
                                                    <select name="status" id="" class="form-control">
                                                        <option value="active">Active</option>
                                                        <option value="inactive">Inactive</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">.</label>
                                                    <input type="submit" class="btn btn-primary btn-block" value="Save">
                                                </div>
                                            </div>
                                        </div> <!-- /.card-body -->
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->

                </div>
                <!-- /.row -->
            </div>

            <div class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary card-outline">
                        <div class="card-header">
                          <h5 class="m-0">Coupon List</h5>
                        </div>
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
            <!-- /.col-md-6 -->

        </div>
        <!-- /.row -->
    </div>
@endsection


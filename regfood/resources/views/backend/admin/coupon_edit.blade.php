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
                                <h5 class="m-0">Edit Coupon</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{route('coupon.update',$coupon->id)}}" method="post" enctype="multipart/form-data">
                                    @method('Put')
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Coupon Name</label>
                                                    <input type="text" name="coupon_name" class="form-control"
                                                        id="exampleInputEmail1"value="{{$coupon->coupon_name}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Discount Amount</label>
                                                    <input type="text" name="discount" class="form-control"
                                                        id="exampleInputEmail1" value="{{$coupon->discount}}">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Status</label>
                                                    <select name="status" id="" class="form-control">
                                                        <option value="{{$coupon->status}}">{{$coupon->status}}</option>
                                                        <option value="active">Active</option>
                                                        <option value="inactive">Inactive</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">.</label>
                                                    <input type="submit" class="btn btn-primary btn-block" value="Update">
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

        </div>
        <!-- /.row -->
    </div>
@endsection

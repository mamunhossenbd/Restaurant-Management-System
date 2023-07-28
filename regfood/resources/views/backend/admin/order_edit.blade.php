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
                            <li class="breadcrumb-item active">Order</li>
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
                                <h5 class="m-0">Edit Order</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('update_order',$order_edit->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">First Name</label>
                                                    <input type="text" name="first_name" class="form-control"
                                                        id="exampleInputEmail1" value="{{$order_edit->first_name}}"
                                                        >
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Last Name</label>
                                                    <input type="text" name="last_name" class="form-control"
                                                        id="exampleInputEmail1" value="{{$order_edit->last_name}}">
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">Email</label>
                                                  <input type="text" name="email" class="form-control"
                                                      id="exampleInputEmail1" value="{{$order_edit->email}}">
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">Phone</label>
                                                  <input type="text" name="phone" class="form-control"
                                                      id="exampleInputEmail1" value="{{$order_edit->phone}}">
                                                </div>                                           
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">District</label>
                                                    <input type="text" name="district" class="form-control"
                                                    id="exampleInputEmail1" value="{{$order_edit->district}}">
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">City</label>
                                                  <input type="text" name="city" class="form-control"
                                                  id="exampleInputEmail1" value="{{$order_edit->city}}">  
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">Apartment</label>
                                                  <input type="text" name="apartment" class="form-control"
                                                  id="exampleInputEmail1" value="{{$order_edit->apartment}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Amount</label>
                                                    <input type="text" name="amount" class="form-control"
                                                    id="exampleInputEmail1" value="{{$order_edit->amount}}">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                              
                                                <div class="form-group">
                                                <label for="exampleInputEmail1">Status</label><br>
                                                @php
                                                    $status = $order_edit->status;
                                                @endphp
                                                <input type="radio" name="status" value="pending" {{ $status === 'pending' ? 'checked' : '' }}>
                                                <label for="status">Pending</label>
                                                <input type="radio" name="status" value="delivered" {{ $status === 'delivered' ? 'checked' : '' }}>
                                                <label for="status">Delivered</label>
                                            </div>
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">Zip</label>
                                                  <input type="text" name="zip" class="form-control"
                                                  id="exampleInputEmail1" value="{{$order_edit->apartment}}">
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">Aditional Information</label>
                                                  <input type="text" name="aditional_information" class="form-control"
                                                  id="exampleInputEmail1" value="{{$order_edit->aditional_information}}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" name="user_id" value="{{$order_edit->user_id}}">
                                                    <input type="submit" class="btn btn-primary btn-block" value="Update">
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

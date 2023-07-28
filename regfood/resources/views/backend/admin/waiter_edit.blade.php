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
                            <li class="breadcrumb-item active">Waiter</li>
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
                                <h5 class="m-0">Edit Waiter</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('waiter.update',$waiter->id) }}" method="post" enctype="multipart/form-data">
                                    @method("put")
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name</label>
                                                    <input type="text" name="name" class="form-control"
                                                        id="exampleInputEmail1" value="{{$waiter->name}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="text" name="email" class="form-control"
                                                        id="exampleInputEmail1" value="{{$waiter->email}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Status</label>
                                                    <select name="status" id="" class="form-control">
                                                        <option value="{{$waiter->status}}">{{$waiter->status}}</option>
                                                        <option value="active">Active</option>
                                                        <option value="inactive">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Phone</label>
                                                    <input type="text" name="phone" class="form-control"
                                                        id="exampleInputEmail1" value="{{$waiter->phone}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Address</label>
                                                    <input type="text" name="address" class="form-control"
                                                        id="exampleInputEmail1" value="{{$waiter->address}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Photo</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" name="photo" class="custom-file-input"
                                                                id="exampleInputFile">
                                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"><img src="{{asset('uploads/'.$waiter->photo)}}" width="100" height="80"/></label>
                                                    <label for="exampleInputEmail1">.</label>
                                                    <input type="submit" class="btn btn-primary btn-block" value="Update">
                                                </div>
                                            </div>
                                        </div>  <!-- /.card-body -->
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

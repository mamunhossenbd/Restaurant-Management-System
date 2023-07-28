@extends('backend.dashboard_layout.main');
@section('main-content');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <!-- /.col-md-12 -->
          <div class="col-lg-12">
            <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Edit Genarel Information</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                  <form action="{{ route('genarel.update', $genarel->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">

                      <div class="col-sm-6">
                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <input type="file" name="logo" id="logo" class="form-control" value="{{ $genarel->logo }}">
                            @if ($genarel->logo)
                                <div class="mt-2">
                                    <img src="{{ asset('/uploads/'.$genarel->logo) }}" alt="logo"style="height: 50px; width: 100px;">
                                </div>
                            @endif
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label for="banner">Banner</label>
                            <input type="file" name="banner" id="banner" class="form-control" value="{{ $genarel->banner }}">
                            @if ($genarel->banner)
                                <div class="mt-2">
                                    <img src="{{ asset('/uploads/'.$genarel->banner) }}" alt="banner"style="height: 50px; width: 100px;">
                                </div>
                            @endif
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                            <label for="title">Company Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $genarel->name }}">
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $genarel->email }}">
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" name="phone" id="phone" class="form-control" value="{{ $genarel->phone }}">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label for="goles">Goles</label>
                            <input type="text" name="goles" id="goles" class="form-control" value="{{ $genarel->goles }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control" value="{{ $genarel->address }}">
                        </div>
                      </div>
                      <div class="col-sm-6">

                        <div class="form-group">
                            <label for="map">Map</label>
                            <input type="text" name="map" id="map" class="form-control" value="{{ $genarel->map }}">
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Mission</label>
                            <textarea class="form-control" name="mission" rows="3" placeholder="Enter ...">{{ $genarel->mission }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Vision</label>
                            <textarea class="form-control" name="vission" rows="3" placeholder="Enter ...">{{ $genarel->vission }}</textarea>
                        </div>
                    </div>

                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>

                  </form>
                </div>
                <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  @endsection
  <!-- /.content-wrapper -->







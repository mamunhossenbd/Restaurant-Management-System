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
            <div class=" container-fluid col-lg-12  card card-header">
              <div class="card card-dark">
                <div class="card-header">
                  <h3 class="card-title">Testimonial List</h3>
                </div>
              </div>
                

                <a href="{{ route('testimonial.create') }}" class="btn btn-primary  col-md-3">Create Testimonial</a>

                <table class="table">
                    <thead>
                        
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Photo</th>
                            <th>Location</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                            
                    </thead>
                    <tbody>
                        @foreach($testimonials as $key=>$testimonial)
                            <tr>
                                <td>{{ $key+1}}</td>
                                <td>{{ $testimonial->name }}</td>
                                <td><img src="{{ asset('/uploads/'.$testimonial->photo) }}" style="height: 50px; width: 100px;">
                                </td>
                                <td>{{ $testimonial->location }}</td>
                                <td>{{ $testimonial->description }}</td>
                                
                                <td>
                                    <a href="{{ route('testimonial.edit', $testimonial->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class='fas fa-trash'></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
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

 





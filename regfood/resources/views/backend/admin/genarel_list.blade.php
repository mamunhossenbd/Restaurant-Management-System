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
            <div class=" container-fluid col-lg-12  card">
                <h1>General Information List</h1>

                <a href="{{ route('genarel.create') }}" class="btn btn-primary  col-md-3">Create Genarel Information</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Logo</th>
                            <th>Banner</th>
                            <th>Email</th>
                            <th>Phone</th>
                            {{-- <th>Address</th>
                            <th>Map</th>
                            <th>Mission</th>
                            <th>Vission</th>
                            <th>Goles</th> --}}
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($genarel as $key=>$genarel)
                            <tr>
                                <td>{{ $key+1}}</td>
                                <td>{{ $genarel->name }}</td>
                                <td><img src="{{ asset('/uploads/'.$genarel->logo) }}" style="height: 50px; width: 100px;">
                                </td>
                                <td><img src="{{ asset('/uploads/'.$genarel->banner) }}" style="height: 50px; width: 100px;">
                                </td>
                                <td>{{ $genarel->email }}</td>
                                <td>{{ $genarel->phone }}</td>
                                {{-- <td>{{ $genarel->address }}</td>
                                <td>{{ $genarel->map }}</td>
                                <td>{{ $genarel->mission }}</td>
                                <td>{{ $genarel->vission }}</td>
                                <td>{{ $genarel->goles }}</td> --}}
                                <td>
                                    <a href="{{ route('genarel.edit', $genarel->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('genarel.show', $genarel->id) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                    <form action="{{ route('genarel.destroy', $genarel->id) }}" method="POST" style="display: inline">
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







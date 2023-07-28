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
                <h1>Team List</h1>

                <a href="{{ route('team.create') }}" class="btn btn-primary  col-md-3">Create Team</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Photo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teams as $key=>$team)
                            <tr>
                                <td>{{ $key+1}}</td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->designation }}</td>
                                <td><img src="{{ asset('/uploads/'.$team->photo) }}" style="height: 50px; width: 100px;">
                                </td>

                                <td>
                                    <a href="{{ route('team.edit', $team->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('team.destroy', $team->id) }}" method="POST" style="display: inline">
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







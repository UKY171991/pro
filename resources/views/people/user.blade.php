@extends('layouts')

@section('title', 'Dashboard Page')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ $title }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add User</h3>

                <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active btn-sm" href="{{url('/add-user')}}" data-tt="tooltip" title="" data-original-title="Click here to Add Bank Account">
                      <i class="fas fa-user-cog mr-2"></i>Add User</a>
                  </li>
                </ul>
              </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>User Role</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<tr>
                  	<td>Max</td>
                  	<td>Solutions</td>
                  	<td>admin</td>
                  	<td>Administrator</td>
                  	<td>admin@zivaansolutions.com</td>
                  	<td>9510131490</td>
                  	<td>
                  		<a href="{{url('/edit-user/1')}}" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
                  	</td>
                  </tr>
                  <tr>
                  	<td>Max</td>
                  	<td>Solutions</td>
                  	<td>admin</td>
                  	<td>Administrator</td>
                  	<td>admin@zivaansolutions.com</td>
                  	<td>9510131490</td>
                  	<td>
                  		<a href="{{url('/edit-user/1')}}" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
                  	</td>
                  </tr>
                  <tr>
                  	<td>Max</td>
                  	<td>Solutions</td>
                  	<td>admin</td>
                  	<td>Administrator</td>
                  	<td>admin@zivaansolutions.com</td>
                  	<td>9510131490</td>
                  	<td>
                  		<a href="{{url('/edit-user/1')}}" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
                  	</td>
                  </tr>
                  </tbody>
                </table>
              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
</div>
@endsection
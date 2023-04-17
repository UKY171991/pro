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
                <h3 class="card-title">Supplier</h3>

                <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active btn-sm" href="{{url('/add-supplier')}}" data-tt="tooltip" title="" data-original-title="Click here to Add supplier">
                      <i class="fas fa-user-cog mr-2"></i>Add supplier</a>
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
                    <th>Company Name</th>
                    <th>Registration Type</th>
                    <th>GSTIN</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Contact Person Name</th>
                    <th>Contact Person Designation</th>
                    <th>Website</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<tr>
                  	<td>Max</td>
                  	<td>Not Registered</td>
                  	<td>dfvbggrgf</td>
                  	<td>admin@zivaansolutions.com</td>
                  	<td>abc</td>
                  	<td>abc</td>
                  	<td>sdfc</td>
                  	<td>hgf</td>
                  	<td class="btn-group">
                  		<a href="{{url('/view-supplier/1')}}" class="btn btn-default btn-xs" data-tt="tooltip" title="View supplier"><i class="fas fa-eye"></i> View</a>
                  		<a href="{{url('/edit-supplier/1')}}" class="btn btn-info btn-xs"><i class="fas fa-edit"></i>Edit</a>
                  		<a href="#" data-toggle="modal" data-target="#delete_customer" data-tt="tooltip" title="Delete Customer" class="btn btn-danger btn-xs delete_customer" data-customer_id="10"><i class="fas fa-trash"></i> Delete</a>
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
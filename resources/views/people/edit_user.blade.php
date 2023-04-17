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
                <h3 class="card-title">Add User role</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<div class="row d-flex justify-content-center">
              	<div class="col-8">

              	<div class="form-group">
              		<label for="inputEmail3">User Role</label>
              		<select class="form-control select2" name="role_id" id="role_id" >
                        <option value="" data-select2-id="2">Select</option>
                        <option value="1">Administrator</option>
                        <option value="8">Warehouse Manager your work</option>
                        <option value="9">Sales Manager</option>
                        <option value="10">Sales person</option>
                        <option value="11"> Sales manager</option>
                        <option value="12">Sales Accountant</option>
                        <option value="13">saas</option>
                        <option value="14">aa</option>
                        <option value="15">ABCD</option>
                        <option value="16">IT</option>
                        <option value="17">permission</option>
                        <option value="18">haisam</option>
                    </select>
                </div>
              	<div class="form-group mt-2">
              		<label>FIrst Name <span class="text-danger">*</span></label>
              		<input type="" name="" class="form-control">
              	</div>

              	<div class="form-group mt-2">
              		<label>Last Name <span class="text-danger">*</span></label>
              		<input type="text" name="" class="form-control">
              	</div>

              	<div class="form-group mt-2">
              		<label>Email <span class="text-danger">*</span></label>
              		<input type="email" name="" class="form-control">
              	</div>

              	<div class="form-group mt-2">
              		<label>Username <span class="text-danger">*</span></label>
              		<input type="" name="" class="form-control">
              	</div>

              	<div class="form-group mt-2">
              		<label>Password <span class="text-danger">*</span></label>
              		<input type="" name="" class="form-control">
              	</div>

              	<div class="form-group mt-2">
              		<label>Phone <span class="text-danger">*</span></label>
              		<input type="password" name="" class="form-control">
              	</div>

              	<div class="form-group mt-2">
              		<input type="submit" name="" value="Save role" class="btn btn-info">
              	</div>

              </div>
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
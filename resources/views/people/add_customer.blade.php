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
                <h3 class="card-title">Add Customer</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<div class="row d-flex justify-content-center">
              	<div class="col-4">

              	
              	<div class="form-group mt-2">
              		<label>Customer Name <span class="text-danger">*</span></label>
              		<input type="" name="" class="form-control">
              	</div>

              	<div class="form-group mt-2">
              		<label>GSTIN/UIN of Recipient</label>
              		<input type="text" name="" class="form-control">
              	</div>

              	<div class="form-group mt-2">
              		<label>Email <span class="text-danger">*</span></label>
              		<input type="email" name="" class="form-control">
              	</div>

              	<div class="form-group mt-2">
              		<label>Phone <span class="text-danger">*</span></label>
              		<input type="password" name="" class="form-control">
              	</div>

              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="inputEmail3">Country <span class="text-danger">*</span></label>
                  <select class="form-control select2" name="role_id" id="role_id" >
                        <option value="" data-select2-id="2">Select</option>
                        <option value="1">India</option>
                    </select>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3">State <span class="text-danger">*</span></label>
                  <select class="form-control select2" name="role_id" id="role_id" >
                        <option value="" data-select2-id="2">Select</option>
                        <option value="1">Rajsthan</option>
                    </select>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3">City <span class="text-danger">*</span></label>
                  <select class="form-control select2" name="role_id" id="role_id" >
                        <option value="" data-select2-id="2">Select</option>
                        <option value="1">Ajmer</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                  <label>Address  <span class="text-danger">*</span></label>
                  <input type="" name="" class="form-control">
                </div>

                <div class="form-group mt-2">
                  <label>Pincode  <span class="text-danger">*</span></label>
                  <input type="" name="" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="inputEmail3">Shipping Country <span class="text-danger">*</span></label>
                  <select class="form-control select2" name="role_id" id="role_id" >
                        <option value="" data-select2-id="2">Select</option>
                        <option value="1">India</option>
                    </select>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3">Shipping State <span class="text-danger">*</span></label>
                  <select class="form-control select2" name="role_id" id="role_id" >
                        <option value="" data-select2-id="2">Select</option>
                        <option value="1">Rajsthan</option>
                    </select>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3">Shipping City <span class="text-danger">*</span></label>
                  <select class="form-control select2" name="role_id" id="role_id" >
                        <option value="" data-select2-id="2">Select</option>
                        <option value="1">Ajmer</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                  <label>Shipping Address  <span class="text-danger">*</span></label>
                  <input type="" name="" class="form-control">
                </div>

                <div class="form-group mt-2">
                  <label>Shipping Pincode  <span class="text-danger">*</span></label>
                  <input type="" name="" class="form-control">
                </div>
              </div>
          </div>

          <div class="form-group mt-2">
            <input type="submit" name="" value="Save Customer" class="btn btn-info">
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
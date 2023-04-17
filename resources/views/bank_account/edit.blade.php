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
                <h3 class="card-title">Edit Bank Account</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<div class="row d-flex justify-content-center">
              	<div class="col-8">

              	<div class="form-group mt-2">
              		<label>Account Name <span class="text-danger">*</span></label>
              		<input type="" name="" class="form-control">
              	</div>

              	<div class="form-group mt-2">
              		<label>Account Type <span class="text-danger">*</span></label><br>
              		<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
					  <label class="custom-control-label" for="customRadioInline1">Saving</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
					  <label class="custom-control-label" for="customRadioInline2">Current</label>
					</div>
              	</div>

              	<div class="form-group mt-2">
              		<label>Account Number <span class="text-danger">*</span></label>
              		<input type="" name="" class="form-control">
              	</div>

              	<div class="form-group mt-2">
              		<label>Bank Name <span class="text-danger">*</span></label>
              		<input type="" name="" class="form-control">
              	</div>

              	<div class="form-group mt-2">
              		<label>IFSC <span class="text-danger">*</span></label>
              		<input type="" name="" class="form-control">
              	</div>

              	<div class="form-group mt-2">
              		<label>Description</label>
              		<input type="" name="" class="form-control">
              	</div>

              	<div class="form-group mt-2">
              		<label>Opening Balance <span class="text-danger">*</span></label>
              		<input type="" name="" class="form-control">
              		<span class="text-danger">Opening balance can not be changed later.</span>
              	</div>

              	<div class="form-group mt-2">
              		<input type="submit" name="" class="btn btn-info">
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
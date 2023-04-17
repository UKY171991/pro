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
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">{{ $title }}</li>
               </ol>
            </div>
            <!-- /.col -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Product Category</h3>
                     <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                           <li class="nav-item">
                              <button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Add Product Category</button>
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
                              <th>Name</th>
                              <th>Description</th>
                              <th>Tax</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>asdf</td>
                              <td>dfvbggrgf</td>
                              <td>6</td>
                              <td class="btn-group">
                                 <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-edit"></i>Edit</button>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Product Category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">

      
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-4 col-form-label">
          Name<span class="text-danger">*</span>
        </label>
        <div class="col-sm-8">
          <input type="text" name="name" value="" class="form-control form-control-sm field_validation" id="name" placeholder="Name">
          <span id="err_name" class="error invalid-feedback"></span>
        </div>
      </div> 

                        
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-4 col-form-label">
          Description        </label>
        <div class="col-sm-8">
          <input type="text" name="description" value="" class="form-control form-control-sm" id="description" placeholder="Description">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-4 col-form-label">
          Tax          <span class="text-danger">*</span>
        </label>
        <div class="col-sm-8">
           <div class="input-group input-group-sm">
            <select class="form-control form-control-sm">
                <option value="14">w/out Tax ( I : 0.00 | C : 0.00 | S : 0.00 )</option>
                <option value="16">GST 18 % ( I : 0.00 | C : 9.00 | S : 9.00 )</option>
	            <option value="17">Nashi ( I : 18.00 | C : 18.00 | S : 18.00 )</option>
	            <option value="18">sgst ( I : 0.00 | C : 0.00 | S : 0.00 )</option>
            </select>
          </div>
        </div>
      </div> 

      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-4 col-form-label">
          Inclusive ?        </label>
        <div class="col-sm-8">
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" name="tax_type" type="checkbox" id="tax_type" value="1">
            <label for="tax_type" class="custom-control-label"></label>
          </div>
        </div>
      </div>

  </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary btn-sm">Submit</button>
         </div>
      </div>
   </div>
</div>
@endsection
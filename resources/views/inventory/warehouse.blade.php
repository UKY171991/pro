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
                     <h3 class="card-title">Warehouse</h3>
                     <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                           <li class="nav-item">
                              <button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Add warehouse</button>
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
                              <th>Code</th>
                              <th>Name</th>
                              <th>Description</th>
                              <th>Quantity</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>qwert</td>
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
            <h5 class="modal-title" id="exampleModalLabel">Add warehouse</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Name        <span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <input type="text" name="name" id="name" value="???" class="form-control form-control-sm field_validation" placeholder="Name">
                  <span id="err_name" class="error invalid-feedback"></span>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Code        <span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <input type="text" name="code" value="????" class="form-control form-control-sm field_validation " id="code" placeholder="Code">
                  <span id="err_code" class="error invalid-feedback"></span>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Description        <span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <input type="text" name="description" id="description" value="???" class="form-control form-control-sm field_validation" placeholder="Description">
                  <span id="err_description" class="error invalid-feedback"></span>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Default        <span class="text-danger">*</span> 
               </label>
               <div class="col-sm-6">
                  <input type="radio" name="is_default" value="no"> NO        <input type="radio" name="is_default" value="yes" checked=""> YES        <span id="err_description" class="error invalid-feedback"></span>
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
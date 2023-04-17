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
               <div class="card card-primary card-outline p-2">
                  <div class="card-header">
                     <h3 class="card-title">Tax</h3>
                     <div class="card-tools">
                        <button type="button" class="btn btn-block btn-primary btn-sm add_expense_category_modal" data-toggle="modal" data-target="#exampleModal" title="" data-original-title="Click here to Add Expense Category">Add Tax</button>
                     </div>
                     <!-- /.card-tools -->
                  </div>
                  <table id="example" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           <th>Tax name</th>
                           <th>Sgst</th>
                           <th>Cgst</th>
                           <th>Igst</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>abc</td>
                           <td>4</td>
                           <td>6</td>
                           <td>10</td>
                           <td>
	                           <button type="button" class="btn btn-success btn-xs text-center">Pending</button>
	                       </td>
                           <td>
                              <div class="btn-group">
                                 <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-edit"></i> Edit</button>
                                 <a href="#" data-toggle="modal" data-target="#delete_expense_category_modal" data-tt="tooltip" title="" class="btn btn-danger btn-sm delete_expense_category_modal" data-expense_category_id="5" data-original-title="Delete expense category"><i class="fas fa-trash"></i> Delete</a>
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
   <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Add/Edit Tax</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
      </div>
         <div class="modal-body">
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Tax name        <span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <input type="text" name="tax_name" id="tax_name" value="Wilson Tax" class="form-control form-control-sm field_validation" placeholder="Tax name">
                  <span id="err_tax_name" class="error invalid-feedback"></span>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Sgst        <span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <input type="text" name="sgst" id="sgst" value="6.00" class="form-control form-control-sm field_validation" placeholder="Sgst">
                  <span id="err_sgst" class="error invalid-feedback"></span>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Cgst        <span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <input type="text" name="cgst" id="cgst" value="10.00" class="form-control form-control-sm field_validation" placeholder="Cgst">
                  <span id="err_cgst" class="error invalid-feedback"></span>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Igst        <span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <input type="text" name="igst" id="igst" value="12.00" class="form-control form-control-sm field_validation" placeholder="Igst">
                  <span id="err_igst" class="error invalid-feedback"></span>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Status        </label>
               <div class="col-sm-8">
                  <select class="form-control form-control-sm select2bs4 field_validation" name="status" id="status" width="100%">
                     <option value="1">Active</option>
                     <option value="0">Inactive</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save</button>
         </div>
      </div>
   </div>
</div>
@endsection
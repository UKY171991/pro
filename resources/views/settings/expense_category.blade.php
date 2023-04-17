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
                     <h3 class="card-title">Expense Category</h3>
                     <div class="card-tools">
                        <button type="button" class="btn btn-block btn-primary btn-sm add_expense_category_modal" data-toggle="modal" data-target="#exampleModal" title="" data-original-title="Click here to Add Expense Category">Add Expense Category</button>
                     </div>
                     <!-- /.card-tools -->
                  </div>
                  <table id="example" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           <th>Expense Category Name</th>
                           <th>Description</th>
                           <th>Type</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>abc</td>
                           <td>abc</td>
                           <td>abc</td>
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
            <h5 class="modal-title" id="exampleModalLabel">Add/Edit expense category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="modal-body">
               <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">
                  Expense Category Name        <span class="text-danger">*</span>
                  </label>
                  <div class="col-sm-8">
                     <input type="text" name="name" id="name" value="Plastic" class="form-control form-control-sm field_validation" placeholder="Expense Category Name">
                     <span id="err_name" class="error invalid-feedback"></span>
                  </div>
               </div>
               <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">
                  Description        <span class="text-danger">*</span>
                  </label>
                  <div class="col-sm-8">
                     <input type="text" name="description" id="description" value="Plastic" class="form-control form-control-sm field_validation" placeholder="Description">
                     <span id="err_description" class="error invalid-feedback"></span>
                  </div>
               </div>
               <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">
                  Type<span class="text-danger">*</span>
                  </label>
                  <div class="col-sm-8">
                     <select class="form-control form-control-sm">
                        <option value="">Select</option>
                        <option value="2">
                           OFFICE EXPENSE            
                        </option>
                        <option value="3">
                           SALARY            
                        </option>
                        <option value="8">
                           PURCHASE            
                        </option>
                        <option value="10" selected="">
                           SALES RETURN            
                        </option>
                     </select>
                     
                  </div>
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
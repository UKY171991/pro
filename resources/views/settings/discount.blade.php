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
                     <h3 class="card-title">Discount</h3>
                     <div class="card-tools">
                        <button type="button" class="btn btn-block btn-primary btn-sm add_expense_category_modal" data-toggle="modal" data-target="#exampleModal" title="" data-original-title="Click here to Add Expense Category">Add discount</button>
                     </div>
                     <!-- /.card-tools -->
                  </div>
                  <table id="example" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           <th>Name</th>
                           <th>Type</th>
                           <th>Value</th>
                           <th>Valid From</th>
                           <th>Valid to</th>
                           <th>Description</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>abc</td>
                           <td>Fixed</td>
                           <td>6</td>
                           <td>11-11-2033</td>
                           <td>11-110-2055</td>
                           <td>dgfhfrhg</td>
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
         <h5 class="modal-title" id="exampleModalLabel">Add/Edit Discount</h5>
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
          Type<span class="text-danger">*</span>
        </label>
        <div class="col-sm-8">
          <select class="form-control field_validation form-control-sm" value="" style="width: 100%;" placeholder="Type" id="type" name="type">
            <option value="">Select</option>
            <option value="0">Fixed</option>
            <option value="1">Percentage(%)</option>
          </select>          <span id="err_type" class="error invalid-feedback"></span>
        </div>
      </div> 

                        
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-4 col-form-label">
          Value<span class="text-danger">*</span>
        </label>
        <div class="col-sm-8">
          <input type="text" name="value" value="" class="form-control form-control-sm field_validation" id="value" placeholder="Value">
          <span id="err_value" class="error invalid-feedback"></span>
        </div>
      </div> 

                        
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-4 col-form-label">
          Valid from<span class="text-danger">*</span>
        </label>
        <div class="col-sm-8">
          <input type="text" name="valid_from" value="" class="form-control form-control-sm field_validation" id="valid_from" placeholder="Valid from" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask="" im-insert="false">
          <span id="err_valid_from" class="error invalid-feedback"></span>
        </div>
      </div> 

                        
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-4 col-form-label">
          Valid to<span class="text-danger">*</span>
        </label>
        <div class="col-sm-8">
          <input type="text" name="valid_to" value="" class="form-control form-control-sm field_validation" id="valid_to" placeholder="Valid to" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask="" im-insert="false">
          <span id="err_valid_to" class="error invalid-feedback"></span>
        </div>
      </div> 

                        
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-4 col-form-label">
          Description        </label>
        <div class="col-sm-8">
          <input type="text" name="description" value="" class="form-control form-control-sm" id="description" placeholder="Description">
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
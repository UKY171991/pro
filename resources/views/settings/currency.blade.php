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
                     <h3 class="card-title">Currency</h3>
                     <div class="card-tools">
                        <button type="button" class="btn btn-block btn-primary btn-sm add_expense_category_modal" data-toggle="modal" data-target="#exampleModal" title="" data-original-title="Click here to Add Expense Category">Add Currency</button>
                     </div>
                     <!-- /.card-tools -->
                  </div>
                  <table id="example" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           <th>Currency Name</th>
                           <th>Symbol</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>abc</td>
                           <td>Fixed</td>
                           
                           <td>
                              <div class="btn-group">
                                 <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-edit"></i></button>
                                 <a href="#" data-toggle="modal" data-target="#delete_expense_category_modal" data-tt="tooltip" title="" class="btn btn-danger btn-sm delete_expense_category_modal" data-expense_category_id="5" data-original-title="Delete expense category"><i class="fas fa-trash"></i></a>
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
         <h5 class="modal-title" id="exampleModalLabel">Add/Edit Currency</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
      </div>
      <div class="modal-body">

 
      		<div class="card-body">
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">
                  Currency Name <span class="text-danger">*</span>
                </label>
                <div class="col-sm-6">
                  <input type="text" name="name" value="" class="form-control form-control-sm field_validation" id="name" placeholder="Currency Name">                      <span id="err_name" class="error invalid-feedback"><!--  --></span>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">
                  Symbol                       <span class="text-danger">*</span>
                </label>
                <div class="col-sm-6">
                  <input type="text" name="symbol" value="" class="form-control form-control-sm field_validation" id="symbol" placeholder="Symbol">                      <span id="err_symbol" class="error invalid-feedback"><!--  --></span>
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
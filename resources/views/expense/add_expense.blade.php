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
               <form class="form-horizontal" name="addExpenseForm" id="addExpenseForm" method="post" action="" enctype="multipart/form-data">
                  <div class="card card-info">
                     <div class="card-header">
                        <h3 class="card-title">Add 	Expense</h3>
                     </div>
                     <div class="card-body">
                        <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">
                           Invoice Date                        <span class="text-danger">*</span>
                           </label>
                           <div class="col-sm-4">
                              <input type="text" name="date" class="form-control form-control-sm field_validation datepicker" id="date" placeholder="Invoice Date" value="17-04-2023">
                              <span id="err_date" class="error invalid-feedback"></span>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">
                           Expense Category                        <span class="text-danger">*</span>
                           </label>
                           <div class="col-sm-4">
                              <div class="input-group">
                                 <select class="form-control form-control-sm">
                                    <option value="" data-select2-id="2">Select</option>
                                    <option value="1">
                                       Electricity                              
                                    </option>
                                    <option value="2">
                                       Laptop                              
                                    </option>
                                    <option value="5">
                                       Plastic                              
                                    </option>
                                 </select>
                                 
                                 <span class="input-group-append">
                                 <button type="button" class="btn btn-info btn-flat add_expense_category_modal" data-tt="tooltip" title="" data-keyboard="true" data-toggle="modal" data-target="#add_expense_category_modal" accesskey="c" data-original-title="Add Expense Category (ALT + C)"><i class="fas fa-plus"></i>
                                 </button>
                                 </span>
                                 <span id="err_expense_category_id" class="error invalid-feedback"></span>
                              </div>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">
                           Name of Supplier                      </label>
                           <div class="col-sm-4">
                              <div class="input-group">
                                 <select class="form-control form-control-sm">
                                    <option value="" data-select2-id="4">Other Supplier</option>
                                    <option value="1">
                                       HP GAS                              
                                    </option>
                                    <option value="5">
                                       Bhadresh                              
                                    </option>
                                    <option value="6">
                                       L&amp;T                              
                                    </option>
                                    <option value="8">
                                       MyOwn                              
                                    </option>
                                    <option value="9">
                                       NEW TECH TEDARİKÇİ                              
                                    </option>
                                    <option value="10">
                                       Alhaisam                              
                                    </option>
                                    <option value="11">
                                       الهيثم للهواتبف                              
                                    </option>
                                    <option value="12">
                                       Google India                              
                                    </option>
                                 </select>
                                 
                                 <span class="input-group-append">
                                 <button type="button" class="btn btn-info btn-flat" data-tt="tooltip" title="" data-toggle="modal" data-target="#add_supplier_modal" accesskey="s" data-original-title="Add Supplier (ALT + S)"><i class="fas fa-plus"></i>
                                 </button>
                                 </span>
                              </div>
                              <span id="info_supplier_id" class="text-info"></span>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">Net Taxable Amount<span class="text-danger">*</span></label>
                           <div class="col-sm-4">
                              <input type="number" name="amount" value="" class="form-control form-control-sm field_validation" id="amount" placeholder="Net Taxable Amount">                        <span id="err_amount" class="error invalid-feedback"></span>
                           </div>
                        </div>
                        <div class="form-group row cgst_row tax_row" style="display: none;">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">
                           CGST                        <span class="text-danger">*</span>
                           </label>
                           <div class="col-sm-4">
                              <input type="number" name="cgst" value="0" class="form-control form-control-sm field_validation" id="cgst" placeholder="CGST" step="0.01">
                              <span id="err_cgst" class="error invalid-feedback"></span>
                           </div>
                        </div>
                        <div class="form-group row sgst_row tax_row" style="display: none;">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">
                           SGST                        <span class="text-danger">*</span>
                           </label>
                           <div class="col-sm-4">
                              <input type="number" name="sgst" value="0" class="form-control form-control-sm field_validation" id="sgst" placeholder="SGST" step="0.01">                        <span id="err_sgst" class="error invalid-feedback"></span>
                           </div>
                        </div>
                        <div class="form-group row igst_row tax_row" style="display: none;">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">
                           IGST                        <span class="text-danger">*</span>
                           </label>
                           <div class="col-sm-4">
                              <input type="number" name="igst" value="0" class="form-control form-control-sm field_validation" id="igst" placeholder="IGST" step="0.01">                        <span id="err_igst" class="error invalid-feedback"></span>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">
                           Total Amount (Inclusive Tax)                        <span class="text-danger">*</span>
                           </label>
                           <div class="col-sm-4">
                              <input type="number" name="total_amount" value="" class="form-control form-control-sm field_validation" id="total_amount" placeholder="Total Amount (Inclusive Tax)" step="0.01" readonly="">                        <span id="err_total_amount" class="error invalid-feedback"></span>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">
                           Remarks                        <span class="text-danger">*</span>
                           </label>
                           <div class="col-sm-4">
                              <input type="text" name="remarks" value="" class="form-control form-control-sm field_validation" id="remarks" placeholder="Remarks">                        <span id="err_remarks" class="error invalid-feedback"></span>
                           </div>
                        </div>
                        <div class="form-group row itc_row">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">Eligible for ITC</label>
                           <div class="col-sm-4">
                              <div class="custom-control custom-checkbox">
                                 <input class="custom-control-input" name="itc" type="checkbox" id="itc" value="1" disabled="disabled">
                                 <label for="itc" class="custom-control-label"></label>
                              </div>
                              <span id="err_itc" class="error invalid-feedback"></span>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">Expense Documents</label>
                           <div class="col-sm-4">
                              <div class="input-group">
                                 <div class="custom-file">
                                    <button type="button" class="btn btn-primary" data-tt="tooltip" title="" data-toggle="modal" data-target="#attachment_modal" data-original-title="Click here to upload the files">Upload Files</button>&nbsp;&nbsp;
                                    <button type="button" class="btn btn-success" data-tt="tooltip" title="" data-toggle="modal" data-target="#upload-files" data-original-title="Click here to select the files">Attach Files</button>
                                 </div>
                              </div>
                              <span id="err_document" class="error invalid-feedback"></span>
                           </div>
                        </div>
                        <div class="form-group row">
                           <div class="col-sm-2">
                           </div>
                           <div class="col-sm-10">
                              <div id="selected_attachment" class="selected_attachment"> 
                              </div>
                           </div>
                        </div>
                        <br>
                     </div>
                     <div class="card-footer">
                        <button type="submit" name="submit" id="expenseSubmit" data-tt="tooltip" title="" class="btn btn-info" data-original-title="Click here to Save Expense">Save Expense</button>
                     </div>
                  </div>
               </form>
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
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
            <form class="form-horizontal" name="addSaleForm" id="addSaleForm" method="POST" action="">
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Add Sale</h3>
                     <div class="card-tools">
                        <div class="btn-group">
                           <button type="button" class="btn btn-tool btn-warning rcm_btn" data-tt="tooltip" title="" data-original-title="Click here to Change the RCM Availability">
                           Enable RCM                      </button>
                           <button type="button" class="btn btn-tool btn-warning" data-tt="tooltip" title="" data-original-title="Go to Company setting to change the default setting of RCM Applicability">
                           <i class="far fa-question-circle"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="col-sm-12">
                        <div class="row">
                           <div class="col-sm-3">
                              <div class="form-group">
                                 <label>Invoice No</label>
                                 <input type="text" class="form-control" id="reference_no" name="reference_no" disabled="">
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="form-group">
                                 <label>Invoice Date</label>
                                 <input type="date" class="form-control datepicker" id="invoice_date" name="invoice_date" value="15-04-2023">
                                 <span id="err_invoice_date" class="error invalid-feedback"></span>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="form-group">
                                 <label for="warehouse">
                                 Warehouse <span class="text-danger">*</span>
                                 </label>
                                 <select class="form-control form-control-sm">
                                    <option value="">Select</option>
                                    <option value="1">
                                       Warehouse A                              
                                    </option>
                                    <option value="2">
                                       Warehouse B                              
                                    </option>
                                    <option value="3">
                                       Sylvia Chambers                              
                                    </option>
                                    <option value="7">
                                       Singh garments                              
                                    </option>
                                    <option value="11" selected="" data-select2-id="2">
                                       ???                              
                                    </option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="form-group">
                                 <label for="customer">
                                 Customer <span class="text-danger">*</span>
                                 </label>
                                 <div class="input-group input-group-sm">
                                    <select class="form-control form-control-sm">
                                       <option value="" data-select2-id="4">Select</option>
                                       <option value="24">
                                          Nadim Khan                                
                                       </option>
                                       <option value="23">
                                          aman                                
                                       </option>
                                       <option value="22">
                                          Asad shaikh                                
                                       </option>
                                    </select>
                                    
                                    <span class="input-group-append">
                                    <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#add_customer_modal" data-tt="tooltip" accesskey="c" data-original-title="" title=""><i class="fas fa-plus"></i></button>
                                    </span>
                                 </div>
                                
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card-footer">
                     <button type="submit" name="submit" id="saleSubmit" class="btn btn-info">Add Sale</button>
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
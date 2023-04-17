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
            	<form class="form-horizontal" name="addPurchaseForm" id="addPurchaseForm" method="POST" action="">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Add Purchase Return</h3>
                  <div class="card-tools">
                    <div class="btn-group">
                     
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="col-sm-12">
                    <div class="row">
                      <div class="col-sm-2">
                        <div class="form-group">
                          <label>PO No.</label>
                          <input type="text" class="form-control" id="reference_no" name="reference_no" disabled="">
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="form-group">
                          <label>Invoice No</label>
                          <input type="text" class="form-control field_validation" id="invoice_no" name="invoice_no" placeholder="Invoice No">
                          <span id="err_invoice_no" class="error invalid-feedback"></span>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="form-group">
                          <label>Purchase Date</label>
                          <input type="date" class="form-control datepicker" id="purchase_date" name="purchase_date" value="15-04-2023">
                          <span id="err_purchase_date" class="error invalid-feedback"></span>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label for="warehouse">
                            Warehouse <span class="text-danger">*</span>
                          </label>
                          
                            <div class="input-group input-group-sm">
                            <select class="form-control form-control-sm">
                                <option value="" data-select2-id="2">Select</option>
                                <option value="1">Warehouse A</option>
                                <option value="2">Warehouse B</option>                             
                            </select>
                            <span class="input-group-append">
                              <button type="button" class="btn btn-info btn-flat add_warehouse_modal" data-toggle="modal" data-target="#add_warehouse_modal" data-tt="tooltip" accesskey="c" data-original-title="" title=""><i class="fas fa-plus"></i></button>
                            </span>
                          </div>
                                                  
                          <span id="err_warehouse_id" class="error invalid-feedback"></span>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label for="warehouse">
                            Supplier <span class="text-danger">*</span>
                          </label>
                          <div class="input-group input-group-sm">
                            <select class="form-control form-control-sm">
                                <option value="" data-select2-id="4">Select</option>
                                <option value="1">HP GAS</option>
                                <option value="5">Bhadresh</option>
                                <option value="8">MyOwn</option>
                            </select>
                            <span class="input-group-append">
                              <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#add_supplier_modal" data-tt="tooltip" accesskey="c" data-original-title="" title=""><i class="fas fa-plus"></i></button>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="submit" id="purchaseSubmit" class="btn btn-info">Add Purchase</button>
                </div>
            
          </div></form>

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
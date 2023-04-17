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
                     <h3 class="card-title">Product</h3>
                     <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                           <li class="nav-item">
                              <button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Add Product</button>
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
                              <th><input type="checkbox" class="all_product"></th>
                              <th>Warehouse Name</th>
                              <th>Product Name</th>
                              <th>HSN</th>
                              <th>Quantity</th>
                              <th>Unit of Measure</th>
                              <th>Alert Quantity</th>
                              <th>Cost (₹)</th>
                              <th>Total Cost (₹)</th>
                              <th>Price (₹)</th>
                              <th>Total Price (₹)</th>
                              <th>Status (₹)</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td><input type="checkbox" class="single_product"></td>
                              <td>asdf</td>
                              <td>dfvbggrgf</td>
                              <td>6345</td>
                              <td>100</td>
                              <td>dfrt4de</td>
                              <td>13</td>
                              <td>100</td>
                              <td>100</td>
                              <td>100</td>
                              <td>100</td>
                              <td>100</td>
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
            <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Product Name<span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <input type="text" name="name" value="" class="form-control form-control-sm field_validation" id="name" placeholder="Product Name">
                  <span id="err_name" class="error invalid-feedback"></span>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Description<span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <input type="text" name="description" value="" class="form-control form-control-sm field_validation" id="description" placeholder="Description">
                  <span id="err_description" class="error invalid-feedback"></span>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Product Category<span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <div class="input-group input-group-sm">
                     <select class="form-control form-control-sm select2bs4 field_validation" name="product_category_id" id="product_category_id" placeholder="Product Category" width="100%">
                        <option value="">Select</option>
                        <option value="30">
                           Wilson Shoes GST - 12.00%                 
                        </option>
                     </select>
                     <span class="input-group-append">
                     <button type="button" class="btn btn-info btn-flat add_product_category_modal" data-toggle="modal" data-target="#add_product_category_modal" data-tt="tooltip" title="Add Product Category"><i class="fas fa-plus"></i></button>
                     </span>
                  </div>
                  <span id="err_product_category_id" class="error invalid-feedback"></span>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               HSN<span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <input type="text" name="hsn" value="" class="form-control form-control-sm field_validation" id="hsn" placeholder="HSN">
                  <span id="err_hsn" class="error invalid-feedback"></span>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Markup (%)<span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <input type="text" name="markup" value="" class="form-control form-control-sm field_validation" id="markup" placeholder="Markup (%)">
                  <span id="err_markup" class="error invalid-feedback"></span>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Alert Quantity<span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <input type="text" name="alert_quantity" value="1" class="form-control form-control-sm field_validation" id="alert_quantity" placeholder="Alert Quantity">
                  <span id="err_alert_quantity" class="error invalid-feedback"></span>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Unit of Measure<span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <select class="form-control form-control-sm" name="uom_id" id="uom_id">
                     <option value="">Select</option>
                     <option value="1">BAGS (BAG)</option>
                     <option value="2">
                        BALE (BAL)              
                     </option>
                     <option value="3">
                        BUNDLES (BDL)              
                     </option>
                     <option value="4">
                        BUCKLES (BKL)              
                     </option>
                     <option value="5">
                        BILLION OF UNITS (BOU)              
                     </option>
                     <option value="6">
                        BOX (BOX)              
                     </option>
                     <option value="7">
                        BOTTLES (BTL)              
                     </option>
                     <option value="8">
                        BUNCHES (BUN)              
                     </option>
                     <option value="9">
                        CANS (CAN)              
                     </option>
                     <option value="10">
                        CUBIC METERS (CBM)              
                     </option>
                     <option value="11">
                        CUBIC CENTIMETERS (CCM)              
                     </option>
                     <option value="12">
                        CENTIMETERS (CMS)              
                     </option>
                     <option value="13">
                        CARTONS (CTN)              
                     </option>
                     <option value="14">
                        DOZENS (DOZ)              
                     </option>
                     <option value="15">
                        DRUMS (DRM)              
                     </option>
                     <option value="16">
                        GREAT GROSS (GGK)              
                     </option>
                     <option value="17">
                        GRAMMES (GMS)              
                     </option>
                     <option value="18">
                        GROSS (GRS)              
                     </option>
                     <option value="19">
                        GROSS YARDS (GYD)              
                     </option>
                     <option value="20">
                        KILOGRAMS (KGS)              
                     </option>
                     <option value="21">
                        KILOLITRE (KLR)              
                     </option>
                     <option value="22">
                        KILOMETRE (KME)              
                     </option>
                     <option value="23">
                        MILILITRE (MLT)              
                     </option>
                     <option value="24">
                        METERS (MTR)              
                     </option>
                     <option value="25">
                        METRIC TON (MTS)              
                     </option>
                     <option value="26">
                        NUMBERS (NOS)              
                     </option>
                     <option value="27">
                        PACKS (PAC)              
                     </option>
                     <option value="28">
                        PIECES (PCS)              
                     </option>
                     <option value="29">
                        PAIRS (PRS)              
                     </option>
                     <option value="30">
                        QUINTAL (QTL)              
                     </option>
                     <option value="31">
                        ROLLS (ROL)              
                     </option>
                     <option value="32">
                        SETS (SET)              
                     </option>
                     <option value="33">
                        SQUARE FEET (SQF)              
                     </option>
                     <option value="34">
                        SQUARE METERS (SQM)              
                     </option>
                     <option value="35">
                        SQUARE YARDS (SQY)              
                     </option>
                     <option value="36">
                        TABLETS (TBS)              
                     </option>
                     <option value="37">
                        TEN GROSS (TGM)              
                     </option>
                     <option value="38">
                        THOUSANDS (THD)              
                     </option>
                     <option value="39">
                        TONNES (TON)              
                     </option>
                     <option value="40">
                        TUBES (TUB)              
                     </option>
                     <option value="41">
                        US GALLONS (UGS)              
                     </option>
                     <option value="42">
                        UNITS (UNT)              
                     </option>
                     <option value="43">
                        YARDS (YDS)              
                     </option>
                     <option value="44">
                        OTHERS (OTH)              
                     </option>
                     <option value="45">
                        PCS (PCS)              
                     </option>
                  </select>
                  <span id="err_uom_id" class="error invalid-feedback"></span>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Status<span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <select class="form-control form-control-sm select2bs4 field_validation" name="status" id="status" placeholder="Status" width="100%">
                     <option value="active">
                        Active            
                     </option>
                     <option value="inactive">
                        Inactive            
                     </option>
                  </select>
                  <span id="err_status" class="error invalid-feedback"></span>
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
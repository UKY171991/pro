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
                  <div class="card">
            <div class="card-header secondary-header">
              <h3 class="card-title">View Supplier</h3>
              <!-- <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div> -->
            </div>
            <div class="card-body p-0">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td width="20%"><label>Company Name</label></td>
                    <td width="5%"> : </td>
                    <td>الهيثم للهواتبف</td>
                  </tr>
                  <tr>
                    <td><label>Registration Type</label></td>
                    <td> : </td>
                    <td>
                      Not Registered  
                    </td>
                  </tr>
                  <tr>
                    <td><label>GSTIN</label></td>
                    <td> : </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><label>Email</label></td>
                    <td> : </td>
                    <td>haisam</td>
                  </tr>
                  <tr>
                    <td><label>Phone</label></td>
                    <td> : </td>
                    <td>010123123</td>
                  </tr>
                  <tr>
                    <td><label>Address</label></td>
                    <td> : </td>
                    <td>hgrmwd]</td>
                  </tr>
                  <tr>
                    <td><label>Country</label></td>
                    <td> : </td>
                    <td>Egypt</td>
                  </tr>
                  <tr>
                    <td><label>State</label></td>
                    <td> : </td>
                    <td>Asyut</td>
                  </tr>
                  <tr>
                    <td><label>City</label></td>
                    <td> : </td>
                    <td>al-Qusiyah</td>
                  </tr>
                  <tr>
                    <td><label>Website</label></td>
                    <td> : </td>
                    <td>asdcd</td>
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
         <div class="row">
            <div class="col-12">
            	<div class="card card-primary card-tabs">
            <div class="card-header p-0 pt-1">
              <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="pt-2 px-3"><h3 class="card-title">View</h3></li>
                <li class="nav-item">
                  <a class="nav-link active" id="custom-tabs-one-purchases-tab" data-toggle="pill" href="#custom-tabs-one-purchases" role="tab" aria-controls="custom-tabs-one-purchases" aria-selected="true">Purchase List</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-one-expenses-tab" data-toggle="pill" href="#custom-tabs-one-expenses" role="tab" aria-controls="custom-tabs-one-expenses" aria-selected="false">Expense List</a>
                </li>
              </ul>
            </div>
            <div class="card-body  m-0 p-0">
              <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade active show" id="custom-tabs-one-purchases" role="tabpanel" aria-labelledby="custom-tabs-one-purchases-tab">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>PO No.</th>
                        <th>Invoice No</th>
                        <th>Purchase Date</th>
                        <th>Supplier</th>
                        <th>Total Discount (₹)</th>
                        <th>Total Taxable Value (₹)</th>
                        <th>IGST</th>
                        <th>CGST</th>
                        <th>SGST</th>
                        <th>Total (₹)</th>
                      </tr>
                    </thead>
                    <tbody>
                                            <tr>                        
                        <td><a href="https://zivaansolutions.com/apps/pro/purchase/view/MzM=" target="_blank">1678486588</a></td>
                        <td>1212</td>
                        <td>10-03-2023</td>
                        <td>الهيثم للهواتبف</td>
                        <td>0.00</td>
                        <td>701.50</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>701.50</td>
                      </tr>
                                            <tr>                        
                        <td><a href="https://zivaansolutions.com/apps/pro/purchase/view/MzU=" target="_blank">1678488015</a></td>
                        <td>1212</td>
                        <td>10-03-2023</td>
                        <td>الهيثم للهواتبف</td>
                        <td>0.00</td>
                        <td>2,000.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>2,000.00</td>
                      </tr>
                                          </tbody>
                    <tfoot class="bg-gray disabled footer_data">
                      <tr>
                        <th colspan="4"></th>
                        <th>₹ 0.00</th>
                        <th>₹ 2,701.50</th>
                        <th>₹ 0.00</th>
                        <th>₹ 0.00</th>
                        <th>₹ 0.00</th>
                        <th>₹ 2,701.50</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-expenses" role="tabpanel" aria-labelledby="custom-tabs-one-expenses-tab">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th width="9%">Invoice Date</th>
                        <th>Expense Category</th>
                        <th>Name of Supplier</th>
                        <th>Expense Documents</th>
                        <th>Remarks</th>
                        <!-- <th width="9%">Net Taxable Amount</th>
                        <th width="9%">CGST</th>
                        <th width="9%">SGST</th>
                        <th width="9%">IGST</th> -->
                        <th width="9%">Total Amount (Inclusive Tax)(₹)</th>
                        <th width="9%">Paid Amount(₹)</th>
                        <th width="9%">Due Amount(₹)</th>
                     
                      </tr>
                    </thead>
                    
                    <tbody>
                                            <tr>
                        <td colspan="11">No Record(s) are available.</td>
                      </tr>
                                          </tbody>
                    <tfoot>
                      <tr class="bg-gray disabled footer_data">
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <!-- <th>₹ 0</th>
                        <th>₹ 0s</th>
                        <th>₹ 0</th>
                        <th>₹ 0</th> -->
                        <th>₹ 0.00</th>
                        <th>₹ 0.00</th>
                        <th>₹ 0.00</th>
                        
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
               <!-- /.card -->
            </div>
            <!-- /.col -->
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
</div>
@endsection
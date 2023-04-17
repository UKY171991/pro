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
                        <h3 class="card-title">View Expense</h3>
                        <!-- <div class="card-tools">
                           <button type="button" class="btn btn-tool" data-card-widget="collapse" data-tt="tooltip" title="Click here to hide detail">
                             <i class="fas fa-minus"></i>
                           </button>
                           </div> -->
                     </div>
                     <div class="card-body p-0">
                        <table class="table table-striped">
                           <tbody>
                              <tr>
                                 <td width="20%"><label>Invoice Date</label></td>
                                 <td width="5%"> : </td>
                                 <td>11-04-2023</td>
                              </tr>
                              <tr>
                                 <td><label>Expense Category</label></td>
                                 <td> : </td>
                                 <td>Electricity</td>
                              </tr>
                              <tr>
                                 <td><label>Name of Supplier</label></td>
                                 <td> : </td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td><label>Net Taxable Amount</label></td>
                                 <td> : </td>
                                 <td>100.00</td>
                              </tr>
                              <tr>
                                 <td><label>CGST</label></td>
                                 <td> : </td>
                                 <td>0.00(0.00 %)</td>
                              </tr>
                              <tr>
                                 <td><label>SGST</label></td>
                                 <td> : </td>
                                 <td>0.00(0.00 %)</td>
                              </tr>
                              <tr>
                                 <td><label>IGST</label></td>
                                 <td> : </td>
                                 <td>0.00(0.00 %)</td>
                              </tr>
                              <tr>
                                 <td><label>Total Amount (Inclusive Tax)</label></td>
                                 <td> : </td>
                                 <td>100.00</td>
                              </tr>
                              <tr>
                                 <td><label>Remarks</label></td>
                                 <td> : </td>
                                 <td>Bill ptcl</td>
                              </tr>
                              <tr>
                                 <td><label>Eligible for ITC</label></td>
                                 <td> : </td>
                                 <td>No</td>
                              </tr>
                              <tr>
                                 <td><label>Expense Documents</label></td>
                                 <td> : </td>
                                 <td>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <!-- /.card-body -->
                  </div>
               </div>
               <!-- /.card -->
            </div>
            <!-- /.col -->
         </div>
         <!-- /.row -->
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-header purple-header">
                     <h3 class="card-title">Transaction</h3>
                  </div>
                  <div class="card-body m-0 p-0">
                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th>Sr. No</th>
                              <th>Expense category</th>
                              <th>From Account</th>
                              <th>To Account</th>
                              <th>Transaction Date</th>
                              <th>Amount (₹)</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>
                                 Electricity                  
                              </td>
                              <td>OTHER SUPPLIER</td>
                              <td>ELECTRICITY</td>
                              <td>11-Apr-2023 08:31:12</td>
                              <td>100.00</td>
                           </tr>
                        </tbody>
                        <tfoot class="bg-gray disabled footer_data">
                           <tr>
                              <th colspan="5"></th>
                              <th>₹ 100.00</th>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
                  <!-- /.card-body -->
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
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
                     <h3 class="card-title">View Quotation</h3>
                     <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                           <li class="nav-item ml-2">
                              <a class="nav-link active" href="{{url('/edit-quotation/1')}}" data-tt="tooltip" title="" data-original-title="Click here to Edit Quotation"><i class="fas fa-edit"></i> Edit</a>
                           </li>
                           <li class="nav-item ml-2">
                              <a class="nav-link bg-info active" href="#" data-toggle="modal" data-target="#change_status_quotation" data-tt="tooltip" title="" data-quotation_id="14" data-original-title="Click here to Change Quotation Status">Change Status</a>
                           </li>
                           <li class="nav-item ml-2">
                              <a class="nav-link bg-warning active" href="" data-tt="tooltip" title="" data-original-title="Click here to Download Quotation">
                              <i class="far fa-file-pdf"></i> Download PDF</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                           <div class="col-12 text-center">
                              Quotation under GST ACT <br>Quotation for Recipient                  
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12">
                              <h4>
                                 <i class="fas fa-globe"></i> DEMO PVT LTD                      <small class="float-right">Date: 11-04-2023</small>
                              </h4>
                           </div>
                           <!-- /.col -->
                        </div>
                        <div class="row">
                           <div class="col-12">
                              <table width="100%" class="table">
                                 <tbody>
                                    <tr style="font-size: 16px;font-weight: bolder;">
                                       <td>Supplier</td>
                                       <td>Bill To ( Customer )</td>
                                       <td>Quotation Detail</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <address>
                                             <strong>DEMO PVT LTD</strong><br>
                                             ABC 123<br>
                                             XYZ<br>
                                             Jhajjar, Haryana, India<br>
                                             110001<br>
                                             Phone: 0096565596121GH<br>
                                             Email: bsuiness@seway.com<br>
                                             <strong>GSTIN: 24BBCAA0000A1Z5</strong><br>
                                          </address>
                                       </td>
                                       <td>
                                          <address>
                                             <strong>aman</strong><br>
                                             adsadasdsadas<br>                            Latur, Maharashtra, India<br>
                                             <b>Phone</b>: 9890098900<br>
                                             <b>Email</b>: asaawaws@gmail.com<br>
                                             <b>GSTIN</b>: <br>
                                          </address>
                                       </td>
                                       <td>
                                          <b>Quotation #</b>1681181173<br>
                                          <b>RCM Applicability: </b>No                        
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <!-- Table row -->
                        <div class="row">
                           <div class="col-12 table-responsive">
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th>Sr.</th>
                                       <th>Items</th>
                                       <th>HSN</th>
                                       <th>Qty</th>
                                       <th>Price (₹)</th>
                                       <th>Discount (₹)</th>
                                       <th>Total Taxable Value (₹)</th>
                                       <th>Tax (₹)</th>
                                       <th>Sub Total (₹)</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>mamdouh<br>nnn</td>
                                       <td>nn</td>
                                       <td>11122.00</td>
                                       <td>1,110.00</td>
                                       <td>0.00</td>
                                       <td>1,23,45,420.00</td>
                                       <td>
                                          IGST : 34,56,717.60                                      (28.00%)
                                       </td>
                                       <td>15802137.60</td>
                                    </tr>
                                    <tr style="font-size: 16px;font-weight: bolder;">
                                       <td colspan="3">
                                          Total Amount Due   
                                       </td>
                                       <td>11122</td>
                                       <td>1,110.00</td>
                                       <td>0.00</td>
                                       <td>1,23,45,420.00</td>
                                       <td>34,56,717.60</td>
                                       <td>1,58,02,137.60</td>
                                    </tr>
                                    <!-- <tr style="font-size: 16px;font-weight: bolder;">
                                       <td colspan="8">
                                         Advance Adjusted (If Any)                            </td>
                                       <td>0.0</td>
                                       </tr> -->
                                    <!-- <tr style="font-size: 16px;font-weight: bolder;">
                                       <td colspan="8">
                                         Rounded Off 
                                       </td>
                                       <td>
                                         +0.40                            </td>
                                       </tr> -->
                                    <tr style="font-size: 16px;font-weight: bolder;">
                                       <td colspan="8">
                                          Balance Payable                            
                                       </td>
                                       <td>
                                          1,58,02,138.00                            
                                       </td>
                                    </tr>
                                    <tr style="font-size: 16px;font-weight: bold; ">
                                       <td colspan="5">
                                          Amount in Words                            
                                       </td>
                                       <td colspan="4" style="text-align: right">
                                          one crore, fifty eight lakh, two thousand, one hundred and thirty eight                            
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <!-- /.row -->
                        <div class="row">
                           <div class="col-12">
                              <table width="100%" class="table">
                                 <tbody>
                                    <tr style="font-size: 16px;font-weight: bolder;">
                                       <td width="50%">
                                          Bank Details                        
                                       </td>
                                       <td>
                                          Remarks (if any)                        
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Bank Name : cbs<br>
                                          Account Number : 50039512581<br>
                                          IFSC Code : SBIN0000488<br>
                                          Branch Name : Rannapark                        
                                       </td>
                                       <td>
                                       </td>
                                    </tr>
                                    <tr style="font-size: 16px;font-weight: bolder;">
                                       <td width="50%">
                                          Terms &amp; Condition                        
                                       </td>
                                       <td>
                                          Certified that the perticulars given above are true and correct                         
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          1. Subject to Ahmedabad Jurisdiction<br>
                                          2. Our responsibility ceases as soon as the goods leave our premises.<br>
                                          3. Goods once sold will not be taken back.<br>
                                          4. Delivery ex-premises.                        
                                       </td>
                                       <td>
                                          For, DEMO PVT LTD                          <br>
                                          <br>
                                          <br>
                                          Authorised Signatory
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                           <div class="col-12">
                              <button type="button" class="btn btn-success float-left print_invoice">
                              <i class="fas fa-print"></i> Print                    </button>
                            
                           </div>
                        </div>
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
@endsection
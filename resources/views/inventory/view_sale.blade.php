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
                     <h3 class="card-title">View Sale</h3>
                     <div class="card-tools">
                        <a href="#" data-target="#transaction-modal" data-toggle="modal" class="btn bg-purple btn-sm" data-tt="tooltip" title="" data-purchase_id="45" data-original-title="Enter Payment"> 
                        <i class="fas fa-rupee-sign"></i> Make Payment
                        </a>  
                        <a href="#" data-target="#delivery-modal" data-toggle="modal" class="btn bg-maroon btn-sm open_delivery_modal" data-tt="tooltip" title="" data-purchase_id="45" data-original-title="Enter Product Delivery"> 
                        <i class="fas fa-shipping-fast"></i> Delivery Detail
                        </a>  
                        <a href="#" class="btn bg-orange btn-sm" data-tt="tooltip" title="" data-original-title="Download Purchase Order">
                        <i class="far fa-file-pdf"></i> Download Purchase Order
                        </a>      
                        <a href="{{url('/edit-Sale/1')}}" class="btn btn-info btn-sm" data-tt="tooltip" title="" data-original-title="Edit Purchase">
                        <i class="fas fa-edit"></i> Edit
                        </a>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="invoice p-3 mb-3">
                        <div class="ribbon-wrapper ribbon-sm">
                           <div class="ribbon 
                              bg-danger                  ">
                              Unpaid                  
                           </div>
                        </div>
                        <!-- title row -->
                        <div class="row">
                           <div class="col-12 text-center">
                              TAX PURCHASE UNDER GST ACT <br>Purchase Order for Supplier                  
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12">
                              <h4>
                                 <i class="fas fa-globe"></i> DEMO PVT LTD                      <small class="float-right"> Date: 04-04-2023</small>
                              </h4>
                           </div>
                           <!-- /.col -->
                        </div>
                        <div class="row">
                           <div class="col-12">
                              <table width="100%" class="table">
                                 <tbody>
                                    <tr style="font-size: 16px;font-weight: bolder;">
                                       <td>Company Details</td>
                                       <td>Name &amp; Address of Supplier</td>
                                       <td>Purchase Details</td>
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
                                             <strong>HP GAS</strong><br>
                                             patel colony<br>                            Nadiad, Gujarat, India<br>
                                             <b>Phone</b>: 9876541230<br>
                                             <b>Email</b>: parle@gmail.com<br>
                                             <b>GSTIN</b>: 29GGGGG1324R9Z6<br>
                                          </address>
                                       </td>
                                       <td>
                                          <b>Purchase #</b>1680607313<br>
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
                                       <th>Cost (₹)</th>
                                       <th>Price (₹)</th>
                                       <th>Discount (₹)</th>
                                       <th>UOM</th>
                                       <th>Total Taxable Value (₹)</th>
                                       <th>Tax (₹)</th>
                                       <th>Sub Total (₹)</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>Prasanth<br>Piceses</td>
                                       <td>4872642</td>
                                       <td>120.00</td>
                                       <td>200.00</td>
                                       <td>100.00</td>
                                       <td>0.00</td>
                                       <td>GMS</td>
                                       <td>24,000.00</td>
                                       <td>
                                          IGST : 6,720.00                                    (28.00%)
                                       </td>
                                       <td>30,720.00</td>
                                    </tr>
                                    <tr style="font-size: 16px;font-weight: bolder;">
                                       <td colspan="3">
                                          Total Amount Due   
                                       </td>
                                       <td>120</td>
                                       <td>200.00</td>
                                       <td></td>
                                       <td>0.00</td>
                                       <td></td>
                                       <td>24,000.00</td>
                                       <td>6,720.00</td>
                                       <td>30,720.00</td>
                                    </tr>
                                    <tr style="font-size: 16px;font-weight: bolder;">
                                       <td colspan="10">
                                          Rounded Off                            
                                       </td>
                                       <td>
                                          0.00                            
                                       </td>
                                    </tr>
                                    <tr style="font-size: 16px;font-weight: bolder;">
                                       <td colspan="10">
                                          Paid Amount                            
                                       </td>
                                       <td>
                                          0.00                            
                                       </td>
                                    </tr>
                                    <tr style="font-size: 16px;font-weight: bolder;">
                                       <td colspan="10">
                                          Balance Payable                            
                                       </td>
                                       <td>
                                          30,720.00                            
                                       </td>
                                    </tr>
                                    <tr style="font-size: 16px;font-weight: bold; ">
                                       <td colspan="6">
                                          Amount in Words                            
                                       </td>
                                       <td colspan="5" style="text-align: right">
                                          thirty thousand, seven hundred and twenty                            
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
                              <!-- <button type="button" class="btn btn-success float-right">
                                 <i class="far fa-credit-card"></i> Submit Payment
                                 </button>
                                 <a class="btn btn-primary float-right" style="margin-right: 5px;" href="https://zivaansolutions.com/apps/pro/purchase/pdf/45" target="_blank">
                                 <i class="fas fa-download"></i> Generate PDF
                                 </a> -->
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
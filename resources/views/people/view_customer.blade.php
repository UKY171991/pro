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
                  <div class="card-header secondary-header">
                     <h3 class="card-title">View Customer</h3>
                     <!-- <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-tt="tooltip" title="Click here to hide detail">
                          <i class="fas fa-minus"></i>
                        </button>
                        </div> -->
                  </div>
                  <div class="card-body p-0">
                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th style="width: 30%;background-color: #DCDCDC;">Personal Details</th>
                              <th style="width: 30%;background-color: #DCDCDC;">Billing Details</th>
                              <th style="width: 30%;background-color: #DCDCDC;">Shipping Details</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>
                                 <label>Customer Name</label> 
                                 : 
                                 Demo One                       
                              </td>
                              <td>
                                 <label>Country</label> 
                                 : 
                                 India                      
                              </td>
                              <td>
                                 <label>Shipping Country</label> 
                                 : 
                                 India                      
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <label>GSTIN/UIN of Recipient</label> 
                                 : 
                                 GSTEXAMPLE                      
                              </td>
                              <td>
                                 <label>State</label> 
                                 : 
                                 Rajasthan                      
                              </td>
                              <td>
                                 <label>Shipping State</label> 
                                 : 
                                 Gujarat                      
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <label>Email</label> 
                                 : 
                              </td>
                              <td>
                                 <label>City</label> 
                                 : 
                                 Jalore                      
                              </td>
                              <td>
                                 <label>Shipping City</label> 
                                 : 
                                 Ahmedabad                      
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <label>Phone</label> 
                                 : 
                                 9898989898                      
                              </td>
                              <td>
                                 <label>Address</label> 
                                 : 
                                 adf                      
                              </td>
                              <td>
                                 <label>Shipping Address</label> 
                                 : 
                                 address                      
                              </td>
                           </tr>
                           <tr>
                              <td>
                              </td>
                              <td>
                                 <label>Pincode</label> 
                                 : 
                                 385210                      
                              </td>
                              <td>
                                 <label>Shipping Pincode</label> 
                                 : 
                                 500001                      
                              </td>
                           </tr>
                        </tbody>
                     </table>
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
               <div class="card">
                  <div class="card-header purple-header">
                     <h3 class="card-title">View Sale</h3>
                     <div class="card-tools">
                     </div>
                  </div>
                  <div class="card-body p-0 m-0">
                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th>Invoice No</th>
                              <th>Invoice Date</th>
                              <th>Customer</th>
                              <th>Total Discount (₹)</th>
                              <th>Total Taxable Value (₹)</th>
                              <th>TDS (₹)</th>
                              <th>Total Tax (₹)</th>
                              <th>Total (₹)</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td><a href="#" target="_blank">1674336115</a></td>
                              <td>21-01-2023</td>
                              <td>Demo One </td>
                              <td>0.00</td>
                              <td>59,000.00</td>
                              <td>0.00</td>
                              <td>0.00</td>
                              <td>59,000.00</td>
                           </tr>
                           <tr>
                              <td><a href="#" target="_blank">1673173818</a></td>
                              <td>08-01-2023</td>
                              <td>Demo One </td>
                              <td>0.00</td>
                              <td>22,222.00</td>
                              <td>0.00</td>
                              <td>0.00</td>
                              <td>22,222.00</td>
                           </tr>
                           <tr>
                              <td><a href="#" target="_blank">1668780736</a></td>
                              <td>18-11-2022</td>
                              <td>Demo One </td>
                              <td>0.00</td>
                              <td>19,000.00</td>
                              <td>0.00</td>
                              <td>0.00</td>
                              <td>19,000.00</td>
                           </tr>
                           <tr>
                              <td><a href="#" target="_blank">1668352897</a></td>
                              <td>13-11-2022</td>
                              <td>Demo One </td>
                              <td>4,000.00</td>
                              <td>36,000.00</td>
                              <td>0.00</td>
                              <td>0.00</td>
                              <td>36,000.00</td>
                           </tr>
                        </tbody>
                        <tfoot class="bg-gray disabled footer_data">
                           <tr>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th>₹ 5,935.00</th>
                              <th>₹ 3,77,627.00</th>
                              <th>₹ 12.00</th>
                              <th>₹ 3,680.75</th>
                              <th>₹ 3,81,319.75</th>
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
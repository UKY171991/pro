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
               <form role="form" id="saleReportForm" name="saleReportForm" method="POST" action="https://zivaansolutions.com/apps/pro/report/sale" target="_blank">
                  <div class="card card-primary">
                     <div class="card-header">
                        <h3 class="card-title">
                           <i class="fas fa-funnel-dollar"></i>
                           Filter Report		                
                        </h3>
                        <div class="card-tools">
                           <!-- <div class="input-group">
                              <button type="button" class="btn btn-default float-right" id="daterange-btn">
                                <i class="far fa-calendar-alt"></i> Date range picker
                                <i class="fas fa-caret-down"></i>
                              </button>
                              </div> -->
                           <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                              </button> -->
                        </div>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                        <div class="row">
                           <div class="col-sm-3">
                              <label>Select Date Range</label>
                              <div class="input-group">
                                 <button type="button" class="btn btn-block btn-outline-secondary float-right" id="daterange-btn">
                                    <i class="far fa-calendar-alt"></i> Date Range
                                    <!-- <i class="fas fa-caret-down"></i> -->
                                 </button>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="form-group">
                                 <label>From Date</label>
                                 <div class="input-group">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="from_date" id="from_date" style="z-index:999 !important" readonly="readonly">
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="form-group">
                                 <label>To Date</label>
                                 <div class="input-group">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="to_date" id="to_date" value="17-04-2023" readonly="readonly">
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="form-group">
                                 <label for="customer">Customer</label>
                                 <select class="form-control form-control-sm">
                                    <option value="" data-select2-id="2">Select</option>
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
                                
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                        <input type="hidden" name="action_type" id="action_type" value="">
                        <input type="hidden" name="csrf_zivaan_pro" value="7f161025b10fd3b70f88c924c0d34841">
                        <button type="submit" name="submit" id="submitSaleReport" class="btn btn-info">Search</button>
                     </div>
                  </div>
               </form>
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">Sales Report</h3>
                     <div class="card-tools">
                        <button type="button" class="btn btn-tool bt-danger" id="export">
                        <i class="fas fa-file-export"></i>
                        Export                    </button>
                        <button type="button" class="btn btn-tool" id="print">
                        <i class="fas fa-print"></i>
                        Print                    </button>
                        <button type="button" class="btn btn-tool" id="pdf">
                        <i class="fas fa-file-pdf"></i>
                        PDF                    </button>
                     </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body sales_list">
                  	<div class="table-responsive">
                     <table class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Invoice No</th>
                              <th>Invoice Date</th>
                              <th>Customer</th>
                              <th>Total Discount (₹)</th>
                              <th>Total Taxable Value (₹)</th>
                              <th>TDS (₹)</th>
                              <th>IGST</th>
                              <th>CGST</th>
                              <th>SGST</th>
                              <th>Total (₹)</th>
                              <th>Total Profit (₹)</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td><a href="#" target="_blank">1681620698</a></td>
                              <td>16-04-2023</td>
                              <td>aman</td>
                              <td>0.00</td>
                              <td>1,23,45,420.00</td>
                              <td>0.00</td>
                              <td>34,56,717.60</td>
                              <td>0.00</td>
                              <td>0.00</td>
                              <td>1,58,02,137.60</td>
                              <td>1,22,34,200.00</td>
                           </tr>
                           <tr>
                              <td><a href="#" target="_blank">1681620322</a></td>
                              <td>16-04-2023</td>
                              <td>Nadim Khan</td>
                              <td>0.00</td>
                              <td>22,222.00</td>
                              <td>0.00</td>
                              <td>3,999.96</td>
                              <td>0.00</td>
                              <td>0.00</td>
                              <td>26,221.96</td>
                              <td>16,722.00</td>
                           </tr>
                          
                        </tbody>
                        <tfoot class="bg-gray disabled footer_data">
                           <tr>
                              <th colspan="3"></th>
                              <th>₹ 5,38,573.00</th>
                              <th>₹ 1,98,09,722.16</th>
                              <th>₹ 55,603.00</th>
                              <th>₹ 37,51,388.83</th>
                              <th>₹ 4,02,827.40</th>
                              <th>₹ 4,02,741.90</th>
                              <th>₹ 2,44,62,563.29</th>
                              <th>₹ 1,47,46,842.16</th>
                           </tr>
                        </tfoot>
                     </table>
                 	</div>
                  </div>
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
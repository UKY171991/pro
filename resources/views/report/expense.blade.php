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
               <form role="form" id="expenseReportForm" name="expenseReportForm" method="POST" action="" target="_blank">
                  <!-- general form elements disabled -->
                  <div class="card card-primary">
                     <div class="card-header">
                        <h3 class="card-title">
                           <i class="fas fa-funnel-dollar"></i>
                           Filter Report			                
                        </h3>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                        <div class="row">
                           <div class="col-sm-2">
                              <label>Select Date Range</label>
                              <div class="input-group">
                                 <button type="button" class="btn btn-block btn-outline-secondary float-right" id="daterange-btn">
                                    <i class="far fa-calendar-alt"></i> Date Range
                                    <!-- <i class="fas fa-caret-down"></i> -->
                                 </button>
                              </div>
                           </div>
                           <div class="col-sm-2">
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
                           <div class="col-sm-2">
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
                                 <label for="customer">Supplier Name</label>
                                 <select class="form-control form-control-sm">
                                    <option value="" data-select2-id="2">Select</option>
                                    <option value="1" data-select2-id="6">
                                       HP GAS		                            
                                    </option>
                                    <option value="5" data-select2-id="7">
                                       Bhadresh		                            
                                    </option>
                                    <option value="6" data-select2-id="8">
                                       L&amp;T		                            
                                    </option>
                                    <option value="8" data-select2-id="9">
                                       MyOwn		                            
                                    </option>
                                    <option value="9" data-select2-id="10">
                                       NEW TECH TEDARİKÇİ		                            
                                    </option>
                                    <option value="10" data-select2-id="11">
                                       Alhaisam		                            
                                    </option>
                                   
                                    <option value="12" data-select2-id="13">
                                       Google India		                            
                                    </option>
                                 </select>
                                 <span id="err_supplier_id" class="error invalid-feedback"></span>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="form-group">
                                 <label for="customer">Expense Category Name</label>
                                 <select class="form-control form-control-sm">
                                    <option value="" data-select2-id="4">Select</option>
                                    <option value="1" data-select2-id="16">
                                       Electricity		                            
                                    </option>
                                    <option value="2" data-select2-id="17">
                                       Laptop		                            
                                    </option>
                                    <option value="5" data-select2-id="18">
                                       Plastic		                            
                                    </option>
                                 </select>
                                 <span id="err_expense_category_id" class="error invalid-feedback"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                        <button type="submit" name="submit" id="submitExpenseReport" class="btn btn-info">Search</button>
                     </div>
                  </div>
               </form>
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">Expense Report</h3>
                     <div class="card-tools">
                        <button type="button" class="btn btn-tool bt-danger" id="export">
                        <i class="fas fa-file-export"></i>
                        Export	                    </button>
                        <button type="button" class="btn btn-tool" id="print">
                        <i class="fas fa-print"></i>
                        Print	                    </button>
                        <button type="button" class="btn btn-tool" id="pdf">
                        <i class="fas fa-file-pdf"></i>
                        PDF	                    </button>
                     </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body expense_list">
                  	<div class="table-responsive">
                     <table class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Invoice Date</th>
                              <th>Expense Category</th>
                              <th>Name of Supplier</th>
                              <th>Net Taxable Amount(₹)</th>
                              <th>CGST(₹)</th>
                              <th>SGST(₹)</th>
                              <th>IGST(₹)</th>
                              <th>Total Amount (Inclusive Tax)(₹)</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>11-04-2023</td>
                              <td>Electricity</td>
                              <td></td>
                              <td>100.00</td>
                              <td>0.00</td>
                              <td>0.00</td>
                              <td>0.00</td>
                              <td>100.00</td>
                           </tr>
                           <tr>
                              <td>27-03-2023</td>
                              <td>Electricity</td>
                              <td>HP GAS</td>
                              <td>33.00</td>
                              <td>0.00</td>
                              <td>0.00</td>
                              <td>0.00</td>
                              <td>33.00</td>
                           </tr>
                           
                        </tbody>
                        <tfoot class="bg-gray disabled footer_data">
                           <tr>
                              <th colspan="3"></th>
                              <th>₹ 2,01,905.00</th>
                              <th>₹ 0.00</th>
                              <th>₹ 0.00</th>
                              <th>₹ 2,11,828.05</th>
                              <th>₹ 4,13,733.05			                	</th>
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
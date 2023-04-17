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
               <form role="form" id="ledgerReportForm" name="ledgerReportForm" method="POST" action="" target="_blank">
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
                           <div class="col-sm-3" data-select2-id="5">
                              <div class="form-group" data-select2-id="4">
                                 <label for="ledger_id">Ledger</label>
                                 <select class="form-control form-control-sm">
                                    <option value="" data-select2-id="2">Select</option>
                                    <option value="1" data-select2-id="7">
                                       CASH ACCOUNT - CASH                              
                                    </option>
                                    <option value="2" data-select2-id="8">
                                       SALE - SALES                              
                                    </option>
                                    <option value="3" data-select2-id="9">
                                       SALE RETURN - SALES RETURN                              
                                    </option>
                                    <option value="4" data-select2-id="10">
                                       PURCHASE ACCOUNT - PURCHASE                              
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
                        <button type="submit" name="submit" id="submitLedgerReport" class="btn btn-info">Search</button>
                     </div>
                  </div>
               </form>
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">Ledger Report</h3>
                     <div class="card-tools">
                        <button type="button" class="btn btn-tool" id="print">
                        <i class="fas fa-print"></i>
                        Print                    </button>
                        <button type="button" class="btn btn-tool" id="pdf">
                        <i class="fas fa-file-pdf"></i>
                        PDF                    </button>
                     </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body ledger_detail">
                     <div class="row">
                        <div class="col-md-12">
                           <table width="100%" class="table table-bordered">
                              <tbody>
                                 <tr class="bg-light">
                                    <td width="20%"><b>CASH ACCOUNT</b></td>
                                    <td width="10%">Opening Bal.</td>
                                    <td width="10%">
                                       <b>
                                       0.00					</b>
                                    </td>
                                    <td width="10%">Closing Bal.</td>
                                    <td width="10%">
                                       <b>
                                       1,14,66,615.04					</b>
                                    </td>
                                    <td width="10%" align="right">From Date</td>
                                    <td width="10%" align="left"><strong>N/A</strong></td>
                                    <td width="10%" align="right">To Date</td>
                                    <td width="10%" align="left"><strong>17-04-2023</strong></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <table width="100%" class="table table-bordered">
                              <tbody>
                                 <tr style="font-size:18px;font-weight: bolder" class="bg-secondary disabled">
                                    <td width="20%">Date</td>
                                    <td width="40%">Particulars</td>
                                    <td width="20%">Dr Amount</td>
                                    <td width="20%">Cr Amount</td>
                                 </tr>
                                
                                 <tr>
                                    <td>11-10-2022</td>
                                    <td>
                                       MB SOFTWARES - SUNDRY DEBTORS  [<a href="" target="_blank">1665467393</a>]						
                                    </td>
                                    <td>
                                       24,320.00						
                                    </td>
                                    <td>
                                       0.00						
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>24-10-2022</td>
                                    <td>
                                       MB SOFTWARES - SUNDRY DEBTORS  [<a href="" target="_blank">1666597005</a>]						
                                    </td>
                                    <td>
                                       600.00						
                                    </td>
                                    <td>
                                       0.00						
                                    </td>
                                 </tr>
                                 
                                 <tr style="font-size: 16px;font-weight: bold" class="bg-light">
                                    <td width="20%"></td>
                                    <td width="40%"></td>
                                    <td width="20%">
                                       1,40,10,939.74				
                                    </td>
                                    <td width="20%">
                                       1,40,10,939.74				
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
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
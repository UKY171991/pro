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
               <form role="form" id="profitAndLossReportForm" name="profitAndLossReportForm" method="POST" action="" target="_blank">
                  <div class="card card-primary">
                     <div class="card-header">
                        <h3 class="card-title">
                           <i class="fas fa-funnel-dollar"></i>
                           Filter Report	                
                        </h3>
                        <div class="card-tools">
                           <button type="button" class="btn btn-tool" data-card-widget="collapse">
                           <i class="fas fa-minus"></i>
                           </button>
                        </div>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                        <div class="row">
                           <div class="col-sm-4">
                              <div class="form-group">
                                 <label for="year_ending">Year Ending</label>
                                 <select class="form-control form-control-sm">
                                    <option value="" data-select2-id="2">Select</option>
                                    <option value="2024" data-select2-id="5">2024-2023</option>
                                    <option value="2023" data-select2-id="6">2023-2022</option>
                                    <option value="2022" data-select2-id="7">2022-2021</option>
                                    <option value="2021" data-select2-id="8">2021-2020</option>
                                    <option value="2020" data-select2-id="9">2020-2019</option>
                                    
                                 </select>
                                
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                        <button type="submit" name="submit" id="submitProfitAndLossReport" class="btn btn-info">Search</button>
                     </div>
                  </div>
               </form>
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">Profit &amp; Loss Report</h3>
                     <div class="card-tools">
                        <button type="button" class="btn btn-tool" id="print">
                        <i class="fas fa-print"></i>
                        Print	                </button>
                        <button type="button" class="btn btn-tool" id="pdf">
                        <i class="fas fa-file-pdf"></i>
                        PDF	                </button>
                     </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body profit_and_loss">
                     <div class="row">
                        <div class="col-md-12">
                           <table width="100%" class="table table-bordered">
                              <tbody>
                                 <tr>
                                    <td width="90%" align="right">Year Ending</td>
                                    <td width="10%" align="right"><strong>2024</strong></td>
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
                                    <td width="60%" colspan="2">Revenue</td>
                                    <td width="20%">2023</td>
                                    <td width="20%">2024</td>
                                 </tr>
                                 <tr>
                                    <td width="20%"></td>
                                    <td width="40%">
                                       SALE				
                                    </td>
                                    <td width="20%">1,00,29,689.16</td>
                                    <td width="20%">0.00</td>
                                 </tr>
                                 <tr>
                                    <td width="20%"></td>
                                    <td width="40%">
                                       PURCHASE RETURN ACCOUNT				
                                    </td>
                                    <td width="20%">0.00</td>
                                    <td width="20%">0.00</td>
                                 </tr>
                                 <tr style="font-size: 16px;font-weight: bold" class="bg-light">
                                    <td width="60%" colspan="2">Total Revenues</td>
                                    <td width="20%">1,00,29,689.16</td>
                                    <td width="20%">0.00</td>
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
                                    <td width="60%" colspan="2">Expenses &amp; Purchases</td>
                                    <td width="20%">2023</td>
                                    <td width="20%">2024</td>
                                 </tr>
                                
                                 <tr style="font-size: 16px;font-weight: bold" class="bg-light">
                                    <td width="60%" colspan="2">Total Expenses</td>
                                    <td width="20%">32,948.00</td>
                                    <td width="20%">0.00</td>
                                 </tr>
                              </tbody>
                           </table>
                           <table width="100%" class="table table-bordered">
                              <tbody>
                                 <tr style="font-size: 18px;font-weight: bolder" class="bg-secondary">
                                    <td width="60%" colspan="2">Net Profit / Loss</td>
                                    <td width="20%">99,96,741.16</td>
                                    <td width="20%">0.00</td>
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
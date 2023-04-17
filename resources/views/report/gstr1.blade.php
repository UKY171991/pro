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
               <form role="form" id="gstr1ReportForm" name="gstr1ReportForm" method="POST" action="" target="_blank">
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
                           <div class="col-sm-3" data-select2-id="28">
                              <div class="form-group" data-select2-id="27">
                                 <label for="customer">Invoice Type</label>
                                 <select class="form-control form-control-sm">
                                    <option value="b2b" data-select2-id="2">B2B</option>
                                    <option value="b2cl" data-select2-id="30">B2CL</option>
                                    <option value="b2cs" data-select2-id="31">B2CS</option>
                                    <option value="cdnr" data-select2-id="32">CDNR</option>
                                    <option value="cdnur" data-select2-id="33">CDNUR</option>
                                 </select>
                                 
                              </div>
                           </div>
                           <div class="col-sm-3" data-select2-id="36">
                              <div class="form-group" data-select2-id="35">
                                 <label for="customer">Customer</label>
                                 <select class="form-control form-control-sm">
                                    <option value="" data-select2-id="25">Select</option>
                                    <option value="24" data-select2-id="37">
                                       Nadim Khan                              
                                    </option>
                                    <option value="23" data-select2-id="38">
                                       aman                              
                                    </option>
                                    <option value="22" data-select2-id="39">
                                       Asad shaikh                              
                                    </option>
                                    <option value="21" data-select2-id="40">
                                       test                              
                                    </option>
                                    <option value="20" data-select2-id="41">
                                       Taher Zidane                              
                                    </option>
                                    <option value="19" data-select2-id="42">
                                       ln01                              
                                    </option>
                                    <option value="18" data-select2-id="43">
                                       DIna                              
                                    </option>
                                    <option value="17" data-select2-id="44">
                                       HENRY TAGOE                              
                                    </option>
                                    <option value="16" data-select2-id="45">
                                       cust1                              
                                    </option>
                                    <option value="15" data-select2-id="46">
                                       jivan jyoti Hospital                              
                                    </option>
                                    <option value="14" data-select2-id="47">
                                       Noor                              
                                    </option>
                                    <option value="13" data-select2-id="48">
                                       boss                              
                                    </option>
                                    <option value="12" data-select2-id="49">
                                       good                              
                                    </option>
                                    <option value="11" data-select2-id="50">
                                       MÜŞTERİ BU                              
                                    </option>
                                    <option value="10" data-select2-id="51">
                                       Demo One                               
                                    </option>
                                    <option value="9" data-select2-id="52">
                                       Abc                              
                                    </option>
                                    <option value="8" data-select2-id="53">
                                       HTY                              
                                    </option>
                                    <option value="7" data-select2-id="54">
                                       MB Softwares                              
                                    </option>
                                    <option value="1" data-select2-id="55">
                                       Jitendra                              
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
                        <button type="submit" name="submit" id="submitGstr1Report" class="btn btn-info">Search</button>
                     </div>
                  </div>
               </form>
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">GSTR1 Report</h3>
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
                  <div class="card-body gstr1_list">
                     <table class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Customer</th>
                              <th>Invoice No</th>
                              <th>Invoice Date</th>
                              <th>Invoice Value</th>
                              <th>Place of Supply</th>
                              <th>Tax Rate</th>
                              <th>Taxable value</th>
                              <!-- <th>Cess Amount</th> -->
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>aman</td>
                              <td>1681620698</td>
                              <td>16-Apr-2023</td>
                              <td>15802137.60</td>
                              <td>27-Maharashtra</td>
                              <td>28.00</td>
                              <td>12345420.00</td>
                           </tr>
                        </tbody>
                     </table>
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
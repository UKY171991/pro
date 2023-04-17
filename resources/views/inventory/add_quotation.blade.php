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
               <form class="form-horizontal" name="addQoutationForm" id="addQoutationForm" method="POST" action="">
                  <div class="card">
                     <div class="card-header">
                        <h3 class="card-title">Add Quotation</h3>
                        <div class="card-tools">
                           <div class="btn-group">
                              <button type="button" class="btn btn-tool btn-warning rcm_btn" data-tt="tooltip" title="" data-original-title="Click here to Change the RCM Availability">
                              Enable RCM                      </button>
                              <button type="button" class="btn btn-tool btn-warning" data-tt="tooltip" title="" data-original-title="Go to Company setting to change the default setting of RCM Applicability">
                              <i class="far fa-question-circle"></i>
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="col-sm-12">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="form-group">
                                    <label>Reference No :</label>
                                    <input type="text" class="form-control" id="reference_no" name="reference_no" disabled="">
                                 </div>
                              </div>
                              <div class="col-sm-3">
                                 <div class="form-group">
                                    <label>Quotation Date</label>
                                    <input type="text" class="form-control datepicker" id="quotation_date" name="quotation_date" value="17-04-2023">
                                    <span id="err_quotation_date" class="error invalid-feedback"></span>
                                 </div>
                              </div>
                              <div class="col-sm-3">
                                 <div class="form-group">
                                    <label for="warehouse">
                                    Warehouse <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control form-control-sm">
                                       <option value="" data-select2-id="2">Select</option>
                                       <option value="1">
                                          Warehouse A                              
                                       </option>
                                       <option value="2">
                                          Warehouse B                              
                                       </option>
                                       <option value="3">
                                          Sylvia Chambers                              
                                       </option>
                                       <option value="7">
                                          Singh garments                              
                                       </option>
                                       <option value="11">
                                          ???                              
                                       </option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-3">
                                 <div class="form-group">
                                    <label for="customer">
                                    Customer                            <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group input-group-sm">
                                       <select class="form-control form-control-sm">
                                          <option value="" data-select2-id="4">Select</option>
                                          <option value="24">
                                             Nadim Khan                                
                                          </option>
                                          <option value="23">
                                             aman                                
                                          </option>
                                          <option value="22">
                                             Asad shaikh                                
                                          </option>
                                          <option value="21">
                                             test                                
                                          </option>
                                          <option value="20">
                                             Taher Zidane                                
                                          </option>
                                          <option value="19">
                                             ln01                                
                                          </option>
                                          <option value="18">
                                             DIna                                
                                          </option>
                                          <option value="17">
                                             HENRY TAGOE                                
                                          </option>
                                          <option value="16">
                                             cust1                                
                                          </option>
                                          <option value="15">
                                             jivan jyoti Hospital                                
                                          </option>
                                          <option value="14">
                                             Noor                                
                                          </option>
                                          <option value="13">
                                             boss                                
                                          </option>
                                          <option value="12">
                                             good                                
                                          </option>
                                          <option value="11">
                                             MÜŞTERİ BU                                
                                          </option>
                                          <option value="10">
                                             Demo One                                 
                                          </option>
                                          <option value="9">
                                             Abc                                
                                          </option>
                                          <option value="8">
                                             HTY                                
                                          </option>
                                          <option value="7">
                                             MB Softwares                                
                                          </option>
                                          <option value="1">
                                             Jitendra                                
                                          </option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card-footer">
                        <button type="submit" name="submit" id="quotationSubmit" class="btn btn-info">Add Quotation</button>
                     </div>
                  </div>
               </form>
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
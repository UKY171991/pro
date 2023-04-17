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
               <form class="form-horizontal" name="companySettingForm" id="companySettingForm" method="post" enctype="multipart/form-data">
                  <div class="card card-primary card-tabs" data-select2-id="414">
                     <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                           <li class="pt-2 px-3">
                              <h3 class="card-title">Company Settings</h3>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link active" id="custom-tabs-company-setting-tab" data-toggle="pill" href="#custom-tabs-company-setting" role="tab" aria-controls="custom-tabs-company-setting" aria-selected="true">Details</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="custom-tabs-gst-tab" data-toggle="pill" href="#custom-tabs-gst" role="tab" aria-controls="custom-tabs-gst" aria-selected="false">GST</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="custom-tabs-bank-details-tab" data-toggle="pill" href="#custom-tabs-bank-details" role="tab" aria-controls="custom-tabs-bank-details" aria-selected="false">Bank Details</a>
                           </li>
                          
                           <li class="nav-item">
                              <a class="nav-link" id="custom-tabs-term-and-condition-tab" data-toggle="pill" href="#custom-tabs-term-and-condition" role="tab" aria-controls="custom-tabs-term-and-condition" aria-selected="false">Terms &amp; Condition</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="custom-tabs-logo-and-favicon-tab" data-toggle="pill" href="#custom-tabs-logo-and-favicon" role="tab" aria-controls="custom-tabs-logo-and-favicon" aria-selected="false">Logo &amp; Favicon</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="custom-tabs-currency-tab" data-toggle="pill" href="#custom-tabs-currency" role="tab" aria-controls="custom-tabs-currency" aria-selected="false">Currency</a>
                           </li>
                          
                        </ul>
                     </div>
                     <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent" data-select2-id="custom-tabs-one-tabContent">
                           <div class="tab-pane fade active show" id="custom-tabs-company-setting" role="tabpanel" aria-labelledby="custom-tabs-company-setting-tab">
                              <div class="form-group row">
                                 <label for="inputEmail3" class="col-sm-2 col-form-label">Company Name<span class="text-danger">*</span></label>
                                 <div class="col-sm-4">
                                    <input type="text" name="company_name" value="DEMO PVT LTD" class="form-control form-control-sm field_validation" id="company_name" placeholder="Company Name">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputPassword3" class="col-sm-2 col-form-label">Email<span class="text-danger">*</span></label>
                                 <div class="col-sm-4">
                                    <input type="text" name="email" value="bsuiness@seway.com" class="form-control form-control-sm field_validation" id="email" placeholder="Email">                          
                                    <span id="err_email" class="error invalid-feedback">
                                       <!--  -->
                                    </span>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputPassword3" class="col-sm-2 col-form-label">Phone<span class="text-danger">*</span></label>
                                 <div class="col-sm-4">
                                    <input type="text" name="mobile" value="0096565596121GH" class="form-control form-control-sm field_validation" id="mobile" placeholder="Phone">                          
                                    
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputPassword3" class="col-sm-2 col-form-label">Country<span class="text-danger">*</span></label>
                                 <div class="col-sm-4">
                                    <select class="form-control form-control-sm">
                                       <option value="1">
                                          Afghanistan                              
                                       </option>
                                       <option value="2">
                                          Albania                              
                                       </option>
                                       <option value="246">
                                          Zimbabwe                              
                                       </option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputPassword3" class="col-sm-2 col-form-label">
                                 State                          <span class="text-danger">*</span>
                                 </label>
                                 <div class="col-sm-4">
                                    <select class="form-control form-control-sm">
                                       <option value="1">
                                          Andaman and Nicobar Islands                              
                                       </option>
                                       <option value="2">
                                          Andhra Pradesh                              
                                       </option>
                                       <option value="3">
                                          Arunachal Pradesh                              
                                       </option>
                                       <option value="4124">
                                          Ladakh (NEWLY ADDED)                              
                                       </option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputPassword3" class="col-sm-2 col-form-label">City<span class="text-danger">*</span></label>
                                 <div class="col-sm-4">
                                    <select class="form-control form-control-sm">
                                       <option value="1096">
                                          Ambala                              
                                       </option>
                                       <option value="1097">
                                          Ambala Cantt                              
                                       </option>
                                       <option value="1098">
                                          Asan Khurd                              
                                       </option>
                                       <option value="1099">
                                          Asandh                              
                                       </option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputPassword3" class="col-sm-2 col-form-label">Address Line1</label>
                                 <div class="col-sm-4">
                                    <input type="text" name="address_line1" value="ABC 123" class="form-control form-control-sm field_validation" id="address_line1" placeholder="Address Line1">
                                    <span id="err_address_line1" class="error invalid-feedback">
                                       <!--  -->
                                    </span>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputPassword3" class="col-sm-2 col-form-label">Address Line2</label>
                                 <div class="col-sm-4">
                                    <input type="text" name="address_line2" value="XYZ" class="form-control form-control-sm" id="address_line2" placeholder="Address Line2">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputPassword3" class="col-sm-2 col-form-label">Pincode<span class="text-danger">*</span></label>
                                 <div class="col-sm-4">
                                    <input type="text" name="pincode" value="110001" class="form-control form-control-sm field_validation" id="pincode" placeholder="Pincode">                          
                                    <span id="err_pincode" class="error invalid-feedback">
                                       <!--  -->
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="custom-tabs-gst" role="tabpanel" aria-labelledby="custom-tabs-gst-tab">
                              <div class="form-group row">
                                 <label for="inputPassword3" class="col-sm-2 col-form-label">GST Registration Type<span class="text-danger">*</span></label>
                                 <div class="col-sm-4">
                                    <select class="form-control form-control-sm">
                                       <option value="1" selected="" data-select2-id="409">Registered</option>
                                       <option value="0">Not Registered</option>
                                       <option value="2">Composite</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputEmail3" class="col-sm-2 col-form-label">GSTIN</label>
                                 <div class="col-sm-4">
                                    <input type="text" name="gstin" value="24BBCAA0000A1Z5" class="form-control form-control-sm" id="gstin" placeholder="GSTIN (Example : 22AAAAA0000A1Z5)">
                                    <span id="err_gstin" class="error invalid-feedback"></span>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="custom-tabs-bank-details" role="tabpanel" aria-labelledby="custom-tabs-bank-details-tab">
                              <div class="form-group row">
                                 <label for="inputPassword3" class="col-sm-2 col-form-label">
                                 Bank Detail                        </label>
                                 <div class="col-sm-4">
                                    <textarea class="form-control form-control-sm" rows="5" name="bank_detail" id="bank_detail" placeholder="Bank Detail">Bank Name : cbs
                                    Account Number : 50039512581
                                    IFSC Code : SBIN005555
                                    Branch Name : Rannapark</textarea>
                                    <span id="err_pincode" class="error invalid-feedback"></span>
                                 </div>
                              </div>
                           </div>
                         
                           <div class="tab-pane fade" id="custom-tabs-term-and-condition" role="tabpanel" aria-labelledby="custom-tabs-term-and-condition-tab">
                              <div class="form-group row">
                                 <label for="inputPassword3" class="col-sm-2 col-form-label">
                                 Terms &amp; Condition                        </label>
                                 <div class="col-sm-4">
                                    <textarea class="form-control form-control-sm" rows="5" name="terms_and_condition" id="terms_and_condition">1. Subject to Ahmedabad Jurisdiction
                                    2. Our responsibility ceases as soon as the goods leave our premises.
                                    3. Goods once sold will not be taken back.
                                    4. Delivery ex-premises.</textarea>
                                    <span id="err_terms_and_condition" class="error invalid-feedback"></span>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="custom-tabs-logo-and-favicon" role="tabpanel" aria-labelledby="custom-tabs-logo-and-favicon-tab">
                              <div class="form-group row">
                                 <label for="inputPassword3" class="col-sm-2 col-form-label">Logo</label>
                                 <div class="col-sm-4">
                                    <div class="custom-file">
                                       <input type="file" class="custom-file-input" id="logo" name="logo">
                                       <label class="custom-file-label" for="logo">Choose file</label>
                                    </div>
                                    <!-- <input type="file" name="logo" class="form-control form-control-sm" id="logo"> -->
                                    <img src="https://zivaansolutions.com/apps/pro/assets/images/38871227764390a711df7a.jpg" height="100" width="100" style="padding-top: 5px;">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputPassword3" class="col-sm-2 col-form-label">Favicon</label>
                                 <div class="col-sm-4">
                                    <!--  <input type="file" name="favicon" class="form-control form-control-sm" id="favicon"> -->
                                    <div class="custom-file">
                                       <input type="file" class="custom-file-input" id="favicon" name="favicon">
                                       <label class="custom-file-label" for="favicon">Choose file</label>
                                    </div>
                                    <img src="https://zivaansolutions.com/apps/pro/assets/images/130639557564390a711e88c.jpg" height="100" width="100" style="padding-top: 5px;">
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="custom-tabs-currency" role="tabpanel" aria-labelledby="custom-tabs-currency-tab" data-select2-id="custom-tabs-currency">
                              <div class="form-group row">
                                 <label for="inputPassword3" class="col-sm-2 col-form-label">
                                 Default Currency<span class="text-danger">*</span>
                                 </label>
                                 <div class="col-sm-4">
                                    <select class="form-control form-control-sm">
                                       <option value="" data-select2-id="419">Default Currency</option>
                                       <option value="35" selected="" data-select2-id="412">
                                          INR                               
                                       </option>
                                    </select>
                                    
                                 </div>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                     <div class="card-footer">
                        <button type="submit" name="submit" id="companysettingSubmit" class="btn btn-info" data-tt="tooltip" title="" data-original-title="Click here to Save">Save</button>
                     </div>
                     <!-- /.card -->
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
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
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User role</h3>

                <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active btn-sm" href="{{url('/add-user-role')}}" data-tt="tooltip" title="" data-original-title="Click here to Add Bank Account">
                      <i class="fas fa-user-cog mr-2"></i>Add Role</a>
                  </li>
                </ul>
              </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<td>admin</td>
                  	<td>Administrator</td>
                  	<td>
                  		<a href="{{url('/add-user-role/1')}}" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
                  		<button type="button" class="btn btn-xs btn-outline-secondary" data-toggle="modal" data-target="#exampleModalLong" data-group_id="1" data-tt="tooltip" title="" data-original-title="Set permission"><i class="fas fa-key"></i> Set Permission</button>
                  	</td>
                  </tbody>
                </table>
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



<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="exampleModalLongTitle">Permission</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

               <div class="row">
                  <div class="col-md-12">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_all" id="1" type="checkbox">
                        <label for="1" class="custom-control-label">
                           <h6 class="mt-1">Select All</h6>
                        </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_company_setting_0_1" data-id="0" data-group_id="1" data-module="company_setting">
                        <label for="header_company_setting_0_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Company Setting</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p company_setting_0 company_setting_0_1" id="1_1" type="checkbox" value="1" name="permission" data-module="company_setting" data-module_id="0" data-group_id="1">
                        <label for="1_1" class="custom-control-label">
                        Company Setting                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_application_setting_1_1" data-id="1" data-group_id="1" data-module="application_setting">
                        <label for="header_application_setting_1_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Application Setting</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p application_setting_1 application_setting_1_1" id="2_1" type="checkbox" value="2" name="permission" data-module="application_setting" data-module_id="1" data-group_id="1">
                        <label for="2_1" class="custom-control-label">
                        Application Setting                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_discount_2_1" data-id="2" data-group_id="1" data-module="discount">
                        <label for="header_discount_2_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Discount</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p discount_2 discount_2_1" id="3_1" type="checkbox" value="3" name="permission" data-module="discount" data-module_id="2" data-group_id="1">
                        <label for="3_1" class="custom-control-label">
                        Add Discount                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p discount_2 discount_2_1" id="4_1" type="checkbox" value="4" name="permission" data-module="discount" data-module_id="2" data-group_id="1">
                        <label for="4_1" class="custom-control-label">
                        Edit Discount                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p discount_2 discount_2_1" id="5_1" type="checkbox" value="5" name="permission" data-module="discount" data-module_id="2" data-group_id="1">
                        <label for="5_1" class="custom-control-label">
                        List Discount                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p discount_2 discount_2_1" id="6_1" type="checkbox" value="6" name="permission" data-module="discount" data-module_id="2" data-group_id="1">
                        <label for="6_1" class="custom-control-label">
                        Delete Discount                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_tax_3_1" data-id="3" data-group_id="1" data-module="tax">
                        <label for="header_tax_3_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Tax</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p tax_3 tax_3_1" id="7_1" type="checkbox" value="7" name="permission" data-module="tax" data-module_id="3" data-group_id="1">
                        <label for="7_1" class="custom-control-label">
                        Add Tax                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p tax_3 tax_3_1" id="8_1" type="checkbox" value="8" name="permission" data-module="tax" data-module_id="3" data-group_id="1">
                        <label for="8_1" class="custom-control-label">
                        Edit Tax                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p tax_3 tax_3_1" id="9_1" type="checkbox" value="9" name="permission" data-module="tax" data-module_id="3" data-group_id="1">
                        <label for="9_1" class="custom-control-label">
                        List Tax                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p tax_3 tax_3_1" id="10_1" type="checkbox" value="10" name="permission" data-module="tax" data-module_id="3" data-group_id="1">
                        <label for="10_1" class="custom-control-label">
                        Delete Tax                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_expense_category_4_1" data-id="4" data-group_id="1" data-module="expense_category">
                        <label for="header_expense_category_4_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Expense Category</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p expense_category_4 expense_category_4_1" id="13_1" type="checkbox" value="13" name="permission" data-module="expense_category" data-module_id="4" data-group_id="1">
                        <label for="13_1" class="custom-control-label">
                        Add Expense Category                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p expense_category_4 expense_category_4_1" id="14_1" type="checkbox" value="14" name="permission" data-module="expense_category" data-module_id="4" data-group_id="1">
                        <label for="14_1" class="custom-control-label">
                        Edit Expense Category                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p expense_category_4 expense_category_4_1" id="15_1" type="checkbox" value="15" name="permission" data-module="expense_category" data-module_id="4" data-group_id="1">
                        <label for="15_1" class="custom-control-label">
                        List Expense Category                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p expense_category_4 expense_category_4_1" id="16_1" type="checkbox" value="16" name="permission" data-module="expense_category" data-module_id="4" data-group_id="1">
                        <label for="16_1" class="custom-control-label">
                        Delete Expense Category                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_currency_5_1" data-id="5" data-group_id="1" data-module="currency">
                        <label for="header_currency_5_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Currency</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p currency_5 currency_5_1" id="17_1" type="checkbox" value="17" name="permission" data-module="currency" data-module_id="5" data-group_id="1">
                        <label for="17_1" class="custom-control-label">
                        Add Currency                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p currency_5 currency_5_1" id="18_1" type="checkbox" value="18" name="permission" data-module="currency" data-module_id="5" data-group_id="1">
                        <label for="18_1" class="custom-control-label">
                        Edit Currency                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p currency_5 currency_5_1" id="19_1" type="checkbox" value="19" name="permission" data-module="currency" data-module_id="5" data-group_id="1">
                        <label for="19_1" class="custom-control-label">
                        List Currency                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p currency_5 currency_5_1" id="20_1" type="checkbox" value="20" name="permission" data-module="currency" data-module_id="5" data-group_id="1">
                        <label for="20_1" class="custom-control-label">
                        Delete Currency                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_expense_6_1" data-id="6" data-group_id="1" data-module="expense">
                        <label for="header_expense_6_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Expense</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p expense_6 expense_6_1" id="21_1" type="checkbox" value="21" name="permission" data-module="expense" data-module_id="6" data-group_id="1">
                        <label for="21_1" class="custom-control-label">
                        Add Expense                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p expense_6 expense_6_1" id="22_1" type="checkbox" value="22" name="permission" data-module="expense" data-module_id="6" data-group_id="1">
                        <label for="22_1" class="custom-control-label">
                        Edit Expense                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p expense_6 expense_6_1" id="23_1" type="checkbox" value="23" name="permission" data-module="expense" data-module_id="6" data-group_id="1">
                        <label for="23_1" class="custom-control-label">
                        List Expense                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p expense_6 expense_6_1" id="24_1" type="checkbox" value="24" name="permission" data-module="expense" data-module_id="6" data-group_id="1">
                        <label for="24_1" class="custom-control-label">
                        Delete Expense                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p expense_6 expense_6_1" id="72_1" type="checkbox" value="72" name="permission" data-module="expense" data-module_id="6" data-group_id="1">
                        <label for="72_1" class="custom-control-label">
                        View Expense                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_supplier_7_1" data-id="7" data-group_id="1" data-module="supplier">
                        <label for="header_supplier_7_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Supplier</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p supplier_7 supplier_7_1" id="25_1" type="checkbox" value="25" name="permission" data-module="supplier" data-module_id="7" data-group_id="1">
                        <label for="25_1" class="custom-control-label">
                        Add Supplier                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p supplier_7 supplier_7_1" id="26_1" type="checkbox" value="26" name="permission" data-module="supplier" data-module_id="7" data-group_id="1">
                        <label for="26_1" class="custom-control-label">
                        Edit Supplier                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p supplier_7 supplier_7_1" id="27_1" type="checkbox" value="27" name="permission" data-module="supplier" data-module_id="7" data-group_id="1">
                        <label for="27_1" class="custom-control-label">
                        List Supplier                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p supplier_7 supplier_7_1" id="28_1" type="checkbox" value="28" name="permission" data-module="supplier" data-module_id="7" data-group_id="1">
                        <label for="28_1" class="custom-control-label">
                        Delete Supplier                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p supplier_7 supplier_7_1" id="139_1" type="checkbox" value="139" name="permission" data-module="supplier" data-module_id="7" data-group_id="1">
                        <label for="139_1" class="custom-control-label">
                        View Supplier                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p supplier_7 supplier_7_1" id="184_1" type="checkbox" value="184" name="permission" data-module="supplier" data-module_id="7" data-group_id="1">
                        <label for="184_1" class="custom-control-label">
                        Import Supplier                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_sales_8_1" data-id="8" data-group_id="1" data-module="sales">
                        <label for="header_sales_8_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Sales</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_8 sales_8_1" id="29_1" type="checkbox" value="29" name="permission" data-module="sales" data-module_id="8" data-group_id="1">
                        <label for="29_1" class="custom-control-label">
                        Add Sale                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_8 sales_8_1" id="30_1" type="checkbox" value="30" name="permission" data-module="sales" data-module_id="8" data-group_id="1">
                        <label for="30_1" class="custom-control-label">
                        Edit Sale                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_8 sales_8_1" id="31_1" type="checkbox" value="31" name="permission" data-module="sales" data-module_id="8" data-group_id="1">
                        <label for="31_1" class="custom-control-label">
                        List Sale                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_8 sales_8_1" id="32_1" type="checkbox" value="32" name="permission" data-module="sales" data-module_id="8" data-group_id="1">
                        <label for="32_1" class="custom-control-label">
                        Delete Sale                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_8 sales_8_1" id="73_1" type="checkbox" value="73" name="permission" data-module="sales" data-module_id="8" data-group_id="1">
                        <label for="73_1" class="custom-control-label">
                        View Sale                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_8 sales_8_1" id="74_1" type="checkbox" value="74" name="permission" data-module="sales" data-module_id="8" data-group_id="1">
                        <label for="74_1" class="custom-control-label">
                        PDF Download                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_8 sales_8_1" id="75_1" type="checkbox" value="75" name="permission" data-module="sales" data-module_id="8" data-group_id="1">
                        <label for="75_1" class="custom-control-label">
                        Email Sale                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_8 sales_8_1" id="109_1" type="checkbox" value="109" name="permission" data-module="sales" data-module_id="8" data-group_id="1">
                        <label for="109_1" class="custom-control-label">
                        PDF Download Sale                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_8 sales_8_1" id="125_1" type="checkbox" value="125" name="permission" data-module="sales" data-module_id="8" data-group_id="1">
                        <label for="125_1" class="custom-control-label">
                        Edit All Sale                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_8 sales_8_1" id="126_1" type="checkbox" value="126" name="permission" data-module="sales" data-module_id="8" data-group_id="1">
                        <label for="126_1" class="custom-control-label">
                        View All Sale                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_8 sales_8_1" id="127_1" type="checkbox" value="127" name="permission" data-module="sales" data-module_id="8" data-group_id="1">
                        <label for="127_1" class="custom-control-label">
                        Delete All Sale                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_8 sales_8_1" id="129_1" type="checkbox" value="129" name="permission" data-module="sales" data-module_id="8" data-group_id="1">
                        <label for="129_1" class="custom-control-label">
                        Manage Sale Payment                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_8 sales_8_1" id="130_1" type="checkbox" value="130" name="permission" data-module="sales" data-module_id="8" data-group_id="1">
                        <label for="130_1" class="custom-control-label">
                        Manage Sale Delivery                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_8 sales_8_1" id="140_1" type="checkbox" value="140" name="permission" data-module="sales" data-module_id="8" data-group_id="1">
                        <label for="140_1" class="custom-control-label">
                        List All Sale                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_customer_9_1" data-id="9" data-group_id="1" data-module="customer">
                        <label for="header_customer_9_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Customer</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p customer_9 customer_9_1" id="33_1" type="checkbox" value="33" name="permission" data-module="customer" data-module_id="9" data-group_id="1">
                        <label for="33_1" class="custom-control-label">
                        Add Customer                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p customer_9 customer_9_1" id="34_1" type="checkbox" value="34" name="permission" data-module="customer" data-module_id="9" data-group_id="1">
                        <label for="34_1" class="custom-control-label">
                        Edit Customer                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p customer_9 customer_9_1" id="35_1" type="checkbox" value="35" name="permission" data-module="customer" data-module_id="9" data-group_id="1">
                        <label for="35_1" class="custom-control-label">
                        List Customer                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p customer_9 customer_9_1" id="137_1" type="checkbox" value="137" name="permission" data-module="customer" data-module_id="9" data-group_id="1">
                        <label for="137_1" class="custom-control-label">
                        Delete Customer                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p customer_9 customer_9_1" id="138_1" type="checkbox" value="138" name="permission" data-module="customer" data-module_id="9" data-group_id="1">
                        <label for="138_1" class="custom-control-label">
                        View Customer                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p customer_9 customer_9_1" id="183_1" type="checkbox" value="183" name="permission" data-module="customer" data-module_id="9" data-group_id="1">
                        <label for="183_1" class="custom-control-label">
                        Import Customer                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_user_10_1" data-id="10" data-group_id="1" data-module="user">
                        <label for="header_user_10_1" class="custom-control-label">
                           <h6 class="pt-1"><b>User</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p user_10 user_10_1" id="36_1" type="checkbox" value="36" name="permission" data-module="user" data-module_id="10" data-group_id="1">
                        <label for="36_1" class="custom-control-label">
                        Add User                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p user_10 user_10_1" id="37_1" type="checkbox" value="37" name="permission" data-module="user" data-module_id="10" data-group_id="1">
                        <label for="37_1" class="custom-control-label">
                        Edit User                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p user_10 user_10_1" id="38_1" type="checkbox" value="38" name="permission" data-module="user" data-module_id="10" data-group_id="1">
                        <label for="38_1" class="custom-control-label">
                        List User                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p user_10 user_10_1" id="39_1" type="checkbox" value="39" name="permission" data-module="user" data-module_id="10" data-group_id="1">
                        <label for="39_1" class="custom-control-label">
                        Reset User Password                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_user_role_11_1" data-id="11" data-group_id="1" data-module="user_role">
                        <label for="header_user_role_11_1" class="custom-control-label">
                           <h6 class="pt-1"><b>User Role</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p user_role_11 user_role_11_1" id="40_1" type="checkbox" value="40" name="permission" data-module="user_role" data-module_id="11" data-group_id="1">
                        <label for="40_1" class="custom-control-label">
                        Add User Role                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p user_role_11 user_role_11_1" id="41_1" type="checkbox" value="41" name="permission" data-module="user_role" data-module_id="11" data-group_id="1">
                        <label for="41_1" class="custom-control-label">
                        Edit User Role                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p user_role_11 user_role_11_1" id="42_1" type="checkbox" value="42" name="permission" data-module="user_role" data-module_id="11" data-group_id="1">
                        <label for="42_1" class="custom-control-label">
                        Assign permission to User Role                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p user_role_11 user_role_11_1" id="43_1" type="checkbox" value="43" name="permission" data-module="user_role" data-module_id="11" data-group_id="1">
                        <label for="43_1" class="custom-control-label">
                        List User Role                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_service_12_1" data-id="12" data-group_id="1" data-module="service">
                        <label for="header_service_12_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Service</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p service_12 service_12_1" id="44_1" type="checkbox" value="44" name="permission" data-module="service" data-module_id="12" data-group_id="1">
                        <label for="44_1" class="custom-control-label">
                        List Service                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p service_12 service_12_1" id="45_1" type="checkbox" value="45" name="permission" data-module="service" data-module_id="12" data-group_id="1">
                        <label for="45_1" class="custom-control-label">
                        Add Service                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p service_12 service_12_1" id="46_1" type="checkbox" value="46" name="permission" data-module="service" data-module_id="12" data-group_id="1">
                        <label for="46_1" class="custom-control-label">
                        Edit Service                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p service_12 service_12_1" id="47_1" type="checkbox" value="47" name="permission" data-module="service" data-module_id="12" data-group_id="1">
                        <label for="47_1" class="custom-control-label">
                        Delete Service                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_dashboard_13_1" data-id="13" data-group_id="1" data-module="dashboard">
                        <label for="header_dashboard_13_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Dashboard</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p dashboard_13 dashboard_13_1" id="52_1" type="checkbox" value="52" name="permission" data-module="dashboard" data-module_id="13" data-group_id="1">
                        <label for="52_1" class="custom-control-label">
                        Show Recent Sales                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p dashboard_13 dashboard_13_1" id="53_1" type="checkbox" value="53" name="permission" data-module="dashboard" data-module_id="13" data-group_id="1">
                        <label for="53_1" class="custom-control-label">
                        Show Recent Expenses                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p dashboard_13 dashboard_13_1" id="54_1" type="checkbox" value="54" name="permission" data-module="dashboard" data-module_id="13" data-group_id="1">
                        <label for="54_1" class="custom-control-label">
                        Show Recent Customer                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p dashboard_13 dashboard_13_1" id="55_1" type="checkbox" value="55" name="permission" data-module="dashboard" data-module_id="13" data-group_id="1">
                        <label for="55_1" class="custom-control-label">
                        Show Recent Products                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p dashboard_13 dashboard_13_1" id="180_1" type="checkbox" value="180" name="permission" data-module="dashboard" data-module_id="13" data-group_id="1">
                        <label for="180_1" class="custom-control-label">
                        Show Product Alert                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_quotation_14_1" data-id="14" data-group_id="1" data-module="quotation">
                        <label for="header_quotation_14_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Quotation</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p quotation_14 quotation_14_1" id="56_1" type="checkbox" value="56" name="permission" data-module="quotation" data-module_id="14" data-group_id="1">
                        <label for="56_1" class="custom-control-label">
                        Add Sale                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p quotation_14 quotation_14_1" id="57_1" type="checkbox" value="57" name="permission" data-module="quotation" data-module_id="14" data-group_id="1">
                        <label for="57_1" class="custom-control-label">
                        Edit Quotation                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p quotation_14 quotation_14_1" id="58_1" type="checkbox" value="58" name="permission" data-module="quotation" data-module_id="14" data-group_id="1">
                        <label for="58_1" class="custom-control-label">
                        List Quotation                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p quotation_14 quotation_14_1" id="59_1" type="checkbox" value="59" name="permission" data-module="quotation" data-module_id="14" data-group_id="1">
                        <label for="59_1" class="custom-control-label">
                        Delete Quotation                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p quotation_14 quotation_14_1" id="60_1" type="checkbox" value="60" name="permission" data-module="quotation" data-module_id="14" data-group_id="1">
                        <label for="60_1" class="custom-control-label">
                        View Quotation                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p quotation_14 quotation_14_1" id="61_1" type="checkbox" value="61" name="permission" data-module="quotation" data-module_id="14" data-group_id="1">
                        <label for="61_1" class="custom-control-label">
                        PDF Download                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p quotation_14 quotation_14_1" id="62_1" type="checkbox" value="62" name="permission" data-module="quotation" data-module_id="14" data-group_id="1">
                        <label for="62_1" class="custom-control-label">
                        Print Quotation                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p quotation_14 quotation_14_1" id="142_1" type="checkbox" value="142" name="permission" data-module="quotation" data-module_id="14" data-group_id="1">
                        <label for="142_1" class="custom-control-label">
                        Edit All Quotation                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p quotation_14 quotation_14_1" id="143_1" type="checkbox" value="143" name="permission" data-module="quotation" data-module_id="14" data-group_id="1">
                        <label for="143_1" class="custom-control-label">
                        View All Quotation                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p quotation_14 quotation_14_1" id="144_1" type="checkbox" value="144" name="permission" data-module="quotation" data-module_id="14" data-group_id="1">
                        <label for="144_1" class="custom-control-label">
                        Delete All Quotation                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p quotation_14 quotation_14_1" id="145_1" type="checkbox" value="145" name="permission" data-module="quotation" data-module_id="14" data-group_id="1">
                        <label for="145_1" class="custom-control-label">
                        List All Quotation                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_gst_return_15_1" data-id="15" data-group_id="1" data-module="gst_return">
                        <label for="header_gst_return_15_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Gst Return</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p gst_return_15 gst_return_15_1" id="63_1" type="checkbox" value="63" name="permission" data-module="gst_return" data-module_id="15" data-group_id="1">
                        <label for="63_1" class="custom-control-label">
                        Generate GSTR1 JSON file                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_reports_16_1" data-id="16" data-group_id="1" data-module="reports">
                        <label for="header_reports_16_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Reports</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p reports_16 reports_16_1" id="64_1" type="checkbox" value="64" name="permission" data-module="reports" data-module_id="16" data-group_id="1">
                        <label for="64_1" class="custom-control-label">
                        Sale Report                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p reports_16 reports_16_1" id="65_1" type="checkbox" value="65" name="permission" data-module="reports" data-module_id="16" data-group_id="1">
                        <label for="65_1" class="custom-control-label">
                        Expense Report                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p reports_16 reports_16_1" id="81_1" type="checkbox" value="81" name="permission" data-module="reports" data-module_id="16" data-group_id="1">
                        <label for="81_1" class="custom-control-label">
                        Profit &amp; Loss Report                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p reports_16 reports_16_1" id="82_1" type="checkbox" value="82" name="permission" data-module="reports" data-module_id="16" data-group_id="1">
                        <label for="82_1" class="custom-control-label">
                        Ledger Report                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p reports_16 reports_16_1" id="131_1" type="checkbox" value="131" name="permission" data-module="reports" data-module_id="16" data-group_id="1">
                        <label for="131_1" class="custom-control-label">
                        Purchase Report                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p reports_16 reports_16_1" id="141_1" type="checkbox" value="141" name="permission" data-module="reports" data-module_id="16" data-group_id="1">
                        <label for="141_1" class="custom-control-label">
                        Balance Sheet Report                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p reports_16 reports_16_1" id="178_1" type="checkbox" value="178" name="permission" data-module="reports" data-module_id="16" data-group_id="1">
                        <label for="178_1" class="custom-control-label">
                        Purchase Return Report                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p reports_16 reports_16_1" id="179_1" type="checkbox" value="179" name="permission" data-module="reports" data-module_id="16" data-group_id="1">
                        <label for="179_1" class="custom-control-label">
                        Sales Return Report                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p reports_16 reports_16_1" id="181_1" type="checkbox" value="181" name="permission" data-module="reports" data-module_id="16" data-group_id="1">
                        <label for="181_1" class="custom-control-label">
                        Product Report                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p reports_16 reports_16_1" id="198_1" type="checkbox" value="198" name="permission" data-module="reports" data-module_id="16" data-group_id="1">
                        <label for="198_1" class="custom-control-label">
                        GSTR1 Report                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p reports_16 reports_16_1" id="199_1" type="checkbox" value="199" name="permission" data-module="reports" data-module_id="16" data-group_id="1">
                        <label for="199_1" class="custom-control-label">
                        GSTR2 Report                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_bank_account_17_1" data-id="17" data-group_id="1" data-module="bank_account">
                        <label for="header_bank_account_17_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Bank Account</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p bank_account_17 bank_account_17_1" id="68_1" type="checkbox" value="68" name="permission" data-module="bank_account" data-module_id="17" data-group_id="1">
                        <label for="68_1" class="custom-control-label">
                        List Bank Account                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p bank_account_17 bank_account_17_1" id="69_1" type="checkbox" value="69" name="permission" data-module="bank_account" data-module_id="17" data-group_id="1">
                        <label for="69_1" class="custom-control-label">
                        Add Bank Account                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p bank_account_17 bank_account_17_1" id="70_1" type="checkbox" value="70" name="permission" data-module="bank_account" data-module_id="17" data-group_id="1">
                        <label for="70_1" class="custom-control-label">
                        Edit Bank Account                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p bank_account_17 bank_account_17_1" id="71_1" type="checkbox" value="71" name="permission" data-module="bank_account" data-module_id="17" data-group_id="1">
                        <label for="71_1" class="custom-control-label">
                        Delete Bank Account                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p bank_account_17 bank_account_17_1" id="78_1" type="checkbox" value="78" name="permission" data-module="bank_account" data-module_id="17" data-group_id="1">
                        <label for="78_1" class="custom-control-label">
                        Bank Account to Bank Account Transfer                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p bank_account_17 bank_account_17_1" id="79_1" type="checkbox" value="79" name="permission" data-module="bank_account" data-module_id="17" data-group_id="1">
                        <label for="79_1" class="custom-control-label">
                        Deposit money to Bank Account                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p bank_account_17 bank_account_17_1" id="83_1" type="checkbox" value="83" name="permission" data-module="bank_account" data-module_id="17" data-group_id="1">
                        <label for="83_1" class="custom-control-label">
                        Withdraw from Bank Account                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p bank_account_17 bank_account_17_1" id="146_1" type="checkbox" value="146" name="permission" data-module="bank_account" data-module_id="17" data-group_id="1">
                        <label for="146_1" class="custom-control-label">
                        Increase Amount                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p bank_account_17 bank_account_17_1" id="147_1" type="checkbox" value="147" name="permission" data-module="bank_account" data-module_id="17" data-group_id="1">
                        <label for="147_1" class="custom-control-label">
                        Reduce Amount                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p bank_account_17 bank_account_17_1" id="148_1" type="checkbox" value="148" name="permission" data-module="bank_account" data-module_id="17" data-group_id="1">
                        <label for="148_1" class="custom-control-label">
                        View Bank Account                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_transaction_18_1" data-id="18" data-group_id="1" data-module="transaction">
                        <label for="header_transaction_18_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Transaction</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p transaction_18 transaction_18_1" id="84_1" type="checkbox" value="84" name="permission" data-module="transaction" data-module_id="18" data-group_id="1">
                        <label for="84_1" class="custom-control-label">
                        Show Ledger Balance                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p transaction_18 transaction_18_1" id="149_1" type="checkbox" value="149" name="permission" data-module="transaction" data-module_id="18" data-group_id="1">
                        <label for="149_1" class="custom-control-label">
                        Manage Transaction ( Sales, Expense and Purchase )                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_purchase_19_1" data-id="19" data-group_id="1" data-module="purchase">
                        <label for="header_purchase_19_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Purchase</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_19 purchase_19_1" id="103_1" type="checkbox" value="103" name="permission" data-module="purchase" data-module_id="19" data-group_id="1">
                        <label for="103_1" class="custom-control-label">
                        Add Purchase                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_19 purchase_19_1" id="104_1" type="checkbox" value="104" name="permission" data-module="purchase" data-module_id="19" data-group_id="1">
                        <label for="104_1" class="custom-control-label">
                        Edit Purchase                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_19 purchase_19_1" id="105_1" type="checkbox" value="105" name="permission" data-module="purchase" data-module_id="19" data-group_id="1">
                        <label for="105_1" class="custom-control-label">
                        List Purchase                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_19 purchase_19_1" id="106_1" type="checkbox" value="106" name="permission" data-module="purchase" data-module_id="19" data-group_id="1">
                        <label for="106_1" class="custom-control-label">
                        Delete Purchase                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_19 purchase_19_1" id="107_1" type="checkbox" value="107" name="permission" data-module="purchase" data-module_id="19" data-group_id="1">
                        <label for="107_1" class="custom-control-label">
                        Email Purchase                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_19 purchase_19_1" id="108_1" type="checkbox" value="108" name="permission" data-module="purchase" data-module_id="19" data-group_id="1">
                        <label for="108_1" class="custom-control-label">
                        PDF Download Purchase                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_19 purchase_19_1" id="119_1" type="checkbox" value="119" name="permission" data-module="purchase" data-module_id="19" data-group_id="1">
                        <label for="119_1" class="custom-control-label">
                        Manage Purchase Payment                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_19 purchase_19_1" id="120_1" type="checkbox" value="120" name="permission" data-module="purchase" data-module_id="19" data-group_id="1">
                        <label for="120_1" class="custom-control-label">
                        Manage Purchase Delivery                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_19 purchase_19_1" id="121_1" type="checkbox" value="121" name="permission" data-module="purchase" data-module_id="19" data-group_id="1">
                        <label for="121_1" class="custom-control-label">
                        View Purchase                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_19 purchase_19_1" id="122_1" type="checkbox" value="122" name="permission" data-module="purchase" data-module_id="19" data-group_id="1">
                        <label for="122_1" class="custom-control-label">
                        Edit All Purchase                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_19 purchase_19_1" id="123_1" type="checkbox" value="123" name="permission" data-module="purchase" data-module_id="19" data-group_id="1">
                        <label for="123_1" class="custom-control-label">
                        View All Purchase                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_19 purchase_19_1" id="124_1" type="checkbox" value="124" name="permission" data-module="purchase" data-module_id="19" data-group_id="1">
                        <label for="124_1" class="custom-control-label">
                        Delete All Purchase                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_19 purchase_19_1" id="136_1" type="checkbox" value="136" name="permission" data-module="purchase" data-module_id="19" data-group_id="1">
                        <label for="136_1" class="custom-control-label">
                        List All Purchase                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_warehouse_20_1" data-id="20" data-group_id="1" data-module="warehouse">
                        <label for="header_warehouse_20_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Warehouse</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p warehouse_20 warehouse_20_1" id="110_1" type="checkbox" value="110" name="permission" data-module="warehouse" data-module_id="20" data-group_id="1">
                        <label for="110_1" class="custom-control-label">
                        Add Warehouse                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p warehouse_20 warehouse_20_1" id="111_1" type="checkbox" value="111" name="permission" data-module="warehouse" data-module_id="20" data-group_id="1">
                        <label for="111_1" class="custom-control-label">
                        Edit Warehouse                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p warehouse_20 warehouse_20_1" id="112_1" type="checkbox" value="112" name="permission" data-module="warehouse" data-module_id="20" data-group_id="1">
                        <label for="112_1" class="custom-control-label">
                        List Warehouse                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p warehouse_20 warehouse_20_1" id="113_1" type="checkbox" value="113" name="permission" data-module="warehouse" data-module_id="20" data-group_id="1">
                        <label for="113_1" class="custom-control-label">
                        Delete Warehouse                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_product_category_21_1" data-id="21" data-group_id="1" data-module="product_category">
                        <label for="header_product_category_21_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Product Category</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p product_category_21 product_category_21_1" id="114_1" type="checkbox" value="114" name="permission" data-module="product_category" data-module_id="21" data-group_id="1">
                        <label for="114_1" class="custom-control-label">
                        Add Product Category                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p product_category_21 product_category_21_1" id="115_1" type="checkbox" value="115" name="permission" data-module="product_category" data-module_id="21" data-group_id="1">
                        <label for="115_1" class="custom-control-label">
                        Edit Product Category                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p product_category_21 product_category_21_1" id="116_1" type="checkbox" value="116" name="permission" data-module="product_category" data-module_id="21" data-group_id="1">
                        <label for="116_1" class="custom-control-label">
                        List Product Category                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p product_category_21 product_category_21_1" id="117_1" type="checkbox" value="117" name="permission" data-module="product_category" data-module_id="21" data-group_id="1">
                        <label for="117_1" class="custom-control-label">
                        Delete Product Category                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p product_category_21 product_category_21_1" id="185_1" type="checkbox" value="185" name="permission" data-module="product_category" data-module_id="21" data-group_id="1">
                        <label for="185_1" class="custom-control-label">
                        Import Product Category                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_product_22_1" data-id="22" data-group_id="1" data-module="product">
                        <label for="header_product_22_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Product</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p product_22 product_22_1" id="132_1" type="checkbox" value="132" name="permission" data-module="product" data-module_id="22" data-group_id="1">
                        <label for="132_1" class="custom-control-label">
                        Add Product                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p product_22 product_22_1" id="133_1" type="checkbox" value="133" name="permission" data-module="product" data-module_id="22" data-group_id="1">
                        <label for="133_1" class="custom-control-label">
                        Edit Product                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p product_22 product_22_1" id="134_1" type="checkbox" value="134" name="permission" data-module="product" data-module_id="22" data-group_id="1">
                        <label for="134_1" class="custom-control-label">
                        List Product                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p product_22 product_22_1" id="135_1" type="checkbox" value="135" name="permission" data-module="product" data-module_id="22" data-group_id="1">
                        <label for="135_1" class="custom-control-label">
                        Delete Product                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p product_22 product_22_1" id="182_1" type="checkbox" value="182" name="permission" data-module="product" data-module_id="22" data-group_id="1">
                        <label for="182_1" class="custom-control-label">
                        Import Product                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_sales_return_23_1" data-id="23" data-group_id="1" data-module="sales_return">
                        <label for="header_sales_return_23_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Sales Return</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_return_23 sales_return_23_1" id="151_1" type="checkbox" value="151" name="permission" data-module="sales_return" data-module_id="23" data-group_id="1">
                        <label for="151_1" class="custom-control-label">
                        Add Sale Return                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_return_23 sales_return_23_1" id="152_1" type="checkbox" value="152" name="permission" data-module="sales_return" data-module_id="23" data-group_id="1">
                        <label for="152_1" class="custom-control-label">
                        Edit Sale Return                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_return_23 sales_return_23_1" id="153_1" type="checkbox" value="153" name="permission" data-module="sales_return" data-module_id="23" data-group_id="1">
                        <label for="153_1" class="custom-control-label">
                        List Sale Return                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_return_23 sales_return_23_1" id="154_1" type="checkbox" value="154" name="permission" data-module="sales_return" data-module_id="23" data-group_id="1">
                        <label for="154_1" class="custom-control-label">
                        Delete Sale Return                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_return_23 sales_return_23_1" id="155_1" type="checkbox" value="155" name="permission" data-module="sales_return" data-module_id="23" data-group_id="1">
                        <label for="155_1" class="custom-control-label">
                        View Sale Return                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_return_23 sales_return_23_1" id="156_1" type="checkbox" value="156" name="permission" data-module="sales_return" data-module_id="23" data-group_id="1">
                        <label for="156_1" class="custom-control-label">
                        PDF Download                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_return_23 sales_return_23_1" id="157_1" type="checkbox" value="157" name="permission" data-module="sales_return" data-module_id="23" data-group_id="1">
                        <label for="157_1" class="custom-control-label">
                        Email Sale Return                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_return_23 sales_return_23_1" id="158_1" type="checkbox" value="158" name="permission" data-module="sales_return" data-module_id="23" data-group_id="1">
                        <label for="158_1" class="custom-control-label">
                        PDF Download Sale Return                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_return_23 sales_return_23_1" id="159_1" type="checkbox" value="159" name="permission" data-module="sales_return" data-module_id="23" data-group_id="1">
                        <label for="159_1" class="custom-control-label">
                        Edit All Sale Return                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_return_23 sales_return_23_1" id="160_1" type="checkbox" value="160" name="permission" data-module="sales_return" data-module_id="23" data-group_id="1">
                        <label for="160_1" class="custom-control-label">
                        View All Sale Return                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_return_23 sales_return_23_1" id="161_1" type="checkbox" value="161" name="permission" data-module="sales_return" data-module_id="23" data-group_id="1">
                        <label for="161_1" class="custom-control-label">
                        Delete All Sale Return                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_return_23 sales_return_23_1" id="162_1" type="checkbox" value="162" name="permission" data-module="sales_return" data-module_id="23" data-group_id="1">
                        <label for="162_1" class="custom-control-label">
                        Manage Sale Return Payment                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_return_23 sales_return_23_1" id="163_1" type="checkbox" value="163" name="permission" data-module="sales_return" data-module_id="23" data-group_id="1">
                        <label for="163_1" class="custom-control-label">
                        Manage Sale Return Delivery                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p sales_return_23 sales_return_23_1" id="164_1" type="checkbox" value="164" name="permission" data-module="sales_return" data-module_id="23" data-group_id="1">
                        <label for="164_1" class="custom-control-label">
                        List All Sale Return                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_purchase_return_24_1" data-id="24" data-group_id="1" data-module="purchase_return">
                        <label for="header_purchase_return_24_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Purchase Return</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_return_24 purchase_return_24_1" id="165_1" type="checkbox" value="165" name="permission" data-module="purchase_return" data-module_id="24" data-group_id="1">
                        <label for="165_1" class="custom-control-label">
                        Add Purchase Return                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_return_24 purchase_return_24_1" id="166_1" type="checkbox" value="166" name="permission" data-module="purchase_return" data-module_id="24" data-group_id="1">
                        <label for="166_1" class="custom-control-label">
                        Edit Purchase return                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_return_24 purchase_return_24_1" id="167_1" type="checkbox" value="167" name="permission" data-module="purchase_return" data-module_id="24" data-group_id="1">
                        <label for="167_1" class="custom-control-label">
                        List Purchase Return                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_return_24 purchase_return_24_1" id="168_1" type="checkbox" value="168" name="permission" data-module="purchase_return" data-module_id="24" data-group_id="1">
                        <label for="168_1" class="custom-control-label">
                        Delete Purchase Return                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_return_24 purchase_return_24_1" id="169_1" type="checkbox" value="169" name="permission" data-module="purchase_return" data-module_id="24" data-group_id="1">
                        <label for="169_1" class="custom-control-label">
                        Email Purchase Return                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_return_24 purchase_return_24_1" id="170_1" type="checkbox" value="170" name="permission" data-module="purchase_return" data-module_id="24" data-group_id="1">
                        <label for="170_1" class="custom-control-label">
                        PDF Download Purchase Return                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_return_24 purchase_return_24_1" id="171_1" type="checkbox" value="171" name="permission" data-module="purchase_return" data-module_id="24" data-group_id="1">
                        <label for="171_1" class="custom-control-label">
                        Manage Purchase Return Payment                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_return_24 purchase_return_24_1" id="172_1" type="checkbox" value="172" name="permission" data-module="purchase_return" data-module_id="24" data-group_id="1">
                        <label for="172_1" class="custom-control-label">
                        Manage Purchase Return Delivery                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_return_24 purchase_return_24_1" id="173_1" type="checkbox" value="173" name="permission" data-module="purchase_return" data-module_id="24" data-group_id="1">
                        <label for="173_1" class="custom-control-label">
                        View Purchase Return                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_return_24 purchase_return_24_1" id="174_1" type="checkbox" value="174" name="permission" data-module="purchase_return" data-module_id="24" data-group_id="1">
                        <label for="174_1" class="custom-control-label">
                        Edit All Purchase Return                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_return_24 purchase_return_24_1" id="175_1" type="checkbox" value="175" name="permission" data-module="purchase_return" data-module_id="24" data-group_id="1">
                        <label for="175_1" class="custom-control-label">
                        View All Purchase Return                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_return_24 purchase_return_24_1" id="176_1" type="checkbox" value="176" name="permission" data-module="purchase_return" data-module_id="24" data-group_id="1">
                        <label for="176_1" class="custom-control-label">
                        Delete All Purchase Return                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p purchase_return_24 purchase_return_24_1" id="177_1" type="checkbox" value="177" name="permission" data-module="purchase_return" data-module_id="24" data-group_id="1">
                        <label for="177_1" class="custom-control-label">
                        List All Purchase Return                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_location_25_1" data-id="25" data-group_id="1" data-module="location">
                        <label for="header_location_25_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Location</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p location_25 location_25_1" id="186_1" type="checkbox" value="186" name="permission" data-module="location" data-module_id="25" data-group_id="1">
                        <label for="186_1" class="custom-control-label">
                        Add Location                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p location_25 location_25_1" id="187_1" type="checkbox" value="187" name="permission" data-module="location" data-module_id="25" data-group_id="1">
                        <label for="187_1" class="custom-control-label">
                        Edit Location                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p location_25 location_25_1" id="188_1" type="checkbox" value="188" name="permission" data-module="location" data-module_id="25" data-group_id="1">
                        <label for="188_1" class="custom-control-label">
                        List Location                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p location_25 location_25_1" id="189_1" type="checkbox" value="189" name="permission" data-module="location" data-module_id="25" data-group_id="1">
                        <label for="189_1" class="custom-control-label">
                        Delete Location                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_stock_26_1" data-id="26" data-group_id="1" data-module="stock">
                        <label for="header_stock_26_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Stock</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p stock_26 stock_26_1" id="190_1" type="checkbox" value="190" name="permission" data-module="stock" data-module_id="26" data-group_id="1">
                        <label for="190_1" class="custom-control-label">
                        Add Stock                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p stock_26 stock_26_1" id="191_1" type="checkbox" value="191" name="permission" data-module="stock" data-module_id="26" data-group_id="1">
                        <label for="191_1" class="custom-control-label">
                        Edit Stock                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p stock_26 stock_26_1" id="192_1" type="checkbox" value="192" name="permission" data-module="stock" data-module_id="26" data-group_id="1">
                        <label for="192_1" class="custom-control-label">
                        List Stock                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p stock_26 stock_26_1" id="193_1" type="checkbox" value="193" name="permission" data-module="stock" data-module_id="26" data-group_id="1">
                        <label for="193_1" class="custom-control-label">
                        Delete Stock                                            </label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row border">
                  <div class="col-md-12 role_module border-bottom  bg-light">
                     <div class="custom-control custom-checkbox">
                        <input class="custom-control-input select_h" type="checkbox" id="header_transfer_27_1" data-id="27" data-group_id="1" data-module="transfer">
                        <label for="header_transfer_27_1" class="custom-control-label">
                           <h6 class="pt-1"><b>Transfer</b></h6>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p transfer_27 transfer_27_1" id="194_1" type="checkbox" value="194" name="permission" data-module="transfer" data-module_id="27" data-group_id="1">
                        <label for="194_1" class="custom-control-label">
                        Add Transfer                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p transfer_27 transfer_27_1" id="195_1" type="checkbox" value="195" name="permission" data-module="transfer" data-module_id="27" data-group_id="1">
                        <label for="195_1" class="custom-control-label">
                        Edit Transfer                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p transfer_27 transfer_27_1" id="196_1" type="checkbox" value="196" name="permission" data-module="transfer" data-module_id="27" data-group_id="1">
                        <label for="196_1" class="custom-control-label">
                        List Transfer                                            </label>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-control custom-checkbox" style="margin-left: 5px;">
                        <input class="custom-control-input select_p transfer_27 transfer_27_1" id="197_1" type="checkbox" value="197" name="permission" data-module="transfer" data-module_id="27" data-group_id="1">
                        <label for="197_1" class="custom-control-label">
                        Delete Transfer                                            </label>
                     </div>
                  </div>
               </div>
               <br>
            </div>
           	<div class="modal-footer">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        	<button type="button" class="btn btn-primary">Save Permission</button>
	      	</div>
         </form>
      </div>
   </div>
</div>
@endsection
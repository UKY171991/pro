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
                     <h3 class="card-title">Purchase Retuen List</h3>
                     <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                           <li class="nav-item">
                              <a class="nav-link btn-sm active" href="{{url('/add-purchase-return')}}" data-tt="tooltip" title="" data-original-title="Click here to Add Transfer"><i class="far fa-snowflake mr-2"></i>Add Purchase Retuen</a>
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
                              <th>PO No.</th>
                              <th>Invoice No</th>
                              <th>Purchase Date</th>
                              <th>Warehouse</th>
                              <th>Supplier</th>
                              <th>Total Discount</th>
                              <th>Total Taxable Value</th>
                              <th>Total Tax</th>
                              <th>Total</th>
                              <th>Paid</th>
                              <th>Due</th>
                              <th>Delivery Status</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1234567890</td>
                              <td>2345</td>
                              <td>11-11-2023</td>
                              <td>ASDF</td>
                              <td>QRT</td>
                              <td>100</td>
                              <td>10</td>
                              <td>10</td>
                              <td>200</td>
                              <td>80</td>
                              <td>120</td>
                              <td>
                              	<img src="https://zivaansolutions.com/apps/pro/assets/images/not_delivered.png" data-tt="tooltip" title="" width="40px" style="cursor: pointer" data-original-title="Not Delivered">
                              </td>
                              <td class="btn-group">
                    			<a href="{{url('/view-purchase-return/1')}}"class="btn btn-default btn-xs" data-tt="tooltip" data-original-title="View purchase"><i class="fas fa-eye"></i> View</a>
                    			<a href="{{url('/edit-purchase-return/1')}}" class="btn btn-info btn-xs" data-tt="tooltip" data-original-title="Edit purchase"><i class="fas fa-edit"></i> Edit</a>
                                 <a href="#" data-toggle="modal" data-target="#delete_customer" data-tt="tooltip" title="Delete Customer" class="btn btn-danger btn-xs delete_customer" data-customer_id="10"><i class="fas fa-trash"></i> Delete</a>
                              </td>
                           </tr>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Stock Entry</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Warehouse          <span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <select class="form-control form-control-sm select2bs4 field_validation" name="warehouse_id" id="warehouse_id" placeholder="Warehouse" width="100%">
                     <option value="">Select Warehouse</option>
                     <option value="1" data-warehouse_name="Warehouse A">
                        Warehouse A              
                     </option>
                     <option value="2" data-warehouse_name="Warehouse B">
                        Warehouse B              
                     </option>
                     <option value="3" data-warehouse_name="Sylvia Chambers">
                        Sylvia Chambers              
                     </option>
                     <option value="7" data-warehouse_name="Singh garments">
                        Singh garments              
                     </option>
                     <option value="11" data-warehouse_name="???">
                        ???              
                     </option>
                  </select>
                  <span id="err_warehouse_id" class="error invalid-feedback"></span>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Warehouse Name<span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <input type="text" name="warehouse_name" value="" class="form-control form-control-sm field_validation" id="warehouse_name" placeholder="Warehouse Name" readonly="readonly">
                  <span id="err_warehouse_name" class="error invalid-feedback"></span>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Product          <span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <select class="form-control form-control-sm select2bs4 field_validation" name="product_id" id="product_id" placeholder="Product" width="100%">
                     <option value="">Select Product</option>
                     <option value="4" data-product_name="website" data-product_uom="TUB" data-product_uom_name="TUBES">
                        website - Development              
                     </option>
                     <option value="5" data-product_name="website" data-product_uom="BAG" data-product_uom_name="BAGS">
                        website - Development              
                     </option>
                     <option value="6" data-product_name="HT001 TYRE" data-product_uom="PCS" data-product_uom_name="PCS">
                        HT001 TYRE - TYRE IN              
                     </option>
                     <option value="7" data-product_name="sdf" data-product_uom="GMS" data-product_uom_name="GRAMMES">
                        sdf - Electronics              
                     </option>
                     <option value="8" data-product_name="mamdouh" data-product_uom="CMS" data-product_uom_name="CENTIMETERS">
                        mamdouh - Electronics              
                     </option>
                     <option value="12" data-product_name="tttt" data-product_uom="CAN" data-product_uom_name="CANS">
                        tttt - Electronics              
                     </option>
                     <option value="16" data-product_name="Shirt-999" data-product_uom="KGS" data-product_uom_name="KILOGRAMS">
                        Shirt-999 - Clothes              
                     </option>
                     <option value="17" data-product_name="Umbrella" data-product_uom="PCS" data-product_uom_name="PIECES">
                        Umbrella - Development              
                     </option>
                     <option value="18" data-product_name="KAZI FOOD" data-product_uom="BOX" data-product_uom_name="BOX">
                        KAZI FOOD - TYRE IN              
                     </option>
                     <option value="19" data-product_name="Product1" data-product_uom="BOX" data-product_uom_name="BOX">
                        Product1 - Electronics              
                     </option>
                     <option value="20" data-product_name="Test" data-product_uom="BAG" data-product_uom_name="BAGS">
                        Test - Development              
                     </option>
                     <option value="21" data-product_name="qwerty" data-product_uom="BAL" data-product_uom_name="BALE">
                        qwerty - Development              
                     </option>
                     <option value="23" data-product_name="PWN REAL" data-product_uom="PCS" data-product_uom_name="PCS">
                        PWN REAL - Development              
                     </option>
                     <option value="24" data-product_name="MICRO" data-product_uom="SET" data-product_uom_name="SETS">
                        MICRO - Development              
                     </option>
                     <option value="25" data-product_name="MINI" data-product_uom="PCS" data-product_uom_name="PCS">
                        MINI - Development              
                     </option>
                     <option value="26" data-product_name="sd" data-product_uom="PCS" data-product_uom_name="PCS">
                        sd - kc&amp;Co              
                     </option>
                     <option value="28" data-product_name="3r23edsedcax" data-product_uom="BOX" data-product_uom_name="BOX">
                        3r23edsedcax - Clothes              
                     </option>
                     <option value="29" data-product_name="aasd" data-product_uom="PCS" data-product_uom_name="PIECES">
                        aasd - Electronics              
                     </option>
                     <option value="30" data-product_name="test" data-product_uom="GGK" data-product_uom_name="GREAT GROSS">
                        test - Electronics              
                     </option>
                     <option value="31" data-product_name="Tata salt" data-product_uom="BDL" data-product_uom_name="BUNDLES">
                        Tata salt - Development              
                     </option>
                     <option value="33" data-product_name="poco m3" data-product_uom="BOX" data-product_uom_name="BOX">
                        poco m3 - kc&amp;Co              
                     </option>
                     <option value="34" data-product_name="bikram" data-product_uom="BOX" data-product_uom_name="BOX">
                        bikram - kc&amp;Co              
                     </option>
                     <option value="35" data-product_name="666" data-product_uom="PCS" data-product_uom_name="PCS">
                        666 - test              
                     </option>
                     <option value="37" data-product_name="colgate dental cream 250gm" data-product_uom="PCS" data-product_uom_name="PIECES">
                        colgate dental cream 250gm - TYRE IN              
                     </option>
                     <option value="38" data-product_name="COPPER ORE" data-product_uom="MTS" data-product_uom_name="METRIC TON">
                        COPPER ORE - EARTH MINERALS              
                     </option>
                     <option value="40" data-product_name="Harina Pan" data-product_uom="BAL" data-product_uom_name="BALE">
                        Harina Pan - Electronics              
                     </option>
                     <option value="41" data-product_name="Harina Pan" data-product_uom="BAL" data-product_uom_name="BALE">
                        Harina Pan - Apparels              
                     </option>
                     <option value="42" data-product_name="osman" data-product_uom="DRM" data-product_uom_name="DRUMS">
                        osman - Electronics              
                     </option>
                     <option value="43" data-product_name="ali osman" data-product_uom="GYD" data-product_uom_name="GROSS YARDS">
                        ali osman - Electronics              
                     </option>
                     <option value="44" data-product_name="15mb" data-product_uom="BAG" data-product_uom_name="BAGS">
                        15mb - Electronics              
                     </option>
                     <option value="45" data-product_name="mohamed" data-product_uom="GMS" data-product_uom_name="GRAMMES">
                        mohamed - test kalo              
                     </option>
                     <option value="46" data-product_name="Samung m2 " data-product_uom="BAL" data-product_uom_name="BALE">
                        Samung m2  - Samsung phone              
                     </option>
                     <option value="47" data-product_name="samsung m04" data-product_uom="BAG" data-product_uom_name="BAGS">
                        samsung m04 - Samsung phone              
                     </option>
                     <option value="48" data-product_name="ss" data-product_uom="BAG" data-product_uom_name="BAGS">
                        ss - Samsung phone              
                     </option>
                     <option value="49" data-product_name="test product" data-product_uom="BAG" data-product_uom_name="BAGS">
                        test product - test              
                     </option>
                     <option value="50" data-product_name="Rubber Socket" data-product_uom="BOX" data-product_uom_name="BOX">
                        Rubber Socket - demo product              
                     </option>
                     <option value="51" data-product_name="Borax" data-product_uom="KGS" data-product_uom_name="KILOGRAMS">
                        Borax - Borax              
                     </option>
                     <option value="52" data-product_name="s" data-product_uom="BKL" data-product_uom_name="BUCKLES">
                        s - Electronics              
                     </option>
                     <option value="53" data-product_name="sadsada" data-product_uom="BAL" data-product_uom_name="BALE">
                        sadsada - Development              
                     </option>
                     <option value="54" data-product_name="as" data-product_uom="BKL" data-product_uom_name="BUCKLES">
                        as - Clothes              
                     </option>
                     <option value="55" data-product_name="Minam" data-product_uom="BKL" data-product_uom_name="BUCKLES">
                        Minam - Apparels              
                     </option>
                     <option value="56" data-product_name="Bandhani Dress" data-product_uom="BAG" data-product_uom_name="BAGS">
                        Bandhani Dress - Electronics              
                     </option>
                     <option value="57" data-product_name="Rajasthani Dress" data-product_uom="BAG" data-product_uom_name="BAGS">
                        Rajasthani Dress - Electronics              
                     </option>
                     <option value="58" data-product_name="Pen" data-product_uom="BAG" data-product_uom_name="BAGS">
                        Pen - Electronics              
                     </option>
                     <option value="59" data-product_name="khaddar" data-product_uom="BAG" data-product_uom_name="BAGS">
                        khaddar - Electronics              
                     </option>
                     <option value="60" data-product_name="camiseta" data-product_uom="BAG" data-product_uom_name="BAGS">
                        camiseta - Electronics              
                     </option>
                     <option value="61" data-product_name="Test" data-product_uom="BAG" data-product_uom_name="BAGS">
                        Test - Electronics              
                     </option>
                     <option value="62" data-product_name="Test" data-product_uom="BAG" data-product_uom_name="BAGS">
                        Test - Electronics              
                     </option>
                     <option value="63" data-product_name="50kg Ashaka Cement" data-product_uom="BAG" data-product_uom_name="BAGS">
                        50kg Ashaka Cement - Electronics              
                     </option>
                     <option value="64" data-product_name="LV Wallet" data-product_uom="BAG" data-product_uom_name="BAGS">
                        LV Wallet - Electronics              
                     </option>
                     <option value="65" data-product_name="sasd" data-product_uom="BAG" data-product_uom_name="BAGS">
                        sasd - Electronics              
                     </option>
                     <option value="66" data-product_name="Potato" data-product_uom="BAG" data-product_uom_name="BAGS">
                        Potato - Electronics              
                     </option>
                     <option value="67" data-product_name="Reel" data-product_uom="BAG" data-product_uom_name="BAGS">
                        Reel - Electronics              
                     </option>
                     <option value="68" data-product_name="18 inÃ§ Jant" data-product_uom="BAG" data-product_uom_name="BAGS">
                        18 inÃ§ Jant - Electronics              
                     </option>
                     <option value="69" data-product_name="Vinyl Ball" data-product_uom="BAG" data-product_uom_name="BAGS">
                        Vinyl Ball - Electronics              
                     </option>
                     <option value="70" data-product_name="OD Fan" data-product_uom="BAG" data-product_uom_name="BAGS">
                        OD Fan - Electronics              
                     </option>
                     <option value="71" data-product_name="NUTELLA" data-product_uom="BAG" data-product_uom_name="BAGS">
                        NUTELLA - Electronics              
                     </option>
                     <option value="72" data-product_name="DELL KEYBOARD USB" data-product_uom="BAG" data-product_uom_name="BAGS">
                        DELL KEYBOARD USB - Electronics              
                     </option>
                     <option value="74" data-product_name="MERA LAPTOP" data-product_uom="UNT" data-product_uom_name="UNITS">
                        MERA LAPTOP - Electronics              
                     </option>
                     <option value="75" data-product_name="Abcd abcd" data-product_uom="OTH" data-product_uom_name="OTHERS">
                        Abcd abcd - Development              
                     </option>
                     <option value="76" data-product_name="TESE!" data-product_uom="BOX" data-product_uom_name="BOX">
                        TESE! - Development              
                     </option>
                     <option value="77" data-product_name="df" data-product_uom="DOZ" data-product_uom_name="DOZENS">
                        df - Clothes              
                     </option>
                     <option value="78" data-product_name="Prasanth" data-product_uom="GMS" data-product_uom_name="GRAMMES">
                        Prasanth - Electronics              
                     </option>
                     <option value="79" data-product_name="Willson" data-product_uom="MTR" data-product_uom_name="METERS">
                        Willson - Samsung phone              
                     </option>
                     <option value="80" data-product_name="Wilson" data-product_uom="MTR" data-product_uom_name="METERS">
                        Wilson - Wilson Shoes              
                     </option>
                     <option value="81" data-product_name="Willson" data-product_uom="MTR" data-product_uom_name="METERS">
                        Willson - Wilson Shoes              
                     </option>
                     <option value="82" data-product_name="Wilson Shoess" data-product_uom="MTR" data-product_uom_name="METERS">
                        Wilson Shoess - Wilson Shoes              
                     </option>
                     <option value="83" data-product_name="Willson Sx" data-product_uom="MTR" data-product_uom_name="METERS">
                        Willson Sx - Wilson Shoes              
                     </option>
                     <option value="84" data-product_name="Willson" data-product_uom="MTR" data-product_uom_name="METERS">
                        Willson - Wilson Shoes              
                     </option>
                     <option value="85" data-product_name="Turning Machine" data-product_uom="BTL" data-product_uom_name="BOTTLES">
                        Turning Machine - Wilson Shoes              
                     </option>
                  </select>
                  <span id="err_product_id" class="error invalid-feedback"></span>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Product Name<span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <input type="text" name="product_name" value="" class="form-control form-control-sm field_validation" id="product_name" placeholder="Product Name" readonly="readonly">
                  <span id="err_product_name" class="error invalid-feedback"></span>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Unit<span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <input type="text" name="product_uom" value="" class="form-control form-control-sm field_validation" id="product_uom" placeholder="Unit" readonly="readonly">
                  <span id="err_product_uom" class="error invalid-feedback"></span>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Quantity<span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <input type="number" name="product_quantity" value="" class="form-control form-control-sm field_validation" id="product_quantity" placeholder="Quantity" step="0.01">
                  <span id="err_product_quantity" class="error invalid-feedback"></span>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Cost (₹)<span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <input type="text" name="product_cost" value="" class="form-control form-control-sm field_validation" id="product_cost" placeholder="Cost">
                  <span id="err_product_cost" class="error invalid-feedback"></span>
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-4 col-form-label">
               Selling Price (₹)<span class="text-danger">*</span>
               </label>
               <div class="col-sm-8">
                  <input type="text" name="product_price" value="" class="form-control form-control-sm field_validation" id="product_price" placeholder="Selling Price">
                  <span id="err_product_price" class="error invalid-feedback"></span>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary btn-sm">Submit</button>
         </div>
      </div>
   </div>
</div>
@endsection
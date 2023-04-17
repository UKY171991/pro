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
                     <h3 class="card-title">Sale List</h3>
                     <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                           <li class="nav-item">
                              <a class="nav-link btn-sm active" href="{{url('/add-sale')}}" data-tt="tooltip" title="" data-original-title="Click here to Add Transfer"><i class="far fa-snowflake mr-2"></i>Add Sale</a>
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
                              <th>Invoice No</th>
                              <th>Invoice Date</th>
                              <th>Customer</th>
                              <th>Total Discount</th>
                              <th>Total Taxable Value</th>
                              <th>TDS</th>
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
                              <td>200</td>
                              <td>80</td>
                              <td>120</td>
                              <td>
                              	<img src="https://zivaansolutions.com/apps/pro/assets/images/not_delivered.png" data-tt="tooltip" title="" width="40px" style="cursor: pointer" data-original-title="Not Delivered">
                              </td>
                              <td class="btn-group">
                    			<a href="{{url('/view-sale/1')}}"class="btn btn-default btn-xs" data-tt="tooltip" data-original-title="View purchase"><i class="fas fa-eye"></i> View</a>
                    			<a href="{{url('/edit-sale/1')}}" class="btn btn-info btn-xs" data-tt="tooltip" data-original-title="Edit purchase"><i class="fas fa-edit"></i> Edit</a>
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
@endsection
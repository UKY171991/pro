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
                     <h3 class="card-title">Purchase List</h3>
                     <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                           <li class="nav-item">
                              <a class="nav-link btn-sm active" href="{{url('/add-quotation')}}" data-tt="tooltip" title="" data-original-title="Click here to Add Transfer"><i class="far fa-snowflake mr-2"></i>Add Purchase</a>
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
                              <th>Reference No :</th>
                              <th>Quotation Date</th>
                              <th>Customer</th>
                              <th>Total Taxable Value (₹)</th>
                              <th>Total Discount (₹)</th>
                              <th>Status</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1234567890</td>
                              <td>11-11-2023</td>
                              <td>ABC</td>
                              
                              <td>80</td>
                              <td>80</td>
                              <td>Pending</td>
                             
                              <td class="btn-group">
                              	<a href="#" class="btn bg-orange btn-xs" data-tt="tooltip" title="" data-original-title="Download PDF"><i class="far fa-file-pdf"></i> Download</a>
                    			<a href="{{url('/view-quotation/1')}}"class="btn btn-default btn-xs" data-tt="tooltip" data-original-title="View quotation"><i class="fas fa-eye"></i> View</a>
                    			<a href="{{url('/edit-quotation/1')}}" class="btn btn-info btn-xs" data-tt="tooltip" data-original-title="Edit quotation"><i class="fas fa-edit"></i> Edit</a>
                    			<a href="" class="btn bg-purple btn-xs" data-tt="tooltip" title="" data-original-title="Click here to Create Duplicate Quotation"><i class="far fa-copy"></i> Copy</a>
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
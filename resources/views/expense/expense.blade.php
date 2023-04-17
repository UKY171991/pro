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
                     <h3 class="card-title">Expense List</h3>
                     <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                           <li class="nav-item">
                              <a class="nav-link btn-sm active" href="{{url('/add-expense')}}" data-tt="tooltip" title="" data-original-title="Click here to Add Transfer"><i class="far fa-snowflake mr-2"></i>Add Expense</a>
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
                              <th>Invoice Date :</th>
                              <th>Expense Category</th>
                              <th>Name of Supplier</th>
                              <th>Expense Documents</th>
                              <th>Remarks</th>
                              <th>Total Amount (Inclusive Tax)</th>
                              <th>Paid Amount</th>
                              <th>Due Amount</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>11-11-2023</td>
                              <td>XYZ</td>
                              <td>ABC</td>
                              
                              <td>80</td>
                              <td>80</td>
                              <td>80</td>
                              <td>80</td>
                              <td>100</td>
                             
                              <td class="btn-group">
                              	<a href="{{url('/view-expense/1')}}" class="btn btn-default btn-sm" data-tt="tooltip" title="View Expense"><i class="fas fa-eye"></i></a>

                    			<a href="#transaction-modal" data-toggle="modal" class="btn bg-purple btn-sm" data-tt="tooltip" title="Make Payment" data-expense_id="12"><i class="fas fa-rupee-sign"></i></a>
                    			<a href="{{url('/edit-expense/1')}}" class="btn btn-info btn-sm" data-tt="tooltip" data-original-title="Edit expense"><i class="fas fa-edit"></i></a>
                    			
                                 <a href="#" data-toggle="modal" data-target="#delete_customer" data-tt="tooltip" title="Delete Customer" class="btn btn-danger btn-sm delete_customer" data-customer_id="10"><i class="fas fa-trash"></i></a>
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
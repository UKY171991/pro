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
                <h3 class="card-title">Bank Account list</h3>

                <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="{{url('/bank-account/add')}}" data-tt="tooltip" title="" data-original-title="Click here to Add Bank Account">
                      <i class="fas fa-piggy-bank mr-2"></i>Add Bank Account                    </a>
                  </li>
                </ul>
              </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Account Name</th>
                    <th>Account Number</th>
                    <th>Bank Name</th>
                    <th>IFSC</th>
                    <th>Description</th>
                    <th>Opening Balance</th>
                    <th>Closing Balance</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
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


<div class="modal fade" id="ViewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="exampleModalLabel">View Bank Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card card-danger addTransactionCard">

          <div class="card-header bank_details light-failure-header">
              <h4 class="card-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#bank_details" class="" aria-expanded="true">
                  Bank Account Details
                </a>
              </h4>
            </div>


          <table class="table" id="account_details">
            <thead>
              <tr>
                <th>Account Name</th>
                <th>Bank Name</th>
                <th>IFSC</th>
                <th>Account Type</th>
                <th>Opening Balance</th>
                <th>Closing Balance</th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>

        <div class="card card-danger addTransactionCard">

          <div class="card-header bg-success bank_details light-failure-header">
              <h4 class="card-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#bank_details" class="" aria-expanded="true">
                  Previous Transaction
                </a>
              </h4>
            </div>


          <table class="table">
            <thead>
              <tr>
                <th>Account Name</th>
                <th>Bank Name</th>
                <th>IFSC</th>
                <th>Account Type</th>
                <th>Opening Balance</th>
                <th>Closing Balance</th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="TransferModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="exampleModalLabel">Transfer money to Other Bank Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <table class="table">
            <tr>
              <td><b>Transfer From (Closing Balance)</b></td>
              <td>Bank Account A (CB: 17881.700)</td>
            </tr>
            <tr>
              <td><b>Transfer to *</b></td>
              <td>
                <select class="form-control">
                  <option>Select</option>
                </select>
              </td>
            </tr>
            <tr>
              <td><b>Amount *</b></td>
              <td><input type="text" class="form-control" id="recipient-name"></td>
            </tr>
            <tr>
              <td><b>Reference No *</b></td>
              <td><input type="text" class="form-control" id="recipient-name"></td>
            </tr>
          </table>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info btn-sm">Tranfer money</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="DepositModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLabel">Deposit money to Bank Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <table class="table">
            <tr>
              <td><b>Transfer From *</b></td>
              <td>CASH ACCOUNT ( CB : 1001468615.040)</td>
            </tr>
            <tr>
              <td><b>Deposit into</b></td>
              <td>
                BANK ACCOUNT A (Axis Bank )
              </td>
            </tr>
            <tr>
              <td><b>Amount *</b></td>
              <td><input type="text" class="form-control" id="recipient-name"></td>
            </tr>
            <tr>
              <td><b>Reference No *</b></td>
              <td><input type="text" class="form-control" id="recipient-name"></td>
            </tr>
          </table>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-sm btn-sm">Deposit money</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="WithdrawModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="exampleModalLabel">Withdraw money from Bank Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="modal-body">
        <form>
          <table class="table">
            <tr>
              <td><b>Transfer From(Closing Balance)</b></td>
              <td>BANK ACCOUNT A (CB: 17881.700)</td>
            </tr>
            <tr>
              <td><b>Amount *</b></td>
              <td><input type="text" class="form-control" id="recipient-name"></td>
            </tr>
            <tr>
              <td><b>Reference No *</b></td>
              <td><input type="text" class="form-control" id="recipient-name"></td>
            </tr>
          </table>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info btn-sm btn-sm">Withdraw money</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="IncreaseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="exampleModalLabel">Increase Capital Amount</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="modal-body">
        <form>
          <table class="table">
            <tr>
              <td><b>Current Balance</b></td>
              <td>BANK ACCOUNT A (CB: 17881.700)</td>
            </tr>
            <tr>
              <td><b>Amount *</b></td>
              <td><input type="text" class="form-control" id="recipient-name"></td>
            </tr>
            <tr>
              <td><b>Reference No *</b></td>
              <td><input type="text" class="form-control" id="recipient-name"></td>
            </tr>
          </table>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info btn-sm btn-sm">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="DecreaseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="exampleModalLabel">Reduce Capital Amount</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="modal-body">
        <form>
          <table class="table">
            <tr>
              <td><b>Current Balance</b></td>
              <td>BANK ACCOUNT A (CB: 17881.700)</td>
            </tr>
            <tr>
              <td><b>Amount *</b></td>
              <td><input type="text" class="form-control" id="recipient-name"></td>
            </tr>
            <tr>
              <td><b>Reference No *</b></td>
              <td><input type="text" class="form-control" id="recipient-name"></td>
            </tr>
          </table>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info btn-sm btn-sm">Save</button>
      </div>
    </div>
  </div>
</div>

@endsection
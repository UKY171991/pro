<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank_account;
use App\Models\Ledger;

class BankAccount extends Controller
{
    public function index() 
    {
        $title = "Bank Account";
        return view('bank_account/list',compact('title'));
    }
    public function add()
    {
        $title = "Bank Account add";
        return view('bank_account/add', compact('title'));
    }
    public function edit()
    {
        $title = "Bank Account edit";

        return view('bank_account/edit', compact('title'));
    }

    public function account_list()
    {
        $Bank_account = Bank_account::latest()->get();

        foreach($Bank_account as $accounts){

            $Ledger = Ledger::where('id',$accounts->ledger_id)->first();


            $open = $Ledger->opening_balance;
            $close = $Ledger->closing_balance;

            $action = '<div class="btn-group">
                      <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#ViewModal" data-id="'.$accounts->id.'"><i class="fas fa-eye"></i>View</button>
                      <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#TransferModal" data-id="'.$accounts->id.'"><i class="fas fa-exchange-alt"></i>Transfer</button>
                      <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#DepositModal" data-id="'.$accounts->id.'"><i class="fas fa-coins"></i>Deposit</button>
                      <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#WithdrawModal" data-id="'.$accounts->id.'"><strong>W</strong><br>Withdraw</button>
                      <button type="button" class="btn btn-dark btn-xs" data-toggle="modal" data-target="#IncreaseModal" data-id="'.$accounts->id.'"><i class="fas fa-arrow-up"></i>Increase</button>
                      <button type="button" class="btn btn-secondary btn-xs" data-toggle="modal" data-target="#DecreaseModal" data-id="'.$accounts->id.'"><i class="fas fa-arrow-down"></i>Decrease</button>
                      <a href="'.url('/bank-account/edit/'.$accounts->id).'" class="btn btn-info btn-xs"><i class="fas fa-edit"></i>Edit</a>
                      </div>';

        $data[] = array(
                $accounts->account_name,
                $accounts->account_number,
                $accounts->bank_name,
                $accounts->ifsc,
                $accounts->description,
                $open,
                $close,
                $action,
            );  
            
        }
          $output = array(
               "data" => $data
            );
          echo json_encode($output);
          exit();
    }
}

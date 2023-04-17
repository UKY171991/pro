<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function gstr1()
    {
        $title = "Gstr 1";
        return view('report/gstr1',compact('title'));
    }

    public function gstr2()
    {
        $title = "Gstr 2";
        return view('report/gstr2',compact('title'));
    }

    public function sale()
    {
        $title = "Sale";
        return view('report/sale',compact('title'));
    }

    public function sales_return()
    {
        $title = "Sales return";
        return view('report/sales_return',compact('title'));
    }
    public function purchase()
    {
        $title = "Purchase";
        return view('report/purchase',compact('title'));
    }
    public function purchase_return()
    {
        $title = "Sale";
        return view('report/purchase',compact('title'));
    }
    public function expense()
    {
        $title = "Expense Report";
        return view('report/expense',compact('title'));
    }
    public function ledger()
    {
        $title = "Ledger";
        return view('report/ledger',compact('title'));
    }
    public function profit_and_loss()
    {
        $title = "Profit and loss";
        return view('report/profit_and_loss',compact('title'));
    }
}

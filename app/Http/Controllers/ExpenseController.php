<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function expense()
    {
        $title = "Expense";
        return view('expense/expense',compact('title'));
    }
    public function add_expense()
    {
        $title = "Add Expense";
        return view('expense/add_expense',compact('title'));
    }
    public function view_expense()
    {
        $title = "Expense";
        return view('expense/view_expense',compact('title'));
    }
    public function edit_expense()
    {
        $title = "Expense";
        return view('expense/edit_expense',compact('title'));
    }
}

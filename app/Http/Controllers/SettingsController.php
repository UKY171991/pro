<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $title = "Purchase";
        return view('settings/settings',compact('title'));
    }

    public function expense_category()
    {
        $title = "Expense category";
        return view('settings/expense_category',compact('title'));
    }

    public function tax()
    {
        $title = "Tax";
        return view('settings/tax',compact('title'));
    }

    public function discount()
    {
        $title = "Discount";
        return view('settings/discount',compact('title'));
    }
    public function currency()
    {
        $title = "Currency";
        return view('settings/currency',compact('title'));
    }
}

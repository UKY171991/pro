<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $title = "Warehouse";
        return view('inventory/warehouse',compact('title'));
    }

    public function stock()
    {
        $title = "Stock Entry";
        return view('inventory/stock',compact('title'));
    }

    public function transfer()
    {
        $title = "Transfer List";
        return view('inventory/transfer',compact('title'));
    }

    public function add_transfer()
    {
        $title = "Add Transfer";
        return view('inventory/add_transfer',compact('title'));
    }

    public function product_category()
    {
        $title = "Product category";
        return view('inventory/product_category',compact('title'));
    }
    public function product()
    {
        $title = "Product";
        return view('inventory/product',compact('title'));
    }

    public function purchase()
    {
        $title = "Purchase";
        return view('inventory/purchase',compact('title'));
    }
    public function add_purchase()
    {
        $title = "Add Purchase";
        return view('inventory/add_purchase',compact('title'));
    }
    public function view_purchase()
    {
        $title = "View Purchase";
        return view('inventory/view_purchase',compact('title'));
    }
    public function edit_purchase()
    {
        $title = "Edit Purchase";
        return view('inventory/edit_purchase',compact('title'));
    }

    public function purchase_return()
    {
        $title = "Purchase Return";
        return view('inventory/purchase_return',compact('title'));
    }
     public function add_purchase_return()
    {
        $title = "Add Purchase Return";
        return view('inventory/add_purchase_return',compact('title'));
    }
    public function view_purchase_return()
    {
        $title = "View Purchase Return";
        return view('inventory/view_purchase_return',compact('title'));
    }
    public function edit_purchase_return()
    {
        $title = "Edit Purchase Return";
        return view('inventory/edit_purchase_return',compact('title'));
    }

    public function sale()
    {
        $title = "Sale";
        return view('inventory/sale',compact('title'));
    }

    public function add_sale()
    {
        $title = "Add Sale";
        return view('inventory/add_sale',compact('title'));
    }
    public function view_sale()
    {
        $title = "View Sale";
        return view('inventory/view_sale',compact('title'));
    }
    public function edit_sale()
    {
        $title = "Edit Sale";
        return view('inventory/edit_sale',compact('title'));
    }

    public function sales_return()
    {
        $title = "Edit Sale Return";
        return view('inventory/sales_return',compact('title'));
    }
    public function add_sales_return()
    {
        $title = "Add Sale Return";
        return view('inventory/add_sales_return',compact('title'));
    }
    public function edit_sales_return()
    {
        $title = "Edit Sale Return";
        return view('inventory/edit_sales_return',compact('title'));
    }
    public function view_sales_return()
    {
        $title = "View Sale Return";
        return view('inventory/view_sales_return',compact('title'));
    }

    public function quotation()
    {
         $title = "Quotation";
        return view('inventory/quotation',compact('title'));
    }
    public function view_quotation()
    {
         $title = "Add Quotation";
        return view('inventory/view_quotation',compact('title'));
    }
    public function add_quotation()
    {
         $title = "Add Quotation";
        return view('inventory/add_quotation',compact('title'));
    }


    public function edit_quotation()
    {
         $title = "Edit Quotation";
        return view('inventory/edit_quotation',compact('title'));
    }
    
}

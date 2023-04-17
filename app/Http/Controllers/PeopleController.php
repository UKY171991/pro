<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        $title = "User role";
        return view('people/user_role',compact('title'));
    }

    public function add_user_role()
    {
        $title = "Add User role";
        return view('people/add_user_role',compact('title'));
    }

    public function users()
    {
        $title = "User";
        return view('people/user',compact('title'));
    }
    public function edit_user(){
        $title = "Edit User";
        return view('people/edit_user',compact('title'));   
    }

    public function add_user(){
        $title = "Edit User";
        return view('people/add_user',compact('title'));   
    }

    public function customer()
    {
        $title = "Customer";
        return view('people/customer',compact('title'));
    }

    public function view_customer()
    {
        $title = "View Customer";
        return view('people/view_customer',compact('title'));
    }

    public function add_customer()
    {
        $title = "Add Customer";
        return view('people/add_customer',compact('title'));
    }

    public function edit_customer()
    {
        $title = "Edit Customer";
        return view('people/edit_customer',compact('title'));
    }

    public function supplier()
    {
        $title = "Supplier";
        return view('people/supplier',compact('title'));
    }

    public function view_supplier()
    {
        $title = "View Supplier";
        return view('people/view_supplier',compact('title'));
    }
    public function add_supplier()
    {
        $title = "Add Supplier";
        return view('people/add_supplier',compact('title'));
    }
    public function edit_supplier()
    {
        $title = "Edit Supplier";
        return view('people/edit_supplier',compact('title'));
    }
}

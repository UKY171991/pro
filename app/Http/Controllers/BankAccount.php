<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankAccount extends Controller
{
    public function index()
    {
        //$posts = Post::latest()->get();

       // $user = auth()->user();
        // if($user ==''){
        //     return redirect('/logout');
        // }

        //$projects = $user->projects;
        //$tasks = $user->tasks;

        //return view('dashboard/dashboard', compact('posts'));
        return view('dashboard/dashboard');
    }
    public function add()
    {
        //$posts = Post::latest()->get();

       // $user = auth()->user();
        // if($user ==''){
        //     return redirect('/logout');
        // }

        //$projects = $user->projects;
        //$tasks = $user->tasks;

        //return view('dashboard/dashboard', compact('posts'));
        return view('dashboard/dashboard');
    }
    public function edit()
    {
        //$posts = Post::latest()->get();

       // $user = auth()->user();
        // if($user ==''){
        //     return redirect('/logout');
        // }

        //$projects = $user->projects;
        //$tasks = $user->tasks;

        //return view('dashboard/dashboard', compact('posts'));
        return view('dashboard/dashboard');
    }
}

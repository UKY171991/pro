<?php
namespace App\Http\Controllers;
//namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
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
}
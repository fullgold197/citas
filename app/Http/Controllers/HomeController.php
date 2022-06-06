<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /* return view('home'); */
        if(Auth::user()->role_id == '2') //1 = Admin Login
        {
            return redirect('/admin');

        } else if (Auth::user()->roles_id == '1' /* and Auth::user()->estado =='1' */) {
            return view('users.home');
        }
        else{
            return redirect('/login');
        }
    }
}

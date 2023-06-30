<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * 
     * 
     */

     public function logoutPrompt()
    {
        return view('logoutPrompt');
    }

   


    public function index()
    {
        return view('welcome');
    }

    public function adminHome()
    {
        return view('adminHome');
    }
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function sellerHome()
    {
        return view('sellerHome');
    }

}

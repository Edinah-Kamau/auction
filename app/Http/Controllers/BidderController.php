<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BidderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function index()
    {
        return view('welcome');
    }
    
    public function shop()
    {
        return view('shop');
    }

    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function applications()
    {
        return view('applications');
    }

    public function adminHome()
    {
        return view('adminHome');
    }


}
?>
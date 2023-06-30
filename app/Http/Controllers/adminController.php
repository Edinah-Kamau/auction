<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{

    public function adminHome()
    {
        return view('adminHome');
    }

    public function displayBidders()
    {
        return Display::all();
    }
    


}
?>
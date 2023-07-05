<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

   


   

    public function adminHome()
    {
        $totalbidders = User::where ('type','0')->count();
        $totalsellers = User::where ('type','2')->count();
        $totaladmins = User::where ('type','1')->count();
        $totalaccounts = User::count();
        $applications = User::count();
    
        

      
        return view('adminHome',compact('totalbidders','totalsellers','totaladmins', 'totalaccounts','applications'));
      
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

    //applications
    
    public function orders()
    {
        return view('orders');
    }

    
    




    

}

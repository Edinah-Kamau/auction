<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Application;
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

     public function bidderHome()
     {
         return view('bidderHome');

     }

   public function sellerHome()
    {
        return view('sellerHome');
    }

    public function adminHome()
    {
        $totalbidders = User::where ('type','0')->count();
        $totalsellers = User::where ('type','2')->count();
        $totaladmins = User::where ('type','1')->count();
        $totalaccounts = User::count();
        $applications = Application::count();
        return view('adminHome',compact('totalbidders','totalsellers','totaladmins', 'totalaccounts','applications'));
      
    }



     public function logoutPrompt()
    {
        return view('logoutPrompt');
    }

     

   
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
       //applications
    
    public function orders()
    {
        return view('orders');
    }

    

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Application;


class adminController extends Controller
{
    
    public function displayBidders()
    {

      $data = User::where ('type','0')->get();
      return view('displayBidders',compact('data'));
    }

    public function displaySellers()
    {

      $data = User::where ('type','2')->get();
      return view('displaySellers',compact('data'));
    }

    public function displayAdmins()
    {

      $data = User::where ('type','1')->get();
      return view('displayAdmins',compact('data'));
    }

    public function displayAccounts()
    {

      $data = User::get();
      return view('displayAccounts',compact('data'));
    }

    public function displayApplications()
    {

      $data = Application::get();
      return view('displayApplications',compact('data'));
    }




      
   
    }




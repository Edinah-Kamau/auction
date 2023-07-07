<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Application;
use DB;


class adminController extends Controller
{

  /*------------------------------------------
--------------------------------------------
Display Admin side
--------------------------------------------
--------------------------------------------*/
    
    public function displayBidders()
    {

      $data = User::where('type', 0)->where('status', 1)->get();
      return view('displayBidders',compact('data'));
    }

    public function displaySellers()
    {

      $data = User::where('type', 2)->where('status', 1)->get();
      return view('displaySellers',compact('data'));
    }

    public function displayAdmins()
    {

      $data = User::where('type', 1)->where('status', 1)->get();
      return view('displayAdmins',compact('data'));
    }

    public function displayBlocked()
    {

      $data = User::where ( 'status','0')->get();
      return view('displayBlocked',compact('data'));
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

    /*------------------------------------------
--------------------------------------------
Delete Buttons
--------------------------------------------
--------------------------------------------*/

    public function delete_bidders($id)
    
    {

      $delete_user = User::find($id);
      $delete_user -> delete();
      return redirect('display/bidders')->with('success','Data deleted');
     
    }

    public function delete_sellers($id)
    
    {

      $delete_user = User::find($id);
      $delete_user -> delete();
      return redirect('display/sellers')->with('success','Data deleted');
     
    }

    public function delete_admins($id)
    
    {

      $delete_user = User::find($id);
      $delete_user -> delete();
      return redirect('display/admins')->with('success','Data deleted');
     
    }

    public function delete_accounts($id)
    
    {

      $delete_user = User::find($id);
      $delete_user -> delete();
      return redirect('display/accounts')->with('success','Data deleted');
     
    }
    
    public function delete_applications($id)
    
    {

      $delete_user = Application::find($id);
      $delete_user -> delete();
      return redirect('display/applications')->with('success','Data deleted');
     
    }

    public function delete_blocked($id)
    
    {

      $delete_user = User::find($id);
      $delete_user -> delete();
      return redirect('display/blocked')->with('success','Data deleted');
     
    }


    /*------------------------------------------
--------------------------------------------
Disable accounts
--------------------------------------------
--------------------------------------------*/


    /**
     * Show the application dashboard.
     *
     * @param Integer $user_id
     * @param Integer $Status_code
     * @param Success Response
     */

     public function updateStatus($user_id, $status_code)
     {
        try{
            $update_user = User::whereId($user_id)->update([
                'status' => $status_code
            ]);

            if($update_user){
                return redirect()->route('display.bidders')->with('Success','Bidder Status Updated Successfuly');
                }

                return redirect()->route('display.bidders')->with('error','Failed to update the status');
        } catch (\Throwable $th) {
            throw $th;

        }
     }
   
    



      
   
    }




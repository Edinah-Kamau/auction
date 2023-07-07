<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

use Illuminate\Support\Facades\Storage;

class applicationController extends Controller
{
    //
   


    public function applications(Request $request){
        $requestData = $request->all();

        $request->validate([
            'user_name' => 'required',
            'number' =>'required',
            'email' => 'required|email|unique:users',
            'date_of_birth' => 'required',
            'address' => 'required',
            'street' => 'required',
            'country' => 'required',
            'county' => 'required',
            'city' => 'required',
            'pin_code' => 'required',
            'name' =>'required',
            'type' => 'required',
            'national_id_front' => 'required', 
            'national_id_back' => 'required',
            'proof_front' => 'required',
            'proof_back' => 'required'
            

        ]);

       
        $filename = time().$request->file('national_id_front')->getClientOriginalName();
        $filename1 = time().$request->file('national_id_back')->getClientOriginalName();
        $filename2 = time().$request->file('national_id_front')->getClientOriginalName();
        $filename3 = time().$request->file('national_id_back')->getClientOriginalName();

        $path = $request->file('national_id_front')->storeAs('images', $filename, 'public');
        $path1 = $request->file('national_id_back')->storeAs('images', $filename1, 'public');
        $path2 = $request->file('proof_front')->storeAs('images', $filename2, 'public');
        $path3 = $request->file('proof_back')->storeAs('images', $filename3, 'public');

        $requestData['national_id_front'] = '/storage/'.$path;
        $requestData1['national_id_back'] = '/storage/'.$path1;
        $requestData2['proof_front'] = '/storage/'.$path2;
        $requestData3['proof_back'] = '/storage/'.$path3;
        
        
        $res = Application::create([
            'user_name' => $request['user_name'],
            'number' => $request['number'],
            'email' => $request['email'],
            'date_of_birth' => $request['date_of_birth'],
            'address' => $request['address'],
            'street' => $request['street'],
            'country' => $request['country'],
            'county' => $request['county'],
            'city' => $request['city'],
            'pin_code' => $request['pin_code'],
            'name' => $request['name'],
            'type' => $request['type'],
            'national_id_front' => $requestData['national_id_front'],
            'national_id_back' => $requestData1['national_id_back'],
            'proof_front' => $requestData2['proof_front'],
            'proof_back' => $requestData3['proof_back'],
            
        ]);
        

        if($res)
        {
            return redirect('applications')->withSuccess('Application successfully delivered'); 
        }else{
            return redirect('applications')->withFail('Application not successfull');
        }

    }

 
    

}

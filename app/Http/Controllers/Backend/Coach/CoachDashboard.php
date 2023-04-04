<?php

namespace App\Http\Controllers\Backend\Coach;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Users;
use App\Models\UserDetails;
use Illuminate\Http\Request;

class CoachDashboard extends Controller
{
    function index()
    {
        // dd(session("USER_ID"));
        $dataModel = Users::where('id', session("USER_ID"))->FIRST();
        // dd($dataModel);
        return view('Backend.Coach.index');
    }
    
    function updatecoachprofile(Request $data)
    {
        
        $userdata = Users::where('id', $data->user_id)->first();
        $userdata->full_name = $data->full_name;
        $userdata->mobile = $data->mobile;
        $userdata->update();

        $userDetails = UserDetails::where('user_id', $data->user_id)->first();
        $userDetails->details = $data->details;
        $userDetails->country = $data->country;
        $userDetails->birth_date = $data->birth_date;
        $userDetails->address = $data->address;
        
        if(isset($data->profile_image))
        {
            $ProfileImage = $data -> FILE("profile_image");
            // dd($ProfileImage);
            $New_Name = rand(0000,1111).date("Y-m-d H_i_s").".".$ProfileImage -> getClientOriginalExtension();;

            $ProfileImage -> move("public/coach/profileImage/",$New_Name);
            $userDetails -> profile_image = $New_Name;
        }
        $userDetails->update();
        // dd($data->all());
        
        return redirect()->back()->with('profileUpdate','Profile Update Successfully');
        
    }
    
    function updateclublicence(Request $data)
    {
        $userdata = Users::where('id', $data->user_id)->first();
        $userdata->club_details = $data->club_details;
        $userdata->update();
        
        $userDetails = UserDetails::where('user_id', $data->user_id)->first();
        $userDetails->licence_number = $data->licence_number;
        $userDetails->update();
        
        return redirect()->back()->with('profileUpdate','Profile Update Successfully');
    }

    
}

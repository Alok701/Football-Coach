<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminAccountController extends Controller
{
    function index()
    {
        return view('Backend.Admin.admin-profile');
    }

    function login(Request $data)
    {
        // dd($data->all());
        $email = $data->email;
        $password = $data->password;
        $adminModel = Admin::where(["email" => $email, "password" => $password])->FIRST();

        if (isset($adminModel->id)) {
            $data->SESSION()->PUT("ADMIN_LOGIN", true);
            $data->SESSION()->PUT("ADMIN_ID", $data->id);
            $data->SESSION()->PUT("ADMIN_EMAIL", $data->email);
            return redirect('/admin/dashboard');
        } else {
            return REDIRECT()->BACK()->WITH("loginerror", "You Have Enter Wrong Login Detail");
        }
    }

    // function dashboard()
    // {
    //     return view('Backend.Admin.index');
    // }
    
}

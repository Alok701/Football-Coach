<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class AdminCoachController extends Controller
{
    function index()
    {
        $data = Users::where("position", 'Coach')->get();
        // dd($data);
        return view('Backend.Admin.Coach.coach-list',["coachList" => $data]);
    }
}

<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSignupController extends Controller
{
    function index()
    {
    	return view('Backend.Auth.signup');
    }
}

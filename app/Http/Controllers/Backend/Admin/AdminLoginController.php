<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    function login()
    {
    	return view('Backend.Auth.signin');
    }
    function index()
    {
    	return view('Backend.Admin.index');
    }
}

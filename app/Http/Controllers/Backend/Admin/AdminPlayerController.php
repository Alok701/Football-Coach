<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPlayerController extends Controller
{
    function index()
    {
    	return view('Backend.Admin.players-view');
    }
     function edit()
    {
    	return view('Backend.Admin.players-details');
    }
}

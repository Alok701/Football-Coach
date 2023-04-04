<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    function index()

    {
    	return view('Backend.Admin.order-list');
    }
     function edit()

    {
    	return view('Backend.Admin.order-details');
    }
}

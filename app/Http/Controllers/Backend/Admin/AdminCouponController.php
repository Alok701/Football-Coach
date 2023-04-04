<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCouponController extends Controller
{
    function index()
    {
    	return view('Backend.Admin.coupon-view');
    }
      function insert()
    {
    	return view('Backend.Admin.coupon-add');
    }
      
     function edit()
    {
    	return view('Backend.Admin.coupon-edit');
    }
      
}

<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
      function index()
    {
    	return view('Backend.Admin.course-view');
    }
       function insert()
    {
      return view('Backend.Admin.course-add');
    }
     function edit()
    {
    	return view('Backend.Admin.course-edit');
    }
      function mycourse()
    {
    	return view('Backend.Admin.my-course');
    }

}

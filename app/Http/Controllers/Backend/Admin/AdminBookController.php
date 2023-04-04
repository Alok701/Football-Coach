<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminBookController extends Controller
{
        function index()
    {
    	return view('Backend.Admin.Books-view');
    }
        function insert()
    {
        return view('Backend.Admin.Books-add');
    }
     function edit()
    {
    	return view('Backend.Admin.Books-edit');
    }
       function mybooks()
    {
    	return view('Backend.Admin.my-books');
    }

}

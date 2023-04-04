<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminArticleController extends Controller
{
      function index()
    {
    	return view('Backend.Admin.Article-view');
    }
        function insert()
    {
      return view('Backend.Admin.Article-add');
    }
     function edit()
    {
    	return view('Backend.Admin.Article-edit');
    }
       function myarticles()
    {
    	return view('Backend.Admin.my-articles');
    }
}

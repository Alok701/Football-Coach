<?php

namespace App\Http\Controllers\Backend\Mentor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InjuredplayerController extends Controller
{
     function index()
    {
    	return view('Backend.Mentor.injured-view');
    }
     function insert()
    {
    	return view('Backend.Mentor.injured-add');
    }
     function edit()
    {
    	return view('Backend.Mentor.injured-edit');
    }
}

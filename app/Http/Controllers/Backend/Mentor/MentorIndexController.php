<?php

namespace App\Http\Controllers\Backend\Mentor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MentorIndexController extends Controller
{
     function index()
    {
    	return view('Backend.Mentor.index');
    }
}

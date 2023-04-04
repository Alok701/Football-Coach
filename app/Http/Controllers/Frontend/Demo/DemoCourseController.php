<?php

namespace App\Http\Controllers\Frontend\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoCourseController extends Controller
{
    function index()
    {
        return view('Frontend.demo.trial-course-details');
    }
      function presentationtwo()
    {
        return view('Frontend.demo.trial-presentation2');
    }
}

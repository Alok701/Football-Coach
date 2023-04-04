<?php

namespace App\Http\Controllers\Frontend\Premium\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursedetailsController extends Controller
{
     function index()
    {
        return view('Frontend.Premium.Course.course-detail');
    }
}

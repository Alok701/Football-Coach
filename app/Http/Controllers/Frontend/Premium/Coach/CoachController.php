<?php

namespace App\Http\Controllers\Frontend\Premium\Coach;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoachController extends Controller
{
     function index()
    {
        // return "hello";
        return view('Frontend.Premium.Coach.coach');
    }
}

<?php

namespace App\Http\Controllers\Frontend\Premium\Coach;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoachindexController extends Controller
{
     function index()
    {
        return view('Frontend.Premium.Coach.coach-index');
    }
}

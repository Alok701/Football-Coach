<?php

namespace App\Http\Controllers\Frontend\Trail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrailcoachController extends Controller
{
    function index()
    {
        return view('Frontend.trial.demo-premium-coach');
    }
}

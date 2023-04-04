<?php

namespace App\Http\Controllers\Frontend\Premium\Coach;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventdetailsController extends Controller
{
     function index()
    {
        return view('Frontend.Premium.Coach.event-details');
    }
}

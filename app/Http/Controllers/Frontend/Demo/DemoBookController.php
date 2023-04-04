<?php

namespace App\Http\Controllers\Frontend\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoBookController extends Controller
{
    function index()
    {
        return view('Frontend.demo.trial-book-details');
    }
}

<?php

namespace App\Http\Controllers\Frontend\Trail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index()
    {
        return view('Frontend.trial.index');
    }
}

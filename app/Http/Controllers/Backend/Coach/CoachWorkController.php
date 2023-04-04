<?php

namespace App\Http\Controllers\Backend\Coach;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Users;
use Illuminate\Http\Request;

class CoachWorkController extends Controller
{
    function viewgraphics()
    {
        return view('Backend.Coach.Work Place.Graphics.graphics-view');
    }
    
    function editgraphics()
    {
        return view('Backend.Coach.Work Place.Graphics.graphics-edit');
    }
    
    function addgraphics()
    {
        return view('Backend.Coach.Work Place.Graphics.graphics-add');
    }

    
}

<?php

namespace App\Http\Controllers\Backend\Mentor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    function index()
    {
    	return view('Backend.Mentor.players-view');
    }
    function edit()
    {
    	return view('Backend.Mentor.players-details');
    }
}

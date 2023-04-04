<?php

namespace App\Http\Controllers\Backend\Coach;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Users;
use Illuminate\Http\Request;

class CoachAnimationController extends Controller
{
    public function viewanimation()
    {
        return view('Backend.Coach.Work Place.MyAnimation.animation-view');
    }
}
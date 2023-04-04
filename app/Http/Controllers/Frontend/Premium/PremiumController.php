<?php

namespace App\Http\Controllers\Frontend\Premium;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PremiumController extends Controller
{
     function index()
    {
        return view('Frontend.Premium.Book.book');
    }
}

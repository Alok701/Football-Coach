<?php

namespace App\Http\Controllers\Frontend\Premium;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
     function index()
    {
        return view('Frontend.Premium.Book.checkout');
    }
}

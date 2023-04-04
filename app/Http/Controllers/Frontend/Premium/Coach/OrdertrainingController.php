<?php

namespace App\Http\Controllers\Frontend\Premium\Coach;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Ordertraining;

class OrdertrainingController extends Controller
{
     function index()
    {
        return view('Frontend.Premium.Coach.order-training');
    }


    function insert(Request $req)
    {
    

		$order = new Ordertraining;
		$order -> name = $req -> name;
		$order -> position = $req -> position;
		$order -> phone =$req -> phone;
		$order -> sports = $req -> sports;
		$order -> email = $req -> email;
		$order -> subject = $req -> subject;
		$order -> message = $req -> message;
		// dd($order);
		$order->save();
		return redirect()->back()->with('message','Thanks for order training');
    }
}

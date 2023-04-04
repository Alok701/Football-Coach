<?php

namespace App\Http\Controllers\Frontend\Trail;

use App\Http\Controllers\Controller;
use App\Mail\Frontend\MailContactus;
use Illuminate\Http\Request;
Use App\Models\ContactUs;
use Mail;

class ContactController extends Controller
{
    function index()
    {
        return view('Frontend.trial.contact-us');
    }

    // Insert data into database

    function insert(Request $req)
    {
    

		$contact = new ContactUs;
		$contact -> name = $req -> name;
		$contact -> email = $req -> email;
		$contact -> phone =$req -> phone;
		$contact -> subject = $req -> subject;
		$contact -> message = $req -> message;
		$data = $_POST;
		// dd($contact);
		$contact->save();
		Mail::to('info@iamfootballcoach.in')->send(new MailContactus($data));
		return redirect()->back()->with('msg','Contact Saved Successfully');
    }
}

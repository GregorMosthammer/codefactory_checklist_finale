<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Mail;
use App\Mail\checklistEnroll;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function email()
    {
        Mail::to(Auth::user()->email)->send(new checklistEnroll());


$emails = ['christoph.pirringer@codefactory.wien'];


    Mail::send('emails.user.checklistEnroll', $emails, function($message) use ($emails)
{    
    
    $message->to($emails)->subject('Somebody Enroll');    
});

   
        return redirect ('checklist');
    }
}

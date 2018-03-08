<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Students;
use DB;
use View;
use Session;
use Auth;
use Mail;
use App\Mail\checklistEnroll;
use App\checklist;


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
         $id = Auth::id();
         $checklist = DB::table('checklist')->where('user_id', $id)->get()->toArray();
        
         if (in_array('0', $checklist))
            {
                    echo "Match found";
            }
         

   /*     Mail::to(Auth::user()->email)->send(new checklistEnroll());


        $emails = ['christoph.pirringer@codefactory.wien'];


        Mail::send('emails.user.checklistEnroll', $emails, function($message) use ($emails)
{    
    
        $message->to($emails)->subject('Somebody Enroll');    
});

   
        return redirect ('checklist');*/
    }
}

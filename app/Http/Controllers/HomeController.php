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
use Confirm;
use Alert;


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
         $checklist = checklist::where('user_id', '=', $id)->get();
        
        
        
       // var_dump($checklist);
        // exit();
        
         if ($checklist->contains('passport','0') || $checklist->contains('passport','') ||
            $checklist->contains('financing','0') || $checklist->contains('financing','')  ||
            $checklist->contains('insurance','0') || $checklist->contains('insurance','')  ||
            $checklist->contains('pass','0') || $checklist->contains('pass','')  ||
            $checklist->contains('visaform','0') || $checklist->contains('visaform','') ||
            $checklist->contains('picture','0') || $checklist->contains('picture','')  ||
            $checklist->contains('travelreservation','0') || $checklist->contains('travelreservation','') ||
            $checklist->contains('hotelreservation','0') || $checklist->contains('hotelreservation','')  || 
            $checklist->contains('employment','0') || $checklist->contains('employment','') ||
            $checklist->contains('travelinsurance','0') || $checklist->contains('travelinsurance','') ||
            $checklist->contains('financial_means','0') || $checklist->contains('financial_means','') ||
            $checklist->contains('passcopy','0') || $checklist->contains('passcopy','') ||
            $checklist->contains('consularfee','0') ||  $checklist->contains('consularfee','')


              )
            {
              alert()->flash('Sorry, you will have to check everything with yes on youre checklist to be able to enroll!', 'error');

return redirect ('checklist');

    }else{

              alert()->flash('Congratulations, you just enrolled @ CodeFactory!', 'success');
       Mail::to(Auth::user()->email)->send(new checklistEnroll());


        $emails = ['christoph.pirringer@codefactory.wien'];


        Mail::send('emails.user.checklistEnroll', $emails, function($message) use ($emails)
{    
    
        $message->to($emails)->subject('Somebody Enroll');    
});

   
        return redirect ('checklist');
    }}


}

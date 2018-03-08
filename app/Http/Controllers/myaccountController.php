<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use App\Students;
use Session;
use View;
use Auth;
use DB;

class MyAccountController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
       
        $students = Students::all();
        return View::make('myaccount')
                ->with('students', $students);
                
        }

         public function store()
    {
       
        $students = new Students;
        $students->firstname       = Input::get('firstname');
        $students->lastname       = Input::get('lastname');
        $students->phone       = Input::get('phone');
        $students->occupation       = Input::get('occupation');
        $students->birthdate       = Input::get('birthdate');
        $students->street       = Input::get('street');
        $students->street_number       = Input::get('street_number');
        $students->plz       = Input::get('plz');
        $students->city       = Input::get('city');
        $students->country       = Input::get('country');
        $students->essay       = Input::get('essay');
        $students->user_id     = Input::get('user_id');
        $students->save();
// redirect
            Session::flash('message', 'Successfully updated student!');
            return Redirect::to('myaccount');
    }

         public function show($id)
    {
        
        $students = Students::find($id);
        return View::make('myaccount')
                ->with('students', $students);
    }

      public function edit($id)
    {
       
        $students = Students::find($id);
        return View::make('myaccount')
                ->with('students', $students);
    }

    public function update($id)
    {
       
        $students = Students::find($id);
        $students->firstname       = Input::get('firstname');
        $students->lastname       = Input::get('lastname');
        $students->phone       = Input::get('phone');
        $students->occupation       = Input::get('occupation');
        $students->birthdate       = Input::get('birthdate');
        $students->street       = Input::get('street');
        $students->street_number       = Input::get('street_number');
        $students->plz       = Input::get('plz');
        $students->city       = Input::get('city');
        $students->country       = Input::get('country');
        $students->essay       = Input::get('essay');
        $students->user_id     = Input::get('user_id');
        $students->save();
// redirect
            Session::flash('message', 'Successfully updated student!');
            return Redirect::to('checklist');
    }

     public function destroy($id)
    {
        // delete
     
        $students = DB::table('students')->where('id', $id)->value('user_id');
        $user = User::find($students);
        $user->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the nerd!');
        return Redirect::to('/');
    }
}


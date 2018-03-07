<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Students;
use Auth;
use DB;
use View;
use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\checklist;
use Illuminate\Foundation\Auth\User;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Students::with('checklist')->get();
        $checklist = checklist::all();
        return view('admin',compact('students','checklist')); 
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
            return Redirect::to('admin');
    }

         public function show($id)
    {
        $students = Students::find($id);
        return View::make('detail')
                ->with('students', $students);
    }

      public function edit($id)
    {
        $students = Students::find($id);
        return View::make('detail')
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
            return Redirect::to('admin');
    }

     public function destroy($id)
    {
        // delete
  $students = DB::table('students')->where('id', $id)->value('user_id');
  $user = User::find($students);
  $user->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the nerd!');
        return Redirect::to('admin');
    }
}

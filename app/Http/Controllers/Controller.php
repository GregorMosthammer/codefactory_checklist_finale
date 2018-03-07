<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\checklist;
use App\Students;
use View;
use Auth;
use DB;

class Controller extends BaseController
{


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    
    public function index(){
      $id = Auth::id();
      $students = DB::table('students')->where('user_id','=', $id)->pluck('id');
      $checklist = DB::table('checklist')->where('user_id','=', $id)->get();


      /*
      var_dump($checklist);
      exit();
*/
      return View::make('checklist', compact('students', 'checklist', 'id')); 
             

      }
  

     

    function insert (Request $req)
    {


      $this->validate(request(), [
        'firstname' => 'required',
        'lastname' => 'required',
        'phone' => 'required',
        'occupation' => 'required',
        'birthdate' => 'required',
        'street' => 'required',
        'street_number' => 'required',
        'plz' => 'required',
        'city' => 'required',
        'country' => 'required',
        'essay' => 'required'
    ]);



        $firstname = $req->input('firstname');
        $lastname = $req->input('lastname');
        $phone = $req->input('phone');
        $occupation = $req->input('occupation');
        $birthdate = $req->input('birthdate');
        $street = $req->input('street');
        $street_number = $req->input('street_number');
        $plz = $req->input('plz');
        $city = $req->input('city');
        $country = $req->input('country');
        $essay = $req->input('essay');
        $id = Auth::id();
        $data = array (
        'firstname' => $firstname,
        'lastname' => $lastname,
        'phone' => $phone,
        'occupation' => $occupation,
        'birthdate' => $birthdate,
        'street' => $street,
        'street_number' => $street_number,
        'plz' => $plz,
        'city' => $city,
        'country' => $country,
        'essay' => $essay,
        'user_id' => $id
    );
    DB::table('students')->insert($data);
    
    $id = Auth::id();
    $students = DB::table('students')->where('user_id','=', $id)->pluck('id');
    //DB::insert('insert into checklist (user_id) (student_id) values(?, ?),[$name,$students[0]]');
    DB::table('checklist')->insert(
        ['user_id' => $id, 'students_id' => $students[0]]
    );

        

        return Redirect::to('checklist');
    }

    function insert_passport(Request $request){
        $id = Auth::id();
        $students = DB::table('students')->where('user_id','=', $id)->pluck('id');
        $passport = \App\checklist::updateOrCreate([
       'user_id'   => Auth::user()->id,
        'students_id' => $students[0],],
       [
       'passport' => $request->get('passport'),
       ]);
       return Redirect::to('checklist');
      }





  
function insert_financing (Request $request){
     $id = Auth::id();
     $students = DB::table('students')->where('user_id','=', $id)->pluck('id');
     $checklist = \App\checklist::updateOrCreate([
    'user_id'   => Auth::user()->id,
    'students_id' => $students[0],],
    [
    'financing' => $request->get('financing'),
    ]);
    return Redirect::to('checklist');
   }

function insert_insurance (Request $request){
    $id = Auth::id();
    $students = DB::table('students')->where('user_id','=', $id)->pluck('id');
    $checklist = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,
   'students_id' => $students[0],],
   [
   'insurance' => $request->get('insurance'),
   ]);
   return Redirect::to('checklist');
  }

function insert_pass(Request $request){
    $id = Auth::id();
    $students = DB::table('students')->where('user_id','=', $id)->pluck('id');
    $pass = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,
   'students_id' => $students[0],],
   [
   'pass' => $request->get('pass'),
   ]);
   return Redirect::to('checklist');
  }

function insert_visaform(Request $request){
    $id = Auth::id();
    $students = DB::table('students')->where('user_id','=', $id)->pluck('id');
    $visaform = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,
   'students_id' => $students[0],],
   [
   'visaform' => $request->get('visaform'),
   ]);
   return Redirect::to('checklist');
  }

function insert_picture(Request $request){
    $id = Auth::id();
    $students = DB::table('students')->where('user_id','=', $id)->pluck('id');
    $picture = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,
   'students_id' => $students[0],],
   [
   'picture' => $request->get('picture'),
   ]);
   return Redirect::to('checklist');
  }

function insert_travelreservation(Request $request){
    $id = Auth::id();
    $students = DB::table('students')->where('user_id','=', $id)->pluck('id');
    $travelreservation = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,
   'students_id' => $students[0],],
   [
   'travelreservation' => $request->get('travelreservation'),
   ]);
   return Redirect::to('checklist');
  }

function insert_hotelreservation(Request $request){
    $id = Auth::id();
    $students = DB::table('students')->where('user_id','=', $id)->pluck('id');
    $hotelreservation = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,
   'students_id' => $students[0],],
   [
   'hotelreservation' => $request->get('hotelreservation'),
   ]);
   return Redirect::to('checklist');
  }
  
function insert_employment(Request $request){
    $id = Auth::id();
    $students = DB::table('students')->where('user_id','=', $id)->pluck('id');
    $employment = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,
   'students_id' => $students[0],],
   [
   'employment' => $request->get('employment'),
   ]);
   return Redirect::to('checklist');
  }

function insert_travelinsurance(Request $request){
    $id = Auth::id();
    $students = DB::table('students')->where('user_id','=', $id)->pluck('id');
    $travelinsurance = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,
   'students_id' => $students[0],],
   [
   'travelinsurance' => $request->get('travelinsurance'),
   ]);
   return Redirect::to('checklist');
  }

function insert_financial_means(Request $request){
    $id = Auth::id();
    $students = DB::table('students')->where('user_id','=', $id)->pluck('id');
    $financial_means = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,
   'students_id' => $students[0],],
   [
   'financial_means' => $request->get('financial_means'),
   ]);
   return Redirect::to('checklist');
  }

 function insert_passcopy(Request $request){
    $id = Auth::id();
    $students = DB::table('students')->where('user_id','=', $id)->pluck('id');
    $passcopy = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,
   'students_id' => $students[0],],
   [
   'passcopy' => $request->get('passcopy'),
   ]);
   return Redirect::to('checklist');
  }

function insert_consularfee(Request $request){
    $id = Auth::id();
    $students = DB::table('students')->where('user_id','=', $id)->pluck('id');
    $consularfee = \App\checklist::updateOrCreate([
   'user_id'   => Auth::user()->id,
   'students_id' => $students[0],],
   [
   'consularfee' => $request->get('consularfee'),
   ]);
   return Redirect::to('checklist');
  }

}

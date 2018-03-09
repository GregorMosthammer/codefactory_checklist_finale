@extends('layouts.app')
@section('content')
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>test</title>
        

       
    </head>
    <body>
    <div class="container">
{{--<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>

                <div class="panel-body">
                    @component('components.who')
                    @endcomponent
                </div>
            </div>
        </div>
    </div>--}}
    <form action="{{url('myaccount/' . $students->id )}}" method="post">


{{method_field('PUT')}}
{{csrf_field()}} 

<div class="row">
<div class="col-lg-6" class="form-group">

    <label>Firstname</label>
    <input type="text" class="form-control"  value="{{$students->firstname}}" name="firstname">
</div>

<div class="col-lg-6" class="form-group">
    <label>Lastname</label>
    <input type="text" class="form-control" value="{{$students->lastname}}" name="lastname">
</div>
</div>

<div class="row">
<div class="col-lg-6" class="form-group">
    <label>Phonenumber</label>
    <input type="text" class="form-control" value="{{$students->phone}}" name="phone">
</div>

<div class="col-lg-6" class="form-group">
    <label>Occupation</label>
    <input type="text" class="form-control" value="{{$students->occupation}}" name="occupation">
</div>
</div>

<div class="row">
<div class="col-lg-6" class="form-group">
    <label>Birthdate</label>
    <input type="date" class="form-control" value="{{$students->birthdate}}" name="birthdate">
</div>

<div class="col-lg-6" class="form-group">
    <label>Street</label>
    <input type="text" class="form-control" value="{{$students->street}}" name="street">
</div>
</div>

<div class="row">
<div class="col-lg-6" class="form-group">
    <label>Streetnumber</label>
    <input type="number" class="form-control" value="{{$students->street_number}}" name="street_number">
</div>

<div class="col-lg-6" class="form-group">
    <label>Postalcode</label>
    <input type="number" class="form-control" value="{{$students->plz}}" name="plz">
</div>
</div>

<div class="row">
<div class="col-lg-6" class="form-group">
    <label>City</label>
    <input type="text" class="form-control" value="{{$students->city}}" name="city">
</div>

<div class="col-lg-6" class="form-group">
    <label>Country</label>
    <input type="text" class="form-control" value="{{$students->country}}" name="country">
</div>
</div>

<div style="margin-top: 10px;" class="row">
<div class="col-lg-12" class="form-group">
<label>Essay</label>
<textarea class="form-control" name="essay" rows="5" cols="40" placeholder="please write a short essay">{{$students->essay}}</textarea>
<input type="hidden"  value="{{$students->user_id}}" name="user_id">
</div>
</div>

<div style="margin-top: 10px;" class="row">
<div class="col-md-5">
</div>

<form method="post" type="submit" name="submit" value="UPDATE">
            
            {{ csrf_field() }}
            <button class="btn draw-border">UPDATE</button>
</form> 



</div>
<div class="col-md-5">

</div>

</form> 
<form action="{{ url('myaccount/' . $students->id )}}" method="post">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button class="btn draw-border">DELETE</button>
</form> 


</div>




</body>
    @endsection
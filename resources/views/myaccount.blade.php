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
        <br>
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
<div class="col-lg-6 col-md-6 col-sm-6" class="form-group">

    <label>Firstname</label>
    <input type="text" class="form-control"  value="{{$students->firstname}}" name="firstname">
</div>

<div class="col-lg-6 col-md-6 col-sm-6" class="form-group">
    <label>Lastname</label>
    <input type="text" class="form-control" value="{{$students->lastname}}" name="lastname">
</div>
</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6" class="form-group">
    <label>Phonenumber</label>
    <input type="text" class="form-control" value="{{$students->phone}}" name="phone">
</div>

<div class="col-lg-6 col-md-6 col-sm-6" class="form-group">
    <label>Occupation</label>
    <input type="text" class="form-control" value="{{$students->occupation}}" name="occupation">
</div>
</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6" class="form-group">
    <label>Birthdate</label>
    <input type="date" class="form-control" value="{{$students->birthdate}}" name="birthdate">
</div>

<div class="col-lg-6 col-md-6 col-sm-6" class="form-group">
    <label>Street</label>
    <input type="text" class="form-control" value="{{$students->street}}" name="street">
</div>
</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6" class="form-group">
    <label>Streetnumber</label>
    <input type="number" class="form-control" value="{{$students->street_number}}" name="street_number">
</div>

<div class="col-lg-6 col-md-6 col-sm-6" class="form-group">
    <label>Postalcode</label>
    <input type="number" class="form-control" value="{{$students->plz}}" name="plz">
</div>
</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6" class="form-group">
    <label>City</label>
    <input type="text" class="form-control" value="{{$students->city}}" name="city">
</div>

<div class="col-lg-6 col-md-6 col-sm-6" class="form-group">
    <label>Country</label>
    <input type="text" class="form-control" value="{{$students->country}}" name="country">
</div>
</div>

<div style="margin-top: 10px;" class="row">
<div class="col-lg-12 col-md-12 col-sm-12" class="form-group">
<label>Essay</label>
<textarea class="form-control" name="essay" rows="5" cols="40" placeholder="please write a short essay">{{$students->essay}}</textarea>
<input type="hidden"  value="{{$students->user_id}}" name="user_id">
</div>
</div>

<div class="col-lg-5 col-md-4 col-sm-4">
</div>
<div class="col-lg-1 col-md-2 col-sm-2">
<div style="margin-top: 20px;" class="row">




<form method="post" type="submit" name="submit" value="UPDATE">
            
            {{ csrf_field() }}
            <button class="btn draw-border">UPDATE</button>
</form> 


</div>
</div>


</form> 
<div class="col-lg-6 col-md-6 col-sm-6">
<div style="margin-top: 20px; margin-bottom: 50px;" class="row">
<form action="{{ url('myaccount/' . $students->id )}}" method="post">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button onclick="return confirm('Are you sure you want to delete?')" class="btn draw-border">DELETE</button>
</form> 

</div>
</div>
</div>





<div class="row w3-contain w3-center">
    <div class="col-lg-offset-3 col-lg-6">
        <h2 style="font-family: Chivo !important">Contact Us Here:</h2>
        <br>
        <h4><a href="https://www.facebook.com/CodeFactoryVienna/"target="_blank">Facebook</a></h4>
        <h4><a href="mailto:office@codefactory.wien" >office@codefactory.wien</a></h4>
        <h4><a  href="tel:+43-699-12255185" target="_blank">+43 699 12255185</a></h4>
        
        
    
    <img src="/img\logo.png" alt="LOGO" width="120px" height="120px">
    </div>
</div>


</body>
    @endsection
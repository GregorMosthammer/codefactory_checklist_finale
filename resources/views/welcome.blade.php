@extends('layouts.app')
@section('content')
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Laravel</title>
        

       
    </head>
    <body>



<!-- container opened -->
<div class="container-fluid">
    <!-- for the red area -->
    <div class="row w3-container w3-center" style="padding:70px 16px">
    <div class="col-lg-6 col-lg-offset-3">

    <h1 class="welchead">What are you waiting for?</h1>
    <div class="w3-xlarge">
    
        <p>Average Full-Stack Developer Salary $88,488</p>
        <p>In-Demand Career</p>
        <p>Life Changing Experience</p>
        
    </div>
    <!-- the button that send u to register -->
    
        <a href="{{url('/register')}}" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">SIGN UP NOW!</a>
        <h3>Refer a friend and receive 10% off your cost up to $10,000</h3>

    </div>
    </div>
    <!-- end of the the red area -->

<br>

<!-- row for header text for package and perks --> 
<div class="row">
    <div class="col-lg-offset-3 col-lg-6">
        <h2 style="color: #831213; font-family: Chivo !important; text-align: center">Get a new career and the experience of a lifetime </h2>
    </div>
</div>



<!-- new row for the package and perks text -->
<div class="row">
    <!-- big col with offset -->
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
        
    <!-- col for packages -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h3 style="color: #831213; font-family: Chivo !important">The Package:</h3>
            <ul>
                <li>4 Months Full-Time Course in Vienna</li>
                <li>Housing and Flights</li>
                <li>HTML5, CSS3, JavaScript, JQuery, Bootstrap, Project Documentaion, TypeScript, AngularJS 4.0</li>
                <li>SQL(MySQL), SCRUM, PHP, AJAX, Symphony PHP framework, WorldPress, Software Testing AND Many other Skills</li>
                <li>Only $18.500</li>
            </ul>
        </div>

        <!-- col for perks -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h3 style="color: #831213; font-family: Chivo !important">Additional Perks:</h3>
            <ul>
                <li>Graduation in Salzburg, Austria</li>
                <li>Food and Insurance</li>
                <li>Finals Week on the beach</li>
                <li>Tours, Hackthons, enjoying Vienna's nightlife, and other fun group activities</li>
            </ul>
        </div>

    </div> <!-- end for the big col -->

    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
    </div>

</div><!-- end package and perks -->




<!-- new row for chris with the pics -->
<div class="row">
    <!-- the whole grey box only for chris -->
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 polaroid">
    <!-- col for chris pic with text inside after hover -->
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 con">
    
        <img src="/img\ceci.jpg" alt="ceci" width="100%" height="100%">
        <div class="overlay">
            <div class="text">-CECILIA TANZER</div>
        </div>
    </div> <!-- end for the pic div -->
    


<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 con">
    
        
        <img src="/img\stu.jpg" alt="stu" width="100%" height="100%">
        <div class="overlay">
            <div class="text">-THEODORA PATKOS</div>
        </div>
    </div>
</div><!-- end of the grey box for student -->
</div><!-- end of student row -->












<div class="row w3-contain w3-center">
    <div class="col-lg-offset-3 col-lg-6">
        <h2 style="font-family: Chivo !important">Contact Us Here:</h2>
        <br>
        <h4><a href="https://www.facebook.com/CodeFactoryVienna/">https://www.facebook.com/CodeFactoryVienna/</a></h4>
        <h4><a href="office@codefactory.wien" target="_top">office@codefactory.wien</a></h4>
        <h4><a  href="tel:+43-699-12255185">+43 699 12255185</a></h4>
        
        
    
    <img src="/img\logo.png" alt="LOGO" width="120px" height="120px">
    </div>
</div>





</div> <!-- end container-->

        
    </body>
    @endsection

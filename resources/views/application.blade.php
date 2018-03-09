<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->


        
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Apr 9, 2018 09:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="timer"
    document.getElementById("timer").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("timer").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

</head>
<body>


<nav class="navbar navbar-light bg-faded">
  <div class="row">
    <div class="col-lg-offset-1 col-lg-1 col-md-1 col-sm-4 col-xs-4">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/img\logo.png" alt="LOGO" width="100%" height="50px">
        </a>
    </div>


    <div class="col-lg-7 col-md-7 col-sm-4 col-xs-4">
        <p id="timer"></p>
    </div>
    <div class="col-lg-1 col-md-1 col-sm-4 col-xs-4">
        
    </div>
    
        <a href="https://www.facebook.com/CodeFactoryVienna/" class="fa fa-facebook" target="_blank"></a>
    
        <a href="https://twitter.com/CodeFactoryVIE" class="fa fa-twitter" target="_blank"></a>
    

  </div>
</nav>




    <div id="app">
    <nav id="navcolors">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" style="color: white" href="{{ url('/') }}">
                    CODEFACTORY
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->

                        @if (Auth::guard('admin')->check())
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            LOGOUT
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                        @endif
                        
                        @if (Auth::guest())
                        <li class="nav-item active"><a class="nav-link" href="{{ url('/login') }}">LOGIN</a></li>
                        <li class="nav-item active"><a class="nav-link" href="{{ url('/register') }}">REGISTER</a></li>
                    
                        @else
                            
                                

                                
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            USER LOGOUT
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li class="nav-item active"><a class="nav-link" href="{{ url('/checklist') }}">CHECKLIST</a></li>
                                    
                               
                            
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>


@if (count($errors))
<div class="form-group col-lg-12">
<h2>Please fill these fields up</h2>
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
</div>
@endif


<div class="container-fluid">
  <div class="row">
    <div id="Apply" class="col-md-12">  

<div class="col-md-2">
</div>
<div class="col-md-8">
<form action="/insert" method="post">
{{csrf_field()}}

<div class="row">
<div class="col-lg-6" class="form-group">
    <label>Firstname</label>
    <input type="text" class="form-control"  name="firstname">
</div>

<div class="col-lg-6" class="form-group">
    <label>Lastname</label>
    <input type="text" class="form-control"  name="lastname">
</div>
</div>

<div class="row">
<div class="col-lg-6" class="form-group">
    <label>Phonenumber</label>
    <input type="text" class="form-control"  name="phone">
</div>

<div class="col-lg-6" class="form-group">
    <label>Occupation</label>
    <input type="text" class="form-control"  name="occupation">
</div>
</div>

<div class="row">
<div class="col-lg-6" class="form-group">
    <label>Birthdate</label>
    <input type="date" class="form-control"  name="birthdate">
</div>

<div class="col-lg-6" class="form-group">
    <label>Street</label>
    <input type="text" class="form-control"  name="street">
</div>
</div>

<div class="row">
<div class="col-lg-6" class="form-group">
    <label>Streetnumber</label>
    <input type="number" class="form-control"  name="street_number">
</div>

<div class="col-lg-6" class="form-group">
    <label>Postelcode</label>
    <input type="number" class="form-control"  name="plz">
</div>
</div>

<div class="row">
<div class="col-lg-6" class="form-group">
    <label>City</label>
    <input type="text" class="form-control"  name="city">
</div>

<div class="col-lg-6" class="form-group">
    <label>Country</label>
    <input type="text" class="form-control"  name="country">
</div>
</div>

<div style="margin-top: 10px;" class="row">
<div class="col-lg-12" class="form-group">
 <label>Essay</label>
<textarea class="form-control" name="essay" rows="5" cols="40" placeholder="Please write a short description about where you are at in life and what do you hope to accomplish :)"></textarea>
</div>
</div>

<div style="margin-top: 10px;" class="row">





<form style="text-align:center; margin-bottom: 20px">
            
            {{ csrf_field() }}
            <button type="submit" name"submit" class="btn draw-border">SUBMIT</button>
            </form>




<div class="col-md-5 col-xs-1">
</div>

</div>
<div class="col-lg-2">
</div>
</div>
</body>
</html>
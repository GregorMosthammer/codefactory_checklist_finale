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
    
        <a href="https://www.facebook.com/CodeFactoryVienna/" class="fa fa-facebook"></a>
    
        <a href="https://twitter.com/CodeFactoryVIE" class="fa fa-twitter"></a>
    

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
                                    <li><a href="{{ URL::to('myaccount/' . $students[0]) }}">MY ACCOUNT</a></li>
                               
                            
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
                                    
                      

<div class="container-fluid">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">

    <div class="row">
    <div class="col-md-4">
    
    <img src="/img\passport.jpg" alt="passport" width="320px"  height="250px">

    </div>
    <div class="col-md-8">
    <h4 style="color:red"><u>passport</u></h4>
    
    <form action="/insert_passport" method="post" >{{csrf_field()}} 
    Do you have a passport? <br> 
    What you need for a passport <a href="https://www.usps.com/international/passports.htm" target="_blank">Link</a>
    Yes 
            <input type="checkbox"  name="passport"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->passport == '1' ? 'checked' : '' }} >
                          No
            <input type="checkbox"  name="passport"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->passport == '0' ? 'checked' : '' }} >
    </form> 
    </div>
    </div>
<hr>
    <div class="row">
    <div class="col-md-4">
  
    <img src="/img\financing_insurance.jpg" alt="financing and insurance" width="320px"  height="250px">

    </div>
    <div class="col-md-8">

  <h4 style="color:red">financing and insurance</h4>

<form action="/insert_financing" method="post"> {{csrf_field()}}
(You must have financing available or be approved for financing in order to obtain your VISA. 
We recommend getting approved, getting your VISA, and then taking the loan out.) <a id="financingFadeIn">read more</a> 
<br>
I already have 18,500$ 

                        Yes 
            <input type="checkbox"  name="financing"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->financing == '1' ? 'checked' : '' }} >
                        No
            <input type="checkbox"  name="financing"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->financing == '0' ? 'checked' : '' }} >
</form> 
<br>
<div id="one"></div>

<form action="/insert_insurance" method="post"> {{csrf_field()}}
Insurance form filled out?

                        Yes 
            <input type="checkbox"  name="insurance"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->insurance == '1' ? 'checked' : '' }} >
                        No
            <input type="checkbox"  name="insurance"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->insurance == '0' ? 'checked' : '' }} >
</form> 

</div>
</div>
  

<div style="margin-top:10px;" class="row">
<div class="col-lg-12">


<div id="financingFade" style="display: none;">
Since we are a coding bootcamp, traditional student financing is not an option. The best option is to obtain a ‘personal loan.’ We also recommend stating the purpose of the loan as “Travel.”  
    We recommend applying to your local bank first.
   Another good place to start is www.lendingtree.com Lending Tree also offers a free credit rating. <br>
   This websides hat may help you <ul>
   <li> <a href="https://personalloans.com">personalloans.com</a></li>
 <li> <a href="https://www.lendingclub.com/loans/personal-loans">lendingclub.com</a></li>
 <li>  <a href="https://apply.santanderbank.com/personal/forms/ploan.aspx">santanderbank.com</a></li>
 <li> <a href="https://www.marcus.com/us/en">marcus.com</a></li>
    <ul>
   <a id="financingFadeUp"><center>close Info</center></a>

</div>

</div>
</div>


<hr>
<div class="row">
    <div class="col-md-4">
    
    <img src="/img\visa.jpg" alt="visa" width="320px"  height="340px">

    </div>
    <div class="col-md-8">
    <h4 style="color:red">visa generell inoformation</h4>
 
    This course is 4 months long and will require a D VISA. The application process can take up to 15 days. We recommend applying 2 months before the course start date.
   
    
    You can view a complete form and learn more about the process here: <a href="http://www.austria.org/visa-application/">austria.org/visa-application</a>

    Please note that Coding Bootcamps are not recognized by the USA or Austria as accredited schools. You must apply for the D VISA as a tourist and state you are attending a bootcamp.
    
    <br>
 You will need the following:
 <ul>
      <li>Proof of financing. Once approved by a bank you will need the letter of approval. We recommend not taking the loan out until after you have received your VISA.</li>
      <li>The Consular Fee:<a href="http://www.austria.org/consular-fees"> consular-fees</a></li>
      <li>ALL visa applicants must appear in person at the Austrian Embassy/Consulate. The Austrian Embassy and Consulates General do not accept visa applications by mail.</li>
      <li>If you wish to have your documents returned by U.S. mail, please enclose a self-addressed, stamped envelope (including the Certified Mail Receipt) with your application. The Austrian Embassy or Consulate General is not responsible for documents after they are mailed.</li>
      </ul>
    </div>
    </div>
<hr>
<div class="row">
    <div class="col-md-4">
    
    <img src="/img\visa2.jpg" alt="visa" width="320px"  height="340px">

    </div>
    <div class="col-md-8">

<i> <b> You will need to check the follwing list to be able to enroll:</b></i>

  <form action="/insert_pass" method="post">{{csrf_field()}} 
  Valid and signed passport or travel document (passport/travel document must be valid for at least three months after the date of departure from Austria or the Schengen zone. Further, the first issue date of your passport must not be more than 10 years ago, and it must provide at least two empty pages. In the case of minors, a notarized signature of parent or guardian is required.)
Yes 
<input type="checkbox"  name="pass"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->pass == '1' ? 'checked' : '' }} >
                          No
<input type="checkbox"  name="pass"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->pass == '0' ? 'checked' : '' }} >
</form> 
<br>

<form action="/insert_visaform" method="post">{{csrf_field()}} 

    <a href="https://static1.squarespace.com/static/54b9309be4b06e38ad5da1ca/t/55e75a54e4b0c94c8afbdc59/1441225300774/Formular_D_Antrag.pdf">D VISA Form</a>
Yes 
<input type="checkbox"  name="visaform"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->visaform == '1' ? 'checked' : '' }} >
                          No
<input type="checkbox"  name="visaform"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->visaform == '0' ? 'checked' : '' }} >
</form> 

<br>
 <form action="/insert_picture" method="post">{{csrf_field()}}
 One (1) recent passport picture, which strictly has to meet the following criteria: max. head size 1.4 inch (36 mm), min. eye distance 0.3 inch (8mm), american picture format accepted.
        Yes 
<input type="checkbox"  name="picture"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->picture == '1' ? 'checked' : '' }} >
                          No
<input type="checkbox"  name="picture"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->picture == '0' ? 'checked' : '' }} >
</form> 
<br>

<form action="/insert_travelreservation" method="post">{{csrf_field()}}

        Travel itinerary/ airline reservation (showing dates of travel) for entire journey. (These do not need to be booked. We will provide you with an itinerary.)
        Yes 
<input type="checkbox"  name="travelreservation"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->travelreservation == '1' ? 'checked' : '' }} >
                          No
<input type="checkbox"  name="travelreservation"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->travelreservation == '0' ? 'checked' : '' }} >
</form> 
<br>

<form action="/insert_hotelreservation" method="post">{{csrf_field()}}

Hotel reservation. (We will include this in our itinerary.)
Yes 
<input type="checkbox"  name="hotelreservation"  value="1"  onchange="this.form.submit()"
                  {{ $checklist[0]->hotelreservation == '1' ? 'checked' : '' }} >
                  No
<input type="checkbox"  name="hotelreservation"  value="0"  onchange="this.form.submit()"
                 {{ $checklist[0]->hotelreservation == '0' ? 'checked' : '' }} >
</form> 




<br>
<form action="/insert_employment" method="post">{{csrf_field()}}

        Letter of employment in the U.S.
        Yes 
<input type="checkbox"  name="employment"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->employment == '1' ? 'checked' : '' }} >
                          No
<input type="checkbox"  name="employment"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->employment == '0' ? 'checked' : '' }} >
</form> 

<br>
<form action="/insert_travelinsurance" method="post">{{csrf_field()}}

        Proof of travel insurance or health/accident insurance providing coverage in the Schengen countries: stating name of insurance company, type of coverage (sickness, accident, medical evacuation, repatriation of human remains), amount of coverage (minimum USD 50,000) and option of direct payment (insurance company must have a service provider in the Schengen area or an arrangement with a service provider in the Schengen area; no deductible, no reimbursement policy accepted) (We will provide this with the itinerary.)
        Yes 
<input type="checkbox"  name="travelinsurance"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->travelinsurance == '1' ? 'checked' : '' }} >
                          No
<input type="checkbox"  name="travelinsurance"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->travelinsurance == '0' ? 'checked' : '' }} >
</form> 

<br>
<form action="/insert_financial_means" method="post">{{csrf_field()}}

        Proof of financial means (e.g. scholarship, letter of grants, bank statement of last two months, other proof of income). Include the letter of approval from the bank.
        Yes 
<input type="checkbox"  name="financial_means"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->financial_means == '1' ? 'checked' : '' }} >
                          No
<input type="checkbox"  name="financial_means"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->financial_means == '0' ? 'checked' : '' }} >
</form> 
<br>


<form action="/insert_passcopy" method="post">{{csrf_field()}}

        Copy of the passport and copy of the "Green Card" or US visa
        Yes 
<input type="checkbox"  name="passcopy"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->passcopy == '1' ? 'checked' : '' }} >
                          No
<input type="checkbox"  name="passcopy"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->passcopy == '0' ? 'checked' : '' }} >
</form> 
<br>

<form action="/insert_consularfee" method="post">{{csrf_field()}}

        Consular fees: payment must be made in US$ per postal money order, cashier's check (payable to Embassy of Austria) or cash (exact change only please).
        Yes 
<input type="checkbox"  name="consularfee"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->consularfee == '1' ? 'checked' : '' }} >
                          No
<input type="checkbox"  name="consularfee"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->consularfee == '0' ? 'checked' : '' }} >
</form> 
<br>
 Please see this page for more information <a href="http://www.austria.org/visa-application/">www.austria.org/visa-application</a>
    <br><center style="margin-top:20px;"><a href="{{route('sendEmail')}}" class="btn-lg btn-default">Enroll</a><center>
    </div>
    </div>













    <div class="col-md-1">
    </div>
  </div>
</div>


</body>

    <script>
 // for the checkbox just to be clickable once
$("input:checkbox").on('click', function() {
  var $box = $(this);
  if ($box.is(":checked")) {
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});

$(document).ready(function(){
    $("#financingFadeIn").click(function(){
        $("#financingFade").slideDown("slow");
    });
});

$(document).ready(function(){
    $("#financingFadeUp").click(function(){
        $("#financingFade").slideUp("slow");
    });
});

$(document).ready(function(){
    $("#visaFadeIn").click(function(){
        $("#visaFade").slideDown("slow");
    });
});

$(document).ready(function(){
    $("#visaFadeUp").click(function(){
        $("#visaFade").slideUp("slow");
    });
});



    </script>

</html>

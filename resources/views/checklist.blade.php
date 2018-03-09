<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>Laravel</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/app.css">
       <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
    

   
   
    </head>
    <body>
<nav class="navbar navbar-light bg-faded">
  <div class="row">
  <div class="col-lg-offset-1 col-lg-1 col-md-1 col-sm-4 col-xs-4">
  <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/img\logo.jpg" alt="LOGO" width="100%" height="50px">
</a>
  </div>
  </div>
</nav>
    <div id="app">
    <nav class="navbar navbar-inverse bg-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">

                    CodeFactory

                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                        <li class="col-lg-4"><a href="{{ url('/login') }}">Login</a></li>
                        <li class="col-lg-4"><a href="{{ url('/register') }}">Register</a></li>
                    
                        @else
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li><a href="{{ url('/checklist') }}">checklist</a></li>
                                    <li><a href="{{ URL::to('myaccount/' . $students[0]) }}">myaccount</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">

    <div class="row">
    <div class="col-md-4">
    
    <img src="/img\passport.jpg" alt="passport" width="320px"  height="250px">
    <img id="checkimg" src="/img\passport.jpg" alt="passport" width="100%"  height="100%">

    </div>
    <div class="col-md-8">
    <h4 style="color:red"><u>passport</u></h4>
    
    <form action="/insert_passport" method="post" >{{csrf_field()}} 
    -Do you have a passport? <br> 
    What you need for a passport 
    
    <a style="color:#831213;" href="https://www.usps.com/international/passports.htm" target="_blank">Link</a>
    <br>
    <label class="containe">
    Yes 
            <input type="checkbox"  name="passport"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->passport == '1' ? 'checked' : '' }} >
                          <span class="checkmark"></span>
                          </label>
                          
    <label class="containe">
                          No
            <input type="checkbox"  name="passport"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->passport == '0' ? 'checked' : '' }} >
                         <span class="checkmark"></span>
                          </label>
    </form> 
    </div>
    </div>
<hr>
    <div class="row">
    <div class="col-md-4">
  
    <img src="/img\financing_insurance.jpg" alt="financing and insurance" width="320px"  height="250px">
    <img id="checkimg" src="/img\financing_insurance.jpg" alt="financing and insurance" width="100%"  height="310px">

    </div>
    <div class="col-md-8" id="fina">

  <h4 style="color:red">financing and insurance</h4>

<form action="/insert_financing#fina" method="post"> {{csrf_field()}}
(You must have financing available or be approved for financing in order to obtain your VISA. 
We recommend getting approved, getting your VISA, and then taking the loan out.) <a  style="color:#831213;" id="financingFadeIn">read more</a> 
<br>
<br>
-I already have 18,500$ 
<br>
<label class="containe">
                        Yes 
            <input type="checkbox"  name="financing"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->financing == '1' ? 'checked' : '' }} >
                          <span class="checkmark"></span>
                          </label>
<label class="containe">
                        No
            <input type="checkbox"  name="financing"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->financing == '0' ? 'checked' : '' }} >
                         <span class="checkmark"></span>
                          </label>
</form> 
<br>
<div id="one"></div>

<form action="/insert_insurance#fina" method="post"> {{csrf_field()}}
-Insurance form filled out?
<br>
<label class="containe">
                        Yes 
            <input type="checkbox"  name="insurance"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->insurance == '1' ? 'checked' : '' }} >
                          <span class="checkmark"></span>
                          </label>
<label class="containe">                        No
            <input type="checkbox"  name="insurance"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->insurance == '0' ? 'checked' : '' }} >
                         <span class="checkmark"></span>
                          </label>
</form> 

</div>

  

<div style="margin-top:10px;" class="row">
<div class="col-lg-12">


<div id="financingFade" style="display: none;">
    <br>
Since we are a coding bootcamp, traditional student financing is not an option. The best option is to obtain a ‘personal loan.’ We also recommend stating the purpose of the loan as “Travel.”  
    We recommend applying to your local bank first.
   Another good place to start is www.lendingtree.com Lending Tree also offers a free credit rating. <br>
   This websides hat may help you <ul>
   <li> <a style="color:#831213;" href="https://personalloans.com">personalloans.com</a></li>
 <li> <a style="color:#831213;" href="https://www.lendingclub.com/loans/personal-loans">lendingclub.com</a></li>
 <li>  <a style="color:#831213;" href="https://apply.santanderbank.com/personal/forms/ploan.aspx">santanderbank.com</a></li>
 <li> <a style="color:#831213;" href="https://www.marcus.com/us/en">marcus.com</a></li>
    <ul>
   <a style="color:#831213;" id="financingFadeUp"><center>close Info</center></a>

</div>

</div>
</div>
</div>

<hr>
<div class="row">
    <div class="col-md-4">
    
    <img src="/img\visa.jpg" alt="visa" width="320px"  height="340px">
    <img id="checkimg" src="/img\visa2.jpg" alt="visa" width="100%"  height="380px">

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
      <li>The Consular Fee:<a style="color:#831213;" href="http://www.austria.org/consular-fees"> consular-fees</a></li>
      <li>ALL visa applicants must appear in person at the Austrian Embassy/Consulate. The Austrian Embassy and Consulates General do not accept visa applications by mail.</li>
      <li>If you wish to have your documents returned by U.S. mail, please enclose a self-addressed, stamped envelope (including the Certified Mail Receipt) with your application. The Austrian Embassy or Consulate General is not responsible for documents after they are mailed.</li>
      </ul>
    </div>
    </div>
<hr>
<div class="row">
    <div class="col-md-4">
    
    <img src="/img\visa2.jpg" alt="visa" width="320px"  height="340px">
    <img id="checkimg" src="/img\visa.jpg" alt="visa" width="100%"  height="100%">

    </div>
    <div class="col-md-8" id="visa">
    <h3 style="color: #831213; font-family: Chivo !important;">You will need to check the follwing list to be able to enroll:</h3>
    <div class="col-md-8">

<i> <b> You will need to check the follwing list to be able to enroll:</b></i>

  <form action="/insert_pass#visa" method="post">{{csrf_field()}} 
  -Valid and signed passport or travel document (passport/travel document must be valid for at least three months after the date of departure from Austria or the Schengen zone. Further, the first issue date of your passport must not be more than 10 years ago, and it must provide at least two empty pages. In the case of minors, a notarized signature of parent or guardian is required.)
  <br>
  <label class="containe"> Yes 
<input type="checkbox"  name="pass"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->pass == '1' ? 'checked' : '' }} >
                          <span class="checkmark"></span>
                          </label>
                          <label class="containe">  No
<input type="checkbox"  name="pass"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->pass == '0' ? 'checked' : '' }} >
                         <span class="checkmark"></span>
                          </label>
</form> 




<br>
</div>
    <div class="col-md-6">
<form action="/insert_travelinsurance#visa" method="post">{{csrf_field()}}

        -Proof of travel insurance or health/accident insurance providing coverage in the Schengen countries: stating name of insurance company, type of coverage (sickness, accident, medical evacuation, repatriation of human remains), amount of coverage (minimum USD 50,000) and option of direct payment (insurance company must have a service provider in the Schengen area or an arrangement with a service provider in the Schengen area; no deductible, no reimbursement policy accepted) (We will provide this with the itinerary.)
        <br>
        <label class="containe">Yes 
<input type="checkbox"  name="travelinsurance"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->travelinsurance == '1' ? 'checked' : '' }} >
                          <span class="checkmark"></span>
                          </label>
                          <label class="containe"> No
<input type="checkbox"  name="travelinsurance"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->travelinsurance == '0' ? 'checked' : '' }} >
                         <span class="checkmark"></span>
                          </label>
</form>
<br>

<form action="/insert_visaform#visa" method="post">{{csrf_field()}} 

    <a style="color:#831213;" href="https://static1.squarespace.com/static/54b9309be4b06e38ad5da1ca/t/55e75a54e4b0c94c8afbdc59/1441225300774/Formular_D_Antrag.pdf">-D VISA Form</a>
    <br>
    <label class="containe"> Yes 
<input type="checkbox"  name="visaform"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->visaform == '1' ? 'checked' : '' }} >
                          <span class="checkmark"></span>
                          </label>
                          <label class="containe">  No
<input type="checkbox"  name="visaform"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->visaform == '0' ? 'checked' : '' }} ><span class="checkmark"></span>
                          </label>
</form> 

<br>
 <form action="/insert_picture#visa1" method="post">{{csrf_field()}}
 -One (1) recent passport picture, which strictly has to meet the following criteria: max. head size 1.4 inch (36 mm), min. eye distance 0.3 inch (8mm), american picture format accepted.
 <br>
 <label class="containe"> Yes 
<input type="checkbox"  name="picture"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->picture == '1' ? 'checked' : '' }} >
                          <span class="checkmark"></span>
                          </label>
                          <label class="containe"> No
<input type="checkbox"  name="picture"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->picture == '0' ? 'checked' : '' }} >
                         <span class="checkmark"></span>
                          </label>
</form> 
<br>

<form action="/insert_travelreservation#visa1" method="post">{{csrf_field()}}

        -Travel itinerary/ airline reservation (showing dates of travel) for entire journey. (These do not need to be booked. We will provide you with an itinerary.)
        <br>
        <label class="containe">Yes 
<input type="checkbox"  name="travelreservation"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->travelreservation == '1' ? 'checked' : '' }} >
                          <span class="checkmark"></span>
                          </label>
                          <label class="containe">No
<input type="checkbox"  name="travelreservation"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->travelreservation == '0' ? 'checked' : '' }} >
                         <span class="checkmark"></span>
                          </label>
</form> 
<br>
</div>
    <div class="col-md-6">

<form action="/insert_hotelreservation#visa" method="post">{{csrf_field()}}

-Hotel reservation. (We will include this in our itinerary.)
<br>
<label class="containe">Yes 
<input type="checkbox"  name="hotelreservation"  value="1"  onchange="this.form.submit()"
                  {{ $checklist[0]->hotelreservation == '1' ? 'checked' : '' }} >
                  <span class="checkmark"></span>
                          </label>
                  <label class="containe">No
<input type="checkbox"  name="hotelreservation"  value="0"  onchange="this.form.submit()"
                 {{ $checklist[0]->hotelreservation == '0' ? 'checked' : '' }} >
                 <span class="checkmark"></span>
                          </label>
</form> 




<br>
<form action="/insert_employment#visa" method="post">{{csrf_field()}}

        -Letter of employment in the U.S.
        <br>
        <label class="containe">Yes 
<input type="checkbox"  name="employment"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->employment == '1' ? 'checked' : '' }} >
                          <span class="checkmark"></span>
                          </label>
                          <label class="containe"> No
<input type="checkbox"  name="employment"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->employment == '0' ? 'checked' : '' }} >
                         <span class="checkmark"></span>
                          </label>
</form> 







<div id="visa1">
<br>
<form action="/insert_financial_means#visa1" method="post">{{csrf_field()}}

        -Proof of financial means (e.g. scholarship, letter of grants, bank statement of last two months, other proof of income). Include the letter of approval from the bank.
        <br>
        <label class="containe">Yes 
<input type="checkbox"  name="financial_means"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->financial_means == '1' ? 'checked' : '' }} >
                          <span class="checkmark"></span>
                          </label>
                          <label class="containe"> No
<input type="checkbox"  name="financial_means"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->financial_means == '0' ? 'checked' : '' }} >
                         <span class="checkmark"></span>
                          </label>
</form> 
<br>


<form action="/insert_passcopy#visa1" method="post">{{csrf_field()}}

        -Copy of the passport and copy of the "Green Card" or US visa
        <br>
        <label class="containe">Yes 
<input type="checkbox"  name="passcopy"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->passcopy == '1' ? 'checked' : '' }} >
                          <span class="checkmark"></span>
                          </label>
                          <label class="containe"> No
<input type="checkbox"  name="passcopy"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->passcopy == '0' ? 'checked' : '' }} >
                         <span class="checkmark"></span>
                          </label>
</form> 
<br>

<form action="/insert_consularfee#visa1" method="post">{{csrf_field()}}

        -Consular fees: payment must be made in US$ per postal money order, cashier's check (payable to Embassy of Austria) or cash (exact change only please).
        <br>
        <label class="containe">Yes 
<input type="checkbox"  name="consularfee"  value="1"  onchange="this.form.submit()"
                          {{ $checklist[0]->consularfee == '1' ? 'checked' : '' }} >
                          <span class="checkmark"></span>
                          </label>
                          <label class="containe"> No
<input type="checkbox"  name="consularfee"  value="0"  onchange="this.form.submit()"
                         {{ $checklist[0]->consularfee == '0' ? 'checked' : '' }} >
                         <span class="checkmark"></span>
                          </label>
</form> 
<br>
 -Please see this page for more information <a style="color:#831213;" href="http://www.austria.org/visa-application/">www.austria.org/visa-application</a>
 
    </div>
    </div>
    </div>
    <form style="text-align:center; margin-bottom: 20px" action="{{route('sendEmail')}}">
            
            {{ csrf_field() }}
            <button class="btn draw-border">ENROLL</button>
            </form>
    






 Please see this page for more information <a href="http://www.austria.org/visa-application/">www.austria.org/visa-application</a>
    <br><center style="margin-top:20px;"><a href="{{route('sendEmail')}}" class="btn-lg btn-default">Enroll</a><center>
    </div>
    </div>





    <div class="col-md-1">
    </div>
  </div>
</div>
</div>

@if (alert()->ready())
    <script>
        swal({
            title: "{!! alert()->message() !!}",
            type: "{!! alert()->type() !!}",
        });
    </script>
@endif



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

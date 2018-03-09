

@extends('layouts.app')

@section('content')



    <div class="jumbotron text-center container-fluid">

        <div class="row" style="margin-bottom:5px">
            <a href="{{ url('/admin') }}" class="glyphicon btn btn-default"><b>&#xe091; Back to admin dashboard</b></a>
        </div>
       
        <div class="row">
        <b><h3 style="color:blue;">1 is for yes, 0 for no ;)</h3></b>
            <p> 
            <strong>Passport:</strong>{{ $checklist->passport }}<br>
            <strong>Financing:</strong>{{ $checklist->financing }}<br>
            <strong>Insurance:</strong>{{ $checklist->insurance }}<br>
            <strong>Visaform:</strong> {{ $checklist->visaform }}<br>
            <strong>Picture:</strong>{{ $checklist->picture }}<br>
            <strong>Travelreservation:</strong> {{ $checklist->travelreservation }}<br>
            <strong>Hotelreservation:</strong>{{ $checklist->hotelreservation }}<br>
            <strong>Employment:</strong>{{ $checklist->employment }}<br>
            <strong>Travelinsurance:</strong> {{ $checklist->travelinsurance }}<br>
            <strong>Financial means:</strong> {{ $checklist->financial_means }}<br>
            <strong>Passport copy:</strong> {{ $checklist->passcopy }}<br>
            <strong>Consularfee:</strong> {{ $checklist->consularfee }}
          
             <input type="hidden"  value="{{$checklist->user_id}}" name="user_id">
          </p>
        </div>
</div>


<script>

    window.onload =function myFunction(){
    x = document.getElementsByClassName("change");
    for( var i=0; i < x.length; i++){
    if ( x = '0'){
        x[i].innerText="not checked";
    }else{
        x[i].innerText="checked"; 
    }}
}


</script>

@endsection
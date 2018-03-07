

@extends('layouts.app')

@section('content')



    <div class="jumbotron text-center">
       
        <p>
            <strong>passport:</strong> {{ $checklist->passport }}<br>
            <strong>financing:</strong> {{ $checklist->financing }}<br>
            <strong>insurance:</strong> {{ $checklist->insurance }}<br>
            <strong>visaform:</strong> {{ $checklist->visaform }}<br>
            <strong>picture:</strong> {{ $checklist->picture }}<br>
            <strong>travelreservation:</strong> {{ $checklist->travelreservation }}<br>
            <strong>hotelreservation:</strong> {{ $checklist->hotelreservation }}<br>
            <strong>employment:</strong> {{ $checklist->employment }}<br>
            <strong>travelinsurance:</strong> {{ $checklist->travelinsurance }}<br>
            <strong>financial_means:</strong> {{ $checklist->financial_means }}<br>
            <strong>passcopy:</strong> {{ $checklist->passcopy }}<br>
            <strong>passconsularfeecopy:</strong> {{ $checklist->consularfee }}<br>
        </p>
        <input type="hidden"  value="{{$checklist->user_id}}" name="user_id">
    </div>


@endsection
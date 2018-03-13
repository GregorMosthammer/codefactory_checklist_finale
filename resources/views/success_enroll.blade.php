@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-1"></div>
            <div class="col-md-10">
            <br>
            <div class="row polaroid">
            
                <center><h4>Thank you for enrolling successfully the Codefactory Team will contact you in some days.
                <br>
                If you have questions or need more information feel free to contact us. </h4>
               <br>
               <h4>Contact Us Here:</h4>
 
        <h4><a href="https://www.facebook.com/CodeFactoryVienna/" target="_blank">Facebook</a></h4>
        <h4><a href="mailto:office@codefactory.wien">office@codefactory.wien</a></h4>
        <h4><a  href="tel:+43-699-12255185" target="_blank">+43 699 12255185</a></h4>

    <img src="/img\logo.png" alt="LOGO" width="120px" height="120px">
    </div></center>
            </div>



</div>
            
              </div>
    <div class="col-md-1"></div>
            
        
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


@endsection

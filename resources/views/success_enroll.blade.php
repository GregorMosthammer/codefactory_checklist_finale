@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
            <br>
            <div class="row polaroid">
            
                <center><h4>Thank you for enrolling at the Codefactory! Our team will contact you via phone shortly to confirm all necessary details.
                <br>
                If you have questions or need more information feel free to contact us. </h4>
               <br>
               <h3>Contact Us Here:</h3>
               
 
        <h4><a style="color:#831213;" href="https://www.facebook.com/CodeFactoryVienna/" target="_blank">Facebook</a></h4>
        <h4><a style="color:#831213;" href="mailto:office@codefactory.wien">office@codefactory.wien</a></h4>
        <h4><a style="color:#831213;"  href="tel:+43-699-12255185" target="_blank">+43 699 12255185</a></h4>

    <img src="/img\logo.png" alt="LOGO" width="120px" height="120px">
    </div></center>
            </div>



</div>
            
              </div>
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
            
        
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

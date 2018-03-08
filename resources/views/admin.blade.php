<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>Laravel</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/app.css">
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

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                    CodeFactory
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
                                  

                              
                        @endif
                    </ul>
                </div>
            </div>
        </nav>







@if (Auth::guard('admin')->check())
<div class="container">
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>

                <div class="panel-body">
                    @component('components.who')
                    @endcomponent
                </div>
            </div>
        </div>
    </div>

  <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Phone number</th>
        <th>Checklist status</th>
        <th> </th>
       
            </tr>
        </thead>

        <tbody>
        @foreach($students as $student)
        @foreach ($student->checklist as $checklist)
      <tr>
        <td><a href="{{ URL::to('detail/' . $student->id . '/edit') }}" >{{$student->firstname}}</a></td>
        <td>{{$student->lastname}}</td>
        <td>{{$student->phone}}</td>
        <td><a href="{{ URL::to('detailchecklist/' . $checklist->id ) }}">details...</a></td>
        <td><form action="{{ url('detail/' . $student->id )}}" method="post">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button>DELETE</button>
            </form>  
        </td>  

         
      </tr> 
      @endforeach
       @endforeach

   
   

</div>
@else
 <script>window.location = "/admin/login";
 


 </script>

@endif
<script>
$(document).ready(function() {
    $('#example').DataTable({
        "pageLength": 20,
        "order": [[ 1, "desc" ]]
    });
    $('#example_length select').prepend("<option value=\"5\" selected>5</option>"); 
} );

</script>
</body>
</html>
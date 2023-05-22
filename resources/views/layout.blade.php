<!DOCTYPE html>
<html>
     <head>
         <title>ITAM | @yield('title')</title>
         <link rel="icon" href="{!! asset('img/favicon.ico') !!}"/>

         <meta charset="utf-8">  
         <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
         <meta name="csrf-token" content="{{ csrf_token() }}">
            
         <link rel="bookmark" href="favicon_16.ico"/>
         <link rel="stylesheet" href="{{ URL::asset('css/css.css') }}"/>
         <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
         <link rel="stylesheet" href="{{ URL::asset('css/dataTable.bootstrap.min.css') }}"/> 
           
         <script src="{{ URL::asset('script/jquery.min.js') }}"></script>
         <script src="{{ URL::asset('script/bootstrap.min.js') }}"></script>
         <script src="{{ URL::asset('script/site.min.js') }}"></script>
            
         <script src="{{ URL::asset('script/3214c44a32.js') }}" crossorigin="anonymous"></script>
     </head>

     <body>
         <div class="div-main">
             <img src="{{ asset('img/banner.png') }}" alt="banner" class="banner" style="width:100%">
             <div class="navbar1">
                 <a href="{{route('dashboard')}}"> Overview </a>
                 <div class="dropdown1">
                     <a class="dropbtn1"> Device <i class="fa fa-caret-down"></i> </a>
                     <div class="dropdown-content1">
                         <a href="{{route('workstation')}}">Workstation</a>
                         <a href="{{route('server')}}">Server</a>
                         <a href="{{route('network')}}">Network</a>
                         <a href="{{route('printing')}}">Printing</a>
                         <a href=" ">Visual</a>
                         
                         <a href=" ">New Device</a>
                     </div>
                 </div>
                 <div class="dropdown1">
                     <a class="dropbtn1"> Software <i class="fa fa-caret-down"></i> </a>
                     <div class="dropdown-content1">
                         <a href="">Application</a>
                         <a href="">System</a>
                         <a href="">New Software</a>
                     </div>
                 </div>
                 <div class="dropdown1">
                     <a class="dropbtn1"> Data <i class="fa fa-caret-down"></i> </a>
                     <div class="dropdown-content1">
                         <a href="">Structured Data</a>
                         <a href="">Unstructured Data</a>
                         <a href="">New Data</a>
                     </div>
                 </div>
                 <div class="dropdown1">
                     <a class="dropbtn1"> Accessories <i class="fa fa-caret-down"></i> </a>
                     <div class="dropdown-content1">
                         <a href="">Item List</a>
                         <a href="">New Item</a>
                     </div>
                 </div>
                 <div class="dropdown1">
                     <a class="dropbtn1"> Employee <i class="fa fa-caret-down"></i> </a>
                     <div class="dropdown-content1">
                         <a href="">Employee List</a>
                         <a href="">New Employee</a>
                     </div>
                 </div>
                 
                 <a href="">Report</a>
                 <div class="dropdown1">
                     <a class="dropbtn1"> Admin Console <i class="fa fa-caret-down"></i> </a>
                     <div class="dropdown-content1">
                         <a href="">User</a>
                         <a href="">Setting</a>  
                     </div>
                 </div>
                 <div class="navbar-right1">
                     <div class="dropdown1">
                         <a class="dropbtn1"><i class="fa fa-user-circle"></i> : Test, Version <i class="fa fa-caret-down"></i></a>
                         <div class="dropdown-content1">
                             <a href="#">Password</a>
                             <a href="{{route('logout')}}">Logout</a>
                         </div>
                     </div> 
                 </div>
             </div>
             <hr>
             @yield('content')
		 </div>
     </body>
</html>
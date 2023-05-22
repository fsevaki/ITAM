<!DOCTYPE html>
<html>
     <head>
         <meta charset="utf-8">
         <title> IT Asset Management </title>
         <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
         <meta name="csrf-token" content="{{ csrf_token() }}">
         <link rel="icon" href="{!! asset('img/favicon.ico') !!}"/>
         
         <link rel="shortcut icon" href="favicon_16.ico"/>
         <link rel="bookmark" href="favicon_16.ico"/>
	     <link rel="stylesheet" href="css/css.css"/>
	     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
         
         <script src="script/jquery.min.js"></script>
         <script src="script/bootstrap.min.js"></script>
         <script src="script/site.min.js"></script>
		 
		 <script src="script/3214c44a32.js" crossorigin="anonymous"></script> 
     </head>
  
     <body style=" background: linear-gradient(to right, #3366cc 0%, #00ffff 100%);">
        
	     <div style="text-align:center;">
             <form action="{{route('postlogin')}}" method="POST">
             @csrf
                 <div class="imgcontainer"><br>
                     <img src="img/NRBT.png" alt="Avatar" class="avatar">
					 <div>
					     <label class="banner"> IT Asset Management </label>
					 </div>
                 </div> 
                 @if (session('success'))
                     <h5 class="alert alert-danger"> {{ session('success')}} </h5>
                 @endif
                 <div id="container">
                     <input class="logininput" type="text" placeholder="Email" name="email" id="email_address">
                     
                     <input class="logininput" type="password" placeholder="Password" name="password" id="password">
                     
                     <button class="btnlogin" type="submit"><i class="glyphicon glyphicon-log-in"></i> LOGIN </button>
		         </div>
				 <br>
				 <p>Copyright 2023 © National Reserve Bank of Tonga<p>
             </form>
		 </div>
     </body>
</html>
@extends('layout')
@section('title','Server List')
@section('content')
 <div class="panel panel-default">
     <div class="panel-heading" id="panel-heading" > Server List </div>
     <div class="panel-body">
         <script src="script/jquery-3.5.1.js"></script>
         <script src="script/jquery.dataTables.min.js"></script>
         <script src="script/dataTables.bootstrap4.min.js"></script>  
        
         <script>
            $(document).ready(function(){
            $('#example').dataTable();
            });
         </script>

         <table  id="example" class="table table-striped table-bordered">
             <thead>
                 <th>ID</th>
                 <th>Type</th>
                 <th>Device</th>
                 <th>Name</th>
                 <th>Brand</th>
                 <th>Model</th>
                 <th>Serial No.</th>
                 <th>Action</th>
             </thead>
             <tbody>
                 @foreach ($server as $server)
                 <tr>
                     <td> {{$server->DeviceID}} </td>
                     <td> {{$server->Type}} </td>
                     <td> {{$server->Device}}
                     <td> {{$server->Name}} </td>
                     <td> {{$server->Brand}} </td>
                     <td> {{$server->Model}} </td>
                     <td> {{$server->SerialNumber}} </td>
                     <td> <a href="{{route('serverdetails')}}"> View Detail </a> </td>
                 </tr>
                 @endforeach
            </tbody>
         </table>
     </div>
 </div>
@endsection
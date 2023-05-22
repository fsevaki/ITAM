@extends('layout')
@section('title','Network Device')
@section('content')
 <div class="panel panel-default">
     <div class="panel-heading" id="panel-heading" > Network Device </div>
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
                 @foreach ($network as $network)
                 <tr>
                     <td> {{$network->DeviceID}} </td>
                     <td> {{$network->Type}} </td>
                     <td> {{$network->Device}}
                     <td> {{$network->Name}} </td>
                     <td> {{$network->Brand}} </td>
                     <td> {{$network->Model}} </td>
                     <td> {{$network->SerialNumber}} </td>
                     <td> <a href="{{route('networkdetails')}}"> View Detail </a> </td>
                 </tr>
                 @endforeach
            </tbody>
         </table>
     </div>
 </div>
@endsection
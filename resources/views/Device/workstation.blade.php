@extends('layout')
@section('title','Workstation List')
@section('content')
 <div class="panel panel-default">
     <div class="panel-heading" id="panel-heading" > Workstation List </div>
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
                 @foreach ($workstation as $workstation)
                 <tr>
                     <td> {{$workstation->DeviceID}} </td>
                     <td> {{$workstation->Type}} </td>
                     <td> {{$workstation->Device}}
                     <td> {{$workstation->Name}} </td>
                     <td> {{$workstation->Brand}} </td>
                     <td> {{$workstation->Model}} </td>
                     <td> {{$workstation->SerialNumber}} </td>
                     <td> <a href="{{route('workstationdetails')}}"> View Detail </a> </td>
                 </tr>
                 @endforeach
            </tbody>
         </table>
     </div>
 </div>
@endsection
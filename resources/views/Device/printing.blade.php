@extends('layout')
@section('title','Printing')
@section('content')
 <div class="panel panel-default">
     <div class="panel-heading" id="panel-heading" > Printing </div>
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
                 @foreach ($printing as $printing)
                 <tr>
                     <td> {{$printing->DeviceID}} </td>
                     <td> {{$printing->Type}} </td>
                     <td> {{$printing->Device}}
                     <td> {{$printing->Name}} </td>
                     <td> {{$printing->Brand}} </td>
                     <td> {{$printing->Model}} </td>
                     <td> {{$printing->SerialNumber}} </td>
                     <td> <a href="{{route('printingdetails')}}"> View Detail </a> </td>
                 </tr>
                 @endforeach
            </tbody>
         </table>
     </div>
 </div>
@endsection
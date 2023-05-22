@extends('layout')
@section('title','Network Device')
@section('content')
 <div class="panel panel-default">
     <div class="panel-heading" id="panel-heading" > Network Device Details </div>
         <div class="panel-body">
             <ul class="nav nav-tabs">
                 <li class="active"><a data-toggle="tab" href="#Details">Details</a></li>
                 <li><a data-toggle="tab" href="#Software">Other</a></li>
             </ul>

             <div class="tab-content">
                 <div id="Details" class="tab-pane fade in active">
                     <h3>Server Details</h3>
                     <div>
                         <table class="addcustomertable">
                             <tr>
                                <td> Type: </td>
                                <td>  <input class="addcustomerinput" type="text" placeholder=" " name=" " required> </td>
                                <td> Device: </td>
                                <td>  <input class="addcustomerinput" type="text" placeholder=" " name=" " required> </td>
                                <td> Name: </td>
                                <td> <input class="addcustomerinput" type="text" placeholder=" " name=" " required> </td>
                                <td> Brand: </td>
                                <td> <input class="addcustomerinput" type="text" placeholder=" " name=" " required> </td>
                             </tr><br>
                             <tr>
                                <td> Model: </td>
                                <td> <input class="addcustomerinput" type="text" placeholder=" " name=" " required> </td>
                                <td> Serial No: </td>
                                <td> <input class="addcustomerinput" type="text" placeholder=" " name=" " required> </td>
                                <td> Status: </td>
                                <td>  <input class="addcustomerinput" type="text" placeholder=" " name=" " required> </td>
                                <td> Price: </td>
                                <td> <input class="addcustomerinput" type="text" placeholder=" " name=" " required> </td>
                             </tr>
                             <tr>
                                <td> Year: </td>
                                <td> <input class="addcustomerinput" type="text" placeholder=" " name=" " required> </td>
                                <td> Supplier: </td>
                                <td> <input class="addcustomerinput" type="text" placeholder=" " name=" " required> </td>
                                <td> Comment: </td>
                                <td> <textarea id="" class="RefTextarea" name="w3review" rows="3" cols="40"> </textarea> </td>
                             </tr>
                         </table><br>
                         <button class="btnindividualclear" type="submit"><i class="glyphicon glyphicon-pencil"></i> Edit </button>
                     </div>
                 </div>

                 <div id="Software" class="tab-pane fade">
                     <h3>Other</h3><br>
                     <div>
                         <script src="script/jquery-3.5.1.js"></script>
                         <script src="script/jquery.dataTables.min.js"></script>
                         <script src="script/dataTables.bootstrap4.min.js"></script>  
                            
                         <script>
                            $(document).ready(function(){
                            $('#example1').dataTable();
                            });
                         </script>

                         <table  id="example1" class="table table-striped table-bordered">
                             <thead>
                                 <th>ID</th>
                                 <th>Name</th>
                                 <th>Description</th>
                                 <th>Action</th>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>  </td>
                                     <td>  </td>
                                     <td>  </td>
                                     <td> <a href=""> View Detail </a> </td>
                                 </tr>
                             </tbody>
                         </table>
                         <button class="btnindividualclear" type="submit"><i class="glyphicon glyphicon-plus"></i> New </button>
                     </div>
                 </div>
             </div>
         </div> 
     </div>
 </div>
@endsection
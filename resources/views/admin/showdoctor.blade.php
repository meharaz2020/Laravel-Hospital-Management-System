<!DOCTYPE html>
<html lang="en">
  <head>
@include('admin.css')
</head>
<body>
  <div class="container-scroller">
<!-- partial:partials/_sidebar.html -->
 @include('admin.navbar')
<!-- partial -->
 @include('admin.sitebar')

 <div class="container-fluid page-body-wrapper">
<div>
    <table align="center" padding="70px">
        <tr style="background-color: black">
         <th style="padding: 10px; font-size:20px;color:white;">Doctor Name</th>
          <th style="padding: 10px; font-size:20px;color:white;">Phone</th>
         <th style="padding: 10px; font-size:20px;color:white;">Speciality</th>
         <th style="padding: 10px; font-size:20px;color:white;">Room</th>
         <th style="padding: 10px; font-size:20px;color:white;">Image</th>
         <th style="padding: 10px; font-size:20px;color:white;">Update</th>
         <th style="padding: 10px; font-size:20px;color:white;">Delete</th>




 
        </tr>
 
         @foreach ($data as $appoints)
         <tr style="background-color: black">
             <td style="padding: 10px; font-size:20px;color:white;">{{$appoints->name}}</td>
             <td style="padding: 10px; font-size:20px;color:white;">{{$appoints->phone}}</td>
             <td style="padding: 10px; font-size:20px;color:white;">{{$appoints->special}}</td>

             <td style="padding: 10px; font-size:20px;color:white;">{{$appoints->room}}</td>
             <td style="padding: 10px; font-size:20px;color:white;"><img src="doctorimage/{{$appoints->image}}" alt=""></td>
              
             <td><a href="{{url('updatedoctor',$appoints->id)}}"   class="btn btn-success">Update</a></td>

             <td><a onclick="return confirm('Are you sure to delete;')" href="{{url('deletedoctor',$appoints->id)}}"   class="btn btn-danger">Delete</a></td>
         </tr>
         @endforeach 
     </table>
</div>

 </div>
 @include('admin.js')
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
  <!-- partial -->


  <div class="container-fluid page-body-wrapper">
    <div>
        <table align="center" padding="70px">
           <tr style="background-color: black">
            <th style="padding: 10px; font-size:20px;color:white;">Patient Name</th>
            <th style="padding: 10px; font-size:20px;color:white;">Email</th>
            <th style="padding: 10px; font-size:20px;color:white;">Phone</th>
            <th style="padding: 10px; font-size:20px;color:white;">Doctor name</th>
            <th style="padding: 10px; font-size:20px;color:white;">Date</th>
            <th style="padding: 10px; font-size:20px;color:white;">Message</th>

            <th style="padding: 10px; font-size:20px;color:white;">Status</th>
            <th style="padding: 10px; font-size:20px;color:white;">Approve</th>
            <th style="padding: 10px; font-size:20px;color:white;">Cancel</th>
            <th style="padding: 10px; font-size:20px;color:white;">Send mail</th>


    
           </tr>
    
            @foreach ($data as $appoints)
            <tr style="background-color: black">
                <td style="padding: 10px; font-size:20px;color:white;">{{$appoints->name}}</td>
                <td style="padding: 10px; font-size:20px;color:white;">{{$appoints->email}}</td>
                <td style="padding: 10px; font-size:20px;color:white;">{{$appoints->phone}}</td>

                <td style="padding: 10px; font-size:20px;color:white;">{{$appoints->doctor}}</td>
                <td style="padding: 10px; font-size:20px;color:white;">{{$appoints->date}}</td>
                <td style="padding: 10px; font-size:20px;color:white;">{{$appoints->message}}</td>
                <td style="padding: 10px; font-size:20px;color:white;">{{$appoints->status}}</td>
                <td><a href="{{url('approve',$appoints->id)}}"   class="btn btn-success">Approve</a></td>

                <td><a onclick="return confirm('Are you sure to delete;')" href="{{url('canceled',$appoints->id)}}"   class="btn btn-danger">cancel</a></td>
                <td><a onclick="return confirm('Are you sure to delete;')" href="{{url('emailview',$appoints->id)}}"   class="btn btn-danger">Send mail</a></td>

              </tr>
            @endforeach 
        </table>
       </div>

  </div>




 @include('admin.js')
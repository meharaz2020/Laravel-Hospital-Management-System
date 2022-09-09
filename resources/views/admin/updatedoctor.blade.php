<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
@include('admin.css')
</head>
<body>
  <div class="container-scroller">


 
 
<!-- partial:partials/_sidebar.html -->
 @include('admin.navbar')
<!-- partial -->
 @include('admin.sitebar')
 <div class="container-fluid page-body-wrapper">
    <div class="container">
        <div class="row">
            <h1 class="text-center mt-3">Add Doctor</h1>
            @if (session()->has('message'))
    
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('message')}}
            </div>
              
            @endif
            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
               @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" value="{{$data->name}}" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
                 </div>
                 <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                    <input type="text"value="{{$data->phone}}"class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="emailHelp">
                 
                </div>
                   <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Spaciality</label>
                    <select class="form-select" aria-label="Default select example" name="spe">
                        <option selected>Open this select menu</option>
                        <option value="skin">skin</option>
                        <option value="bone">bone</option>
                        <option value="heart">heart</option>    
                        </select>       
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Room Number</label>
                    <input type="text"value="{{$data->room}}" class="form-control" id="exampleInputEmail1" name="room" aria-describedby="emailHelp">
                 
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Doctor Photo</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="file" aria-describedby="emailHelp">
                 
                </div>
                <button type="submit" class="btn btn-primary" name="save">Submit</button>
              </form>
              
        </div>
      </div>

 </div>



 @include('admin.js')
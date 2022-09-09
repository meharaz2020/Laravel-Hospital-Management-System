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
     
  <div class="container">
    <div class="row">
        <h1 class="text-center mt-3">Add Doctor</h1>
        @if (session()->has('message'))

        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
        </div>
          
        @endif
        <form action="{{url('sendmail',$data->id)}}" method="POST" enctype="multipart/form-data">
           @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Greeting</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="greeting" aria-describedby="emailHelp">
             </div>
             <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Body</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="body" aria-describedby="emailHelp">
             
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Action txt</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="actiontxt" aria-describedby="emailHelp">
             
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Url</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="url" aria-describedby="emailHelp">
             
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">txt</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="txt" aria-describedby="emailHelp">
             
            </div>
                
            <button type="submit" class="btn btn-primary" name="save">Submit</button>
          </form>
          
    </div>
  </div>
 </div>

@include('admin.js')
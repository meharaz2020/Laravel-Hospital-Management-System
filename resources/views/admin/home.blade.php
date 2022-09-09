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
         @include('admin.main')
    @include('admin.js')
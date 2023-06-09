<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Poppins -->
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

  <!-- Custom CSS -->
  <link href="{{ url('css/shop-style.css') }}" rel="stylesheet" type="text/css" >
  <!-- Font Awesome -->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="container-fluid">
      @section('header')

      <!-- Main Header -->
      <div class="row header">
          
          <!-- <div class="col-lg-3 col-md-4 col-sm-12" style="border: 1px solid #000;"><img src="../../../storage/app/public/images/templateImages/weblogo.png" ></div> -->
          <div class="col-lg-2 col-md-4 col-sm-12 text-center"><a href="http://127.0.0.1:8000/admin/dashboard/"><img src="{{ url('/images/templateImages/milton_logo.png')}}" style="width: auto; height: 70px;"></a></div>
          
          <div class="col-lg-7 col-md-4 col-sm-12 header-middle">
            <input type="text" class="form-control" id="search" name="search" />
            {{-- <button><i class="fa fa-search"></i></button> --}}
          </div>
          <div class="col-lg-3 col-md-4 col-sm-12 text-center">
            <div class="flag-cntc">
              <span><img src="{{ url('/images/templateImages/icon.png')}}" /> 905-203-0509</span>
            </div>
          </div>
          
      </div>
  
      @show
        
            
        
          <!-- Main Header -->
          {{-- <div class="row">
              <div class="col-lg-2 col-md-3 col-sm-12 sidebar">
                @section('sidebar')
                <h3>Main Menu</h3>
                <ul>
                    <a href="{{ route('adminDashboard') }}"><li>Dashboard</li></a>
                    <a href="{{ route('catRoute') }}"><li>Category</li></a>
                    <a href="{{ route('prdRoute') }}"><li>Product</li></a>
                    <a href="{{ route('prdRoute') }}"><li>Product</li></a>
                    <a href="{{ route('prdRoute') }}"><li>Product</li></a>
                    <a href="{{ route('prdRoute') }}"><li>Product</li></a>
                </ul>
                @show
              </div>
              
              <div class="col-lg-10 col-md-9 col-sm-12 content">
              @yield('content')
              </div>
          </div>

    @section('footer')
    <div class="footer text-center">
      Copy Right &copy; 2023-<?php echo date('Y'); ?>
    </div>
    @show
    </div> --}}
</body>
</html>
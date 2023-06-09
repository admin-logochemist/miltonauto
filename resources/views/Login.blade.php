<!DOCTYPE html>
<html lang="en">
<head>
  <title>Milton Auto - Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="{{ url('css/login-style.css') }}" rel="stylesheet" />
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <img src="{{ url('/images/templateImages/weblogo.png')}}" >
        </div>
        <!-- <div class="col-lg-8 col-md-8 col-sm-12"></div> -->
    </div>
    <hr />
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12"></div>

        <div class="col-lg-6 col-md-6 col-sm-12 main">
            <h2 class=" text-center">Admin Login</h2>
            <h4 class="bg-danger text-center" style="line-height: 50px;">
                @if(\Session()->has('message'))
                {{ \Session()->get('message') }}
                @endif
            </h4>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ old('email') }}">
                    <h5 class="bg-danger text-center" style="line-height: 25px;">@error('email') {{ $message }} @enderror</h5>
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" value="{{ old('password') }}">
                    <h5 class="bg-danger text-center" style="line-height: 25px;">@error('password') {{ $message }} @enderror</h5>
                </div>
                
                <!-- <div class="checkbox">
                <label><input type="checkbox" name="remember"> Remember me</label>
                </div> -->
                
                <button type="submit" class="btn btn-primary">Login</button> &nbsp; <a href="#" style="position: absolute; right:10px;">Forgot Password</a>
            </form>
        </div>
        
        <div class="col-lg-3 col-md-6 col-sm-12"></div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            Copy Right &copy; 2023 - <?php echo date('Y'); ?>
        </div>
    </div>
</div>
</body>
</html>

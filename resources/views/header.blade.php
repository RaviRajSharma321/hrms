<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="{{asset('assets/dashboard.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  </head>
  <body>

    <div class="header">
        <div class="wrapper">
        <div class="logo"><a href="#"><img src="{{asset('assets/images/logo.png')}}"></a></div>


    <div class="right_side">
        <ul><li>Welcome Admin</li>
        <li><a href="">Log Out</a></li>
        </ul>
    </div>
    <div class="nav_top">
        <ul>
        <li class="active"><a href=" home.php ">Dashboard</a></li>
        <li><a href=" settings.php ">Users</a></li>
        <li><a href=" agentloclist.php ">Setting</a></li>
        <li><a href=" geoloclist.php ">Configuration</a></li></ul>

    </div>
    </div>
    </div>

  </body>

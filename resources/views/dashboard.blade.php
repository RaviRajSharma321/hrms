
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="{{asset('assets/dashboard.css')}}" rel="stylesheet">
  </head>
<body>
<div class="header">
	<div class="wrapper">
	<div class="logo"><a href="#"><img src="{{asset('assets/images/logo.png')}}"></a></div>
<div class="right_side">
	<ul><li>Admin ujjwal
    </li>
	<li><a href="/logout">Log Out</a></li>
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
<div class="clear"></div>
<div class="clear"></div>
<div class="content">
	<div class="wrapper">
	<div class="left_sidebr">
	<ul>
	<li><a href="" class="dashboard">Dashboard</a></li>
	<li><a href="" class="user">Users</a>
	<ul class="submenu">
	<li><a href="">Mange Users</a></li>

	</ul>

	</li>
	<li><a href="" class="Setting">Setting</a>
	<ul class="submenu">
	<li><a href="">Chnage Password</a></li>
	<li><a href="">Mange Contact Request</a></li>
	<li><a href="#">Manage Login Page</a></li>

	</ul>

	</li>
	<li><a href="" class="social">Configuration</a>
	<ul class="submenu">
	<li><a href="">Payment Settings</a></li>
	<li><a href="">Manage Email Content</a></li>
     <li><a href="#">Manage Limits</a></li>
	</ul>

	</li>
	</ul>
	</div>
	<div class="right_side_content">
	<h1>Dashboard</h1>
	<div class="tab">
	<ul><li class="selected"><a href="{{route('departments')}}"><span class="left"><img class="selected-act" src="{{asset('assets/images/dashboard-hover.png')}}"><img src="{{asset('assets/images/dashboard.png')}}" class="hidden" /></span><span class="right">Departments</span></a></li>
	<li><a href="{{route('employees')}}"><span class="left"><img class="selected-act" src="{{asset('assets/images/user-hover.png')}}"><img class="hidden"  src="{{asset('assets/images/user.png')}}"/></span><span class="right">Employees</span></a></li>
	<li><a href=""><span class="left"><img class="selected-act" src="{{asset('assets/images/setting-hover.png')}}"><img class="hidden"  src="{{asset('assets/images/setting.png')}}"/></span><span class="right">Setting</span></a></li>
	<li><a href=""><span class="left"><img class="selected-act" src="{{asset('assets/images/configuration-hover.png')}}"><img class="hidden" src="{{asset('assets/images/configuration.png')}}"/></span><span class="right">Configuration</span></a></li>

	</ul>
	</div>
	</div>
	</div>
</div>
<div class="footer">
<div class="wrapper">
<p>Copyright © 2014 yourwebsite.com. All rights reserved</p>
</div>

</div>

</body>
</html>

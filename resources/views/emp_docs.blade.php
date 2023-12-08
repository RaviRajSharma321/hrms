
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <!-- Bootstrap -->
    <link href="{{asset('assets/dashboard.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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

<div class="clear"></div>
<div class="clear"></div>
<div class="content">
	<div class="wrapper">
	<div class="bedcram">
		<ul>
		<li><a href="#">Home</a></li>
		<li><a href="#">List Users</a></li>
		<li>Edit Users</li>
		</ul>
	</div>
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
	<h1>Employee Documents</h1>
	<div class="list-contet">

			<form class="form-edit" name="" id="">
                @csrf
			<div class="form-row">
				<div class="form-label">
					<label>Employee Name : <span>*</span></label>
				</div>
				<div class="input-field">
					<input type="text" class="search-box" placeholder="TestBruck3"/>
					<p class="error-ms"></p>
				</div>
			</div>

			<div class="form-row">
				<div class="form-label">
					<label>Personel Documents : <span>*</span></label>
				</div>
				<div class="input-field">
					<input type="file" class="search-box" placeholder="TestBruck3" name="pd" id="pd"/>
                    <p class="error-ms"></p>
				</div>
			</div>

            <div class="form-row">
				<div class="form-label">
					<label>Official Documents : <span>*</span></label>
				</div>
				<div class="input-field">
					<input type="file" class="search-box" placeholder="TestBruck3" name="od" id="od"/>
                    <p class="error-ms"></p>
				</div>
			</div>

			<div class="form-row">
				<div class="form-label">
					<label><span></span> </label>
				</div>
				<div class="input-field">
					<input type="submit" class="submit-btn" value="Save">
				</div>
			</div>



		</form>
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


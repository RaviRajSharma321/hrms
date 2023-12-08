
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
	<h1>ADD DEPARTMENT</h1>
	<div class="list-contet">
		{{-- <div class="error-message-div error-msg"><img src="{{asset('asset/images/unsucess-msg.png')}}"><strong>UnSucess!</strong> Your Message hasn't been Send </div> --}}

			<form class="form-edit" method="POST" action="{{ route('postdeps') }}">
                @csrf
			<div class="form-row">
				<div class="form-label">
					<label>Department Name : <span></span></label>
				</div>
				<div class="input-field">
					<input name="dep" id="dep" type="text" class="search-box" placeholder="TestBruck3"/>
					<p class="error-ms" name="dncheck" id="dncheck"></p>
				</div>
			</div>

			<div class="form-row">
				<div class="form-label">
					<label><span></span> </label>
				</div>
				<div class="input-field">
					<input name="depsave" id="depsave" type="submit" class="submit-btn" value="Save">
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

<script>
    $(document).ready(function(){
        console.log("hello from here");
        $('#dncheck').hide();
        var n_err = true;

        $('#dep').keyup(function()
        {
            dep_check();
        });

        function  dep_check()
        {
            var dep_val = $('#dep').val();
            if(dep_val.length == '')
            {
                $('#dncheck').show();
                $('#dncheck').html("Department is required");
                n_err = false;
                return false;
            }
            else
            {
                $('#dncheck').hide();
            }
            if(dep_val.length < 3)
            {
                $('#dncheck').show();
                $('#dncheck').html("Department Name should be atleast 3 characters");
                n_err = false;
                return false;
            }
            else
            {
                $('#dncheck').hide();
            }
        }

        $('#depsave').click(function(e){
            n_err = true;

        })
    })
</script>

</body>
</html>


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
	<ul><li>{{$username}}</li>
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
	<div class="bedcram">
		<ul>
		<li><a href="{{route('dashboard')}}">Home</a></li>
		<li>List Users</li>
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
	<h1>List Users</h1>
	<div class="list-contet">
	<div class="form-left">
		<div class="form">
		<form role="form">
		<label>Sort By : </label>
		<div class="select">
			<select>
				<option>Name</option>
				<option>First Name</option>
			</select>
			</div>
			<input type="text" class="search-box search-upper" placeholder="Search.."/>
			<input type="submit" class="submit-btn" value="Search">
		</form>
		</div>

        <a href="{{route('perdtl')}}" class="submit-btn add-user">Add Employees</a>
		{{-- <input type="button" class="submit-btn add-user" value="Add More Users"> --}}
	</div>
	 <table width="100%" cellspacing="0">
		<tbody>
		        <tr>
						<th width="100px">Employee Name</th>
						<th width="98px">Gender</th>
						<th width="100px">Personel Email-id</th>
						<th width="113px">Phone Number</th>
						<th width="97px">Date of birth</th>
                        <th widht="30px">Add Emp. Dtls.</th>
                        <th widht="10px">Add Bank Dtls.</th>
                        <th width="10px">Add Docs</th>
                        <th width="10px">Action</th>
                 </tr>

                  {{-- @foreach ($per_dtls as $pdtls)
                        <tr>
                            <td>{{$pdtls->ename}}</td>
                            <td>{{$pdtls->gender}}</td>
                            <td>{{$pdtls->p_email}}</td>
                            <td>{{$pdtls->phone}}</td>
                            <td>{{$pdtls->dob}}</td>
                            <td><a href="/addempdtls?id={{$pdtls->eid}}"><img src="{{asset('assets/images/correct.png')}}"></a></td>
                            <td><a href="/addbkdtls?id={{$pdtls->eid}}"><img src="{{asset('assets/images/correct.png')}}"></a></td>
                            <td><a href="/addocs?id={{$pdtls->eid}}"><img src="{{asset('assets/images/correct.png')}}"></a></td>
                            <td>
                                <a href="#"><img src="{{asset('assets/images/edit-icon.png')}}"></a>
                                <a href="#"><img src="{{asset('assets/images/cross.png')}}"></a>
                            </td>
                        </tr>
                  @endforeach --}}


		 	 </tbody>
			</table>
			<div class="paginaton-div">
				<ul>
					<li><a href="#">Prev</a></li>
					<li><a href="#" class="active">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">Next</a></li>


				</ul>
			</div>

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


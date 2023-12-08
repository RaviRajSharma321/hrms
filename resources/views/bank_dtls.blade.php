
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="{{asset('assets/dashboard.css')}}" rel="stylesheet">
  </head>
<body>

    @include('header')

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
	<h1>Edit Users</h1>
	<div class="list-contet">

			<form id="" name="" class="form-edit" action="/bdtlp" method="POST">
                @csrf
			<div class="form-row">
				<div class="form-label">
					<label>Bank Name : <span>*</span></label>
				</div>
				<div class="input-field">
					<input name="bankname" id="bankname" type="text" class="search-box" placeholder="TestBruck3"/>
					<p class="error-ms" name="bncheck" id="bncheck"></p>
				</div>
			</div>

			<div class="form-row">
				<div class="form-label">
					<label>IFSC Code : <span>*</span></label>
				</div>
				<div class="input-field">
					<input type="text" name="ifsccode" id="ifsccode" class="search-box" placeholder="TestBruck3"/>
                    <p class="error-ms" name="iccheck" id="iccheck"></p>
				</div>
			</div>

			<div class="form-row">
				<div class="form-label">
					<label>Account Number : <span>*</span></label>
				</div>
				<div class="input-field">
					<input type="text" name="acnumber" id="acnumber" class="search-box" placeholder="TestBruck3"/>
                    <p class="error-ms" name="ancheck" id="ancheck"></p>
				</div>
			</div>

			<div class="form-row">
				<div class="form-label">
					<label>Account Holder's Name : <span>*</span></label>
				</div>
				<div class="input-field">
					<input type="text" name="acname" id="acname" class="search-box" placeholder="TestBruck3"/>
                    <p class="error-ms" name="ahncheck" id="ahncheck"></p>
				</div>
			</div>

			<div class="form-row">
				<div class="form-label">
					<label><span></span> </label>
				</div>
				<div class="input-field">
					<input name="save" id="save" type="submit" class="submit-btn" value="Save">
				</div>
			</div>



		</form>

        <script>

            $(document).ready(function(){

                $('#bncheck').hide();
                $('#iccheck').hide();
                $('#ancheck').hide();
                $('#ahncheck').hide();

                var bn_err = true;
                var ic_err = true;
                var an_err = true;
                var ahn_err = true;

                var regex = /^[a-zA-Z ]*$/;
                var regex1 = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                $('#bankname').keyup(function()
                {
                    bankname_check();
                });


                function  bankname_check()
                {
                    var bankname_val = $('#bankname').val();

                    if(bankname_val.length == '')
                    {
                        $('#bncheck').show();
                        $('#bncheck').html("Bank Name is required");
                        n_err = false;
                        return false;
                    }
                    else if(!regex.test(bankname_val))
                    {
                        $('#bncheck').show();
                        $('#bncheck').html("Invalid Bank Name");
                        bn_err = false;
                        return false;
                    }
                    else
                    {
                        $('#bncheck').hide();
                    }

                    if(bankname_val.length < 3)
                    {
                        $('#bncheck').show();
                        $('#bncheck').html("Bank Name should be atleast 3 characters");
                        bn_err = false;
                        return false;
                    }
                    else
                    {
                        $('#bncheck').hide();
                    }
                }

                //ifce code

                $('#ifsccode').keyup(function()
                {
                    ifce_check();
                });


                function  ifce_check()
                {
                    var ifce_val = $('#ifsccode').val();

                    if(ifce_val.length == '')
                    {
                        $('#iccheck').show();
                        $('#iccheck').html("IFSC code is required");
                        ic_err = false;
                        return false;
                    }
                    else if(!regex.test(ifce_val))
                    {
                        $('#ncheck').show();
                        $('#ncheck').html("Invalid Name");
                        ic_err = false;
                        return false;
                    }
                    else
                    {
                        $('#iccheck').hide();
                    }

                    if(ifce_val.length < 3)
                    {
                        $('#iccheck').show();
                        $('#iccheck').html("IFSC should be atleast 3 characters");
                        ic_err = false;
                        return false;
                    }
                    else
                    {
                        $('#iccheck').hide();
                    }
                }


            //acnumber

            $('#acnumber').keyup(function()
            {
                acnumber_check();
            });
            function acnumber_check()
            {
                var acnumber_val = $('#acnumber').val();
                if(acnumber_val.length == '')
                {
                    $('#ancheck').show();
                    $('#ancheck').html("Account number is required");
                    an_err = false;
                    return false;
                }
                else if(isNaN(acnumber_val))
                {
                    $('#ancheck').show();
                    $('#ancheck').html("Invalid account number");
                    an_err = false;
                    return false;
                }
                else
                {
                    $('#ancheck').hide();
                }
            }




                //account holder name

                $('#acname').keyup(function()
                {
                    acname_check();
                });


                function  acname_check()
                {
                    var acname_val = $('#acname').val();

                    if(acname_val.length == '')
                    {
                        $('#ahncheck').show();
                        $('#ahncheck').html("Account holder's name is required");
                        ahn_err = false;
                        return false;
                    }
                    else if(!regex.test(acname_val))
                    {
                        $('#ahncheck').show();
                        $('#ahncheck').html("Invalid account holder's name");
                        ahn_err = false;
                        return false;
                    }
                    else
                    {
                        $('#ahncheck').hide();
                    }

                    if(acname_val.length < 3)
                    {
                        $('#ahncheck').show();
                        $('#ahncheck').html("Account holder's name should be atleast 3 characters");
                        ahn_err = false;
                        return false;
                    }
                    else
                    {
                        $('#ahncheck').hide();
                    }
                }


                $('#save').click(function(){

                    bn_err = true;
                    ic_err = true;
                    an_err = true;
                    ahn_err = true;

                    bankname_check();
                    ifce_check();
                    acnumber_check();
                    acname_check();

                    if(
                    bn_err == true &&
                    ic_err == true &&
                    an_err == true &&
                    ahn_err == true
                    )
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                });
            });



        </script>

	</div>
	</div>

	</div>
</div>

@include('footer')

<div id="bankvld" name="bankvld">

</div>

</body>
</html>

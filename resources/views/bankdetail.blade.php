
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <!-- Bootstrap -->
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
		<li><a href="{{route('dashboard')}}">Home</a></li>
		<li><a href="{{route('employees')}}">List Employees</a></li>
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

        <form id="bank123" name="bank" class="form-edit" action="{{route('bank_dtls')}}" method="POST">
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

        <input type="hidden" name="other_field2" value="{{ $a['id'] }}">

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
                <p type="submit" name="bksave" id="bksave" class="submit-btn" value="Save">Submit</p>
            </div>
        </div>



    </form>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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


            $('#bksave').click(function(e){
                console.log("hello from bank servwdsfasdfae");

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
                    $('#bank123').submit();                }
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
<div class="footer">
<div class="wrapper">
<p>Copyright © 2014 yourwebsite.com. All rights reserved</p>
</div>

</div>

</body>
</html>

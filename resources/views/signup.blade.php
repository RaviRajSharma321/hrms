<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="{{asset('assets/dashboard.css')}}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  </head>
<body>
<div class="login_section">
    @if(session('customMessage'))
    <div class="alert alert-danger">
        {{ session('customMessage') }}
    </div>
    @endif
	<div class="wrapper relative"><div style="display:none" class="meassage_successful_login">You have Successfull Edit </div>
		<div class="heading-top"><div class="logo-cebter"><a href="#"><img src="{{asset('assets/images/at your service_banner.png')}}"></a></div></div>
		<div class="box1">
		<div class="outer_div">

		<h2>Admin <span>Login</span></h2>
		{{-- <div class="error-message-div error-msg"><img src="{{asset('assets/images/unsucess-msg.png')}}"><strong>Invalid!</strong> username or password </div> --}}
				<form class="margin_bottom" role="form" method="POST" action="{{ url('submitform')  }}" onsubmit="return validateForm()">
                    @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input id="name" name="name" type="text" class="form-control"/>
                                <p class="error-ms" id="ncheck" name="ncheck">
                                </p>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Phone Number</label>
                                <input id="phno" name="phno" class="form-control"/>
                                <p class="error-ms" id="phcheck" name="phcheck">
                                </p>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input id="email" name="email" class="form-control"/>
                                <p class="error-ms" id="echeck" name="echeck">
                                </p>

                            </div>


                            <div class="form-group">
                                <label for="exampleInputPassword1">Username</label>
                                <input id="username" name="username" class="form-control"/>
                                <p class="error-ms" id="ucheck" name="ucheck">
                                </p>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input id="password" name="password" type="password" class="form-control"/>
                                <p class="error-ms" id="pcheck" name="pcheck">
                                </p>
                            </div>



                             <button name="signup" id="signup" type="submit" class="btn_login">Signup</button>

                             <div>
                                <label style="margin: 6px;">Already have an account ?
                                <a href="/login" type="submit" class="" name="login">Login</a></label>
                              </div>
                        </form>
	     </div>
		</div>
</div>

<script>

$(document).ready(function(){

        $('#ncheck').hide();
        $('#phcheck').hide();
        $('#echeck').hide();
        $('#ucheck').hide();
        $('#pcheck').hide();

        var n_err = true;
        var ph_err = true;
        var e_err = true;
        var u_err = true;
        var p_err = true;

        var regex = /^[a-zA-Z ]*$/;
        var regex1 = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        //firstname

        $('#name').keyup(function()
        {
            name_check();
        });


        function  name_check()
        {
            var name_val = $('#name').val();

            if(name_val.length == '')
            {
                $('#ncheck').show();
                $('#ncheck').html("Name is required");
                n_err = false;
                return false;
            }
            else if(!regex.test(name_val))
            {
                $('#ncheck').show();
                $('#ncheck').html("Invalid Name");
                n_err = false;
                return false;
            }
            else
            {
                $('#ncheck').hide();
            }

            if(name_val.length < 3)
            {
                $('#ncheck').show();
                $('#ncheck').html("Name should be atleast 3 characters");
                n_err = false;
                return false;
            }
            else
            {
                $('#ncheck').hide();
            }
        }


        //phone number


        $('#phno').keyup(function()
        {
            phno_check();
        });



        function  phno_check()
        {
            var phno_val = $('#phno').val();

            if(phno_val.length == '')
            {
                $('#phcheck').show();
                $('#phcheck').html("Phone number is required");
                u_err = false;
                return false;
            }
            else if(isNaN(phno_val))
            {
                $('#phcheck').show();
                $('#phcheck').html("Invalid Phone numeber");
                u_err = false;
                return false;
            }
            else
            {
                $('#phcheck').hide();
            }

            if(phno_val.length != 10)
            {
                $('#phcheck').show();
                $('#phcheck').html("Phone number should be atleast 10 characters");
                ph_err = false;
                return false;
            }
            else
            {
                $('#phcheck').hide();
            }
        }


        //email

        $('#email').keyup(function()
        {
            email_check();
        });


        function  email_check()
        {
            var email_val = $('#email').val();

            if(email_val.length == '')
            {
                $('#echeck').show();
                $('#echeck').html("Email is required");
                e_err = false;
                return false;
            }
            else if( !regex1.test(email_val) )
            {
                $('#echeck').show();
                $('#echeck').html("Invalid Email");
                e_err = false;
                return false;
            }
            else
            {
                $('#echeck').hide();
            }
        }

        //username

        $('#username').keyup(function()
        {
            username_check();
        });


        function  username_check()
        {
            var username_val = $('#username').val();

            if(username_val.length == '')
            {
                $('#ucheck').show();
                $('#ucheck').html("Username is required");
                u_err = false;
                return false;
            }
            else
            {
                $('#ucheck').hide();
            }

            if(username_val.length < 3)
            {
                $('#ucheck').show();
                $('#ucheck').html("Username should be atleast 3 characters");
                u_err = false;
                return false;
            }
            else
            {
                $('#ucheck').hide();
            }


        }


        //password


        $('#password').keyup(function()
        {
            password_check();
        });

        function  password_check()
        {
            var password_val = $('#password').val();

            if(password_val.length == '')
            {
                $('#pcheck').show();
                $('#pcheck').html("Password is required");
                p_err = false;
                return false;
            }
            else
            {
                $('#pcheck').hide();
            }

            if(password_val.length < 3)
            {
                $('#pcheck').show();
                $('#pcheck').html("Password should be atleast 3 characters");
                p_err = false;
                return false;
            }
            else
            {
                $('#pcheck').hide();
            }
        }


        $('#signup').click(function(){
            n_err = true;
            ph_err = true;
            e_err = true;
            u_err = true;
            p_err = true;

            name_check();
            phno_check();
            email_check();
            username_check();
            password_check();

            if(n_err == true  &&  ph_err == true && e_err == true && u_err == true && p_err == true)
            {
                return true;
            }
            else
            {
                return false;
            }
        });

    })
</script>

</body>
</html>

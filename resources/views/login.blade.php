
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

<div class="login_section">
	<div class="wrapper relative"><div style="display:none" class="meassage_successful_login">You have Successfull Edit </div>
		<div class="heading-top"><div class="logo-cebter"><a href="#"><img src="{{asset('assets/images/at your service_banner.png')}}"></a></div></div>
		<div class="box">
		<div class="outer_div">

        @if(session('error'))
            <script>
                alert("{{ session('error') }}");
            </script>
        @endif

		<h2>Admin <span>Login</span></h2>
				<form class="margin_bottom" role="form" method="POST" action="/auth">
                    @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">User Name</label>
                                <input id="username" name="username" type="text" class="form-control"/>
                                <p class="error-ms" id="ucheck" name="ucheck"></p>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input id="password" name="password" type="password" class="form-control"/>
                                <p class="error-ms" id="pcheck" name="pcheck"></p>
                            </div>
                             <button name="login" id="login" type="submit" class="btn_login">Login</button>

                             <div>
                                <label style="margin: 6px;">Don't have an account ?     <a href="/signup" type="submit" class="" name="signup">Sign Up</a></label>

                              </div>
                        </form>
	     </div>
		</div>
</div>

<script>

        $(document).ready(function(){

        $('#ucheck').hide();
        $('#pcheck').hide();

        var u_err = true;
        var p_err = true;



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

        $('#login').click(function(){
            u_err = true;
            p_err = true;

            username_check();
            password_check();

           // console.log(f_err);

            if(u_err == true  &&  p_err == true)
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



</body>
</html>

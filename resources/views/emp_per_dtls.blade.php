
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
	<h1>EMPLOYEE PERSONEL DETAILS</h1>
	<div class="list-contet">

			<form id="" name="" class="form-edit" action="{{route('per_dtls')}}" method="POST">
                @csrf
			<div class="form-row">
				<div class="form-label">
					<label>Name : <span>*</span></label>
				</div>
				<div class="input-field">
					<input name="ename" id="ename" type="text" class="search-box" placeholder="TestBruck3"/>
					<p class="error-ms" id="ncheck" name="ncheck"></p>
				</div>
			</div>

            <div class="form-row radio-row">
				<div class="form-label">
					<label>Gender : <span>*</span> </label>
				</div>

				<div class="input-field">
					<label>
                        <input type="radio" name="gender" id="male" value="Male">
                        <span>Male</span>
                    </label>

                    <label>
                        <input type="radio" name="gender" id="female" value="Female">
                        <span>Female</span>
                    </label>
                    <p class="error-ms" name="gcheck" id="gcheck"></p>
				</div>
			</div>

			<div class="form-row">
				<div class="form-label">
					<label>Experience : <span>*</span></label>
				</div>
				<div class="input-field">
					<input style="width: 48.5%; margin-right: 1.5%;" name="years" id="exp1" type="number" class="search-box" placeholder="Fill in number"/>
                    <input style="width: 48.5%; margin-left: 1.5%;" name="months" id="exp2" type="number" class="search-box" placeholder="Fill in number"/>
                    <p class="error-ms" id="epcheck" name="epcheck"></p>
				</div>
			</div>

			<div class="form-row">
				<div class="form-label">
					<label>Personel Email Id : <span>*</span></label>
				</div>
				<div class="input-field">
					<input name="pemail" id="pemail" type="text" class="search-box" placeholder="TestBruck3"/>
                    <p class="error-ms" id="pecheck" name="pecheck"></p>
				</div>
			</div>

			<div class="form-row">
				<div class="form-label">
					<label>Company Email: <span>*</span></label>
				</div>
				<div class="input-field">
					<input name="cemail" id="cemail" type="text" class="search-box" placeholder="TestBruck3"/>
                    <p class="error-ms" id="cecheck" name="cecheck"></p>
				</div>
			</div>

			<div class="form-row">
				<div class="form-label">
					<label>Phone Number : <span>*</span> </label>
				</div>
				<div class="input-field">
					<input name="phno" id="phno" type="text" class="search-box" placeholder="Free"/>
                    <p class="error-ms" id="phcheck" name="phcheck"></p>
				</div>
			</div>

            <div class="form-row">
				<div class="form-label">
					<label>Date of Birth : <span>*</span> </label>
				</div>
				<div class="input-field">
					<input name="dob" id="dob" placeholder="date" type="date" class="search-box"/>
                    <p class="error-ms" id="dcheck" name="dcheck"></p>
				</div>
			</div>

            <div class="form-row">
				<div class="form-label">
					<label>Street Address : <span>*</span> </label>
				</div>
				<div class="input-field">
					<textarea name="address" id="address" type="text" class="search-box" placeholder="Free" style="height: 100px"></textarea>
                    <p class="error-ms" id="acheck" name="acheck"></p>
				</div>
			</div>

            <div class="form-row">
				<div class="form-label">
					<label>Country : <span>*</span></label>
				</div>
				<div class="input-field">
					<input name="country" id="country" type="text" class="search-box" placeholder="TestBruck3"/>
					<p class="error-ms" id="concheck" name="concheck"></p>
				</div>
			</div>

            <div class="form-row">
				<div class="form-label">
					<label>State : <span>*</span></label>
				</div>
				<div class="input-field">
					<input name="state" id="state" type="text" class="search-box" placeholder="TestBruck3"/>
					<p class="error-ms" id="statecheck" name="statecheck"></p>
				</div>
			</div>

            <div class="form-row">
				<div class="form-label">
					<label>City : <span>*</span></label>
				</div>
				<div class="input-field">
					<input name="city" id="city" type="text" class="search-box" placeholder="TestBruck3"/>
					<p class="error-ms" id="citycheck" name="citycheck"></p>
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
                $('#ncheck').hide();
                $('#gcheck').hide();
                $('#idcheck').hide();
                $('#epcheck').hide();
                $('#pecheck').hide();
                $('#cecheck').hide();
                $('#phcheck').hide();
                $('#dcheck').hide();
                $('#acheck').hide();
                $('#concheck').hide();
                $('#statecheck').hide();
                $('#citycheck').hide();

                var n_err = true;
                var g_err = true;
                var id_err = true;
                var ep_err = true;
                var pe_err = true;
                var ce_err = true;
                var ph_err = true;
                var d_err = true;
                var a_err = true;
                var con_err = true;
                var state_err = true;
                var city_err = true;

                var regex = /^[a-zA-Z ]*$/;
                var regex1 = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                $('#ename').keyup(function()
                {
                    ename_check();
                });


                function  ename_check()
                {
                    var ename_val = $('#ename').val();

                    if(ename_val.length == '')
                    {
                        $('#ncheck').show();
                        $('#ncheck').html("Name is required");
                        n_err = false;
                        return false;
                    }
                    else if(!regex.test(ename_val))
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

                    if(ename_val.length < 3)
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

                //gender

                $('#save').click(function()
                {
                    gender_check();
                });

                $('#male').click(function()
                {
                    console.log($('#male').val());
                    gender_check();
                })
                $('#female').click(function()
                {
                    console.log($('#female').val());
                    gender_check();
                })

                function gender_check()
                {
                    var g_val = $("input:radio[name='gender']").is(':checked');
                    if($("input:radio[name='gender']").is(':checked'))
                    {
                        $('#gcheck').hide();
                    }
                    else
                    {
                        $('#gcheck').show();
                        $('#gcheck').html("Gender is required");
                        g_err = false;
                        return false;
                    }
                }


                //experience

                $('#exp1').keyup(function()
                {
                    exp_check();
                });

                $('#exp2').keyup(function()
                {
                    exp_check();
                });

                function  exp_check()
                {
                    var exp1_val = $('#exp1').val();
                    var exp2_val = $('#exp2').val();

                    if(exp1_val.length == '' || exp2_val.length == '')
                    {
                        $('#epcheck').show();
                        $('#epcheck').html("Experience is required.");
                        ep_err = false;
                        return false;
                    }
                    else if(exp1_val < 0 || exp1_val > 12 || exp2_val < 0 || exp2_val > 99)
                    {
                        $('#epcheck').show();
                        $('#epcheck').html("Invalid Experience.");
                        ep_err = false;
                        return false;
                    }
                    else
                    {
                        $('#epcheck').hide();
                    }
                }

                // personel email

                $('#pemail').keyup(function()
                {
                    pemail_check();
                });


                function pemail_check()
                {
                    var pemail_val = $('#pemail').val();

                    if(pemail_val.length == '')
                    {
                        $('#pecheck').show();
                        $('#pecheck').html("Personel Email is required");
                        pe_err = false;
                        return false;
                    }
                    else if( !regex1.test(pemail_val) )
                    {
                        $('#pecheck').show();
                        $('#pecheck').html("Invalid Personel Email Id");
                        pe_err = false;
                        return false;
                    }
                    else
                    {
                        $('#pecheck').hide();
                    }

                }

                //cemail

                $('#cemail').keyup(function()
                {
                    cemail_check();
                });


                function cemail_check()
                {
                    var cemail_val = $('#cemail').val();

                    if(cemail_val.length == '')
                    {
                        $('#cecheck').show();
                        $('#cecheck').html("Company Email is required");
                        ce_err = false;
                        return false;
                    }
                    else if( !regex1.test(cemail_val) )
                    {
                        $('#cecheck').show();
                        $('#cecheck').html("Invalid Company Email");
                        ce_err = false;
                        return false;
                    }
                    else
                    {
                        $('#cecheck').hide();
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
                        ph_err = false;
                        return false;
                    }
                    else if(isNaN(phno_val))
                    {
                        $('#phcheck').show();
                        $('#phcheck').html("Invalid Phone numeber");
                        ph_err = false;
                        return false;
                    }
                    else
                    {
                        $('#phcheck').hide();
                    }

                    if(phno_val.length != 10)
                    {
                        $('#phcheck').show();
                        $('#phcheck').html("Phone number should of 10 characters");
                        ph_err = false;
                        return false;
                    }
                    else
                    {
                        $('#phcheck').hide();
                    }
                }

                //date of birth

                $('#dob').on('input', function() {
                var dateValue = $(this).val();
                if (dateValue === '') {
                } else {
                    $('#dcheck').hide();
                }
                });

                function date_check()
                {
                    var date_val = $('#dob').val();

                    if(date_val == '')
                    {
                        $('#dcheck').show();
                        $('#dcheck').html('Date is required.');
                        d_err = false;
                        return false;
                    }
                    else
                    {
                        $('#dcheck').hide();
                    }
                }

                //address

                $('#address').keyup(function(){
                    address_check();
                })

                function address_check()
                {
                    var address_val = $('#address').val();
                    if(address_val == "")
                    {
                        $('#acheck').show();
                        $('#acheck').html('Address is required');
                        a_err = false;
                        return false;
                    }
                    else
                    {
                        $('#acheck').hide();
                    }
                }

                //country

                $('#country').keyup(function()
                {
                    country_check();
                });


                function  country_check()
                {
                    var country_val = $('#country').val();

                    if(country_val.length == '')
                    {
                        $('#concheck').show();
                        $('#concheck').html("Country name is required");
                        con_err = false;
                        return false;
                    }
                    else if(!regex.test(country_val))
                    {
                        $('#concheck').show();
                        $('#concheck').html("Invalid Country name");
                        con_err = false;
                        return false;
                    }
                    else
                    {
                        $('#concheck').hide();
                    }

                    if(country_val.length < 3)
                    {
                        $('#concheck').show();
                        $('#concheck').html("Country name should be atleast 3 characters");
                        con_err = false;
                        return false;
                    }
                    else
                    {
                        $('#concheck').hide();
                    }
                }

                //state

                $('#state').keyup(function()
                {
                    state_check();
                });


                function  state_check()
                {
                    var state_val = $('#state').val();

                    if(state_val.length == '')
                    {
                        $('#statecheck').show();
                        $('#statecheck').html("State name is required");
                        state_err = false;
                        return false;
                    }
                    else if(!regex.test(state_val))
                    {
                        $('#statecheck').show();
                        $('#statecheck').html("Invalid State name");
                        state_err = false;
                        return false;
                    }
                    else
                    {
                        $('#statecheck').hide();
                    }

                    if(state_val.length < 3)
                    {
                        $('#statecheck').show();
                        $('#statecheck').html("State name should be atleast 3 characters");
                        state_err = false;
                        return false;
                    }
                    else
                    {
                        $('#statecheck').hide();
                    }
                }

                //city

                $('#city').keyup(function()
                {
                    city_check();
                });


                function  city_check()
                {
                    var city_val = $('#city').val();

                    if(city_val.length == '')
                    {
                        $('#citycheck').show();
                        $('#citycheck').html("City name is required");
                        city_err = false;
                        return false;
                    }
                    else if(!regex.test(city_val))
                    {
                        $('#citycheck').show();
                        $('#citycheck').html("Invalid City name");
                        city_err = false;
                        return false;
                    }
                    else
                    {
                        $('#citycheck').hide();
                    }

                    if(city_val.length < 3)
                    {
                        $('#citycheck').show();
                        $('#citycheck').html("City name should be atleast 3 characters");
                        city_err = false;
                        return false;
                    }
                    else
                    {
                        $('#citycheck').hide();
                    }
                }


                $('#save').click(function(){

                    n_err = true;
                    g_err = true;
                    id_err = true;
                    ep_err = true;
                    pe_err = true;
                    ce_err = true;
                    ph_err = true;
                    d_err = true;
                    a_err = true;
                    con_err = true;
                    state_err = true;
                    city_err = true;

                    ename_check();
                    gender_check();
                    //eid_check();
                    exp_check();
                    pemail_check();
                    cemail_check();
                    phno_check();
                    date_check();
                    address_check();
                    country_check();
                    state_check();
                    city_check();

                   // console.log(f_err);

                    if(n_err==true  &&  g_err==true && id_err==true && ep_err==true && pe_err==true && ce_err==true && ph_err==true && d_err==true && a_err==true && con_err==true && city_err==true && state_err==true)
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

	</div>
	</div>

	</div>

</div>

@include('footer');


</body>
</html>

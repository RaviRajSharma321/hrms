
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

    @include('header')

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
	<h1>EMPLOYEE DETAILS</h1>
	<div class="list-contet">

        {{-- @include('forms'); --}}

        <div class="container7" id="myTabs" role="tablist">
            <div class="nav-item7" role="presentation">
                <div class="hover-box7">
               <h4 class="nav-link active" id="form1-tab">PERSONEL DETAILS</h4>
               </div>
            </div>
            <div class="nav-item7" role="presentation">
                <div class="hover-box7">
               <h4 class="nav-link" id="form2-tab">EMPLOYMENT DETAILS</h4>
               </div>
            </div>
            <div class="nav-item7" role="presentation">
                <div class="hover-box7">
                <h4 class="nav-link" id="form3-tab">BANK DETAILS</h4>
                </div>
            </div>
            <div class="nav-item7" role="presentation">
                <div class="hover-box7">
                  <h4 class="nav link" id="form4-tab">DOCUMENTS</h4>
                </div>
            </div>
        </div>

         <div id="pdtl">


			<form id="pdtl1233" name="pdtl" class="form-edit">
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
					<input name="pdsave" id="pdsave" class="submit-btn" value="Save">
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

                $('#pdsave').click(function(e){
                    console.log("hii helo errror");

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


                    if(n_err==true  &&  g_err==true && id_err==true && ep_err==true && pe_err==true && ce_err==true && ph_err==true && d_err==true && a_err==true && con_err==true && city_err==true && state_err==true)
                    {
                        //console.log("true");
                        e.preventDefault();
                        console.log("hello from here there");
                        var form = $(this).closest('form');
                        var formData = form.serialize();

                        $.ajax({
                            url: '{{ route('submit_pd') }}',
                            method: 'POST',
                            data: formData,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function (response) {
                                console.log("helloo");
                                $('#pdtl1233').hide();

                                          $('#edtl123').show();

                            },
                            error: function (xhr) {
                                alert("hllo jii from error")

                            }
                        });
                        return true;
                    }
                    else
                    {
                        //console.log("false");
                        return false;
                    }
                });




            })

        </script>
         </div>

         <div id="bank">
            <form id="bank123" name="bank" class="form-edit">
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
					<p name="bksave" id="bksave" class="submit-btn" value="Save">Submit</p>
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


                $('#bksave').click(function(e){
                    console.log("hello from bank servwe");

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
                        e.preventDefault();
                        var form = $(this).closest('form');
                        var formData = form.serialize();

                        $.ajax({
                            url: '{{ route('submit_bank') }}',
                            method: 'POST',
                            data: formData,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function (response) {
                                alert(response.message);
                            },
                            error: function (xhr) {
                                alert("hewllo jiii")
                            }
                        });

                        $('#bank').submit();
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


         <div id="edtl">
            <form id="edtl123" name="edtl" class="form-edit">
                @csrf
                <div class="form-row radio-row">
                    <div class="form-label">
                        <label>Employment type : <span>*</span> </label>
                    </div>

                    <div class="input-field">
                        <label>
                            <input type="radio" name="emptype" id="ftime" value="Full Time">
                            <span>Full Time</span>
                        </label>

                        <label>
                            <input type="radio" name="emptype" id="ptime" value="Part Time">
                            <span>Part Time</span>
                        </label>
                        <p class="error-ms" name="etcheck" id="etcheck"></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-label">
                        <label>Department : <span>*</span></label>
                    </div>
                    <div class="input-field">
                        <input name="dep" id="dep" type="text" class="search-box" placeholder="TestBruck3"/>
                        <p class="error-ms" name="depcheck" id="depcheck"></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-label">
                        <label>Designation : <span>*</span></label>
                    </div>
                    <div class="input-field">
                        <input name="degtn" id="degtn" type="text" class="search-box" placeholder="TestBruck3"/>
                        <p class="error-ms" name="dscheck" id="dscheck"></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-label">
                        <label>Date of Joining : <span>*</span> </label>
                    </div>
                    <div class="input-field">
                        <input name="doj" id="doj" placeholder="date" type="date" class="search-box"/>
                        <p class="error-ms" id="djcheck" name="djcheck"></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-label">
                        <label>Salary at joining : <span>*</span></label>
                    </div>
                    <div class="input-field">
                        <input name="saj" id="saj" type="text" class="search-box" placeholder="TestBruck3"/>
                        <p class="error-ms" id="sjcheck" name="sjcheck"></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-label">
                        <label>Appraisal Due : <span>*</span></label>
                    </div>
                    <div class="input-field">
                        <input name="appd" id="appd" type="text" class="search-box" placeholder="TestBruck3"/>
                        <p class="error-ms" id="apdcheck" name="apdcheck"></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-label">
                        <label>Date of Next Appraisal : <span>*</span> </label>
                    </div>
                    <div class="input-field">
                        <input name="dona" id="dona" placeholder="date" type="date" class="search-box"/>
                        <p class="error-ms" id="dncheck" name="dncheck"></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-label">
                        <label>Agreement Duration : <span>*</span></label>
                    </div>
                    <div class="input-field">
                        <input name="agdtn" id="agdtn" type="text" class="search-box" placeholder="TestBruck3"/>
                        <p class="error-ms" id="adcheck" name="adcheck"></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-label">
                        <label>Comments : <span>*</span> </label>
                    </div>
                    <div class="input-field">
                        <textarea name="comments" id="comments" type="text" class="search-box" placeholder="Free" style="height: 100px"></textarea>
                        <p class="error-ms" id="ccheck" name="ccheck"></p>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-label">
                        <label>Referenced by : <span></span> </label>
                    </div>
                    <div class="input-field">
                        <input name="refby" id="refby" type="text" class="search-box" placeholder="Free"/>
                        <p class="error-ms" id="rbcheck" name="rbcheck"></p>
                    </div>
                </div>

                <div class="form-row radio-row">
                    <div class="form-label">
                        <label>Status : <span>*</span> </label>
                    </div>

                    <div class="input-field">
                        <label>
                            <input type="radio" name="status" id="active" value="Active">
                            <span>Active</span>
                        </label>

                        <label>
                            <input type="radio" name="status" id="left" value="Left">
                            <span>Left</span>
                        </label>
                        <p class="error-ms" name="scheck" id="scheck"></p>
                    </div>
                </div>

                <div class="form-row radio-row">
                    <div class="form-label">
                        <label>Is Security Deducted? : <span>*</span> </label>
                    </div>

                    <div class="input-field">
                        <label>
                            <input type="radio" name="issecd" id="secured1" value="Yes">
                            <span>Yes</span>
                        </label>

                        <label>
                            <input type="radio" name="issecd" id="secured2" value="No">
                            <span>No</span>
                        </label>
                        <p class="error-ms" name="sdcheck" id="sdcheck"></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-label">
                        <label>Security Amount : <span>*</span></label>
                    </div>
                    <div class="input-field">
                        <input name="secamt" id="secamt" type="text" class="search-box" placeholder="TestBruck3"/>
                        <p class="error-ms" id="sacheck" name="sacheck"></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-label">
                        <label><span></span> </label>
                    </div>
                    <div class="input-field">
                        <input name="edsave" id="edsave" class="submit-btn" value="Save">
                    </div>
                </div>



            </form>

            <script>

                $(document).ready(function(){

                    $('etcheck').hide();
                    $('dscheck').hide();
                    $('djcheck').hide();
                    $('sjcheck').hide();
                    $('apdcheck').hide();
                    $('dncheck').hide();
                    $('adcheck').hide();
                    $('ccheck').hide();
                    $('rbcheck').hide();
                    $('scheck').hide();
                    $('sdcgheck').hide();
                    $('sacheck').hide();
                    $('depcheck').hide();

                    var et_err = true;
                    var dep_err = true;
                    var ds_err = true;
                    var dj_err = true;
                    var sj_err = true;
                    var apd_err = true;
                    var dn_err = true;
                    var ad_err = true;
                    var c_err = true;
                    var rb_err = true;
                    var s_err = true;
                    var sd_err = true;
                    var sa_err = true;

                    var regex = /^[a-zA-Z ]*$/;
                    var regex1 = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    $('#ftime').click(function()
                    {
                        emptype_check();
                    })
                    $('#ptime').click(function()
                    {
                        emptype_check();
                    })

                    function emptype_check()
                    {
                        var et_val = $("input:radio[name='emptype']").is(':checked');
                        if($("input:radio[name='emptype']").is(':checked'))
                        {
                            $('#etcheck').hide();
                        }
                        else
                        {
                            $('#etcheck').show();
                            $('#etcheck').html("Emptype is required");
                            et_err = false;
                            return false;
                        }
                    }

                    //department

                    $('#dep').keyup(function()
                    {
                        dep_check();
                    });


                    function  dep_check()
                    {
                        var dep_val = $('#dep').val();

                        if(dep_val.length == '')
                        {
                            $('#depcheck').show();
                            $('#depcheck').html("Department is required");
                            dep_err = false;
                            return false;
                        }
                        else if(!regex.test(dep_val))
                        {
                            $('#depcheck').show();
                            $('#depcheck').html("Invalid Department");
                            dep_err = false;
                            return false;
                        }
                        else
                        {
                            $('#depcheck').hide();
                        }

                        if(dep_val.length < 2)
                        {
                            $('#depcheck').show();
                            $('#depcheck').html("Department should be atleast 2 characters");
                            dep_err = false;
                            return false;
                        }
                        else
                        {
                            $('#depcheck').hide();
                        }
                    }

                    //designation

                    $('#degtn').keyup(function()
                    {
                        degtn_check();
                    });


                    function  degtn_check()
                    {
                        var degtn_val = $('#degtn').val();

                        if(degtn_val.length == '')
                        {
                            $('#dscheck').show();
                            $('#dscheck').html("Designation is required");
                            ds_err = false;
                            return false;
                        }
                        else if(!regex.test(degtn_val))
                        {
                            $('#dscheck').show();
                            $('#dscheck').html("Invalid Designation");
                            ds_err = false;
                            return false;
                        }
                        else
                        {
                            $('#dscheck').hide();
                        }

                        if(degtn_val.length < 3)
                        {
                            $('#dscheck').show();
                            $('#dscheck').html("Designation should be atleast 3 characters");
                            ds_err = false;
                            return false;
                        }
                        else
                        {
                            $('#dscheck').hide();
                        }
                    }


                //date if joining

                $('#doj').on('input', function() {
                var dateValue = $(this).val();
                if (dateValue === '') {
                } else {
                    $('#djcheck').hide();
                }
                });

                function doj_check()
                {
                    var doj_val = $('#doj').val();
                    if(doj_val === '')
                    {
                        $('#djcheck').show();
                        $('#djcheck').html('Date of joining is required.');
                        dj_err = false;
                        return false;
                    }
                    else
                    {
                        $('#djcheck').hide();
                    }
                }

                //salary at joining

                $('#saj').keyup(function()
                {
                    saj_check();
                });
                function  saj_check()
                {
                    var saj_val = $('#saj').val();
                    if(saj_val.length == '')
                    {
                        $('#sjcheck').show();
                        $('#sjcheck').html("Joining Salary is required");
                        sj_err = false;
                        return false;
                    }
                    else if(isNaN(saj_val))
                    {
                        $('#sjcheck').show();
                        $('#sjcheck').html("Invalid Joining Salary");
                        sj_err = false;
                        return false;
                    }
                    else
                    {
                        $('#sjcheck').hide();
                    }
                }

                //appraisal due

                $('#appd').keyup(function()
                {
                    appd_check();
                });
                function  appd_check()
                {
                    var appd_val = $('#appd').val();
                    if(appd_val.length == '')
                    {
                        $('#apdcheck').show();
                        $('#apdcheck').html("Appraisal due is required");
                        sj_err = false;
                        return false;
                    }
                    else if(isNaN(appd_val))
                    {
                        $('#apdcheck').show();
                        $('#apdcheck').html("Invalid Appraisal due");
                        apd_err = false;
                        return false;
                    }
                    else
                    {
                        $('#apdcheck').hide();
                    }
                }

                //date of new appraisal

                $('#dona').on('input', function() {
                var dateValue = $(this).val();
                if (dateValue === '') {
                } else {
                    $('#dncheck').hide();
                }
                });
                function dona_check()
                {
                    var dona_val = $('#dona').val();
                    if(dona_val == '')
                    {
                        $('#dncheck').show();
                        $('#dncheck').html('Date of new appraisal is required.');
                        dn_err = false;
                        return false;
                    }
                    else
                    {
                        $('#dncheck').hide();
                    }
                }

                //agreement duration

                $('#agdtn').keyup(function()
                {
                    agdtn_check();
                });
                function  agdtn_check()
                {
                    var agdtn_val = $('#agdtn').val();
                    if(agdtn_val.length == '')
                    {
                        $('#adcheck').show();
                        $('#adcheck').html("Agreement duration is required");
                        ad_err = false;
                        return false;
                    }
                    else if(isNaN(agdtn_val))
                    {
                        $('#adcheck').show();
                        $('#adcheck').html("Invalid Agreement duration");
                        ad_err = false;
                        return false;
                    }
                    else
                    {
                        $('#adcheck').hide();
                    }
                }

                //comments

                $('#comments').keyup(function(){
                    comments_check();
                })

                function comments_check()
                {
                    var comments_val = $('#comments').val();
                    if(comments_val == '')
                    {
                        $('#ccheck').show();
                        $('#ccheck').html('Comments are required');
                        c_err = false;
                        return false;
                    }
                    else
                    {
                        $('#ccheck').hide();
                    }
                }

                //any reference

                $('#dass1').click(function()
                {
                    ref_check();
                })
                $('#dass2').click(function()
                {
                    ref_check();
                })
                function ref_check()
                {
                    var ref_val = $("input:radio[name='isref']").is(':checked');
                    if($("input:radio[name='isref']").is(':checked'))
                    {
                        $('#ircheck').hide();
                    }
                    else
                    {
                        $('#ircheck').show();
                        $('#ircheck').html("This field is required");
                        ir_err = false;
                        return false;
                    }
                }

                //status

                $('#active').click(function()
                {
                    status_check();
                })
                $('#left').click(function()
                {
                    status_check();
                })
                function status_check()
                {
                    var status_val = $("input:radio[name='status']").is(':checked');
                    if($("input:radio[name='status']").is(':checked'))
                    {
                        $('#scheck').hide();
                    }
                    else
                    {
                        $('#scheck').show();
                        $('#scheck').html("Status is required");
                        s_err = false;
                        return false;
                    }
                }

                //is security deducted

                $('#secured1').click(function()
                {
                    console.log("yes");
                    issecd_check();
                })
                $('#secured2').click(function()
                {
                    issecd_check();
                })
                function issecd_check()
                {
                    var issecd_val = $("input:radio[name='issecd']").is(':checked');
                    if($("input:radio[name='issecd']").is(':checked'))
                    {
                        $('#sdcheck').hide();
                    }
                    else
                    {
                        $('#sdcheck').show();
                        $('#sdcheck').html("This field is required");
                        et_err = false;
                        return false;
                    }
                }

                //security amount

                $('#secamt').keyup(function()
                {
                    secamt_check();
                });
                function  secamt_check()
                {
                    var secamt_val = $('#secamt').val();
                    if(secamt_val.length == '')
                    {
                        $('#sacheck').show();
                        $('#sacheck').html("Security amount is required");
                        sa_err = false;
                        return false;
                    }
                    else if(isNaN(secamt_val))
                    {
                        $('#sacheck').show();
                        $('#sacheck').html("Invalid Security Amount");
                        sa_err = false;
                        return false;
                    }
                    else
                    {
                        $('#sacheck').hide();
                    }
                }

                $('#edsave').click(function(e){
                    console.log("ehllo ");

                    et_err = true;
                    ds_err = true;
                    dj_err = true;
                    sj_err = true;
                    apd_err = true;
                    dn_err = true;
                    ad_err = true;
                    c_err = true;
                    rb_err = true;
                    s_err = true;
                    sd_err = true;
                    sa_err = true;
                    dep_err = true;

                    emptype_check();
                    dep_check();
                    degtn_check();
                    doj_check();
                    saj_check();
                    appd_check();
                    dona_check();
                    agdtn_check();
                    comments_check();
                    ref_check();
                    status_check();
                    issecd_check();
                    secamt_check();

                    if(et_err == true && ds_err == true && dep_err == true &&
                    dj_err == true &&
                    sj_err == true &&
                    apd_err == true &&
                    dn_err == true &&
                    ad_err == true &&
                    c_err == true &&
                    rb_err == true &&
                    s_err == true &&
                    sd_err == true &&
                    sa_err == true)
                    {
                        e.preventDefault();
                        var form = $(this).closest('form');
                        var formData = form.serialize();
                        console.log("helllo from erro check");


                        $.ajax({
                            url: '{{ route('submit_ed') }}',
                            method: 'POST',
                            data: formData,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function (response) {
                                console.log(response)
                                alert("hllo jii")
                            },
                            error: function (xhr) {
                                console.log(xhr)
                                alert("hllo jii from error")

                            }
                        });
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


         <div id="docs">
            <form class="form-edit" name="docs" id="docs123">
                @csrf
			<div class="form-row">
				<div class="form-label">
					<label>Employee Name : <span>*</span></label>
				</div>
				<div class="input-field">
					<input name="emp_name" id="emp_name" type="text" class="search-box" placeholder="TestBruck3"/>
					<p class="error-ms" id="enerror" name="enerror"></p>
				</div>
			</div>

            <div class="form-row">
				<div class="form-label">
					<label>Name(Personel Docs) : <span>*</span></label>
				</div>
				<div class="input-field">
					<input name="pdname" id="pdname" type="text" class="search-box" placeholder="TestBruck3"/>
					<p class="error-ms" name="pdnerr" id="pdnerr"></p>
				</div>
			</div>

			<div class="form-row">
				<div class="form-label">
					<label>Personel Documents : <span>*</span></label>
				</div>
				<div class="input-field">
					<input type="file" class="search-box" placeholder="TestBruck3" name="pd" id="pd"/>
                    <p class="error-ms" id="pderror" name="pderror"></p>
				</div>
			</div>

            <div class="form-row">
				<div class="form-label">
					<label>Name(Official Docs) : <span>*</span></label>
				</div>
				<div class="input-field">
					<input name="odname" id="odname" type="text" class="search-box" placeholder="TestBruck3"/>
					<p class="error-ms" name="odnerr" id="odnerr"></p>
				</div>
			</div>

            <div class="form-row">
				<div class="form-label">
					<label>Official Documents : <span>*</span></label>
				</div>
				<div class="input-field">
					<input type="file" class="search-box" placeholder="TestBruck3" name="od" id="od"/>
                    <p class="error-ms" id="oderror" name="oderror"></p>
				</div>
			</div>

			<div class="form-row">
				<div class="form-label">
					<label><span></span> </label>
				</div>
				<div class="input-field">
					<input name="docsave" id="docsave" class="submit-btn" value="Save">
				</div>
			</div>
            </form>

            <script>
                $(document).ready(function(){
                    $('#pdnerr').hide();
                    $('#pderror').hide();
                    $('#odnerr').hide();
                    $('#oderror').hide();

                    var enerr = true;
                    var pdnerr = true;
                    var pderr = true;
                    var odnerr = true;
                    var oderr = true;

                    var regex = /^[a-zA-Z ]*$/;
                    var regex1 = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    $('#pdname').keyup(function()
                    {
                        pdnerr_check();
                    });


                    function  pdnerr_check()
                    {
                        var pdname_val = $('#pdname').val();

                        if(pdname_val.length == '')
                        {
                            $('#pdnerr').show();
                            $('#pdnerr').html("Name is required");
                            pdnerr = false;
                            return false;
                        }
                        else if(!regex.test(pdname_val))
                        {
                            $('#pdnerr').show();
                            $('#pdnerr').html("Invalid Name");
                            pdnerr = false;
                            return false;
                        }
                        else
                        {
                            $('#ncheck').hide();
                        }

                        if(pdname_val.length < 3)
                        {
                            $('#pdnerr').show();
                            $('#pdnerr').html("Name should be atleast 3 characters");
                            pdnerr = false;
                            return false;
                        }
                        else
                        {
                            $('#pdnerr').hide();
                        }
                    }

                    function pd_check()
                    {
                        var pd_val = $('#pd').val();
                        if(pd_val.length == '')
                        {
                            $('#pderror').show();
                            $('#pderror').html("Personel documents are required");
                            pderr= false;
                            return false;
                        }
                        else
                        {
                            $('#pderror').hide();
                        }
                    }

                    $('#odname').keyup(function()
                    {
                        odnerr_check();
                    });


                    function  odnerr_check()
                    {
                        var odname_val = $('#odname').val();

                        if(odname_val.length == '')
                        {
                            $('#odnerr').show();
                            $('#odnerr').html("Name is required");
                            odnerr = false;
                            return false;
                        }
                        else if(!regex.test(odname_val))
                        {
                            $('#odnerr').show();
                            $('#odnerr').html("Invalid Name");
                            odnerr = false;
                            return false;
                        }
                        else
                        {
                            $('#ncheck').hide();
                        }

                        if(odname_val.length < 3)
                        {
                            $('#odnerr').show();
                            $('#odnerr').html("Name should be atleast 3 characters");
                            odnerr = false;
                            return false;
                        }
                        else
                        {
                            $('#odnerr').hide();
                        }
                    }

                    function od_check()
                    {
                        $('#od').change(function() {
                        var fileInput = document.getElementById('od');
                        var files = fileInput.files;

                        if (files.length > 0) {
                        $('#oderror').hide();

                        } else {

                        }
                        });
                        $('#pd').change(function() {
                        var fileInput = document.getElementById('pd');
                        var files = fileInput.files;

                        if (files.length > 0) {
                            $('#pderror').hide();

                        } else {

                        }
                        });

                        var od_val = $('#od').val();
                        if(od_val.length == '')
                        {
                            $('#oderror').show();
                            $('#oderror').html("Official documents are required");
                            oderr= false;
                            return false;
                        }
                        else
                        {
                            $('#oderror').hide();
                        }
                    }

                    $('#docsave').click(function(e){
                        pderr = true;
                        oderr = true;
                        pdnerr = true;
                        odnerr = true;
                        pd_check();
                        od_check();
                        pdnerr_check();
                        odnerr_check();

                        // console.log("hello jjii");


                        if(pderr == true && oderr == true && odnerr == true && pdnerr == true)
                        {
                            e.preventDefault();
                            var form = $(this).closest('form');
                            var formData = form.serialize();

                            $.ajax({
                                url: '{{ route('submit_docs') }}',
                                method: 'POST',
                                data: formData,
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function (response) {
                                    alert(response.message);
                                },
                                error: function (xhr) {
                                    alert("hewllo jiii")
                                }
                            });
                               // $('#docs').submit();
                                return true;
                            }
                            else
                            {
                                return false;
                            }
                    })


                })
            </script>
         </div>

	</div>
	</div>

	</div>
</div>

@include('footer')

<script>

    $(document).ready(function(){
        console.log("im readdy");

    /// $('#form1').hide();
     $('#pdtl1233').show();
     $('#edtl123').hide();
     $('#bank123').hide();
     $('#docs123').hide();

      $('#form1-tab').click(function(){
        console.log("hello hide 1");
        //$('#form1').load('/epd #pdtl, #pdtlvld');
          $('#pdtl1233').show();
          $('#edtl123').hide();
          $('#bank123').hide();
          $('#docs123').hide();

      })

      $('#form2-tab').click(function(){
        //$('#form1').load('/empd #edtl, #edtlvld');
          $('#pdtl1233').hide();
          $('#edtl123').show();
          $('#bank123').hide();
          $('#docs123').hide();
      })

      $('#form3-tab').click(function(){
        //$('#form1').load('/bdtl #bank ,#bankvld');
          $('#pdtl1233').hide();
          $('#edtl123').hide();
          $('#bank123').show();
          $('#docs123').hide();
      })

      $('#form4-tab').click(function(){
        //$('#form1').load('/docs #docs');
          $('#pdtl1233').hide();
          $('#edtl123').hide();
          $('#bank123').hide();
          $('#docs123').show();
      })

        $('.hover-box').click(function() {
            $('.hover-box').css('background-color', '#f0f0f0');
            $(this).css('background-color', '#FF651B');
        });

    })


</script>

</body>
</html>



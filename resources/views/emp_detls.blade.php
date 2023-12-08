
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
	<h1>Edit Users</h1>
	<div class="list-contet">

			<form id="" name="" class="form-edit" method="POST" action="">
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

            {{-- <div class="form-row">
				<div class="form-label">
					<label>Department : <span>*</span></label>
				</div>
				<div class="input-field">
					<input name="dep" id="dep" type="text" class="search-box" placeholder="TestBruck3"/>
                    <p class="error-ms" name="depcheck" id="depcheck"></p>
				</div>
			</div> --}}

            <div class="form-row">
                <div class="form-label">
                    <label>Department : <span>*</span></label>
                </div>
                <div class="input-field">
                    <select name="dep" id="dep" class="search-box">
                        <option value="" disabled selected>Select Department</option>
                        @foreach($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
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
					<input name="save" id="save" type="submit" class="submit-btn" value="Save">
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

            $('#save').click(function(){

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

<div id="edtlvld" name="edtlvld">


</div>

</body>
</html>

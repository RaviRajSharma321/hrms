
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
	<div class="logo"><a href="#"><img src="{{asset('asset/images/logo.png')}}"></a></div>


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
		{{-- <div class="error-message-div error-msg"><img src="images/unsucess-msg.png"><strong>UnSucess!</strong> Your Message hasn't been Send </div> --}}

        <form class="form-edit" name="docs" id="docs123" method="POST" action="{{route('adddocs')}}" >
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

        <input type="hidden" name="aocs" value="{{ $adocs['id'] }}">

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
                <input type="submit" name="docsave" id="docsave" class="submit-btn" value="Save">
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
                    console.log("hello from docs");
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
                            $('#docs123').submit();
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
<div class="footer">
<div class="wrapper">
<p>Copyright © 2014 yourwebsite.com. All rights reserved</p>
</div>

</div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>    
    <title>Waystagemde - Register 1</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
	<link rel="shortcut icon" href="../../favicon.ico" />
    
    <!-- CSS -->       
    <link type="text/css" rel="stylesheet" href="../../css/style.css" />    
    <script type="text/javascript" src="../../js/jquery-2.1.4.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <script type="text/javascript" src="../../js/all.js"></script>
</head>
<body>

<!-- wrapper -->
<div class="maincontainer home">
	<!-- Header -->
	<div class="header">
    	<div class="htop">
        	<div class="wrap cf">
            	<div class="htopleft">
                	<img alt="globe" src="../../images/globeicon.png"><a href="#">French</a>
                </div>
                <div class="htopright cf">
                	<a class="sta" href="../../doctor/register">Get Started</a>
                    <a class="sg" href="../../signin">Sign in</a>
                </div>
            </div>
        </div>
        <div class="hbot">
            <div class="wrap cf">
                <div class="logo"><a href="../../index"><img alt="Waystagemde" src="../../images/logo.png" /></a></div>
                <div class="hbotright cf">
                    <ul class="cf">
                    	<li><a href="http://www.waystage.com#how">how it works</a></li>
                        <li><a href="http://www.waystage.com#fdoc">find a doctor</a></li>
                    </ul>
                    <div class="clr"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <div class="inner_container">
    	<div class="registterformone cf">
        	<div class="regoneimg">
            	<a href="#"><img alt="registerimg" src="../../images/regform1bg.jpg" /></a>
            </div>
            <div class="regoneform">
            	<h3>Your information</h3>
                <div class="regoneforminner">
                	<form action="../../patient/register/step2" enctype="multipart/form-data" method="post">

					    @if(count($errors))
						  <div class="alert alert-danger">
							  <strong>Whoops!</strong> There were some problems with your input.
							  <br/>
							  <ul>
							  @foreach($errors->all() as $error)
							  <li>{{ $error }}</li>
							  @endforeach
							  </ul>
						 </div>
						@endif
						
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
					    <div class="regonefield form-group {{ $errors->has('role') ? 'has-error' : '' }}"><select name="role">Role<option>Patient</option></select></div>
                    	<div class="regonefield form-group {{ $errors->has('First_Name') ? 'has-error' : '' }}"><input type="text" name="First_Name" value="{{ old('First_Name') }}" placeholder="First Name"></div>
                        <div class="regonefield form-group {{ $errors->has('Last_Name') ? 'has-error' : '' }}"><input type="text" name="Last_Name" value="{{ old('Last_Name') }}" placeholder="Last Name"></div>
                        <div class="regonefield form-group {{ $errors->has('email') ? 'has-error' : '' }}"><input type="email" name="email" placeholder="Your Current Email"></div>
                        <div class="regonefield form-group {{ $errors->has('username') ? 'has-error' : '' }}"><input type="text" name="username" value="{{ old('username') }}" placeholder="Create your username"></div>
                        <div class="regonefield form-group {{ $errors->has('password') ? 'has-error' : '' }}"><input type="password" name="password" placeholder="Create a password"></div>
                        <div class="regonefield form-group {{ $errors->has('confrmpass') ? 'has-error' : '' }}"><input type="password" name="confrmpass" placeholder="Confirm your password"></div>
                        <div class="regonesub"><input type="submit" value="Next" name="next"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--  Footer -->
    
    <div class="footer_bottom">
    	<div class="wrap">
        	<div class="copyright"><p>COPYRIGHTS WAYSTAGE MD</p></div>
        </div>
    </div>
    <!--  Footer -->
</div>
<!--// wrapper -->

</body>
</html>

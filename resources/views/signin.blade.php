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
                	<img alt="globe" src="../images/globeicon.png"><a href="#">French</a>
                </div>
                <div class="htopright cf">
                	<a class="sta" href="../patient/register/step1">Get Started</a>
                    <a class="sg" href="../signin">Sign in</a>
                </div>
            </div>
        </div>
        <div class="hbot">
            <div class="wrap cf">
                <div class="logo"><a href="../index"><img alt="Waystagemde" src="../images/logo.png" /></a></div>
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
	 
    <div class="inner_sing">
		<form action="signin" enctype="multipart/form-data" method="POST">
			<div class="signinform">
				@if(session()->has('message'))
				  <div class="alert alert-success">
				{{ session()->get('message') }}
				  </div>
				@endif
				
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
				
				<h3>Sign In to your account below</h3>
				<div class="sigfield form-group {{ $errors->has('type') ? 'has-error' : '' }}">
				<select name="type">Type<option>Doctor</option><option>Patient</option></select>
				</div>
				<div class="sigfield form-group{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"><input name="login" type="text" placeholder="User Name / Email" value="{{ old('username') ?: old('email') }}"></div>
				<div class="sigfield form-group {{ $errors->has('password') ? 'has-error' : '' }}"><input name="password" type="password" placeholder="Password" value="{{ old('password')}}"></div>
				<div class="sbotfield cf">
					<a href="#">Forgot Username or Password?</a>
					<input name="" type="submit" value="Sign in">
				</div>
			</div>
		</form>
        <div class="signbot">
        	Not a member yet? <a href="../../doctor/register">Sign up</a> for free.
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

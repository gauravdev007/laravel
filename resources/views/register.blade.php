<!DOCTYPE html>
<html>
<head>    
    <title>Waystagemde - Register Doctor</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
	<link rel="shortcut icon" href="favicon.ico" />
    
    <!-- CSS --> 	
    <link type="text/css" rel="stylesheet" href="../css/style.css" />    
    <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/all.js"></script>
	
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
    <div class="inner_register">
    	<div class="rwrap">
        	<h3>Join 10,860 topdoctors today, for free!</h3>
            <div class="regdocmid cf">
            	<div class="regdocleft">
                	<h4>Your information</h4>
                    <form action="../doctor/register" enctype="multipart/form-data" method="POST">
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
						
						
						@if(session()->has('message'))
                          <div class="alert alert-success">
                             {{ session()->get('message') }}
                          </div>
                        @endif
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						
						<div class="rdfield form-group {{ $errors->has('role') ? 'has-error' : '' }}"><select name="role"><option>Role</option><option>Doctor</option><option>Patient</option></select></div>
						<div class="rdfield form-group {{ $errors->has('First_Name') ? 'has-error' : '' }}"><input name="First_Name" type="text" placeholder="First Name" value="{{ old('First_Name') }}">
						<span class="text-danger">{{ $errors->first('First Name') }}</span></div>
						<div class="rdfield form-group {{ $errors->has('Last_Name') ? 'has-error' : '' }}"><input name="Last_Name" type="text" placeholder="Last Name" value="{{ old('Last_Name') }}"></div>
						<div class="rdfield form-group {{ $errors->has('email') ? 'has-error' : '' }}"><input name="email" type="email" placeholder="Your Current Mail"></div>
						<div class="rdfield form-group {{ $errors->has('username') ? 'has-error' : '' }}"><input name="username" type="text" placeholder="Create your username"></div>
						<div class="rdfield form-group {{ $errors->has('password') ? 'has-error' : '' }}"><input name="password" type="password" placeholder="Create a password"></div>
						<div class="rdfield form-group {{ $errors->has('speciality') ? 'has-error' : '' }}"><select name="speciality"><option>Speciality</option><option>Speciality1</option><option>Speciality2</option></select></div>
						<div class="rdfield form-group {{ $errors->has('graduate') ? 'has-error' : '' }}"><input name="graduate" type="text" placeholder="Mecial or Graduate School"></div>
						<div class="regsel cf">
						<div class="rdeg form-group {{ $errors->has('degree') ? 'has-error' : '' }}"><select name="degree"><option>Degree</option><option>Degree1</option><option>Degree2</option></select></div>
						<div class="reyear form-group {{ $errors->has('year') ? 'has-error' : '' }}"><select name="year"><option>Year</option><option>2017</option><option>2018</option></select></div>
						</div>
						<div class="rdfield form-group {{ $errors->has('profession') ? 'has-error' : '' }}"><input name="profession" type="text" placeholder="Professiona License#"></div>
						<div class="rdfield form-group {{ $errors->has('state/country') ? 'has-error' : '' }}"><select name="country"><option>State/Country</option><option>India</option><option>USA</option></select></div>
						<div class="regdoccheck form-group {{ $errors->has('newsletter') ? 'has-error' : '' }}">
							<div class="regchk"  name="newsletter">
								<input type="checkbox" id="newsletter" />
								<label><span></span></label><p>By signing up  you agree our <a href="../term_of_use">Terms of Service</a> and <a href="../privacy">Privacy Policy.</a></p>
							</div>
						</div>
						<div class="regdocsub"><input name="" type="submit" value="SIGN UP"></div>
                    </form>
                </div>
                <div class="regdocright">
                	<div class="learnmore">Learn More</div>
                    <div class="hdrvideo">
                    <!--<a title="video" href="#" rel="https://www.youtube.com/embed/ymAv7s38E8I?rel=0&amp;autoplay=1" class="vplaybtn">
                    	<img src="images/youtube.png" alt="">
                    </a>-->
                    <video width="100%"  controls>  <source src="../mp4/waystage.mp4" type="video/mp4"></video>
                    </div>
                    <h3>Benefits for you</h3>
                    <ul>
                    	<li>Enhance your reputation</li>
                        <li>Grow your practice</li>
                        <li>Help people near your and millions everywhere</li>
                        <li>Free Catalgue 1 CME</li>
                    </ul>
                </div>
                
                
                <div id="hdrvideo">
                <div class="vcont">
                    <div class="pclose">X</div>
                    <iframe src="" allowfullscreen></iframe>
                </div>
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

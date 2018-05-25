<!DOCTYPE html>
<html>
<head>    
    <title>Waystagemde - Register 2</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
	<link rel="shortcut icon" href="favicon.ico" />
    
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
                	<a class="sta" href="../../patient/register/step1">Get Started</a>
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
    	<div class="registterformtwo cf">
        	<div class="regtwoimg">
            	<a href="#"><img alt="registerimg" src="../../images/regform2bg.jpg" /></a>
            </div>
            <div class="regtwoform">
            	<h3>Your information</h3>
                <div class="regtwoforminner">
                	<form action="../../patient/regsiter/step3">
                    	<div class="regtwofield form-group {{ $errors->has('dob') ? 'has-error' : '' }}">
                        	<label>Date of Birth</label>
                        	<input type="text" name="dob" value="{{ old('dob') }}" placeholder="mm/dd/yyy">
                        </div>
                        <div class="regtwofield form-group {{ $errors->has('phone') ? 'has-error' : '' }}"><input type="text"  name="phone" value="{{ old('phone') }}" placeholder="Phone Number"></div>
                        <div class="regtwofield form-group {{ $errors->has('zip') ? 'has-error' : '' }}"><input type="text" name="zip" value="{{ old('zip') }}" placeholder="Zip Code"></div>   
                        <div class="regtworadio">
                        	<div class="radiodiv">                            	
                        		<input type="radio" id="male" name="gender" value="male"/>
                            	<label for="male"><span></span>Male</label>
                            </div>
                            <div class="radiodiv">
                        		<input type="radio" id="Female" name="gender" value="Female" />
                            	<label for="Female"><span></span>Female</label>
                            </div>
                        </div>
                        <div class="regtworadio">
                        	<p>Are you open to treatment abroad, if applicable, in your case</p>
                        	<div class="radiodiv">                            	
                        		<input type="radio" id="yes" name="treatment" value="yes"/>
                            	<label for="yes"><span></span>Yes</label>
                            </div>
                            <div class="radiodiv">
                        		<input type="radio" id="no" name="treatment" value="no" />
                            	<label for="no"><span></span>No</label>
                            </div>
                        </div>
                        <div class="regtwocheck">
                        	<div class="regchk">
                                <input type="checkbox" id="newsletter" name="newsletter"/>
                                <label for="newsletter"><span></span></label><p>I agree to the <a href="../../term_of_use">Terms of Service</a> and <a href="../../privacy">Privacy Policy.</a></p>
                            </div>
                        </div> 
                        <div class="regtwobot cf">
                        	<a class="but" href="../../patient/regsiter/step1">< Back</a>	                    
                        	<div class="regtwosub"><input type="submit" value="Create Account"></div>
                        </div>
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

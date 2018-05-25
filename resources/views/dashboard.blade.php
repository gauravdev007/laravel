<!DOCTYPE html>
<html>
<head>    
    <title>Personal Profile</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
	<link rel="shortcut icon" href="../favicon.ico" />
    
    <!-- CSS -->       
    <link type="text/css" rel="stylesheet" href="../css/style_dashboard.css" />    
    <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/all.js"></script>
</head>
<body>

<!-- wrapper -->
<div class="maincontainer personalprofile">
	<div class="dnew_header">
    	<div class="dnewwrap cf">
        	<div class="dnewlogo">
            	<a href="../index"><img alt="waystage" src="../images/logo.png" /></a>
            </div>
            <div class="dnicons">
            	<a href="#"><img alt="iconew1" src="../images/iconnew1.jpg" /></a>
                <a href="#"><img alt="iconew2" src="../images/iconew2.jpg" /></a>
            </div>
        </div>
    </div>
    <div class="dnew_mid">
    	<div class="dnewwrap cf">
        	<div class="dnewmidleft">
            	<div class="dnewdocimg">
                	<img alt="doctorimg" src="../images/docmimg.jpg" />
                    <h3>Dr. Zingwa Schwbe</h3>
               	</div>
                <div class="dnewlmenus">
                	<ul>
                    	<li class="m1"><a href="../doctor/dashboard"><span><img alt="micon1" src="../images/micon1.png" /></span>Personal Profile</a></li>
				      
                        <li class="m2"><a href="../doctor/dashboard/feesandpayment"><span><img alt="micon2" src="../images/micon2.png" /></span>Fees & Payment</a></li>
                        <li class="m3"><a href="../doctor/dashboard/myavailability"><span><img alt="micon3" src="../images/micon3.png" /></span>My Availability</a></li>
                        <li class="m4"><a href="../doctor/dashboard/myappointment"><span><img alt="micon4" src="../images/micon4.png" /></span>My Appointments</a></li>
                    </ul>
                </div>
            </div>
			<form action="../doctor/dashboard" enctype="multipart/form-data" method="POST">
            <div class="dnewmidright personalpright">
            	
            	<h4>Personal Profile</h4>
				
				        @if(session()->has('message'))
							  <div class="alert alert-success">
							{{ session()->get('message') }}
							  </div>
						@endif
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
                <span class="mand">Fields with * are mandatory</span>  
               				
                <div class="dnewfield">
                	<label>Enter abbreviations following your names as you wish them to appear</label>
                    <input type="text" name="abbreviation" value="{{ old('abbreviation')}}">
					
                </div>
                <div class="dfield2">
                	<div class="dfield2inner cf form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    	<label>Email Address *</label>
                        <input type="email" name="email" value="{{ old('email')}}">
						@if ($errors->has('email'))
							<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
                        @endif
                    </div>
                    <div class="dfield2inner cf">
                    	<label>Alternate Email</label>
                        <input type="email" name="alternate_email" value="{{ old('alternate_email')}}">
                    </div>
                </div>
                <div class="dfield3 cf">
                	<label>Password</label>
                    <input name="" type="password" placeholder="*********" name="password">
                    <a href="#">(Change Password)</a>
                </div>
                <div class="dfield4 cf \">
                	<div class="dfield4top cf form-group">
						<label>First Name *</label>
                    	<div class="dfinput"><input name="fname" type="text" value="{{ Session::get('first_name')}}"></div>
			
                    </div> 
                    <div class="dfield4bot cf form-group {{ $errors->has('lname') ? 'has-error' : '' }}">
						<label>Last Name *</label>
                    	<div class="dfinput"><input name="lname" type="text"  value="{{ old('lname')}}"></div>
						@if ($errors->has('lname'))
							<span class="help-block">
								<strong>{{ $errors->first('lname') }}</strong>
							</span>
                        @endif
                    </div>               	
                </div>  
                <div class="dfield5 cf">
                	<div class="dfield5in cf form-group {{ $errors->has('address') ? 'has-error' : '' }}">
						<label>Address Line 1 *</label>
                    	<div class="dfinput"><input name="address" type="text"  value="{{ old('address')}}"></div>
						@if ($errors->has('address'))
							<span class="help-block">
								<strong>{{ $errors->first('address') }}</strong>
							</span>
                        @endif
                    </div> 
                    <div class="dfield5in cf form-group {{ $errors->has('city') ? 'has-error' : '' }}">
						<label>City *</label>
                    	<div class="dfinput"><input name="city" type="chracter" value="{{ old('city')}}" ></div>
						@if ($errors->has('city'))
							<span class="help-block">
								<strong>{{ $errors->first('city') }}</strong>
							</span>
                        @endif
                    </div> 
                    <div class="dfield5in cf form-group {{ $errors->has('zip') ? 'has-error' : '' }}">
						<label>Postal / Zip Code *</label>
                    	<div class="dfinput"><input name="zip" type="number" value="{{ old('zip')}}"></div>
						@if ($errors->has('zip'))
							<span class="help-block">
								<strong>{{ $errors->first('zip') }}</strong>
							</span>
                        @endif
                    </div>  
                    <div class="dfield5in cf form-group {{ $errors->has('country') ? 'has-error' : '' }}">
						<label>Country *</label>
                    	<div class="dfinput"><select name="country"><option>India</option><option>USA</option><option>UK</option></select></div>
						@if ($errors->has('country'))
							<span class="help-block">
								<strong>{{ $errors->first('country') }}</strong>
							</span>
                        @endif
                    </div> 
                    <div class="dfield5in cf form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
						<label>Mobile  / Cell Number *</label>
                    	<div class="dfinputtwo cf">
                        	<div class="dftwo1"><input name="phone" type="number"  value="{{ old('phone')}}" ></div>
                        </div>
						@if ($errors->has('phone'))
							<span class="help-block">
								<strong>{{ $errors->first('phone') }}</strong>
							</span>
                        @endif
                    </div>  
                    <div class="dfield5in cf">
						<label>My Bio</label>
                    	<div class="dfinput"><textarea name="bio"></textarea></div>
                    </div>          	
                </div>                
                <div class="pmformsub cf">
                    <button class="savebut2 save" type="submit">Save</button>

                </div>
                
            </div>
			</form>
        </div>
    </div>
    <div class="secfooter">
    	<p>Copyrights Waystage MD</p>
    </div>
</div>
<!--// wrapper -->

</body>
</html>

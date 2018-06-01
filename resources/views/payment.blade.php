<!DOCTYPE html>
<html>
<head>    
    <title>Payment</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
	<link rel="shortcut icon" href="../favicon.ico" />
    
    <!-- CSS -->       
    <link type="text/css" rel="stylesheet" href="../css/style_dashboard.css" />    
    <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/dash.js"></script>
</head>
<body>

<!-- wrapper -->
<div class="maincontainer doctormain">
	<div class="sections cf">
    	<!-- Left Section -->
    	<div class="left_section">
        	<div class="left_logo">
            	<div class="leftlogoimg">
                	<a href="../index"><img alt="waystage" src="../images/logo.png" /></a>
                </div>
                <div class="logotext"><p><strong>4 Steps</strong> &amp; you are with your doctor</p></div>
            </div>
            <div class="left_menu">
            	<div class="leftmenu_top">
                    <ul>
                        <li><a href="../patient/healthhistory"><span>1</span>My health profile</a></li>
                        <li><a href="../patient/finddoctor"><span>2</span>Find a doctor</a></li>
                        <li><a href="../patient/uploadfiles"><span>3</span>Upload files</a></li>
                        <li class="active"><a href="../patient/payment"><span>4</span>Payment</a></li>
                    </ul>
                </div>
                <div class="leftmenu_bottom">
                	<ul>
                    	<li class="one"><a href="../patient/consultationhistory">Consultation History</a></li>
						<li class="two"><a href="../patient/planformedical">Plans for Medical Treatment</a></li>
                    </ul>
                </div>
            </div>
            <div class="left_bottom"> &nbsp; </div>
        </div>
        
        <!-- Right Section -->
        <div class="right_section">
        	<div class="rightsectop cf">
            	<ul>
                	<li class="pmenu"><a href="#">Hi Raouf</a></li>
                    <li class="nmenu"><a href="#"><span>2</span>Notification</a></li>
                </ul>
            </div>
            <div class="rightsecmid">
				<div class="payment_mid">
					<form action="../patient/payment" enctype="multipart/form-data" method="POST">
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

						<div class="paymentoprow cf"><span class="one">Billing Details</span><span class="two">Payment Details</span><!--<a class="pupload" href="#">UPLOAD</a>--></div>
						<!--<div class="prowtwo cf"><span class="one">Filename & Comment</span><span class="two">Data Fields Used</span></div>-->
						<div class="paymentcontent cf">
							<div class="pcontentleft">
								<div class="payfield form-group {{ $errors->has('fname') ? 'has-error' : '' }}"><input name="fname" type="text" placeholder="First Name" value="{{ old('fname') }}"></div>
								<div class="payfield form-group {{ $errors->has('lname') ? 'has-error' : '' }}"><input name="lname" type="text" placeholder="Last Name" value="{{ old('lname') }}"></div>
								<div class="payfield form-group {{ $errors->has('address') ? 'has-error' : '' }}"><input name="address" type="string" placeholder="Address" value="{{ old('address') }}"></div>
								<div class="paymentboxes cf">
									<div class="payfield pfleft form-group {{ $errors->has('apt') ? 'has-error' : '' }}"><input name="apt" type="text" placeholder="Apt/Suite" value="{{ old('apt') }}"></div>
									<div class="payfield pfright form-group {{ $errors->has('city') ? 'has-error' : '' }}"><input name="city" type="text" placeholder="City" value="{{ old('city') }}"></div>
								</div>
								<div class="paymentsel cf">
									<div class="pseldiv pfleft form-group {{ $errors->has('wisconisin') ? 'has-error' : '' }}"><select name="wisconisin" value="{{ old('wisconisin') }}"><option>Wisconisin</option><option>Wisconisin1</option><option>Wisconisin2</option></select></div>
									<div class="payfield pfright form-group {{ $errors->has('zip') ? 'has-error' : '' }}"><input name="zip" type="number" placeholder="Zipcode" value="{{ old('zip') }}"></div>
								</div>
							</div>
							<div class="pcontentright">
								<div class="pcontentrightone cf">
									<div class="payfield pcard form-group {{ $errors->has('card') ? 'has-error' : '' }}"><input name="card" type="number" placeholder="Card Number"></div>
									<div class="payfield pcvv form-group {{ $errors->has('cvv') ? 'has-error' : '' }}"><input name="cvv" type="number" placeholder="CVV"></div>
								</div>
								<div class="pcontentrighttwo cf">
									<div class="payfield pmm form-group {{ $errors->has('mm') ? 'has-error' : '' }}"><input name="mm" type="month" size="2" placeholder="MM"></div>
									<div class="payfield pyy form-group {{ $errors->has('yy') ? 'has-error' : '' }}"><input name="yy" type="year" size="2" placeholder="YY"></div>
								</div>
								<div class="pcontentrightthree cf">
									<div class="payfield pcoupon form-group {{ $errors->has('coupan') ? 'has-error' : '' }}"><input name="coupan" type="text" placeholder="Coupon Code"></div>
									<div class="payfsub "><input name="" value="Apply"></div>
								</div>
								<div class="pcontrightbottom">
									<!--<p>Payment Breakdown</p>
									<p>Visit Total</p>
									<p>MDLIVE Balance</p>-->
									<div class="paytotal cf">
										<span class="one">Total Cost Today </span>
										<span class="two" name="totalcost">$59</span>
									</div>
									<div class="paycheckboxes">
										<div class="paycheckbox">
											<div class="pbchk form-group {{ $errors->has('certified') ? 'has-error' : '' }}">
												<input type="checkbox" id="certified" name="certified"/>
												<label for="certified"><span></span></label><p>I certify that I have read and accept the terms of WAYSTAGEMD.</p>
											</div>
											<div class="pbchk form-group {{ $errors->has('privacy') ? 'has-error' : '' }}">
												<input type="checkbox" id="privacy" name="privacy"/>
												<label for="privacy"><span></span></label><p>I have read WAYSTAGEMD’s Privacy Policy and I acknowledge that I have the ability to print a hard copy of the <a href="#">Privacy Policy</a> for my records</p>
											</div>
										</div>
										<div class="schvisit"><input type="submit" value="SCHEDULE VISIT"></div>
									</div>
								</div>
							</div>
						</div>                    
					</form>
				</div>
            </div>            
        </div>        
    </div>
    <div class="secfooter">
    	<p>Copyrights Waystage MD</p>
    </div>
</div>
<!--// wrapper -->

</body>
</html>

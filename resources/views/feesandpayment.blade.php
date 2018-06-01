<!DOCTYPE html>
<html>
<head>    
    <title>Fees and Payment</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
	<link rel="shortcut icon" href="../../favicon.ico" />
    
    <!-- CSS -->       
    <link type="text/css" rel="stylesheet" href="../../css/style_dashboard.css" />    
    <script type="text/javascript" src="../../js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="../../js/all.js"></script>
</head>
<body>

<!-- wrapper -->
<div class="maincontainer feesmain">
	<div class="dnew_header">
    	<div class="dnewwrap cf">
        	<div class="dnewlogo">
            	<a href="../../index"><img alt="waystage" src="../../images/logo.png" /></a>
            </div>
            <div class="dnicons">
            	<a href="#"><img alt="iconew2" src="../../images/iconew2.jpg" /></a>
            	<a href="#"><img alt="iconew1" src="../../images/iconnew1.jpg" /></a>
            </div>
        </div>
    </div>
    <div class="dnew_mid">
    	<div class="dnewwrap cf">
        	<div class="dnewmidleft">
            	<div class="dnewdocimg">
                	<img alt="doctorimg" src="../../images/docmimg.jpg" />
                    <h3>Dr. Zingwa Schwbe</h3>
               	</div>
                <div class="dnewlmenus">
                	<ul>
                    	<li class="m1"><a href="../../doctor/dashboard"><span><img alt="micon1" src="../../images/micon1.png" /></span>Personal Profile</a></li>
                        <li class="m2"><a href="../../doctor/dashboard/feesandpayment"><span><img alt="micon2" src="../../images/micon2.png" /></span>Fees & Payment</a></li>
                        <li class="m3"><a href="../../doctor/dashboard/myavailability"><span><img alt="micon3" src="../../images/micon3.png" /></span>My Availability</a></li>
                        <li class="m4"><a href="../../doctor/dashboard/myappointment"><span><img alt="micon4" src="../../images/micon4.png" /></span>My Appointments</a></li>
                    </ul>
                </div>
            </div>
            <div class="dnewmidright">
            	<div class="feesdiv">
				 @if(session()->has('message'))
							  <div class="alert alert-success">
							{{ session()->get('message') }}
							  </div>
				@endif
            		<h3>my fees</h3>   
                    <div class="feesdivtable">
                    	<div class="ftableh cf">
                        	<div class="fcol1">#</div>
                            <div class="fcol2">Loremipsum</div>
                            <div class="fcol3">Blabla</div>
                            <div class="fcol4">&nbsp;</div>
                            <div class="fcol5 cf"><a class="but1" href="#">update</a><a class="but2" href="#">cancel</a></div>
                        </div>
                        <div class="ftabledata cf">
                        	<div class="fcol1">Medical Treatment</div>
                            <div class="fcol2">200</div>
                            <div class="fcol3">X</div>
                            <div class="fcol4">&nbsp;</div>
                            <div class="fcol5 cf"><a class="but1" href="#">edit</a></div>
                        </div>
                        <div class="ftabledata cf">
                        	<div class="fcol1">Surgical intervention</div>
                            <div class="fcol2">X</div>
                            <div class="fcol3">220</div>
                            <div class="fcol4">&nbsp;</div>
                            <div class="fcol5 cf"><a class="but1" href="#">edit</a></div>
                        </div>
                        <div class="ftabledata cf">
                        	<div class="fcol1">Period of time</div>
                            <div class="fcol2">3 days</div>
                            <div class="fcol3">10 days</div>
                            <div class="fcol4">&nbsp;</div>
                            <div class="fcol5 cf"><a class="but1" href="#">edit</a></div>
                        </div>
                    </div>  
                    <div class="ftablenum cf">
                    	<div class="ftablenumleft cf">
                        	<a class="first" href="#">«</a>
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a class="last" href="#">»</a>
                        </div>
                        <div class="ftablenumright">11 - 15 of 88 items</div>
                    </div>   
                </div>
                <div class="paymentdiv">
                	<h3>payment information</h3>
                    <div class="paymentdform">
                    	<div class="pmformfield cf"><label>Your Account Number *</label><input name="" type="text" required></div>
                        <div class="pmformfield cf"><label>Bank Name *</label><input name="" type="text" required></div>
                        <div class="pmformfield cf"><label>Comments</label><textarea name=""></textarea></div>
                        <div class="pmformsub cf">
                        	<a class="savebut2" href="#">Save</a>
                        	<a class="savebut1" href="#">Save and continue</a>                            
                        </div>
                    </div>
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

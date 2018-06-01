<!DOCTYPE html>
<html>
<head>    
    <title>Upload Files</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
	<link rel="shortcut icon" href="../favicon.ico" />
    
    <!-- CSS -->       
    <link type="text/css" rel="stylesheet" href="../css/style_dashboard.css" />    
    <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
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
                        <li class="active"><a href="../patient/uploadfiles"><span>3</span>Upload files</a></li>
                        <li><a href="../patient/payment"><span>4</span>Payment</a></li>
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
                	<li class="pmenu"><a href="#">{{Session::get('username')}}</a></li>
                    <li class="nmenu"><a href="#"><span>2</span>Notification</a></li>
                </ul>
            </div>
            <div class="rightsecmid">
                <form action="../patient/uploadfiles" enctype="multipart/form-data" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="upfilesmid">
						<div class="upfilestoprow cf">
							<span>All Files</span>
                            <div class="uftpinput_main_div">
								<div class="uftpinput uftpinput-1">
									<input name="files" type="file" />
								</div>
								<div class="uftpinput">
									<input name="upload" type="submit" value="UPLOAD">
								</div>
						    </div>
						</div>
						<div class="upfileslists">
						    <div class="upfilesth cf">
                        	   <div class="upfilethcol1">Filename & Comment</div>
                               <div class="upfilethcol2">Description</div>
                            </div>
                            
							    @foreach ($users as $user)
                                    <div class="upfilesrow cf">
										<div class="uprowpdf"><img alt="pdf" src="../images/pdficon.png" /></div>
								        <div class="upfilethcol1">
								          {{ $user->file}}
                                        </div>
                                        <div class="upfilescol2">Leases</div>										
                                        <div class="upfilescol3 cf">
											<a class="preview" href="{{url('../files',$user->file)}}" target="_blank">Preview</a>
											<a class="crossbut" href="{{ url('patient/uploadfiles',$user->id) }}"
										    ><img alt="" src="../images/crossbut.png" /></a>
                                        </div>
									</div>
                                    <br>
							    @endforeach
							
						</div>
					</div>
                </form>
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

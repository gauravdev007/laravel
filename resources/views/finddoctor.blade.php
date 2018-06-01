<!DOCTYPE html>
<html>
<head>    
    <title>Find a Doctor</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
	<link rel="shortcut icon" href="favicon.ico" />
    
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
                        <li class="active"><a href="../patient/finddoctor"><span>2</span>Find a doctor</a></li>
                        <li><a href="../patient/uploadfiles"><span>3</span>Upload files</a></li>
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
            	<div class="doctormid">
                	<div class="docmtop">
						<h1>Find a Doctor</h1>
                    	<p>All Doctors are board-certified, exteremely qualified and ready to server you now.</p>
                    </div>
                    <div class="docmmid">
                    	<div class="docsearch"><input name="" type="text" placeholder="Speciality, treatment"></div>
                        <div class="docsbuts">
                        	<div class="docsbt">
                        		<a class="danchor" href="#">
                                	<span class="one">Browse by Speciality</span>
                                    <span class="two"><img alt="backarrow" src="../images/backarrow.png" /> Back to All Categories</span>
                                </a>
                                <div class="docdd">
                                	<div class="alpha">A</div>
                                	<ul>
                                    	<li><a href="#">Audioprothésiste</a></li>
                                    </ul>
                                    <div class="alpha">B</div>
                                    <ul>
										<li><a href="#">Cancérologue</a></li>
                                        <li><a href="#">Cardiologue</a></li>
                                        <li><a href="#">Chirurgien de l'Obésité</a></li>
                                        <li><a href="#">Chirurgien esthétique</a></li>                                    
                                    </ul>
                                    <div class="alpha">C</div>
                                    <ul>
                                        <li><a href="#">Dentiste</a></li>
                                        <li><a href="#">Dermatologue</a></li>
                                        <li><a href="#">Diététicien</a></li>                                    
                                    </ul>
                                    <div class="alpha">G</div>
                                    <ul>
                                        <li><a href="#">Gynécologue</a></li>                                    
                                    </ul>
                                    <div class="alpha">K</div>
                                    <ul>
                                    	<li><a href="#">Kinésithérapeute</a></li>
                                    </ul>
                                    <div class="alpha">N</div>
                                    <ul>
                                    	<li><a href="#">Neurologue</a></li>
                                    </ul>
                                    <div class="alpha">O</div>
                                    <ul>
                                        <li><a href="#">Ophtalmologue</a></li>
                                        <li><a href="#">Oto-Rhino-Laryngologiste (ORL)</a></li>                                    
                                    </ul>
                                    <div class="alpha">P</div>
                                    <ul>
                                        <li><a href="#">Pédiatre</a></li>
                                        <li><a href="#">Psychiatre</a></li>
                                        <li><a href="#">Psychologue</a></li>                                    
                                    </ul>
                                    <div class="alpha">R</div>
                                    <ul>
                                        <li><a href="#">Radiologue</a></li>
                                        <li><a href="#">Rhumatologue</a></li>                                    	
                                    </ul>
                                    
                                    <div class="alpha">U</div>
                                    <ul>
										<li><a href="#">Urologue</a></li>                                    
                                    </ul>
                                </div>
                            </div>
                            <div class="docsbt">
                            	<a class="danchor" href="#">
                                	<span class="one">Browse by Treatment</span>
                                    <span class="two"><img alt="backarrow" src="images/backarrow.png" /> Back to All Categories</span>
                                </a>
                                <div class="docdd">
                                	<div class="alpha">C</div>
                                	<ul>
                                    	<li><a href="#">Chirurgie bariatrique</a></li>
                                        <li><a href="#">Chirurgie dentaire</a></li>
                                        <li><a href="#">Chirurgie esthétique</a></li>
                                        <li><a href="#">Chirurgie yeux au laser</a></li>
									<ul>
                                    <div class="alpha">D</div>
                                    <ul>
                                    	<li><a href="#">Dentisterie esthétique</a></li>
                                    </ul>
                                    <div class="alpha">I</div>
                                    <ul>
                                    	<li><a href="#">Implant dentaire</a></li>
                                    </ul>
                                    <div class="alpha">O</div>
                                    <ul>
                                    	<li><a href="#">Orthodontie</a></li>
                                    </ul>
                                    <div class="alpha">P</div>
                                    <ul>
                                    	<li><a href="#">Physiothérapie</a></li>
                                        <li><a href="#">prothèses dentaires</a></li>
                                    </ul>
                                    <div class="alpha">R</div>
                                    <ul>
                                    	<li><a href="#">Restaurations</a></li>
                                    </ul>
                                    <div class="alpha">T</div>
                                    <ul>
                                    	<li><a href="#">Traitement de Canal</a></li>
                                        <li><a href="#">Traitement des gencives</a></li>
                                        <li><a href="#">Traitement du bruxisme</a></li>
                                    </ul>
                                </div>
                            </div>
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

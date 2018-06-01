<!DOCTYPE html>
<html>
<head>    
    <title>Health History</title>
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
<div class="maincontainer historycontainer defubg">
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
                        <li class="active"><a href="../patient/healthhistory"><span>1</span>My health profile</a></li>
                        <li><a href="../patient/finddoctor"><span>2</span>Find a doctor</a></li>
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
                	<li class="pmenu"><a href="#">Hi Raouf</a></li>
                    <li class="nmenu"><a href="#"><span>2</span>Notification</a></li>
                </ul>
            </div>
            <div class="rightsecmid">
            	<div class="rsmid">
                	<div class="resmidtop cf">
                    	<div class="rsprofile">
                        	<img alt="profile" src="../images/profilebig.png" />
                            <div class="inputfile-box">
                            	<input type="file" id="file" class="inputfile" onchange='uploadFile(this)' />
                            	<label for="file">
                            		<span id="file-name" class="file-box"></span>
                            		<span class="file-button">Change photo</span>
                            	</label>
                            </div>
                        </div>
                        <div class="rsmright">
                        	<span class="lu">Last updated on 01/18/2018</span>
                            <div class="clr"></div>
                            <h1>{{Session::get('username')}}</h1>
                            <div class="pc">Your profile is <strong>15%</strong> complete</div>
                            <div class="profilebar"><span style="width:10%;"></span></div>
                            <div class="his">Please complete <strong>My Health</strong> History and <strong>My Lifestyle</strong> questions</div>
                        </div>
                    </div>
                    <div class="rsmidbot cf">
                    	<div class="rstabs">
                        	<ul class="tabmenu cf">
                            	<li><a href="#tab1">My Health History</a></li>
                                <li><a href="#tab2">My Life Style</a></li>
                                <li><a href="#tab3">My Family History</a></li>
                            </ul>
                        </div>
                        <div class="rstabdetail rstabdetail1">
                        	<div class="tabs" id="tab1">
                            	<p>Does anyone in your family have the following? (Check all that </p>
                                <div class="rstdetail1 cf">
									<div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="Asthma1" name="disease" />
                                                <label for="Asthma1"><span></span></label><p>Asthma</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div>  
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="Cancer1" name="disease" />
                                                <label for="Cancer1"><span></span></label><p>Cancer</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div>  
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="Cystic1" name="disease"/>
                                                <label for="Cystic1"><span></span></label><p>Cystic Fibrosis</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div>
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="Diabetes1" name="disease"  />
                                                <label for="Diabetes1"><span></span></label><p>Diabetes</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div> 
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="Earlyunexplained1" name="disease"/>
                                                <label for="Earlyunexplained1"><span></span></label><p>Early/Unexplained Death</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div>
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="Elevated1" name="disease"/>
                                                <label for="Elevated1"><span></span></label><p>Elevated Cholestrerol</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div>    
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="HeartDisease1" name="disease"/>
                                                <label for="HeartDisease1"><span></span></label><p>Heart Disease</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div> 
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="HighBloodPressure1" name="disease"/>
                                                <label for="HighBloodPressure1"><span></span></label><p>High Blood Pressure</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div>  
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="MetabolicDisease1" name="disease"/>
                                                <label for="MetabolicDisease1"><span></span></label><p>Metabolic Disease</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div>
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="SeasonalAllergies1" name="disease"/>
                                                <label for="SeasonalAllergies1"><span></span></label><p>Seasonal Allergies</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div> 
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="SickleCellAnemia1" name="disease"/>
                                                <label for="SickleCellAnemia1"><span></span></label><p>Sickle Cell Anemia</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div>
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="Stroke1" name="disease"/>
                                                <label for="Stroke1"><span></span></label><p>Stroke</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div> 
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="ThyroidDisease1" name="disease"/>
                                                <label for="ThyroidDisease1"><span></span></label><p>Thyroid Disease</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div>
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox rstcheckboxlast">
                                        	<div class="regchk">
                                                <input type="checkbox" id="Other1" name="disease"/>
                                                <label for="Other1"><span></span></label><p>Other</p>
                                            </div>
                                        </div>
                                        <div class="rstother cf">
                                        	<input class="rstext" type="text">
                                            <input class="rstbut" type="submit" value="ADD">
                                            <input class="rstbut rstbut_add_2" type="submit" value="SUBMIT">
                                        </div>
                                    </div>                  	
                                </div>
                            </div>
                            <div class="tabs" id="tab2">
                            	<p>Does anyone in your family have the following? (Check all that </p>
                                <div class="rstdetail1 cf">
									<div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="Asthma2" />
                                                <label for="Asthma2"><span></span></label><p>Asthma</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div>  
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="Cancer2" />
                                                <label for="Cancer2"><span></span></label><p>Cancer</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div>  
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="Cystic2" />
                                                <label for="Cystic2"><span></span></label><p>Cystic Fibrosis</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div>
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="Diabetes2" />
                                                <label for="Diabetes2"><span></span></label><p>Diabetes</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div> 
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="Earlyunexplained2" />
                                                <label for="Earlyunexplained2"><span></span></label><p>Early/Unexplained Death</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div>
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="Elevated2" />
                                                <label for="Elevated2"><span></span></label><p>Elevated Cholestrerol</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div>    
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="HeartDisease2" />
                                                <label for="HeartDisease2"><span></span></label><p>Heart Disease</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div> 
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="HighBloodPressure2" />
                                                <label for="HighBloodPressure2"><span></span></label><p>High Blood Pressure</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div>  
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="MetabolicDisease2" />
                                                <label for="MetabolicDisease2"><span></span></label><p>Metabolic Disease</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div>
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="SeasonalAllergies2" />
                                                <label for="SeasonalAllergies2"><span></span></label><p>Seasonal Allergies</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div> 
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="SickleCellAnemia2" />
                                                <label for="SickleCellAnemia2"><span></span></label><p>Sickle Cell Anemia</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div>
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="Stroke2" />
                                                <label for="Stroke2"><span></span></label><p>Stroke</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div> 
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox">
                                        	<div class="regchk">
                                                <input type="checkbox" id="ThyroidDisease2" />
                                                <label for="ThyroidDisease2"><span></span></label><p>Thyroid Disease</p>
                                            </div>
                                        </div>
                                        <div class="rstselect">
                                        	<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
                                        </div>
                                    </div>
                                    <div class="rstboxes cf">
                                    	<div class="rstcheckbox rstcheckboxlast">
                                        	<div class="regchk">
                                                <input type="checkbox" id="Other2" />
                                                <label for="Other2"><span></span></label><p>Other</p>
                                            </div>
                                        </div>
                                        <div class="rstother cf">
                                        	<input class="rstext" type="text">
                                            <input class="rstbut" type="submit" value="ADD">
											<input class="rstbut rstbut_add_2" type="submit" value="SUBMIT">
                                        </div>
                                    </div>                  	
                                </div>
                            </div>
                            <form action="../patient/healthhistory" enctype="multipart/form-data" method="POST">
					            <input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="tabs" id="tab3">
									<p>Does anyone in your family have the following? (Check all that </p>

									<div class="rstdetail1 cf">
										@foreach($checkbox as $check)
									
	                                       <?php $checkedcheckbox= explode(",", $check->health_problem); ?>
	                                     
											<div class="rstboxes cf">
												<div class="rstcheckbox">
													<div class="regchk">
					                                   <input type="checkbox" id="Asthma3" name="health_problem[]" value="Asthma"  {{
													   $checkedcheckbox==='Asthma' ? 'checked' : '' } />
														<label for="Asthma3"><span></span></label><p>Asthma</p>
													</div>
												</div>
												<div class="rstselect">
													<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
												</div>
											</div>  
											<div class="rstboxes cf">
												<div class="rstcheckbox">
													<div class="regchk">
														<input type="checkbox" id="Cancer3" name="health_problem[]" value="Cancer" {{ $checkedcheckbox=== 'Cancer' ? 'checked' : '' }}/>
														<label for="Cancer3"><span></span></label><p>Cancer</p>
													</div>
												</div>
												<div class="rstselect">
													<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
												</div>
											</div>  
											<div class="rstboxes cf">
												<div class="rstcheckbox">
													<div class="regchk">
														<input type="checkbox" id="Cystic3" name="health_problem[]" value="Cystic Fibrosis" {{ $checkedcheckbox === 'Cystic Fibrosis' ? 'checked' : '' }}/>
														<label for="Cystic3"><span></span></label><p>Cystic Fibrosis</p>
													</div>
												</div>
												<div class="rstselect">
													<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
												</div>
											</div>
											<div class="rstboxes cf">
												<div class="rstcheckbox">
													<div class="regchk">
														<input type="checkbox" id="Diabetes3" name="health_problem[]" value="Diabetes" {{ $checkedcheckbox=== 'Diabetes' ? 'checked' : '' }}/>
														<label for="Diabetes3"><span></span></label><p>Diabetes</p>
													</div>
												</div>
												<div class="rstselect">
													<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
												</div>
											</div> 
											<div class="rstboxes cf">
												<div class="rstcheckbox">
													<div class="regchk">
														<input type="checkbox" id="Earlyunexplained3" name="health_problem[]" value="Early/Unexplained Death" {{ $checkedcheckbox === 'Early/Unexplained Death' ? 'checked' : '' }}/>
														<label for="Earlyunexplained3"><span></span></label><p>Early/Unexplained Death</p>
													</div>
												</div>
												<div class="rstselect">
													<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
												</div>
											</div>
											<div class="rstboxes cf">
												<div class="rstcheckbox">
													<div class="regchk">
														<input type="checkbox" id="Elevated3" name="health_problem[]" value="Elevated Cholestrerol" {{$checkedcheckbox === 'Elevated Cholestrerol' ? 'checked' : '' }}/>
														<label for="Elevated3"><span></span></label><p>Elevated Cholestrerol</p>
													</div>
												</div>
												<div class="rstselect">
													<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
												</div>
											</div>    
											<div class="rstboxes cf">
												<div class="rstcheckbox">
													<div class="regchk">
														<input type="checkbox" id="HeartDisease3" name="health_problem[]" value="Heart Disease" {{$checkedcheckbox === 'Heart Disease' ? 'checked' : '' }}/>
														<label for="HeartDisease3"><span></span></label><p>Heart Disease</p>
													</div>
												</div>
												<div class="rstselect">
													<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
												</div>
											</div> 
											<div class="rstboxes cf">
												<div class="rstcheckbox">
													<div class="regchk">
														<input type="checkbox" id="HighBloodPressure3" name="health_problem[]" value="High Blood Pressure" {{ $checkedcheckbox === 'High Blood Pressure' ? 'checked' : '' }}/>
														<label for="HighBloodPressure3"><span></span></label><p>High Blood Pressure</p>
													</div>
												</div>
												<div class="rstselect">
													<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
												</div>
											</div>  
											<div class="rstboxes cf">
												<div class="rstcheckbox">
													<div class="regchk">
														<input type="checkbox" id="MetabolicDisease3" name="health_problem[]" value="Metabolic Disease" {{ $checkedcheckbox === 'Metabolic Disease' ? 'checked' : '' }}/>
														<label for="MetabolicDisease3"><span></span></label><p>Metabolic Disease</p>
													</div>
												</div>
												<div class="rstselect">
													<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
												</div>
											</div>
											<div class="rstboxes cf">
												<div class="rstcheckbox">
													<div class="regchk">
														<input type="checkbox" id="SeasonalAllergies3" name="health_problem[]" value="Seasonal Allergies" {{ $checkedcheckbox === 'Seasonal Allergies' ? 'checked' : '' }}/>
														<label for="SeasonalAllergies3"><span></span></label><p>Seasonal Allergies</p>
													</div>
												</div>
												<div class="rstselect">
													<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
												</div>
											</div> 
											<div class="rstboxes cf">
												<div class="rstcheckbox">
													<div class="regchk">
														<input type="checkbox" id="SickleCellAnemia3" name="health_problem[]" value="Sickle Cell Anemia" {{ $checkedcheckbox === 'Sickle Cell Anemia' ? 'checked' : '' }}/>
														<label for="SickleCellAnemia3"><span></span></label><p>Sickle Cell Anemia</p>
													</div>
												</div>
												<div class="rstselect">
													<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
												</div>
											</div>
											<div class="rstboxes cf">
												<div class="rstcheckbox">
													<div class="regchk">
														<input type="checkbox" id="Stroke3" name="health_problem[]" value="Stroke" {{ $checkedcheckbox === 'Stroke' ? 'checked' : '' }}/>
														<label for="Stroke3"><span></span></label><p>Stroke</p>
													</div>
												</div>
												<div class="rstselect">
													<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
												</div>
											</div> 
											<div class="rstboxes cf">
												<div class="rstcheckbox">
													<div class="regchk">
														<input type="checkbox" id="ThyroidDisease3" name="health_problem[]" value="Thyroid Disease" {{ $checkedcheckbox === 'Thyroid Disease' ? 'checked' : '' }}/>
														<label for="ThyroidDisease3"><span></span></label><p>Thyroid Disease</p>
													</div>
												</div>
												<div class="rstselect">
													<select><option>Relationship</option><option>Relationship1</option><option>Relationship2</option></select>
												</div>
											</div>
											<div class="rstboxes cf">
												<div class="rstcheckbox rstcheckboxlast">
													<div class="regchk">
														<input type="checkbox" id="Other3" name="health_problem[]" value="Other" />
														<label for="Other3"><span></span></label><p>Other</p>
													</div>
												</div>
												<div class="rstother cf">
													<input class="rstext" type="text" name="health_problem[]" >
													<input class="rstbut" type="submit" name="add" value="ADD">
													<input class="rstbut rstbut_add_2" type="submit" value="SUBMIT">
												</div>
											</div>
	                                    @endforeach												
									</div>
								</div>
                            </form>
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

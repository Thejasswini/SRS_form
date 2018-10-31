
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Bootstrap CSS --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link href="web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

	<title>Customer Service Request Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
		
</head>
<body>
		
	<div class="container-fluid">
		<!------------------------
			<div class="sidebar">
				<div class="logo"><img src="img/logo.png"></div>
				<ul>
					<li class="active"><a href="1.php"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;Requester Information</a></li>
					<li><a href="2.php"><i class="fas fa-poll-h"></i>&nbsp;&nbsp;&nbsp;Strategy</a></li>
					<li><a href="3.php"><i class="fas fa-cloud"></i>&nbsp;&nbsp;Cloud Service Provider</a></li>
				</ul>
			</div>	
		---------------------------->		
			<div class="header">
					<div class="ribbon"><img src="img/bosch_ribbon.png"></div>
					<div class="navbar" style="background-color: #FFF">
						<div class="row justify-content-between"> 
							<div class="col-4">
								<div class="logo">
									<img class="navbar-brand" src="img/logo.png" style="max-width: 10%; height: auto; margin-left: 30px">
								</div>
							</div>
							<div class="col-4">
								<div class="home_href">
									<a href="../index.php"><i class="fas fa-home"></i>&nbsp;Home</a>
								</div>
							</div>
						</div>																								
					</div>
					<h2>RBEI Cloud Customer Service Request Form</h2>									
			</div>
			<div class="main">
				<div class="content">
					<?php if (isset($_SESSION['success'])) : ?>
				      <div class="success" >
				      	<h3>
				          <?php 
				          	echo $_SESSION['success']; 
				          	unset($_SESSION['success']);
				          ?>
				      	</h3>
				      </div>
				  	<?php endif ?>
				  	
					<form action="1.php" method="POST">
						<?php include('../connect.php') ?>
						<h3>Basic Information</h3>
						<br>       				
    					<fieldset>
    						<div class="row">
	        					<div class="col col-lg-12 col-md-12">
	        						<div class="form-group">
	            						<label class="required" for="organization">Name of the Organization: </label>
										<input name="organization" class="form-control" value="<?php echo $organization; ?>" type="text" required/>
	            					</div>
	            				</div>
	            			</div>
        				</fieldset>	        										
						<br>
						<h4>Registered Office Address</h4>
						<fieldset>
							<div class="row">																
								<div class="col col-lg-12 col-md-12">
									<div class="form-group">
										<label class="required" for="street">Street Name</label>								
										<input class="form-control" name="street" value="<?php echo $street; ?>" type="text" required/>
									</div>									
								</div>
							</div>
							<div class="row">		
								<div class="col col-lg-6 col-md-6">
									<div class="form-group">
										<label class="required" for="building" type="text">Housing/Building Number</label>
										<input class="form-control" name="building" value="<?php echo $building; ?>" type="text" required/>
									</div>
								</div>
								<div class="col col-lg-6 col-md-6">
									<div class="form-group">
										<label class="required" for="landmark" type="text">Landmark</label>
										<input class="form-control" name="landmark" value="<?php echo $landmark; ?>" type="text" required/>											
									</div>
								</div>	
							</div>
							<div class="row">
								<div class="col col-lg-6 col-md-6">
									<div class="form-group">
										<label class="required" for="city" type="text">City/Town/Locality</label>
										<input class="form-control" value="<?php echo $city; ?>" type="text" required/>
									</div>
								</div>
								<div class="col col-lg-6 col-md-6">
									<div class="form-group">
										<label class="required" for="zipcode" type="text">Zipcode</label>
										<input class="form-control" name="zipcode" value="<?php echo $zipcode; ?>" type="text" pattern="[]{}" required/>
									</div>																					
								</div>	
							</div>
							<div class="row">
								<div class="col col-lg-6 col-md-6">							
									<div class="form-group">
										<label class="required" for="country" type="select">Country</label>
										 <select class="form-control" name="country" value="<?php echo $country; ?>">
										 	<option value="default" disabled selected hidden>--select--</option>
										    <option value="CA">Canada</option>
							                <option value="US">United States of America</option>
							                <option value="GB">United Kingdom (Great Britain)</option>
							                <option value="AU">Australia</option>
							                <option value="JP">Japan</option>				                
							            </select>											
									</div>
						        </div>	
						     </div>								
						</fieldset>					        	
				        <hr>
						<fieldset>
							<div class="row">
								<div class="col col-md-12 col-lg-12">
									<div class="form-group">
										<label>Website if any</label>
										<input class="form-control" type="url" name="website" value="<?php echo $website; ?>" class="required" placeholder="(optional)"/>							
									</div>								
								</div>								
							</div>							
						</fieldset>
						<br>
						<br>
						<h3>Contact Details</h3>
						<br>							
						<fieldset>
							<h4><b>Primary Contact</b></h4>
							<div class="row">
								<div class="col col-md-4 col-lg-4">
									<div class="form-group">
										<label class="required" for="firstName1" type="text">First Name:</label>
										<input class="form-control" name="firstName1" value="<?php echo $firstName1; ?>" type="text" required>										
									</div>
								</div>
								<div class="col col-md-4 col-lg-4">
									<div class="form-group">
										<label for="midName1" type="text">Middle Name:</label>
										<input class="form-control" name="midName1" value="<?php echo $midName1; ?>" type="text" placeholder="(optional)">										
									</div>									
								</div>
								<div class="col col-md-4 col-lg-4">
									<div class="form-group">
										<label class="required" for="lastName1" type="text">Last Name:</label>
										<input class="form-control" name="lastName1" value="<?php echo $lastName1; ?>" type="text" required>										
									</div>									
								</div>
							</div>
							<br>
							<div class="row">								
								<div class="col col-md-2 col-lg-2">
									<div class="form-group">
										<label class="required" for="gender1">Gender:</label>
									</div>
								</div>
								<div class="col col-md-1 col-lg-2">
									<div class="form-group">
										<input type="radio" name="gender1" value="male" > Male<br>
										<input type="radio" name="gender1" value="female"> Female<br>
										<input type="radio" name="gender1" value="other"> Other	
									</div>
								</div>
								<br>
								<div class="col col-md-1"></div>
								<div class="col col-md-8 col-lg-8">
									<label class="required" for="phone">Phone number:</label>
									<div class="form-inline">
										<select class="form-control" name="phonecode1">
													<option value="default" disabled selected hidden>--country code--</option>
													<option value="IN"> (+91)</option>
													<option value="DE"> (+49)</option>
													<option value="US"> (+1)</option>																
										</select>
										<div class="form-group">												
											<input class="form-control" name="phone1" value="<?php echo $phone1; ?>" type="number" required>																					
										</div>																	
									</div>									
								</div>															
							</div>																
							<br>																				
						</fieldset>										
						<br>
						<fieldset>
							<h4><b>Secondary Contact</b></h4>
							<div class="row">
								<div class="col col-md-4 col-lg-4">
									<div class="form-group">
										<label class="required" for="firstName2" type="text">First Name:</label>
										<input class="form-control" name="firstName2" value="<?php echo $firstName2; ?>" type="text">										
									</div>
								</div>
								<div class="col col-md-4 col-lg-4">
									<div class="form-group">
										<label for="midName2" type="text">Middle Name:</label>
										<input class="form-control" name="midName2" value="<?php echo $midName2; ?>" type="text" placeholder="(optional)">										
									</div>									
								</div>
								<div class="col col-md-4 col-lg-4">
									<div class="form-group">
										<label class="required" for="lastName2" type="text">Last Name:</label>
										<input class="form-control" name="lastName2" value="<?php echo $lastName2; ?>" type="text">										
									</div>									
								</div>
							</div>
							<br>
							<div class="row">								
								<div class="col col-md-2 col-lg-2">
									<div class="form-group">
										<label for="gender2">Gender:</label>
									</div>
								</div>
								<div class="col col-md-1 col-lg-2">
									<div class="form-group">
										<input type="radio" name="gender2" value="male" > Male<br>
										<input type="radio" name="gender2" value="female"> Female<br>
										<input type="radio" name="gender2" value="other"> Other	
									</div>
								</div>
								<br>
								<div class="col col-md-1"></div>
								<div class="col col-md-8 col-lg-8">
									<label for="phone2">Phone number:</label>
									<div class="form-inline">
										<select class="form-control" name="phonecode2">
													<option value="default" disabled selected hidden>--country code--</option>
													<option value="IN"> (+91)</option>
													<option value="DE"> (+49)</option>
													<option value="US"> (+1)</option>																
										</select>
										<div class="form-group">												
											<input class="form-control" name="phone2" value="<?php echo $phone1; ?>" type="number" required>																					
										</div>																	
									</div>									
								</div>															
							</div>																
							<br>																				
						</fieldset>								
						<br>											
						<hr>
						<br>
						<fieldset>								
							<div class="row justify-content-between">
								<div class="col col-lg-4 col-md-4">
									<div class="form-group">
										<label class="required" for="req_date" style="padding: 10px">Date of Request:</label>
										<input class="form-control" name="req_date" value="<?php echo $req_date; ?>" type="Date" required>										
									</div>																							
								</div>
								<div class="col col-lg-3 col-md-2"></div>	
								<div class="col col-lg-4 col-md-5">
									<label class="required" for="exp_date" style="padding: 10px">Tentative Expected Delivery Date:</label>
									<input class="form-control" name="exp_date" type="Date" aria-describedby="helpBlock" value="<?php echo $exp_date; ?>" required>									
									<span id="helpBlock" class="help-block">&nbsp;<b style="color: red">Note:</b>Tentatative dates will be discussed in later arrange meetings.</span>
								</div>							
							</div>
						</fieldset>	
						<br>					
						<fieldset>
							<div class="row">
								<div class="col col-lg-12 col-md-12">
									<label class="required" for="projectName">Project Name:</label>	
									<input class="form-control" name="projectName" value="<?php echo $projectName; ?>" type="text" required>									
								</div>								
							</div>
							<br>
							<div class="row">
								<div class="col col-md-4 col-lg-3">
									<label class="required" for="endUser">Select type of End-user:</label>									
								</div>
								<div div class="col col-lg-8 col-md-8">
									<input type="radio" name="endUser" value="global">Global Customer<br>
									<input type="radio" name="endUser" value="external">External Customer<br>
									<input type="radio" name="endUser" value="bosch customer">Bosch Customer<br>
									<input type="radio" name="endUser" value="RBEI">RBEI / Internal Customer<br>		
									<input type="radio" name="endUser" value="others">Others							
								</div>	
							</div>	
							<br>						 		
						</fieldset>	
						<button type="submit" class="btn btn-success" name="save_1" style="margin-top: 8px; float: right">save & Next</button>					
						<button type="button" class="btn btn-primary" style="margin-top: 8px">Save</button>
						<button type="button" class="btn btn-danger" style="margin-top: 8px">Cancel</button>
					</form>
				</div>
				
		</div>	
	</div>
	
	
	
	
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>

</body>
<div class="copyright">
		<!-- Copyright -->
		<div class="footer-copyright text-center py-3"><b>© 2018 Copyright:</b>
			<a href="https://www.bosch.in/">bosch.in</a>
		</div>
		<!-- Copyright -->
</div>
<div class="bottom_ribbon"><img src="img/bosch_ribbon.png"></div>
</html>
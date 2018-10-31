<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Bootstrap CSS --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="jquery-1.9.0.min.js"></script>
    <script type="text/javascript">
    	function checkvalue(val)
		{
		    if(val==="Others")
		       document.getElementById('DNShost').style.display='block';
		    else
		       document.getElementById('DNShost').style.display='none'; 
		}

		function additionalVolumeCheck() {
			if (document.getElementById('yesCheck_additionalVolume').checked) {
				document.getElementById('ifYes_additionalVolume').style.display = null;
				document.getElementById('ifNo_additionalVolume').style.display = 'none';
			} else if (document.getElementById('noCheck_additionalVolume').checked) {
				document.getElementById('ifNo_additionalVolume').style.display = null;
				document.getElementById('ifYes_additionalVolume').style.display = 'none';
			} 
		}

		$(function() {
	    	$("#add").click(function () {
	    		var newID = "inner2";
		    	$("#repeater").append($("#inner1").clone().appendTo("#inner").attr("class", newID));
			});
			$("#remove").click(function () {
		    	$("#repeater .inner2:last").remove();
			});
	    });
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link href="web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">

	<title>Customer Service Request Form</title>
	<link rel="stylesheet" type="text/css" href="css/5.css">
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
					<form class="pure-form pure-form-stacked" id="server" action="">
						<h3>Server Information Details</h3>
						<fieldset>							
							<div class="pure-g">
								<div class="pure-u-7-24">
									<br>
									<label class="required">Select required environments: </label>
								</div>
								<div class="pure-u-17-24">
									<br>
									<input type="checkbox" name="production">Production<br>
									<input type="checkbox" name="devlopment">Development<br>
									<input type="checkbox" name="test">Testing<br>
									<input type="checkbox" name="uat">UAT
								</div>								
							</div>
							<br>
							<div class="pure-g">
								<div class="pure-u-7-24">
									<label class="required">Select number of Severs required:</label>
								</div>
								<div class="pure-u-17-24">
									<input type="number" value="0" min="0" required>									
								</div>							
							</div>
							<br>

							<div id="repeater" style="padding: 5px; margin-bottom: 5px">
								<div class="inner1"  id="inner1" style="margin-bottom: 15px">
									<fieldset style="background: #9e9e9e; width: 98%; margin-left: 5px">
										<div class="pure-g">
											<div class="pure-u-1-2">
												<div class="pure-g">
													<div class="pure-u-15-24">
														<label class="required">Select number of servers required for this configuration:</label><br>
													</div>
													<div class="pure-u-4-24">
														<input type="number" value="0" min="0" required>
													</div>											
												</div>									
											</div>
											<div class="pure-u-1-2">
												<br>
												<br>
												<label>Configuration Details:</label>
											</div>									
										</div>
										<div class="pure-g">
											<div class="pure-u-1-2">
												<div class="pure-g">											
													<div class="pure-u-7-24">
														<label class="required">Required OS:</label>
													</div>
													<div class="pure-u-17-24">
														<select id="" style="width: 70%">
															<option value="" disabled selected hidden>---select---</option>
															<option value="">Windows</option>
															<option value="">Linux</option>
															<option value="">CentOS</option>
															<option value="">Red Hat</option>
														</select>
													</div>
													<br>
													<div class="pure-u-7-24">
														<label class="required">OS Version:</label>
													</div>
													<div class="pure-u-17-24">
														<select id="" style="width: 70%">
															<option value="" disabled selected hidden>--select--</option>
															<option value="">OS Version 1</option>
															<option value="">OS Version 2</option>
															<option value="">OS Version 3</option>
														</select>
													</div>
													<br>
													<div class="pure-u-7-24">
														<label class="required">Server Type:</label>
													</div>
													<div class="pure-u-17-24">
														<select id="" style="width: 70%">
															<option value="" disabled selected hidden>--select--</option>
															<option value="">Option 1</option>
															<option value="">Option 2</option>
															<option value="">Option 3</option>
														</select>
													</div>
												</div>										
											</div>
											<div class="pure-u-1-2">
												<div class="pure-g">											
													<div class="pure-u-7-24">
														<label class="required"> Cores(vcpu): </label>
													</div>
													<div class="pure-u-17-24">
														<input type="number" value="0" min="0" required>
													</div>
													<br>
													<div class="pure-u-7-24">
														<label class="required">Memory (GB):</label>
													</div>
													<div class="pure-u-17-24">
														<input type="number" value="0" min="0" required>
													</div>
													<br>
													<div class="pure-u-7-24">
														<label class="required">Storage (GB/TB):</label>
													</div>
													<div class="pure-u-17-24">
														<input type="number" value="0" min="0" required>
													</div>
												</div>										
											</div>									
										</div>
										<br>										
									</fieldset>									
								</div>
								<div class="inner" id="inner" style="display: none"></div>								
							</div>							
 							&nbsp;<button id="remove" type="button" class="btn btn-danger" style="float: right; margin-right: 2%">Remove</button>
 							&nbsp;<button id="add" type="button" class="btn btn-primary" style="float: right; margin-right: 5px">+Add Field</button>

							<br>
						</fieldset>	
						<hr>
						<fieldset>
							<div class="pure-g">
								<div class="pure-u-7-24">
									<label class="required" style="padding: 5px">Server Runtime:</label>
								</div>
								<div class="pure-u-17-24">
									<input type="text" name="Runtime" placeholder="(eg. 24x7 or Only business hours)" required>									
								</div>
							</div>
							<br>
							<div class="pure-g">
								<div class="pure-u-7-24">
									<label class="required">Select Region cloud server to be deployed:</label>
								</div>
								<div class="pure-u-3-24">
									<select id="region">
        								<option value="" disabled selected hidden>--select--</option>
        								<option value="">India</option>
        								<option value="">Germany</option>
        								<option value="">US</option>
        								<option value="">UK</option>
        							</select>
								</div>
								<div class="pure-u-2-24">
									<i class="fas fa-info-circle" style="font-size: 20px; padding: 10px; color: #999"  href="#" data-toggle="tooltip" data-placement="right" title="info"></i>									
								</div>								
							</div>																		
						</fieldset>						
        				<hr>        				
        				
        					<h3>Domain name registration</h3>
        					<fieldset>
        					<div class="pure-g">
        						<div class="pure-u-7-24">
        							<label class="required">Type preferred domain name:</label>        							
        						</div>
        						<div class="pure-u-17-24">
        							<input type="text" name="domainName" required>
        						</div>        						
        					</div>
        					<br>
        					<div class="pure-g">
        						<div class="pure-u-7-24">
        							<label class="required">Select DNS hosting service provide:</label>
        						</div>
        						<div class="pure-u-4-24">
        							<select name="DNShost" onchange='checkvalue(this.value)'>
		        						<option value="" disabled selected hidden> --select-- </option>
		        						<option value="GoDaddy">GoDaddy</option>
		        						<option value="Route53">Route53</option>
		        						<option value="DNSmadeEasy">DNSmadeEasy</option>
		        						<option value="Others">Others</option>
		        					</select>
		        				</div>
		        				<div class="pure-u-2-24">
									<i class="fas fa-info-circle" style="font-size: 20px; padding: 10px; color: #999"  href="#" data-toggle="tooltip" data-placement="right" title="info"></i>									
								</div>        						
        					</div>      					
        					<div class="pure-g">
        						<div class="pure-u-7-24">
        							
        						</div>
        						<div class="pure-u-6-24">
        							<input type="text" name="DNShost" id="DNShost" placeholder="(required)" style='display:none;' required />
        						</div>        						
        					</div>        					       					
        				</fieldset>
        				<br>
        				<hr>

        				<!---------Storage Details--------->

        				<h3>Storage Details</h3>
        				<fieldset>
							<div class="pure-g">
								<div class="pure-u-6-24">
									<label class="required" style="padding-top: 7px">Storage requirement:</label>
								</div>
								<div class="pure-u-6-24">
									<select id="" style="height: inherit">
										<option value="default" disabled selected hidden>--select--</option>
										<option value="">Normal Storage</option>
										<option value="">Magnetic Storage</option>
										<option value="">SSD</option>
										<option value="">GSSD</option>
										<option value="">SSD PIOPS</option>
									</select>
								</div>							
							</div>							
						</fieldset>
						<hr>
						<div class="pure-g">
								<div class="pure-u-8-24">
									<label>&nbsp;Is file storage required ?</label>
								</div>
								<div class="pure-u-5-24">
									<input type="radio" name="yesnoCheck" value="yesCheck">Yes &nbsp;&nbsp;
									<input type="radio" name="yesnoCheck" value="noCheck">No
								</div>							
							</div>					
						<hr>
						<div class="pure-g">
								<div class="pure-u-8-24">
									<label class="required">&nbsp;Do you require additional volumes ?</label>
								</div>
								<div class="pure-u-5-24">									
									<input type="radio" class="radioBtn" onclick="javascript:additionalVolumeCheck();" name="yesno_additionalVolume" id="yesCheck_additionalVolume">Yes &nbsp;&nbsp; 
									<input type="radio" class="radioBtn" onclick="javascript:additionalVolumeCheck();" name="yesno_additionalVolume" id="noCheck_additionalVolume">No <br>							
								</div>													
						</div>	
						<br>																	
							<div id="ifYes_additionalVolume" style="display: none">
								<fieldset>
									<div class="pure-g">
										<div class="pure-u-6-24">
											<label class="required" for="additionalVolume" type="text">Number of additional volumes:</label>
										</div>
										<div class="pure-u-6-24">
											<input id="additionalVolume" type="Number" value="0" min="0" required>
										</div>							
									</div>
									<br>
									<div class="pure-g">
										<div class="pure-u-6-24">
											<label class="required" for="additionalVolume" type="text">Each volume size (GB):</label>
										</div>
										<div class="pure-u-4-24">
											<input id="additionalVolume" type="text" required>											
										</div>	
																
									</div>															
								</fieldset>
							</div>
							<div id="ifNo_additionalVolume" style="display:none">

							</div>		
					</form>
				</div>				
				<div class="footer">
					<a href="../Stage 1/1.php" class="btn btn-info" role="button" style="margin-top: 8px; margin-left: 10px">Stage-1</a>
					<button type="button" class="btn btn-primary" style="margin-top: 8px; margin-left: 28% ">Save</button>
					<button type="button" class="btn btn-danger" style="margin-top: 8px">Cancel</button>					
					<a href="6.php" class="btn btn-success" role="button" style="margin-top: 8px; margin-right: 10px; float: right">Save & Next</a>
				</div>			
		</div>	
	</div>

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>
</body>

<!-- Copyright -->

	<div class="copyright">		
			<div class="footer-copyright text-center py-3"><b>© 2018 Copyright:</b>
				<a href="https://www.bosch.in/">bosch.in</a>
			</div>		
	</div>
</html>
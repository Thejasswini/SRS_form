<?php include('../connect10.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Bootstrap CSS --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
    	function checkvalue(val)
		{
		    if(val==="others")
		    {
		    	document.getElementById('cloudServiceProvider_aws').style.display='none';
		   		document.getElementById('cloudServiceProvider_azure').style.display='none';
		       	document.getElementById('cloudServiceProvider_others').style.display='block';
		    }
		    else if (val==="aws")
		    {
		    	document.getElementById('cloudServiceProvider_aws').style.display='block';
		    	document.getElementById('cloudServiceProvider_azure').style.display='none';
		      	document.getElementById('cloudServiceProvider_others').style.display='none'; 
		    }
		    	
		    else if (val==="azure")
		    {
		    	document.getElementById('cloudServiceProvider_aws').style.display='none';
		    	document.getElementById('cloudServiceProvider_azure').style.display='block';
		      	document.getElementById('cloudServiceProvider_others').style.display='none';
		    }
		}

		

		function OnChangeCheckbox_aws (checkbox) {
	        if (checkbox.checked) {
	            document.getElementById('txtToggle_aws').style.display="block"; 
	        }
	        else {
	            document.getElementById('txtToggle_aws').style.display="none"; 
	        }
	    }

	    function OnChangeCheckbox_azure (checkbox) {
	        if (checkbox.checked) {
	            document.getElementById('txtToggle_azure').style.display="block"; 
	        }
	        else {
	            document.getElementById('txtToggle_azure').style.display="none"; 
	        }
	    }
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link href="web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">

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
					<form class="pure-form pure-form-stacked" id="paas" action="">
						<h3>PaaS services</h3>
						<br>
						<fieldset>
							<div class="pure-g">
								<div class="pure-u-5-24">
									<label class="required" style="padding-top: 5px">Select cloud service provider:</label>
								</div>
								<div class="pure-u-5-24">
									<select name="cloudServiceProvider" style="height: inherit" onchange='checkvalue(this.value)'>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="aws">AWS</option>
										<option value="azure">Azure</option>
										<option value="others">Others</option>
									</select>
								</div>							
							</div>	

							<div name="cloudServiceProvider_aws" id="cloudServiceProvider_aws" style='display:none;'>
								<br>
								<div class="pure-g">
									<div class="pure-u-6-24">									
										<label class="required">Name of application / service/ DB/ device:</label>
									</div>
									<div class="pure-u-8-24">
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value=""/> Glacier <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value=""/> RDS <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value=""/> RedShift <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value=""/> Dynamo DB <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value=""/> Elastic Cache <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value=""/> Lambda <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value=""/> Route53 <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value=""/> AWS Autoscaling <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value=""/> Kinesis <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value=""/> Cloud Search <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value=""/> Elastic Search <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value=""/> Data pipeline <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value=""/> WAF / Shield<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value=""/> SNS <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value=""/> SQS <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value=""/> Cloud front <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="" value=""/> IoT <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="others_aws" value="others_aws" onclick="OnChangeCheckbox_aws (this)"ID="chkAssociation_aws"/> Other
										&nbsp;&nbsp;&nbsp;<input type="text" class="pure-input-1" Id="txtToggle_aws" placeholder="(Other)" style="display:none"/>
									</div>	
								</div>																						
							</div>	
												
							<div name="cloudServiceProvider_azure" id="cloudServiceProvider_azure" style='display:none;'>
								<br>
								<div class="pure-g">
									<div class="pure-u-6-24">
										<label class="required">Name of application / service/ DB/ device:</label>
									</div>
									<div class="pure-u-8-24">
										&nbsp;&nbsp;&nbsp;<input type="checkbox"/> Container Services <br> 
										&nbsp;&nbsp;&nbsp;<input type="checkbox"/> Storage Accounts<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox"/> CDN<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox"/> Notification Hub<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox"/> Redis Cache<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox"/> SQL Database<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox"/> Cosmos DB<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox"/> Cognitive Services<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox"/> IoT Hub<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox"/> Service Bus<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox"/> Web Apps<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="others_azure" value="others_azure" onclick="OnChangeCheckbox_azure (this)" ID="chkAssociation_azure"/> Other
										&nbsp;&nbsp;&nbsp;<input type="text" Id="txtToggle_azure" placeholder="(other)" style="display:none"/>
									</div>
								</div>
							</div>
							<div name="cloudServiceProvider_others" id="cloudServiceProvider_others" style='display:none;'>
								<br>
								<label>Name of application / service/ DB/ device:</label>
								<textarea class="form-control" rows="5" id="comment" placeholder="Provide Description" style="width: 98%"></textarea><br> 
							</div>
							
						</fieldset>						
					</form>					
				</div>
				
				<div class="footer">
					<a href="8.php" class="btn btn-info" role="button" style="margin-top: 8px; margin-left: 10px">Previous</a>
					<button type="button" class="btn btn-primary" style="margin-top: 8px; margin-left: 28% ">Save</button>
					<button type="button" class="btn btn-danger" style="margin-top: 8px">Cancel</button>					
					<a href="11.php" class="btn btn-success" name="save_10" role="button" style="margin-top: 8px; margin-right: 10px; float: right">Save & Next</a>
				</div>
				
		</div>	
	</div>hp
	
	
	
	
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
</html>
<?php include('../connect11.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Bootstrap CSS --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script>
    	$(document).ready(function() {
		    //var max_fields      = 10; //maximum input boxes allowed
		    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
		    var add_button      = $(".add_field_button"); //Add button ID
		    
		    var x = 1; //initlal text box count
		    $(add_button).click(function(e){ //on add input button click
		        e.preventDefault();
		        if(x < max_fields){ //max input box allowed
		            x++; //text box increment
		            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
		        }
		    });		    
		    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		        e.preventDefault(); $(this).parent('div').remove(); x--;
		    })
		});
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
					<form class="pure-form pure-form-stacked" id="security" action="">
						<h3>Security Services</h3>
						<br>						
						<fieldset>
							<label>Will this server house personally identifiable information or confidential data ?</label>
							<br>
							<input type="radio" name="yesnoCheck" value="yesCheck">&nbsp;Yes &nbsp;&nbsp;
							<input type="radio" name="yesnoCheck" value="noCheck">&nbsp;No
						</fieldset>
						<br>
						<legend>Antivirus</legend>						
						<fieldset>
							<div class="pure-g">
								<div class="pure-u-4-24">
									<label class="required">Name:</label>
								</div>
								<div class="pure-u-20-24">
									<input for="antivirus" type="text" required>
								</div>
							</div>
							<div class="pure-g">
								<div class="pure-u-4-24">
									<label class="required">Specification:</label>
								</div>
								<div class="pure-u-20-24">
									<input for="antivirus" type="text" required>
								</div>							
							</div>
							<div class="pure-g">
								<div class="pure-u-4-24">
									<label class="required">Licensing:</label>
								</div>
								<div class="pure-u-20-24">
									<input for="antivirus" type="text" required>
								</div>							
							</div>							
						</fieldset>
						<hr>
						<fieldset>
							<div class="pure-g">
								<div class="pure-u-4-24">
									<label class="required">SSL Certificate:</label>
								</div>
								<div class="pure-u-20-24">
									<input type="text" name="SSL" required>
								</div>							
							</div>
							<br>
							<div class="pure-g">
								<div class="pure-u-4-24">
									<label class="required">Type of SSL Certificate:</label>
								</div>
								<div class="pure-u-20-24">
									<select name="ssl">
										<option value="default" disabled selected hidden>--select--</option>
										<option value="">Standard</option>
										<option value="">Wild card</option>															
									</select>
								</div>							
							</div>
							<br>
							<div class="pure-g">
								<div class="pure-u-4-24">
									<label class="required">Multi SAN Certificate Requirement if any:</label>
								</div>
								<div class="pure-u-20-24">
									<input type="text" name="Certificate" required>
								</div>							
							</div>							
						</fieldset>
						<br>
						<br>
						<!---------------------------------
						<fieldset>
							<div class="input_fields_wrap">
							    <button class="add_field_button">Add More Fields</button>
							    <div><input type="text" name="mytext[]"></div>
							</div>
						</fieldset>

						------------------------------------>
						<legend>Necessary access on Azure/AWS subscription</legend>						
						<fieldset>							
							<div class="pure-g">
								<div class="pure-u-1-2">
									<div class="pure-g">
										<div class="pure-u-4-24">
											<label class="required">Name:</label>
										</div>
										<div class="pure-u-20-24">
											<input type="text" name="Name" required>
										</div>							
									</div>
								</div>	
								<div class="pure-u-1-2">
									<div class="pure-g">
										<div class="pure-u-4-24">
											<label class="required">User Id:</label>
										</div>
										<div class="pure-u-20-24">
											<input type="text" name="Id" required>
										</div>							
									</div>
								</div>							
							</div>

							<div class="pure-g">
								<div class="pure-u-1-2">
									<div class="pure-g">
										<div class="pure-u-4-24">
											<label class="required">Name:</label>
										</div>
										<div class="pure-u-20-24">
											<input type="text" name="Name" required>
										</div>							
									</div>
								</div>	
								<div class="pure-u-1-2">
									<div class="pure-g">
										<div class="pure-u-4-24">
											<label class="required">User Id:</label>
										</div>
										<div class="pure-u-20-24">
											<input type="text" name="Id" required>
										</div>							
									</div>
								</div>							
							</div>

							<div class="pure-g">
								<div class="pure-u-1-2">
									<div class="pure-g">
										<div class="pure-u-4-24">
											<label class="required">Name:</label>
										</div>
										<div class="pure-u-20-24">
											<input type="text" name="Name" required>
										</div>							
									</div>
								</div>	
								<div class="pure-u-1-2">
									<div class="pure-g">
										<div class="pure-u-4-24">
											<label class="required">User Id:</label>
										</div>
										<div class="pure-u-20-24">
											<input type="text" name="Id" required>
										</div>							
									</div>
								</div>							
							</div>							
						</fieldset>
						<div class="pure-g">
							<div class="pure-u-1-2">
								
							</div>
							<div class="pure-u-1-2">
								<p style="color: red">*For BOSCH Employees provide NT ID</p>
							</div>
							
						</div>

						
					</form>
									
				</div>
				
				<div class="footer">
					<a href="10.php" class="btn btn-info" role="button" style="margin-top: 8px; margin-left: 10px">Previous</a>
					<button type="button" class="btn btn-primary" style="margin-top: 8px; margin-left: 28% ">Save</button>
					<button type="button" class="btn btn-danger" style="margin-top: 8px">Cancel</button>					
					<a href="12.php" class="btn btn-success" name="save_11" role="button" style="margin-top: 8px; margin-right: 10px; float: right">Save & Next</a>
				</div>
				
		</div>	
	</div>
	
	
	
	
	

</body>
<div class="copyright">
		<!-- Copyright -->
		<div class="footer-copyright text-center py-3"><b>© 2018 Copyright:</b>
			<a href="https://www.bosch.in/">bosch.in</a>
		</div>
		<!-- Copyright -->
</div>
</html>
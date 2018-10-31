<?php include('../connect14.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Bootstrap CSS --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link href="web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">

	<title>Customer Service Request Form</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
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
					<form class="pure-form pure-form-stacked" action="14.php" method="POST">
						<h3>Pricing and Payment Option</h3>
						<br>
						<div class="pure-g">
							<div class="pure-u-2-5">
								<label>Choose desired pricing and payment option:</label>
							</div>
							<div class="pure-u-3-5">
								<input type="radio" name="choosepricing">On-Demand Price<br>
								<input type="radio" name="choosepricing">1 Year No Upfront RI Price<br>
								<input type="radio" name="choosepricing">3 Year No Upfront RI Convertible Price	
							</div>							
						</div>
						<br>
						<fieldset>
							<div class="pure-g">
								<div class="pure-u-1">
									<p style="color: red"><b>Note:</b></p>								
										<p> <b>Demand Price:</b> Pay for compute capacity by the second, with no long-term commitment or upfront payments. Increase or decrease compute capacity on demand. Start or stop at any time and only pay for what you use.</p>
										<p> <b>Reserved Instances (RI):</b>  The commitment is made up front, and in return, you get up to 72 percent price savings compared to pay-as-you-go pricing. Reserved Virtual Machine Instances are flexible and can easily be exchanged or returned.
									  </p>
									
								</div>							
							</div>							
						</fieldset>
						<br>
						<label>Additional Information:</label>											
						<fieldset>							
							<textarea class="pure-input-1" name="adinfo" rows="5" id="comment" placeholder="(Optional)" style="width: 98%"></textarea>						
						</fieldset>
					</form>							
				</div>
				
				<div class="footer">
					<a href="13.php" class="btn btn-info" role="button" style="margin-top: 8px; margin-left: 10px">Previous</a>
					<button type="button" class="btn btn-primary" name="save_14" style="margin-top: 8px; margin-left: 28% ">Save</button>
					<button type="button" class="btn btn-danger" style="margin-top: 8px">Cancel</button>					
					<a href="15.php" class="btn btn-success" name="save_14" role="button" style="margin-top: 8px; margin-right: 10px; float: right">Save & Next</a>
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
</html>
<?php include('../connect1.php') ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script>
		function yesnoCheck() {
			if (document.getElementById('yesCheck').checked) {
				document.getElementById('ifYes').style.display = null;				
			} else {
				document.getElementById('ifYes').style.display = 'none';				
			}
		}
		
		window.setTimeout(function() {
		    $(".alert").fadeTo(500, 0).slideUp(500, function(){
		        $(this).remove(); 
		    });
		}, 4000);
	</script>

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
						<legend>Strategy</legend>
							<br>
							<fieldset>
								<label>
									<h5>Answer the following questions for more understanding about the project</h5>
								</label>
								<br>
								<label class="required">Why you want to migrate to the cloud?</label>
									<textarea name="migrate" class="form-control" rows="5" required><?php echo $migrate; ?></textarea><br>
								<label class="required">Short, Medium and Long term growth plans in cloud?</label>
									<textarea name="plans" class="form-control" rows="5" required></textarea><br>			
							</fieldset>
							<label for="yes_no_radio" class="required">Do you have any virtualization technology deployed currently?</label>
								Yes <input type="radio" class="radioBtn" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck" value="yes"> &nbsp;&nbsp;
								No <input type="radio" class="radioBtn" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck" value="no"><br>
								<br>				
							<div id="ifYes" style="display:none">
									<fieldset>										
										Description<textarea name="virtualization" class="form-control" rows="5" placeholder="On-premise, Cloud or Hybrid  (Provide Short Description)"></textarea><br>										
									</fieldset>
							</div>
							<button type="submit" class="btn btn-success" name="save_2" style="margin-top: 8px; float: right">save & Next</button>
					</form>
			</div>

			<div class="footer">
				<a href="1.php" class="btn btn-info" role="button" style="margin-top: 8px; margin-left: 10px">Previous</a>
				<button type="button" class="btn btn-primary" style="margin-top: 8px; margin-left: 28% ">Save</button>
				<button type="button" class="btn btn-danger" style="margin-top: 8px">Cancel</button>
				<a href="3.php" class="btn btn-success" role="button" style="margin-top: 8px; margin-right: 10px; float: right">Save &	Next</a>
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
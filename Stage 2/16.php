<?php include('../connect16.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Bootstrap CSS --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <script type="text/javascript">	 	
    	function monitoringCheck() {
			if (document.getElementById('yesCheck_monitoring').checked) {
				document.getElementById('ifYes_monitoring').style.display = null;
				document.getElementById('ifNo_monitoring').style.display = 'none';
			} else if (document.getElementById('noCheck_monitoring').checked) {
				document.getElementById('ifNo_monitoring').style.display = null;
				document.getElementById('ifYes_monitoring').style.display = 'none';
			} 
		}

		function manualComponentCheck() {
			if (document.getElementById('yesCheck_manualComponent').checked) {
				document.getElementById('ifYes_manualComponent').style.display = null;
				document.getElementById('ifNo_manualComponent').style.display = 'none';
			} else if (document.getElementById('noCheck_manualComponent').checked) {
				document.getElementById('ifNo_manualComponent').style.display = null;
				document.getElementById('ifYes_manualComponent').style.display = 'none';
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
					<form class="pure-form pure-form-stacked" id="monitoring" action="">
						<h3>Monitoring</h3>
						<br>
						<div class="pure-g">
							<div class="pure-u-2-5">
								<label class="required">Do you want monitoring ?</label>	
							</div>
							<div class="pure-u-1-5">
								 <input type="radio" class="radioBtn" onclick="javascript:monitoringCheck();" name="yesno_monitoring" id="yesCheck_monitoring"> &nbsp; Yes &nbsp;&nbsp;
								 <input type="radio" class="radioBtn" onclick="javascript:monitoringCheck();" name="yesno_monitoring" id="noCheck_monitoring">&nbsp; No &nbsp;&nbsp;<br>
							</div>						
						</div>
						<br>
						<div id="ifYes_monitoring" style="display: none">								
							<fieldset>
								<div class="pure-g">
									<div class="pure-u-2-5">
										<label class="required">Specify what to monitor:</label>
									</div>
									<div class="pure-u-2-5">
										<input type="checkbox" name="cpu">CPU<br>
										<input type="checkbox" name="memory">Memory<br>
										<input type="checkbox" name="disk">Disk<br>
										
									</div>
								</div>																
							</fieldset>
						</div>
						<div id="ifNo_monitoring" style="display:none">

						</div>
						<br>
						<div class="pure-g">
							<div class="pure-u-2-5">
								<label class="required">Is there any component you wish to monitor?</label>
							</div>	
							<div class="pure-u-1-5">
								<input type="radio" class="radioBtn" onclick="javascript:manualComponentCheck();" name="yesno_manualComponent" id="yesCheck_manualComponent"> &nbsp; Yes &nbsp;&nbsp;
								<input type="radio" class="radioBtn" onclick="javascript:manualComponentCheck();" name="yesno_manualComponent" id="noCheck_manualComponent">&nbsp; No &nbsp;&nbsp;<br>
							</div>						
						</div>
						<div id="ifYes_manualComponent" style="display: none">
							<div class="pure-g">
								<div class="pure-u-1">
									<br>
									<textarea class="pure-input-1" rows="5" id="manualComponent" name="manualComponent" style="width: 98%"></textarea>
								</div>							
							</div>
						</div>
						<div id="ifNo_manualComponent" style="display: none">
						</div>						
					</form>							
				</div>

				<div class="footer">
					<a href="15.php" class="btn btn-info" role="button" style="margin-top: 8px; margin-left: 10px">Previous</a>
					<button type="button" class="btn btn-primary" style="margin-top: 8px; margin-left: 28% ">Save</button>
					<button type="button" class="btn btn-danger" style="margin-top: 8px">Cancel</button>					
					<a href="17.php" class="btn btn-success" name="save_16" role="button" style="margin-top: 8px; margin-right: 10px; float: right">Save & Next</a>
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
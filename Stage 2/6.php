
<?php include('../connect6.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Bootstrap CSS --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
		function defaultGatewayCheck() {
			if (document.getElementById('yesCheck_defaultGateway').checked) {
				document.getElementById('ifYes_defaultGateway').style.display = null;
				document.getElementById('ifNo_defaultGateway').style.display = 'none';
			} else if (document.getElementById('noCheck_defaultGateway').checked) {
				document.getElementById('ifNo_defaultGateway').style.display = null;
				document.getElementById('ifYes_defaultGateway').style.display = 'none';
			} 
		}

		function loadBalancerCheck() {
			if (document.getElementById('yesCheck_loadBalancer').checked) {
				document.getElementById('ifYes_loadBalancer').style.display = null;
				document.getElementById('ifNo_loadBalancer').style.display = 'none';
			} else if (document.getElementById('noCheck_loadBalancer').checked) {
				document.getElementById('ifNo_loadBalancer').style.display = null;
				document.getElementById('ifYes_loadBalancer').style.display = 'none';
			} 
		}

		function vpnCheck() {
			if (document.getElementById('yesCheck_vpn').checked) {
				document.getElementById('ifYes_vpn').style.display = null;
				document.getElementById('ifNo_vpn').style.display = 'none';
			} else if (document.getElementById('noCheck_vpn').checked) {
				document.getElementById('ifNo_vpn').style.display = null;
				document.getElementById('ifYes_vpn').style.display = 'none';
			} 
		}

		function checkvalue(val)
		{
		    if(val==="Others")
		       document.getElementById('CDNprovider').style.display='block';
		    else
		       document.getElementById('CDNprovider').style.display='none'; 
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
					<form class="pure-form pure-form-stacked" id="network" action="">

						<!-----------------Application Gateway------------------------------->
						<div class="pure-g">
								<div class="pure-u-8-24">
									<label class="required">Do you require application gateway ?</label>
								</div>
								<div class="pure-u-5-24" style="padding: 3px">									
										Yes <input type="radio" class="radioBtn" onclick="javascript:defaultGatewayCheck();" name="yesno_defaultGateway" id="yesCheck_defaultGateway"> &nbsp;&nbsp;
										No <input type="radio" class="radioBtn" onclick="javascript:defaultGatewayCheck();" name="yesno_defaultGateway" id="noCheck_defaultGateway">									
								</div>								
						</div>
						<br>													
						<div id="ifYes_defaultGateway" style="display: none">
							<fieldset>
								<div class="pure-g">
									<div class="pure-u-1-5">
										<label class="required" for="defaultGateway" type="text" style="padding: 10px">IPv6 Default Gateway:</label>
									</div>
									<div class="pure-u-4-5">
										<input id="defaultGateway" type="text" style="margin-top: 10px" required>
									</div>									
								</div>																						
							</fieldset>
							<br>
						</div>
						<div id="ifNo_defaultGateway" style="display:none">

						</div>

						<!---------------------Load Balancer-------------------------->
						<div class="pure-g">
							<div class="pure-u-8-24">
								<label class="required">Do you require load balancer ?</label>
							</div>
							<div class="pure-u-5-24">
								Yes <input type="radio" class="radioBtn" onclick="javascript:loadBalancerCheck();" name="yesno_loadBalancer" id="yesCheck_loadBalancer"> &nbsp;&nbsp;
								No <input type="radio" class="radioBtn" onclick="javascript:loadBalancerCheck();" name="yesno_loadBalancer" id="noCheck_loadBalancer">
							</div>							
						</div>
						<br>							
						<div id="ifYes_loadBalancer" style="display: none">
							<fieldset>
								<div class="pure-g">
									<div class="pure-u-1-5">
										<label class="required" for="loadBalancer" type="text">Name:</label>
									</div>
									<div class="pure-u-4-5">
										<input id="loadBalancer" type="text" required>
									</div>									
								</div>
								<div class="pure-g">
									<div class="pure-u-1-5">
										<label class="required" for="loadBalancer" type="text">IP Address:</label>
									</div>
									<div class="pure-u-4-5">
										<input id="loadBalancer" type="text" required>
									</div>									
								</div>
								<div class="pure-g">
									<div class="pure-u-1-5">
										<label class="required" for="loadBalancer" type="text">Port:</label>
									</div>
									<div class="pure-u-4-5">
										<input id="loadBalancer" type="text" required>
									</div>									
								</div>
								<div class="pure-g">
									<div class="pure-u-1-5">
										<label class="required" for="loadBalancer" type="text">Protocol:</label>
									</div>
									<div class="pure-u-4-5">
										<input id="loadBalancer" type="text" required>
									</div>									
								</div>														
							</fieldset>
							<br>
						</div>
						<div id="ifNo_loadBalancer" style="display:none">

						</div>	
						<!--------------------VPN Tunnel---------------------------->

						<div class="pure-g">
							<div class="pure-u-8-24">
								<label class="required">Do require VPN tunnel ?</label>
							</div>
							<div class="pure-u-5-24">
								Yes <input type="radio" class="radioBtn" onclick="javascript:vpnCheck();" name="yesno_vpn" id="yesCheck_vpn"> &nbsp;&nbsp;
								No <input type="radio" class="radioBtn" onclick="javascript:vpnCheck();" name="yesno_vpn" id="noCheck_vpn">
							</div>							
						</div>
						<br>							
						<div id="ifYes_vpn" style="display: none">
							<fieldset>
								<div class="pure-g">
									<div class="pure-u-1-5">
										<label class="required" for="vpn" type="text" style="margin-top: 10px">Tunneling Protocol type:</label>
									</div>
									<div class="pure-u-4-5">
										<select id="vpn" style="margin-top: 6px">
											<option value="default" disabled selected hidden>--select--</option>
											<option value="IPsec">IPsec</option>
											<option value="PPTP">PPTP / MPPE</option>
											<option value="L2TP">L2TP</option>
										</select>
									</div>									
								</div>														
							</fieldset>
						</div>
						<div id="ifNo_vpn" style="display:none">

						</div>						
						<br>
						<hr>

						<!------------------------------------------------>
						
						<fieldset>
							<div class="pure-g">
								<div class="pure-u-1-5">
									<label class="required" for="publicIP" type="text">Public IPs:</label>
								</div>
								<div class="pure-u-4-5">
									<input id="publicIP" type="text" required>
								</div>								
							</div>							
						</fieldset>
						<br>
						<fieldset>
							<div class="pure-g">
								<div class="pure-u-1-5">
									<label class="required" for="otherNetwork" type="text">Other network devices / services:</label>
								</div>
								<div class="pure-u-4-5">
									<input id="otherNetwork" type="text" required>
								</div>								
							</div>						
						</fieldset>
						<br>
						<fieldset>
							<div class="pure-g">
								<div class="pure-u-1-5">
									<label class="required">Choose CDN Provider:</label>
								</div>
								<div class="pure-u-4-5">
									<select name="CDNprovider" onchange='checkvalue(this.value)'>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="cloudFlare">Cloud Flare</option>
										<option value="maxcdn">MAX CDN</option>
										<option value="AWScloudfront">AWS Cloud Front</option>
										<option value="Others">Others</option>
									</select>	
								</div>							
							</div>			
							
							<div class="pure-g">
								<div class="pure-u-1-5">
									
								</div>
								<div class="pure-u-4-5">
									<input type="text" name="CDNprovider" id="CDNprovider" placeholder="(others)" style='display:none;' required /> 
								</div>								
							</div>
							
						</fieldset>
					</form>					
				</div>
				
				<div class="footer">
					<a href="5.php" class="btn btn-info" role="button" style="margin-top: 8px; margin-left: 10px">previous</a>
					<button type="button" class="btn btn-primary" style="margin-top: 8px; margin-left: 28% ">Save</button>
					<button type="button" class="btn btn-danger" style="margin-top: 8px">Cancel</button>					
					<a href="8.php" class="btn btn-success" name="save_6" role="button" style="margin-top: 8px; margin-right: 10px; float: right">Save & Next</a>
				</div>
				
		</div>	
	</div>
	
	
	
	
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>    

</body>
<div class="copyright">
		<!-- Copyright -->
		<div class="footer-copyright text-center py-3"><b>© 2018 Copyright:</b>
			<a href="https://www.bosch.in/">bosch.in</a>
		</div>
		<!-- Copyright -->
</div>
</html>
<?php include('../connect12.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Bootstrap CSS --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	function backupRetentionCheck() {
			if (document.getElementById('yesCheck_backupRetention').checked) {
				document.getElementById('ifYes_backupRetention').style.display = null;
				document.getElementById('ifNo_backupRetention').style.display = 'none';
			} else if (document.getElementById('noCheck_backupRetention').checked) {
				document.getElementById('ifNo_backupRetention').style.display = null;
				document.getElementById('ifYes_backupRetention').style.display = 'none';
			} 
		}
		function checkvalue(val)
		{
		    if(val==="full")
		       document.getElementById('backup').style.display='block';
		    else
		       document.getElementById('backup').style.display='none'; 
		}
		function checkvalueDR() {
			if (document.getElementById('yesCheck_DR').checked) {
				document.getElementById('ifYes_DR').style.display = null;
				document.getElementById('ifNo_DR').style.display = 'none';
			} else if (document.getElementById('noCheck_DR').checked) {
				document.getElementById('ifNo_DR').style.display = null;
				document.getElementById('ifYes_DR').style.display = 'none';
			} 
		}


		
    </script>
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link href="../Stage 1/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">

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
					<form id="security" action="">
						<div class="pure-g">
							<div class="pure-u-2-5">
								<label class="required">Does the system require Redundancy ?</label>
							</div>
							<div class="pure-u-3-5">
								<input type="radio" name="yesnoCheck" value="yesCheck">&nbsp;Yes &nbsp;&nbsp;
								<input type="radio" name="yesnoCheck" value="noCheck">&nbsp;No
							</div>							
						</div>
						<br>
						<div class="pure-g">
							<div class="pure-u-2-5">
								<label class="required">Does the system require High Availability ?</label>
							</div>
							<div class="pure-u-3-5">
								<input type="radio" name="yesnoCheck" value="yesCheck">&nbsp;Yes &nbsp;&nbsp;
								<input type="radio" name="yesnoCheck" value="noCheck">&nbsp;No
							</div>							
						</div>
						<br>
						<div class="pure-g">
							<div class="pure-u-2-5">
								<label class="required">Does the system require Disaster Recovery ?</label>
							</div>
							<div class="pure-u-3-5">
								<input type="radio" name="yesnoCheck" value="yesCheck">&nbsp;Yes &nbsp;&nbsp;
								<input type="radio" name="yesnoCheck" value="noCheck">&nbsp;No
							</div>							
						</div>
						<br>
						<hr>
						<br>
						<fieldset>
							<div class="pure-g">
								<div class="pure-u-2-5">
									<label class="required" style="padding-top: 5px">What is the type of backup normally across applications ?</label>
								</div>
								<div class="pure-u-3-5">
									<select name="backup" style="height: inherit" onchange='checkvalue(this.value)'>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="full">Full Backup</option>
										<option value="partial">Partial Backup</option>
									</select>
								</div>							
							</div>							
							<div class="pure-g">								
								<div class="pure-u-2-5" >
								</div>
								<div class="pure-u-3-5">
									<input type="text" name="backup" id="backup" placeholder="(eg. Daily, weekly, monthly)" style='display:none;' required/> 
								</div>									  								
								
							</div>												
						</fieldset>							
						<br>
						<hr>	

						<fieldset>
							<div class="pure-g">
								<div class="pure-u-1">
									<h4>Backup Policy:</h4>
								</div>							
							</div>
							<br>
							<div class="pure-g">
								<div class="pure-u-1-5">
								</div>

								<div class="pure-u-2-5">
									<input type="checkbox" name="daily">&nbsp;&nbsp;Daily<br>
									<input type="checkbox" name="weekly">&nbsp;&nbsp;Weekly<br>
									<input type="checkbox" name="monthly">&nbsp;&nbsp;Monthly<br>
									<input type="checkbox" name="yearly">&nbsp;&nbsp;Yearly<br>								
								</div>
								<div class="pure-u-2-5">
									<input type="checkbox" name="Storage_only">&nbsp;&nbsp;Storage Only<br>
									<input type="checkbox" name="specific_server/Services">&nbsp;&nbsp;Specific Server / services<br>
									<input type="checkbox" name="snapshot">&nbsp;&nbsp;Snapshot
								</div>							
							</div>	
							<br>							
						</fieldset>											
						
						<hr>
						<div class="pure-g">
							<div class="pure-u-2-5">
								<label class="required">Is there a retention policy for backups ?</label>
							</div>
							<div class="pure-u-3-5">
								<input type="radio" class="radioBtn" name="yesnoCheck_backupRetention" onclick="javascript:backupRetentionCheck();" id="yesCheck_backupRetention">&nbsp;Yes &nbsp;&nbsp;
								<input type="radio" class="radioBtn" name="yesnoCheck_backupRetention" onclick="javascript:backupRetentionCheck();" id="noCheck_backupRetention">&nbsp;No
							</div>							
						</div>
						<br>						
						<div id="ifYes_backupRetention" style="display: none">
							<div class="pure-g">
									<div class="pure-u-2-5">
										
									</div>
									<div class="pure-u-3-5">
										<input id="backupRetention" type="text" placeholder="(eg. 2 years, 3 years etc.)" required>
									</div>							
								</div>					
							<br>
						</div>
						<div id="ifNo_backupRetention" style="display:none">

						</div>	
						<div class="pure-g">
							<div class="pure-u-2-5">
								<label class="required">Do you currently have a Disaster Recovery(DR) machine in place ?</label>
							</div>
							<div class="pure-u-3-5">
								<input type="radio" name="yesnoCheck" value="yesCheck">&nbsp;Yes &nbsp;&nbsp;
								<input type="radio" name="yesnoCheck" value="noCheck">&nbsp;No
							</div>							
						</div>						
						<br>
						<div class="pure-g">
							<div class="pure-u-2-5">
								<label>What is the RTO (Recovery Time Object) in hours ?</label>
							</div>
							<div class="pure-u-2-5">
								<input type="number" value="0" min="0" max="24">
							</div>							
						</div>
						<div class="pure-g">
							<i class="fas fa-info-circle" style="font-size: 20px; padding: 10px; color: #999"  href="#" data-toggle="tooltip" data-placement="right" title="for more info"></i>
							<div class="pure-u-8-24">
								<p style="color: #999">(RTO is the duration of time and a service level within which a business process must be restored after a disaster in order to avoid unacceptable consequences associated with a break in continuity. In other words, the RTO is the answer to the question: “How much time did it take to recover after notification of business process disruption?“)</p>	
							</div>						
						</div>
						<br>
						<div class="pure-g">
							<div class="pure-u-2-5">
								<label>What is the RPO (Recovery Point Object) in hours ?</label>
							</div>
							<div class="pure-u-3-5">
								<input type="number" value="0" min="0" max="24">
							</div>							
						</div>
						<div class="pure-g">
							<i class="fas fa-info-circle" style="font-size: 20px; padding: 10px; color: #999"  href="#" data-toggle="tooltip" data-placement="right" title="for more info"></i>
							<div class="pure-u-8-24">
								<p style="color: #999">(The RPO is the amount of time the business can be without the service, without incurring significant risks or significant lossesRecovery Point Objective (RPO) describes the interval of time that might pass during a disruption before the quantity of data lost during that period exceeds the Business Continuity Plan’s maximum allowable threshold or “tolerance.)”
								</p>	
							</div>						
						</div>
						<br>
						<div class="pure-g">
							<div class="pure-u-2-5">
								<label class="required">what is the coverage of DR (Disaster Recovery) ?</label>
							</div>
							<div class="pure-u-5-24">
									<input type="radio" class="radioBtn" onclick="javascript:checkvalueDR();" name="yesno_DR" id="yesCheck_DR"> Yes &nbsp;&nbsp;
									<input type="radio" class="radioBtn" onclick="javascript:checkvalueDR();" name="yesno_DR" id="noCheck_DR">No<br>
							</div>															
						</div>				
																		
							<div id="ifYes_DR" style="display: none">
								<br>
								<div class="pure-g">
									<div class="pure-u-1-4">
										
									</div>
									<div class="pure-u-3-4">
										<p style="color: red">*Will be disscussed during meetings</p>
									</div>
							
					 			</div>
								<div id="ifNo_DR" style="display:none">

								</div>
							</div>	
					</form>								
				</div>
				<br>
				<div class="footer">
					<a href="11.php" class="btn btn-info" role="button" style="margin-top: 8px; margin-left: 10px">Previous</a>
					<button type="button" class="btn btn-primary" style="margin-top: 8px; margin-left: 28% ">Save</button>
					<button type="button" class="btn btn-danger" style="margin-top: 8px">Cancel</button>					
					<a href="13.php" class="btn btn-success" name="save_12" role="button" style="margin-top: 8px; margin-right: 10px; float: right">Save & Next</a>
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
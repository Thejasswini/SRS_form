<?php include('../connect8.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Bootstrap CSS --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	function replicationModeCheck() {
			if (document.getElementById('yesCheck_replicationMode').checked) {
				document.getElementById('ifYes_replicationMode').style.display = null;
				document.getElementById('ifNo_replicationMode').style.display = 'none';
			} else if (document.getElementById('noCheck_replicationMode').checked) {
				document.getElementById('ifNo_replicationMode').style.display = null;
				document.getElementById('ifYes_replicationMode').style.display = 'none';
			} 
		}

		function checkvalue(val)
		{
		    if(val==="automated")
		       document.getElementById('snapshot').style.display='block';
		    else
		       document.getElementById('snapshot').style.display='none'; 
		}

		function checkvalueDB(val)
		{
		    if(val==="Others")
		       document.getElementById('select_db').style.display='block';
		    else
		       document.getElementById('select_db').style.display='none'; 
		}

		function chkRequiredServices(val)
		{
			 if(val==="Others")
		       document.getElementById('requiredServices').style.display='block';
		    else
		       document.getElementById('requiredServices').style.display='none';
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
					<form class="pure-form pure-form-stacked" id="database" action="">						
						<h3>Database specification</h3>
						<br>
						<fieldset>
							<div class="pure-g">
								<div class="pure-u-4-24">
									<label class="required" style="margin-top: 7px">Type of database:</label>
								</div>
								<div class="pure-u-5-24">
									<select name="select_db" onchange='checkvalueDB(this.value)'>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="Oracle">Oracle</option>
										<option value="RDB">Relational DB</option>
										<option value="DDB">Distributed DB</option>
										<option value="KDB">Key Value DB</option>										
										<option value="NoSQL">NoSQL</option>
										<option value="Others">Others</option>								
									</select>
								</div>							
							</div>
							<div class="pure-g">
								<div class="pure-u-4-24">
									
								</div>
								<div class="pure-u-5-24">
									<input type="text" name="select_db" id="select_db" placeholder="(others)" style='display:none;'/> 
								</div>								
							</div>							
							<br>
							<div class="pure-g">
								<div class="pure-u-4-24">
									<label class="required">Required Services:</label>
								</div>
								<div class="pure-u-5-24">
									<select id="" name="requiredServices" onchange='chkRequiredServices(this.value)'>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="">RDS</option>
										<option value="">Dynamo DB</option>
										<option value="">Mongo DB</option>	
										<option value="Others">Others</option>							
									</select>	
								</div>							
							</div>
							<div class="pure-g">
								<div class="pure-u-4-24">
									
								</div>
								<div class="pure-u-5-24">
									<input type="text" name="requiredServices" id="requiredServices" placeholder="(others)" style='display:none;'/> 
								</div>								
							</div>												
						</fieldset>
						<hr>
						<fieldset>
							<div class="pure-g">
								<div class="pure-u-5-24">
									<label class="required">Zoning Requirements:</label>
								</div>
								<div class="pure-u-5-24">
									<input type="radio" name="zone">Single Availability Zone<br>
									<input type="radio" name="zone">Multi Availability Zone
								</div>							
							</div>							
						</fieldset>
						<hr>
						<fieldset>
							<div class="pure-g">
								<div class="pure-u-5-24">
									<label class="required" style="padding-top: 5px">Typical size of database:</label>
								</div>
								<div class="pure-u-4-24">
									<input type="number" value="0" min="0" required>
								</div>
								<div class="pure-u-5-24">
									<select id="">
										<option value="gb">GB</option>
										<option value="tb">TB</option>
									</select>
								</div>
							</div>						
							<br>
							<div class="pure-g">
								<div class="pure-u-5-24">
									<label class="required">Nature of DB activity:</label>
								</div>
								<div class="pure-u-7-24">
									<input type="radio" name="dbActivity" value="read">Read Mostly<br>
									<input type="radio" name="dbActivity" value="write">Write Mostly<br>
									<input type="radio" name="dbActivity" value="equal">Equal amount of Reads and Writes
								</div>							
							</div>							
						</fieldset>
						<hr>
						<fieldset>
							<div class="pure-g">
								<div class="pure-u-1">
									<label class="required">Any specific IOPS requirement for DB ?</label><br>
								</div>
								<div class="pure-u-1">
									<textarea class="pure-input-1" rows="5" id="comment" style="width: 98%"></textarea><br>
								</div>							
							</div>														
						</fieldset>
						<hr>
						<fieldset>
							<div class="pure-g">
								<div class="pure-u-1">
									<label class="required">Are the DataBase setup in replication mode for fail-over / reporting ?</label>
								</div>
								<br><br>
								<div class="pure-u-5-24">
									<input type="radio" class="radioBtn" onclick="javascript:replicationModeCheck();" name="yesno_replicationMode" id="yesCheck_replicationMode"> Yes &nbsp;&nbsp;
									<input type="radio" class="radioBtn" onclick="javascript:replicationModeCheck();" name="yesno_replicationMode" id="noCheck_replicationMode">No<br>
								</div>															
							</div>						
														
							<div id="ifYes_replicationMode" style="display: none">
								<br>
									<label for="replicationMode" type="text">Mention the replication tools that are normally used:</label>
									<textarea class="pure-input-1" rows="5" name="replicationMode" id="replicationMode" placeholder="Native / Data guard / DB visit" style="width: 98%"></textarea><br>								
							</div>
							<div id="ifNo_replicationMode" style="display:none">

							</div>	
						</fieldset>
						<hr>
						<fieldset>
							<label>Are any of the databases / DB elements encrypted at rest ?</label><br>
							<input type="radio" name="isEncryptedCheck">Yes &nbsp; &nbsp;
							<input type="radio" name="isEncryptedCheck">No <br>
							<br>
							<textarea class="pure-input-1" rows="5" name="isEncryptedCheck" id="isEncryptedCheck" placeholder="Provide Details" style="width: 98%"></textarea><br>
						</fieldset>
						<hr>
						<fieldset>
							<div class="pure-g">
								<div class="pure-u-8-24">
									<label class="required" style="padding-top: 5px">Automated snapshot for DB instances:</label>
								</div>
								<div class="pure-u-5-24">
									<select name="snapshot" style="height: inherit" onchange='checkvalue(this.value)'>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="manual">Manual Snapshot</option>
										<option value="automated">Automated Snapshot</option>
									</select>
								</div>							
							</div>							
							<br>
							<div class="pure-g">								
								<div class="pure-u-10-24" name="snapshot" id="snapshot" style='display:none;'>
									<div class="pure-u-8-24">
										<label class="required"  style="padding-top: 5px">Time Interval:</label>
									</div>
									<div class="pure-u-8-24">
										<select name="snapshot">
											<option value="default" disabled selected hidden>--select--</option>
											<option value="daily">Daily</option>
											<option value="weekly">Weekly</option>
											<option value="monthly">Monthly</option>
										</select>
									</div>									  								
								</div>
							</div>													
						</fieldset>				
					</form>
					
				</div>
				
				<div class="footer">
					<a href="6.php" class="btn btn-info" role="button" style="margin-top: 8px; margin-left: 10px">previous</a>
					<button type="button" class="btn btn-primary" style="margin-top: 8px; margin-left: 28% ">Save</button>
					<button type="button" class="btn btn-danger" style="margin-top: 8px">Cancel</button>					
					<a href="10.php" class="btn btn-success" name="save_8" role="button" style="margin-top: 8px; margin-right: 10px; float: right">Save & Next</a>
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
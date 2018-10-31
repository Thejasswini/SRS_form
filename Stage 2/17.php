<?php include('../connect17.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale = 1.0" shrink-to-fit=no">
    <!-- Bootstrap CSS --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	
    <script type="text/javascript">
    	function checkvalue(val)
		{
		    if(val==="Others")
		       document.getElementById('escMatrix').style.display='block';
		    else
		       document.getElementById('escMatrix').style.display='none'; 
		}	

				$('#myModal').on('shown.bs.modal', function () {
					  $('#myInput').trigger('focus')
					})	
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
					<form class="pure-form pure-form-stacked" id="Escalation" action="" method="">
					<h3>Escalation Matrix</h3>
					<br>					

					<!-- Modal -->
					<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h4 class="modal-title" id="exampleModalLongTitle">Confirm !</h4>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">					      	
					      	<br>					        
					        Are you sure you want to submit this form ?
					        <br>
					        <br>
					      </div>
					      <div class="modal-footer">
					      	<button type="button" class="btn btn-primary" style="float: left;" >Save changes</button>
						
					        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>					        
					        <a href="print.html" type="button" class="btn btn-success">Confirm</a>

					      </div>
					    </div>
					  </div>
					</div>
					<!------------------------------------------->


					<h4>
						<label>If any issues whom should I contact ? : RBEI email / Contact</label>
					</h4>
					<br>			
					<div class="pure-g">
							<div class="pure-u-2-5">
								<label class="required">What is the escalation matrix for communication ?</label>
							</div>
							<div class="pure-u-2-5">
								<select name="escMatrix" onchange='checkvalue(this.value)'>
									<option value="default" disabled selected hidden>--select--</option>
									<option value="Production_Team">Production Team</option>
									<option value="Support_Team">Support Team</option>
									<option value="Others">Others</option>
								</select>
							</div>							
					</div>
					<div class="pure-g">
						<div class="pure-u-2-5"></div>
						<div class="pure-u-2-5">							
        					<input type="text" name="escMatrix" id="escMatrix" placeholder="(Others)" style='display:none;'/> 
						</div>     										
					</div>
					<br>
					<label>Contact Details:</label>
					<br>
					<table  class="pure-table pure-table-bordered" style="width:100%">
  						<thead>
  							<tr>
							    <th>S.NO</th>
							    <th>Name</th> 
							    <th>Email</th>
							    <th>Phone/Mobile</th>
							    <th>Role</th>
							    <th>Contact</th>
							 </tr>
  						</thead>
  						<tbody>
  							<tr>
							    <td>1</td>
							    <td>Ashok Kumar Babu</td> 
							    <td>Babu.AshokKumar@in.bosch.com</td>
							    <td> 123 </td>
							    <td></td>
							    <td><a href=" http://mail.google.com/mail/?view=cm&fs=1&tf=1&to=&su=" target="_blank">Contact</a></td>
							  </tr>
							  <tr class="pure-table-odd">
							    <td>2</td>
							    <td>Prateek Narayan</td> 
							    <td>prateek.lokare@in.bosch.com</td>
							    <td> 123 </td>
							    <td></td>
							    <td><a href=" http://mail.google.com/mail/?view=cm&fs=1&tf=1&to=&su=" target="_blank">Contact</a></td>
							  </tr>
							  <tr>
							  	<td>3</td>
							  	<td>Abhirup Dey</td>
							  	<td>fixed-term.Dey.Abhirup@in.bosch.com</td>
							  	<td> 13897 </td>
							  	<td>Intern / Build-team</td>
							  	<td><a href=" http://mail.google.com/mail/?view=cm&fs=1&tf=1&to=&su=" target="_blank">Contact</a></td>
							  </tr>
							   <tr class="pure-table-odd">
							  	<td>4</td>
							  	<td>Thejaswini N Venkat Reddy</td>
							  	<td>fixed-term.VenkatReddy.ThejaswiniN@in.bosch.com</td>
							  	<td> 13897 </td>
							  	<td>Intern / Build-team</td>
							  	<td><a href=" http://mail.google.com/mail/?view=cm&fs=1&tf=1&to=&su=" target="_blank">Contact</a></td>
							  </tr>
  						</tbody>						 
					</table>
				</form>					
				</div>

				<div class="footer">
					<a href="16.php" class="btn btn-info" role="button" style="margin-top: 8px; margin-left: 10px">Previous</a>
					<button type="button" class="btn btn-primary" style="margin-top: 8px; margin-left: 28% ">Save</button>
					<button type="button" class="btn btn-danger" style="margin-top: 8px">Cancel</button>	
					<!-- Button trigger modal -->
					<button type="button" value="Thank You for Your Sumission"class="btn btn-primary" name="save_17" data-toggle="modal" data-target="#exampleModalCenter" style="margin-top: 8px; margin-right: 10px; float: right">
					  Submit
					</button>							
										
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
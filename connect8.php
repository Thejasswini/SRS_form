<?php

session_start();

$typeofdb ="";
$reqservices ="";

$zoning ="";
$sizeofdb ="";
$natureofdb ="";

$iops ="";
$yesno ="";
$replicationtool ="";

$encrypted ="";
$details ="";

$snapshot ="";
$timeinterval ="";

$db = mysqli_connect('localhost', 'root', '', 'srs');
if (isset($_POST['save_8'])) {
	$typeofdb = mysqli_real_escape_string($db, $_POST['typeofdb']);
	$reqservices = mysqli_real_escape_string($db, $_POST['reqservices']);
	$zoning = mysqli_real_escape_string($db, $_POST['zoning']);
	$sizeofdb = mysqli_real_escape_string($db, $_POST['sizeofdb']);
	$natureofdb = mysqli_real_escape_string($db, $_POST['natureofdb']);
	$iops = mysqli_real_escape_string($db, $_POST['iops']);
	$yesno = mysqli_real_escape_string($db, $_POST['yesno']);
	$replicationtool = mysqli_real_escape_string($db, $_POST['replicationtool']);
	$encrypted = mysqli_real_escape_string($db, $_POST['encrypted']);
	$details = mysqli_real_escape_string($db, $_POST['details']);
	$snapshot = mysqli_real_escape_string($db, $_POST['snapshot']);
	$timeinterval = mysqli_real_escape_string($db, $_POST['timeinterval']);

	$query ="INSERT INTO db (typeofdb,reqservices,zoning,sizeofdb,natureofdb,iops,yesno,replicationtool,encrypted,details,snapshot,timeinterval) VALUES('$typeofdb','$reqservices','zoning','sizeofdb','natureofdb','iops','yesno','replicationtool','encrypted','details','snapshot','timeinterval')";

	mysqli_query($db, $query);  	
  	$_SESSION['success'] = "Previous Data saved Successfully !!";

  	echo $_SESSION['success'];     

    header('location: 10.php');

	} 	

?>



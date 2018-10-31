<?php

session_start();

$yesno ="";
$specify ="";

$yesno1 ="";
$details ="";

$db = mysqli_connect('localhost', 'root', '', 'srs');

if (isset($_POST['save_16'])) {
	$yesno = mysqli_real_escape_string($db, $_POST['yesno']);
	$specify = mysqli_real_escape_string($db, $_POST['specify']);

	$yesno1 = mysqli_real_escape_string($db, $_POST['yesno1']);
	$details = mysqli_real_escape_string($db, $_POST['details']);

	$query ="INSERT INTO monitor(yesno,specify,yesno1,details) VALUES('$yesno','$specify','$yesno1','$details')";

	mysqli_query($db, $query);  	
  	$_SESSION['success'] = "Previous Data saved Successfully !!";

  	echo $_SESSION['success'];     

    header('location: 17.php');

	} 	

?>
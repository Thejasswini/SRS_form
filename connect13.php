<?php

session_start();

$yesno ="";
$description ="";
$license ="";
$procurelicense ="";

$yesno1 ="";
$details ="";

$db = mysqli_connect('localhost', 'root', '', 'srs');

if (isset($_POST['save_13'])) {
	$yesno = mysqli_real_escape_string($db, $_POST['yesno']);
	$description = mysqli_real_escape_string($db, $_POST['description']);
	$license = mysqli_real_escape_string($db, $_POST['license']);
	$procurelicense = mysqli_real_escape_string($db, $_POST['procurelicense']);

	$yesno1 = mysqli_real_escape_string($db, $_POST['yesno1']);
	$details = mysqli_real_escape_string($db, $_POST['details']);

	$query ="INSERT INTO identity(yesno,description,license,procurelicense,yesno1,details) VALUES('$yesno','$description','$license','$procurelicense','$yesno1','$details')";

	mysqli_query($db, $query);  	
  	$_SESSION['success'] = "Previous Data saved Successfully !!";

  	echo $_SESSION['success'];     

    header('location: 14.php');

	} 	

?>
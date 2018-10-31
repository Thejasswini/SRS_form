<?php

session_start();

$csprovider ="";
$nameofdb ="";
$others ="";

$db = mysqli_connect('localhost', 'root', '', 'srs');

if (isset($_POST['save_10'])) {
	$csprovider = mysqli_real_escape_string($db, $_POST['csprovider']);
	$nameofdb = mysqli_real_escape_string($db, $_POST['nameofdb']);
	$others = mysqli_real_escape_string($db, $_POST['others']);

	$query ="INSERT INTO paas (csprovider,nameofdb,others) VALUES ('$csprovider','$nameofdb','$others')";

	mysqli_query($db, $query);  	
  	$_SESSION['success'] = "Previous Data saved Successfully !!";

  	echo $_SESSION['success'];     

    header('location: 11.php');

	} 	

?>
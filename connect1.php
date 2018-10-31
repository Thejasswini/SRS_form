<?php

session_start();

$migrate = "";
$plans = "";
$yesno = "";
$virtualization = "";


$db = mysqli_connect('localhost', 'root', '', 'srs');

if (isset($_POST['save_2'])) {
	$migrate = mysqli_real_escape_string($db, $_POST['migrate']);
	$plans = mysqli_real_escape_string($db, $_POST['plans']);
	$yesno = mysqli_real_escape_string($db, $_POST['yesno']);
	$virtualization = mysqli_real_escape_string($db, $_POST['virtualization']);

	$query = "INSERT INTO strategy (migrate, plans, yesno, virtualization) VALUES ('$migrate','$plans', '$yesno', '$virtualization')";
	mysqli_query($db, $query);  	
  	$_SESSION['success'] = "Previous Data saved Successfully !!";

  	echo $_SESSION['success'];     

    header('location: 3.php');


	}

?>
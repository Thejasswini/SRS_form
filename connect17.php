<?php

session_start();

$escalation ="";
$others ="";

$db = mysqli_connect('localhost', 'root', '', 'srs');

if (isset($_POST['save_17'])) {
	$escalation = mysqli_real_escape_string($db, $_POST['escalation']);
	$others = mysqli_real_escape_string($db, $_POST['others']);

	$query ="INSERT INTO matirx(escalation,others) VALUES('$escalation','$others')";

	mysqli_query($db, $query);  	
  	$_SESSION['success'] = "Previous Data saved Successfully !!";

  	echo $_SESSION['success'];     


	} 	

?>

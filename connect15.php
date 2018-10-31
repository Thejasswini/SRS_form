<?php

session_start();

$supporthrs ="";
$timezone ="";
$sla ="";

$recurrence ="";
$from1 ="";
$until ="";

$patchtype ="";
$others ="";

$db = mysqli_connect('localhost', 'root', '', 'srs');
if (isset($_POST['save_15'])) {
	$supporthrs = mysqli_real_escape_string($db, $_POST['supporthrs']); 
	$timezone = mysqli_real_escape_string($db, $_POST['timezone']);
	$sla = mysqli_real_escape_string($db, $_POST['sla']);

	$recurrence = mysqli_real_escape_string($db, $_POST['recurrence']);
	$from1 = mysqli_real_escape_string($db, $_POST['from1']);
	$until = mysqli_real_escape_string($db, $_POST['until']);

	$patchtype = mysqli_real_escape_string($db, $_POST['patchtype']);
	$others = mysqli_real_escape_string($db, $_POST['others']);

	$query ="INSERT INTO support(supporthrs,timezone,sla,recurrence,from1,until,patchtype,others) VALUES('$supporthrs','$timezone','$sla','$recurrence','$from1','$until','$patchtype','$others')";

	mysqli_query($db, $query);  	
  	$_SESSION['success'] = "Previous Data saved Successfully !!";

  	echo $_SESSION['success'];     

    header('location: 16.php');

	} 	

?>


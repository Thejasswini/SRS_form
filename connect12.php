<?php

session_start();


$yesno ="";
$yesno1 ="";
$yesno2 ="";

$typeofbackup ="";
$fullbackup ="";
$policy ="";

$yesno3 ="";
$retention ="";

$yesno4 ="";
$rto ="";
$rpo ="";

$yesno5 ="";

$db = mysqli_connect('localhost', 'root', '', 'srs');
if (isset($_POST['save_12'])) {
	$yesno = mysqli_real_escape_string($db, $_POST['yesno']);
	$yesno1 = mysqli_real_escape_string($db, $_POST['yesno1']);
	$yesno2 = mysqli_real_escape_string($db, $_POST['yesno2']);

	$typeofbackup = mysqli_real_escape_string($db, $_POST['typeofbackup']);
	$fullbackup = mysqli_real_escape_string($db, $_POST['fullbackup']);
	$policy = mysqli_real_escape_string($db, $_POST['policy']);

	$yesno3 = mysqli_real_escape_string($db, $_POST['yesno3']);
	$retention = mysqli_real_escape_string($db, $_POST['retention']);
	$yesno4 = mysqli_real_escape_string($db, $_POST['yesno4']);
	$rto = mysqli_real_escape_string($db, $_POST['rto']);
	$rpo = mysqli_real_escape_string($db, $_POST['rpo']);
	$yesno5 = mysqli_real_escape_string($db, $_POST['yesno5']);

	$query ="INSERT INTO backup(yesno,yesno1,yesno2,typeofbackup,fullbackup,policy,yesno3,retention,yesno4,rto,rpo,yesno5) VALUES('$yesno','$yesno1','$yesno2','$typeofbackup','$fullbackup','$policy','$yesno3','$retention','$yesno4','$rto','$rpo','$yesno5')";
	 mysqli_query($db, $query);  	
  	$_SESSION['success'] = "Previous Data saved Successfully !!";

  	echo $_SESSION['success'];     

    header('location: 13.php');

	} 	

?>


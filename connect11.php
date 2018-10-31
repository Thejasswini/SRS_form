<?php

session_start();

$yesno ="";
$name ="";
$specification ="";
$licensing ="";

$sslcertificate ="";
$typeofssl ="";
$multisan ="";

$name1 ="";
$userid1 ="";

$name2 ="";
$userid2 ="";

$name3 ="";
$userid3 ="";

$db = mysqli_connect('localhost', 'root', '', 'srs');
if (isset($_POST['save_11'])) {
	$yesno = mysqli_real_escape_string($db, $_POST['yesno']);
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$specification = mysqli_real_escape_string($db, $_POST['specification']);
	$licensing = mysqli_real_escape_string($db, $_POST['licensing']);
	$sslcertificate = mysqli_real_escape_string($db, $_POST['sslcertificate']);
	$typeofssl = mysqli_real_escape_string($db, $_POST['typeofssl']);
	$multisan = mysqli_real_escape_string($db, $_POST['multisan']);
	$name1 = mysqli_real_escape_string($db, $_POST['name1']);
	$userid1 = mysqli_real_escape_string($db, $_POST['userid1']);
	$name2 = mysqli_real_escape_string($db, $_POST['name2']);
	$userid2 = mysqli_real_escape_string($db, $_POST['userid2']);
	$name3= mysqli_real_escape_string($db, $_POST['name3']);
	$userid3 = mysqli_real_escape_string($db, $_POST['userid3']);

	$query ="INSERT INTO security(yesno,name,specification,licensing,sslcertificate,typeofssl,multisan,name1,userid1,name2,userid2,name3,userid3) VALUES ('$yesno','$name','$specification','$typeofssl','$multisan','$name1','$userid1','$name2','$userid2','$name3','$userid3')";

	 mysqli_query($db, $query);  	
  	$_SESSION['success'] = "Previous Data saved Successfully !!";

  	echo $_SESSION['success'];     

    header('location: 12.php');

	} 	

?>

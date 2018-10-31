<?php

session_start();

$yesno ="";
$ipv6 ="";

$yesno1 ="";
$name ="";
$ipaddress ="";
$port ="";
$protocol ="";

$yesno2 ="";
$tunnel ="";

$publicip ="";
$othernd ="";
$cdn ="";

$db = mysqli_connect('localhost', 'root', '', 'srs');
if (isset($_POST['save_6'])) {
	$yesno = mysqli_real_escape_string($db, $_POST['yesno']);
	$ipv6 = mysqli_real_escape_string($db, $_POST['ipv6']);
	$yesno1 = mysqli_real_escape_string($db, $_POST['yesno1']);
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$ipaddress = mysqli_real_escape_string($db, $_POST['ipaddress']);
	$port = mysqli_real_escape_string($db, $_POST['port']);
	$protocol = mysqli_real_escape_string($db, $_POST['protocol']);
	$yesno2 = mysqli_real_escape_string($db, $_POST['yesno2']);
	$tunnel = mysqli_real_escape_string($db, $_POST['tunnel']);
	$publicip = mysqli_real_escape_string($db, $_POST['publicip']);
	$othernd = mysqli_real_escape_string($db, $_POST['othernd']);
	$cdn = mysqli_real_escape_string($db, $_POST['cdn']);

	$query ="INSERT INTO network(yesno,ipv6,yesno1,name,ipaddress,port,protocol,yesno2,tunnel,publicip,othernd,cdn) VALUES('$yesno','$ipv6','$yesno1','$name','$ipaddress','$port','$protocol','$yesno2','tunnel','publicip','othernd','cdn')";
	mysqli_query($db, $query);  	
  	$_SESSION['success'] = "Previous Data saved Successfully !!";

  	echo $_SESSION['success'];     

    header('location: 8.php');

	} 	

?>




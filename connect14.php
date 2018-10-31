<?php

session_start();

$choosepricing ="";
$addinfo ="";

$db = mysqli_connect('localhost', 'root', '', 'srs');

if (isset($_POST['save_14'])) {
	$choosepricing = mysqli_real_escape_string($db, $_POST['choosepricing']);
	$addinfo = mysqli_real_escape_string($db, $_POST['addinfo']);

		$query = "INSERT INTO price (choosepricing, addinfo) VALUES('$choosepricing', '$addinfo')";

		mysqli_query($db, $query);  	
  	$_SESSION['success'] = "Previous Data saved Successfully !!";

  	echo $_SESSION['success'];     

    header('location: 15.php');
}


?>
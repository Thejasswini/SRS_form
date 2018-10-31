<?php

session_start();

$yesno ="";
$provider ="";
$tennant_id ="";
$account_id ="";
$subscription_name ="";
$subscription_id ="";
$subscription_owner ="";
$description ="";
$accommodate ="";

$cs_provider ="";
$others ="";
$deployed ="";

$db = mysqli_connect('localhost', 'root', '', 'srs');

if (isset($_POST['save_3'])) {
	$yesno = mysqli_real_escape_string($db, $_POST['yesno']);
	$provider = mysqli_real_escape_string($db, $_POST['provider']);
	$tennant_id = mysqli_real_escape_string($db, $_POST['tennant_id']);
	$account_id = mysqli_real_escape_string($db, $_POST['account_id']);
	$subscription_name = mysqli_real_escape_string($db, $_POST['subscription_name']);
	$subscription_id = mysqli_real_escape_string($db, $_POST['subscription_id']);
	$subscription_owner = mysqli_real_escape_string($db, $_POST['subscription_owner']);
	$description = mysqli_real_escape_string($db, $_POST['description']);
	$accommodate = mysqli_real_escape_string($db, $_POST['accommodate']);
	$cs_provider = mysqli_real_escape_string($db, $_POST['cs_provider']);
	$others = mysqli_real_escape_string($db, $_POST['others']);
	$deployed = mysqli_real_escape_string($db, $_POST['deployed']);

	$query = "INSERT INTO service_provider (yesno, provider, tennant_id, account_id, subscription_name, subscription_id, subscription_owner, description, accommodate, cs_provider, others, deployed) VALUES('yesno', '$provider', '$tennant_id', '$account_id', '$subscription_name', '$subscription_id', '$subscription_owner', '$description', '$accommodate', '$cs_provider', '$others','$deployed' ) ";

	mysqli_query($db, $query);  	
  	$_SESSION['success'] = "Previous Data saved Successfully !!";

  	echo $_SESSION['success'];     

    header('location: 5.php');


	}

?>












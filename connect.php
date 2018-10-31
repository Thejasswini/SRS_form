<?php

session_start();

// initializing variables
$organization = "";
$street = "";
$building = "";
$landmark = "";
$city = "";
$zipcode = "";
$country = "";
$website = "";

$firstName1 = "";
$midName1 = "";
$lastName1 = "";
$gender1 = "";
$phonecode1 = "";
$phone1 = "";

$firstName2 = "";
$midName2 = "";
$lastName2 = "";
$gender2 = "";
$phonecode2 = "";
$phone2 = "";

$req_date = "";
$exp_date = "";

$projectName = "";
$endUser = "";

$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'srs');

if (isset($_POST['save_1'])) {
	$organization = mysqli_real_escape_string($db, $_POST['organization']);
	$street = mysqli_real_escape_string($db, $_POST['street']);
	$building = mysqli_real_escape_string($db, $_POST['building']);
	$landmark = mysqli_real_escape_string($db, $_POST['landmark']);
	$city = mysqli_real_escape_string($db, $_POST['city']);
	$zipcode = mysqli_real_escape_string($db, $_POST['zipcode']);
	$country = mysqli_real_escape_string($db, $_POST['country']);
	$website = mysqli_real_escape_string($db, $_POST['website']);

	$firstName1 = mysqli_real_escape_string($db, $_POST['firstName1']);	
	$midName1 = mysqli_real_escape_string($db, $_POST['midName1']);
	$lastName1 = mysqli_real_escape_string($db, $_POST['lastName1']);
	$gender1 = mysqli_real_escape_string($db, $_POST['gender1']);
	$phonecode1 = mysqli_real_escape_string($db, $_POST['phonecode1']);
	$phone1 = mysqli_real_escape_string($db, $_POST['phone1']);


	$firstName2 = mysqli_real_escape_string($db, $_POST['firstName2']);	
	$midName2 = mysqli_real_escape_string($db, $_POST['midName2']);
	$lastName2 = mysqli_real_escape_string($db, $_POST['lastName2']);
	$gender2 = mysqli_real_escape_string($db, $_POST['gender2']);
	$phonecode2 = mysqli_real_escape_string($db, $_POST['phonecode2']);
	$phone2 = mysqli_real_escape_string($db, $_POST['phone2']);

	$req_date = mysqli_real_escape_string($db, $_POST['req_date']);
	$exp_date = mysqli_real_escape_string($db, $_POST['exp_date']);

	$projectName = mysqli_real_escape_string($db, $_POST['projectName']);
	$endUser = mysqli_real_escape_string($db, $_POST['endUser']);

	$query = "INSERT INTO basic_info (organization, street, building, landmark, city, zipcode, country, website, firstName1, midName1, lastName1, gender1, phonecode1, phone1, firstName2, midName2, lastName2, gender2, phonecode2, phone2, req_date, exp_date, projectName, endUser) 
  			  VALUES('$organization', '$street', '$building', '$landmark', '$city', '$zipcode', '$country', '$website', '$firstName1', '$midName1', '$lastName1', '$gender1', '$phonecode1', '$phone1', '$firstName2','$midName2', '$lastName2','$gender2', '$phonecode2', '$phone2','$req_date', '$exp_date', '$projectName', '$endUser')";
  	mysqli_query($db, $query);  	
  	$_SESSION['success'] = "Previous Data saved Successfully !!";

  	echo $_SESSION['success'];     

    header('location: 2.php');

	} 	

?>
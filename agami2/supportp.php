<?php
session_start();

//Initializing variables

$name = "";
$email = "";
$errors = array();

//Connect to database

$db = mysqli_connect('localhost','root','','student') or die("could not connect to database");

//support user
if (isset($_POST['sup']))
{
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$phone = mysqli_real_escape_string($db, $_POST['phone']);
	$comments = mysqli_real_escape_string($db, $_POST['comments']);

	//Validation form

	if (empty($name))
	{ 
		array_push($errors, "<font color='red'>Name is required </font>");
	}
	if (empty($email))
	{ 
		array_push($errors, "<font color='red'><font color='red'>Email is required </font>");
	}
	if (empty($phone))
	{ 
		array_push($errors, "<font color='red'><font color='red'>Mobule Number is required </font>");
	}
	if (empty($comments)) 
	{	
		array_push($errors, "<font color='red'>Comment is required</font>");
	}

	//support giving user

	if (count($errors) == 0) 
	{
		$query = "INSERT INTO support (name, email, phone, comments) VALUES ('$name', '$email', '$phone', '$comments')";

		mysqli_query($db, $query);
		$_SESSION['name'] = $name;
		array_push($errors, "<h2><font color='green'>Submit Successful.</font></h2>");	
	}
}
?>
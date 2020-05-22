<?php
session_start();

//Initializing variables

$name = "";
$email = "";
$errors = array();

//Connect to database

$db = mysqli_connect('localhost','root','','student') or die("could not connect to database");

//feedback user
if (isset($_POST['feed']))
{
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$feedback = mysqli_real_escape_string($db, $_POST['feedback']);

	//Validation form

	if (empty($name))
	{ 
		array_push($errors, "<font color='red'>Name is required </font>");
	}
	if (empty($email))
	{ 
		array_push($errors, "<font color='red'><font color='red'>Email is required </font>");
	}
	if (empty($feedback)) 
	{	
		array_push($errors, "<font color='red'>feedback is required</font>");
	}

	//feedback giving user

	if (count($errors) == 0) 
	{
		//$email = md5($email);
		$query = "INSERT INTO feedback (name, email, feedback) VALUES ('$name', '$email', '$feedback')";

		mysqli_query($db, $query);
		$_SESSION['name'] = $name;
		array_push($errors, "<h1><font color='green'>Feedback successful.</font></h1>");
                ///header('location:index.php');
	}
}
?>
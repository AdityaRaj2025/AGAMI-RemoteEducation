<?php
	session_start();

	//Initializing variables

	$name = "";
	$email = "";
	$errors = array();

	//Connect to database

	$db = mysqli_connect('localhost','root','','student') or die("could not connect to database");

	//Register user
	if (isset($_POST['attend']))
	{
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$usn = mysqli_real_escape_string($db, $_POST['usn']);
		$subcode = mysqli_real_escape_string($db, $_POST['subcode']);
		$section = mysqli_real_escape_string($db, $_POST['section']);


		//Validation form

		if (empty($name))
		{ 
			array_push($errors, "<font color='red'>Name is required </font>");
		}
		if (empty($usn))
		{ 
			array_push($errors, "<font color='red'>USN is required </font>");
		}
		if (empty($subcode))
		{ 
			array_push($errors, "<font color='red'><font color='red'>Subject Code is required </font>");
		}
		if (empty($section))
		{ 
			array_push($errors, "<font color='red'><font color='red'>Section Code is required </font>");
		}
		

		//check database for existing user with same username

		$user_check_query = "SELECT * FROM attendence WHERE name = '$name' OR usn = '$usn' LIMIT 1";

		$results = mysqli_query($db, $user_check_query);
		 $user = mysqli_fetch_assoc($results);

		if ($user) 
		{
			if ($user['name'] === $name)
			{
				array_push($errors, "<font color='red'>Name already exists</font>");
			}
			if ($user['usn'] === $usn)
			{
				array_push($errors, "<font color='red'>This USN has a registered</font>");
			}
		}

		//Register user if no error

		if (count($errors) == 0) 
		{
			$query = "INSERT INTO attendence (name, usn, subcode, section) VALUES ('$name', '$usn', '$subcode', '$section')";

			mysqli_query($db, $query);
			$_SESSION['name'] = $name;
			$_SESSION['success'] = "you are now logged in";
			array_push($errors, "<h2><font color='green'>Add Successfully</font></h2>");	
		}
	}
?>
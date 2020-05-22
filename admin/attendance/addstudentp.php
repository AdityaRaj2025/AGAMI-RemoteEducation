<?php
	session_start();

	//Initializing variables

	$name = "";
	$email = "";
	$errors = array();

	//Connect to database

	$db = mysqli_connect('localhost','root','','student') or die("could not connect to database");

	//Register user
	if (isset($_POST['add_student']))
	{
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$usn = mysqli_real_escape_string($db, $_POST['usn']);
		$email = mysqli_real_escape_string($db, $_POST['email']);


		//Validation form

		if (empty($name))
		{ 
			array_push($errors, "<font color='red'>Name is required </font>");
		}
		if (empty($usn))
		{ 
			array_push($errors, "<font color='red'>USN is required </font>");
		}
		if (empty($email))
		{ 
			array_push($errors, "<font color='red'><font color='red'>Email is required </font>");
		}
		

		//check database for existing user with same username

		$user_check_query = "SELECT * FROM addstudent WHERE usn = '$usn' OR email = '$email' LIMIT 1";

		$results = mysqli_query($db, $user_check_query);
		 $user = mysqli_fetch_assoc($results);

		if ($user) 
		{
			if ($user['usn'] === $usn)
			{
				array_push($errors, "<font color='red'>USN already exists</font>");
			}
			if ($user['email'] === $email)
			{
				array_push($errors, "<font color='red'>This email id has a registered</font>");
			}
		}

		//Register user if no error

		if (count($errors) == 0) 
		{
			$query = "INSERT INTO addstudent (name, usn, email) VALUES ('$name', '$usn', '$email')";

			mysqli_query($db, $query);
			$_SESSION['name'] = $name;
			$_SESSION['email'] = $email;
			$_SESSION['success'] = "you are now logged in";
			array_push($errors, "<font color='green'>Add successful.</font>");	
		}
	}
?>
<?php
	session_start();

	//Initializing variables
	$usn = "";
	$email = "";
	$errors = array();

	//Connect to database

	$db = mysqli_connect('localhost','root','','student') or die("could not connect to database");

	if(isset($_POST['login_join']))
	{
		$usn= mysqli_real_escape_string($db, $_POST['usn']);
		$email = mysqli_real_escape_string($db, $_POST['email']);

		if(empty($usn))
		{
			array_push($errors, "<font color='red'>USN is required</font>");
		}
		if(empty($email))
		{
			array_push($errors, "<font color='red'>Email is required</font>");
		}
		if (count($errors) == 0)
		{
			$query = "SELECT * FROM addstudent WHERE usn = '$usn' AND email = '$email' ";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1)
			{ 
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "logged in successfully";
				header('location:../user/index.php');
			}
			else
			{
				array_push($errors, "<font color='red'>wrong email/password combination. please try again</font>");	
			}
		}
	}
?>
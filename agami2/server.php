<?php

session_start();

//Initializing variables

$fname = "";
$email = "";
$mobile = "";
$errors = array();

//Connect to database

 $db = mysqli_connect('localhost','root','','student') or die("could not connect to database");
//Register user
if (isset($_POST['reg_user']))
{
	$fid = mysqli_real_escape_string($db, $_POST['fid']);
	$fname = mysqli_real_escape_string($db, $_POST['fname']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$mobile = mysqli_real_escape_string($db, $_POST['mobile']);
	$subcode = mysqli_real_escape_string($db, $_POST['subcode']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$con_password = mysqli_real_escape_string($db, $_POST['con_password']);

	//Validation form

	if (empty($fid))
	{ 
		array_push($errors, "<font color='red'>Faculty Id is required </font>");
	}
	if (empty($fname))
	{ 
		array_push($errors, "<font color='red'>Full Name is required </font>");
	}
	if (empty($email))
	{ 
		array_push($errors, "<font color='red'><font color='red'>Email is required </font>");
	}
	if (empty($mobile))
	{ 
		array_push($errors, "<font color='red'>Mobile Number is required </font>");
	}
	if (empty($subcode))
	{ 
		array_push($errors, "<font color='red'>Subject Code is required </font>");
	}
	if (empty($password)) 
	{	
		array_push($errors, "<font color='red'>Password is required</font>");
	}
	if ($password != $con_password) 
	{ 
		array_push($errors, "<font color='red'>Password do not match</font>");
	}

	//check database for existing user with same username

	$user_check_query = "SELECT * FROM register WHERE fid = '$fid' OR email = '$email' LIMIT 1";

	$results = mysqli_query($db, $user_check_query);
	 $user = mysqli_fetch_assoc($results);

	if ($user) 
	{
		if ($user['fid'] === $fid)
		{
			array_push($errors, "<font color='red'>Faculty Id already exists</font>");
		}
		if ($user['email'] === $email)
		{
			array_push($errors, "<font color='red'>This email id has a registered</font>");
		}
	}

	//Register user if no error

	if (count($errors) == 0) 
	{
		$password = md5($password);
		$query = "INSERT INTO register (fid, fname, email, mobile, subcode, password) VALUES ('$fid', '$fname', '$email', '$mobile', '$subcode', '$password')";

		mysqli_query($db, $query);
		$_SESSION['fid'] = $fid;
		$_SESSION['email'] = $email;
		$_SESSION['success'] = "you are now logged in";
		array_push($errors, "<h1><font color='green'>Register successful.</font></h1>");	
	}
}

//LOGIN USER

if(isset($_POST['login_user']))
{
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if(empty($email))
	{
		array_push($errors, "<font color='red'><font color='red'>email is required</font>");
	}
	if(empty($password))
	{
		array_push($errors, "<font color='red'><font color='red'>password is required</font>");
	}
	if (count($errors) == 0)
	{
		$password = md5($password);
		$query = "SELECT * FROM register WHERE email = '$email' AND password = '$password' ";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1)
		{ 
			$_SESSION['email'] = $email;
			$_SESSION['success'] = "logged in successfully";
			header('location:../admin/profile/index.php');
		}
		else
		{
			array_push($errors, "<font color='red'>wrong email/password combination. please try again</font>");	
		}
	}
}

?>
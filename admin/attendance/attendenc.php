 <!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity-crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family-Candal|Lora">

<link rel="stylesheet" type="text/css" href="../../css/style.css">

<link rel="stylesheet" type="text/css" href="../../css/admin.css">
<link rel="stylesheet" type="text/css" href="profile.css">

<link rel="stylesheet" href="styleattend.css">

	<title>Dash-Board</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".btn").click(function(){
				$(".input, .text-area").val(" ");
			});
		});
	</script>
<style>
	table {
	border-collapse: collapse;
	width: 100%;
	color: #588c7e;
	font-family: monospace;
	font-size: 20px;
	text-align: left;
	}
	th {
	background-color: #588c7e;
	color: white;
	}
	tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>

	<header>
		<div class="logo">
			<!--<h1 class="logo-text"><span>AGA</span>Mi</h1>-->
			<img src="../../image/logo.png" height="60">
		</div>
		<i class="fa fa-bars menu-toggle"></i>
		<ul class="nav">
			<li>
				<a href="#">
					<i class="fa fa-user"></i>
					 User
					<i class="fa fa-chevron-down" style="font-size: .8em;"></i>
				</a>
				<ul>
					<li><a href="index.php">Profile</a></li>
					<li><a href="../../agami2/index.php" class="logout">Logout</a></li>
				</ul>
			</li>
		</ul>
	</header>
	

	<!------Admin page wrapper----------->

	<div class="admin-wrapper">

		<!------Left sidebar------------->
		<div class="left-sidebar">
			 <ul>
                <li><a href="../profile/index.php">Profile</a></li>
                <li><a href="../Liveclass/button.php">Live Class</a></li>
                <li><a href="index.php">Attendance</a></li>
                 <li><a href="../quiz/startquiz.php">Online Exam</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
		</div>


		<!-----Admin content---------->
		<div class="admin-content">
			<div class="button-group">
				<!--<a href="attendenc.php" class="btn btn-primary">Attendance List</a>-->
			</div>
			<div class="content">
			<h2 class="page-title">Attendance List..</h2>
			<!------------------------------------------>
			<table>
				<tr>
					<th>Name</th>
					<th>USN</th>
					<th>Subject Code</th>
					<th>Section</th>
				</tr> 
					<?php
						$conn = mysqli_connect("localhost", "root", "", "student");
						// Check connection
						if ($conn->connect_error) 
						{
							die("Connection failed: " . $conn->connect_error);
						}
						$sql = "SELECT id, name, usn, subcode, section FROM attendence";
						$result = $conn->query($sql);
						if ($result->num_rows > 0)
						 {
						// 	output data of each row
							while($row = $result->fetch_assoc()) 
							{
								echo "<tr><td>" . $row["name"] . "</td><td>"
								. $row["usn"]. "</td><td>".$row["subcode"]."</td><td>".$row["section"]."</td></tr>";
							}
							echo "</table>";
						}
						else 
						{ 
							echo "0 results";
						}
						$conn->close();
					?>
			</table>

			<!------------------------------------------>			
			</div>
		</div>
	</div>
	
	<!-----JQuery---------->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	
	<script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>

	<script src="../../js/scripts.js"></script>

</body>
</html>
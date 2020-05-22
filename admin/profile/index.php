
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<?php 
      $db = mysqli_connect('localhost','root','','student') or die("could not connect to database");
      $query="select * from register";
      $result=mysqli_query($db, $query);
?>


 <!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity-crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family-Candal|Lora">

<link rel="stylesheet" type="text/css" href="../../css/style.css">

<link rel="stylesheet" type="text/css" href="../../css/admin.css">
<link rel="stylesheet" type="text/css" href="profile.css">

	<title>Dash-Board</title>
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
					<li><a href="index.html">Profile</a></li>
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
                <li><a href="index.php">Profile</a></li>
                <li><a href="../Liveclass/button.php">Live Class</a></li>
                <li><a href="../attendance/index.php">Attendance</a></li>
                 <li><a href="../quiz/startquiz.php">Online Exam</a></li>
                <li><a href="#">Settings</a></li>
                
            </ul>


		</div>


		<!-----Admin content---------->
		<div class="admin-content">
			<div class="button-group">
				<a href="#" class="btn btn-primary">Edit Profile</a>
			</div>

			<div class="content">
			<h2 class="page-title">Profile..</h2>
       <?php
        while($rows=mysqli_fetch_assoc($result))
        {
      ?>

			<div class="container">
                <form action="index.php">
                  <div class="row">
                      <div class="col-25">
                      <label for="fname">Faculty_id</label>
                    </div>
                     <div class="col-75">
            
                      <input type="text" id="fid" name="fid" value="<?php echo $rows['fid'] ?>"  placeholder="Your Id..">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-25">
                      <label for="fname">Full Name</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="fname" name="fname" value="<?php echo $rows['fname'] ?>" placeholder="Your full name..">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-25">
                      <label for="email">E-mail</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="email" name="email" value="<?php echo $rows['email'] ?>" placeholder="your email-id">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-25">
                      <label for="lname">Mobile No</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="mobno" name="mobile" value="<?php echo $rows['mobile'] ?>" placeholder="Mobile Number">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-25">
                      <label for="scode">Subject Code</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="scode" name="scode" value="<?php echo $rows['subcode'] ?>" placeholder="Subject Code">
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-25">
                      <label for="password">Password</label>
                    </div>
                    <div class="col-75">
                      <input type="password" id="password" name="password" value="<?php echo $rows['password'] ?>" placeholder="Password">
                    </div>
                  </div>
                  <div class="row">
                  	<div class="75">
                  		<button type="submit" name="update" class="btn btn-primary">Submit</button> 
                 	</div>
                  </div>
                </form>
            </div>
            <?php		
            }		
             ?>

      <?php
    
    
         if(isset($_POST['update']))
          {
            
            $id=$_POST['id'];
          
           $query = "update `register` SET fid ='$_POST[fid]',email ='$_POST[email]',mobile ='$_POST[mobile]', scode ='$_POST[subcode]', password ='$_POST[password]' where fid='$_POST[fid]' ";
           // $query_run=mysqli_query($connection,'$query');
            if(mysqli_query($db, $query)) 
            {
              echo "Record updated successfully";  
            }
            else
            {  
            echo "Could not update record: ". mysqli_error($conn);  
            }
          }  
        ?>

		</div>
	</div>
	
	<!-----JQuery---------->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	
	<script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>

	<script src="../../js/scripts.js"></script>

</body>
</html>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
    <link rel="stylesheet" href="signupstyle.css">
</head>
<body>
    <div class="wrap">
        <center>
        <a href="index.php"><img src="logo.png" height="65"></a>
        </center>
        <h2>Sign Up</h2>
        <form action="signup.php" method="POST">
        <?php include('error.php'); ?>
         <div class="txtb">
        <input type="text" placeholder="Faculty ID" name="fid">
        </div>
        <input type="text" placeholder="Full Name" name="fname">
        <input type="text" placeholder="Email ID" name="email">
        <input type="text" placeholder="Mobile Number" name="mobile">
        <input type="text" placeholder="Subject Code" name="subcode">
        <input type="password" placeholder="Password" name="password">
        <input type="password" placeholder="Confirm Password" name="con_password">
        <button type="submit" name="reg_user">Sign Up</button>
        </form>
        <h4>Have an account ? <a href="login.php" style="text-decoration: none;">Sign In</a></h4>
        </div>    
</body>
</html>
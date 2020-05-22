<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Sign In</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    <div class="wrap">
        <center>
        <a href="signup.php"><img src="logo.png" height="65"></a>
       
        </center>
        <h2>Sign In</h2>
        <form action="login.php" method="post">
        <?php include('error.php') ?>
        <input type="text" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="password">
        <a href="../admin/profile/index.php"><button type="submit" name="login_user">Sign In</button>
        </form>
        <h4><a href=" " style="text-decoration: none;">Forgot Password</a></h4>
        <h4>Don't have an account ? <a href="signup.php" style="text-decoration: none;">Sign Up</a></h4>
    </div>
</body>
</html>
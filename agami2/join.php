<?php include('joinmeeting.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Sign In</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    <div class="wrap">
        <center>
        <a href="index.php" ><img src="logo.png" height="65"></a>       
        </center>
        <h2>Join a Class</h2>
        <form action="join.php" method="post">
        <?php include('error.php') ?>
        <input type="text" placeholder="Registration Number" name="usn">
        <input type="text" placeholder="Email" name="email">
        <button type="submit" name="login_join">Join</button>
        </form>
    </div>
</body>
</html>
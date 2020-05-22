<?php include('supportp.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Support</title>
    <link rel="stylesheet" href="supportstyle.css">
  </head>
  <body>
    <form action="support.php" method="POST">
      
  <div class="form">
    <center>
        <img src="logo.png" height="65">
    </center>
    <h1>Support</h1>
     <?php include('error.php') ?>
    <div class="txtb">   
      <input type="text" name="name"placeholder="Full Name..">
    </div>
    <div class="txtb">    
      <input type="email" name="email" placeholder="Email..">
    </div>
    <div class="txtb">    
      <input type="mobile" name="phone" placeholder="Mobile Number..">
    </div>
    <div class="txtb">
      <input type="feedback" name="comments" placeholder="Give Comments..">
      <textarea></textarea>
    </div>
    <div>
    <h4><a href=" " style="text-decoration: none;">Upload Screenshots (Optional)</a></h4>
    </div>
    <button type="submit" name="sup" class="btn">Submit</button>
  </div>
  </body>
</html>
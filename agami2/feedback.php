<?php include('feedbackp.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Feedback</title>
    <link rel="stylesheet" href="feedbackstyle.css">
  </head>
  <body>
     <form action="feedback.php" method="POST">
  <div class="form">
    <center>
        <img src="logo.png" height="65">
    </center>
    <h1>Feedback</h1>
      <?php include('error.php') ?>
    <div class="txtb">   
      <input type="text" name="name" placeholder="Full Name..">
    </div>
    <div class="txtb">    
      <input type="email" name="email" placeholder="Email..">
    </div>
    <div class="txtb">
      <input type="feedback" name="feedback" placeholder="Give Feedback..">
      <textarea></textarea>
    </div>
  <button type="submit" name="feed" class="btn">Submit</button>
  </div>
  </form>
  </body>
</html>
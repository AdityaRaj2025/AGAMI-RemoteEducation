<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<!DOCTYPE html>
<html>
<head>
	<title>AGAMI</title>
	<link rel="stylesheet" type="text/css" href="agamistyle.css">
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
         <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
		 
		 <!----------Bootstrap Link Aditya------------------------------>

		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
         
         <meta name=”viewport” content=”width=device-width, initial-scale=1″>
             
</head>

<body onload="fetch()">

 <!----------POPUP FORM------------------------------

    <div class="login-popup">
      <div class="form-popup" id="popupForm">
        <form action="index.php" class="form-container"> 
          <img src="images/logo2.png" height="25" class="cancel" onclick="closeForm()"></button>  
            
          <h2>Join a Class</h2>
          <label for="email">
          </label>
          <input type="text" placeholder="Registration Number.." name="usn">
          <input type="text" placeholder="Email Id.." name="email">
          <button type="submit" name="login_join" class="btn">Join</button>
        </form>
      </div>
    </div>
    
    ---------------------------------------->

	<section id="nav-bar"> 
                <nav class="navbar navbar-expand-lg navbar-light">
				 <a class="navbar-brand" href="#"><img src="images/logo.png"> </a>
                 
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                             <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                              <a class="nav-link" href="#top">HOME</a>
                
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="feedback.php">FEEDBACK</a>
                            </li>
                            <li class="nav-item">
								<a class="nav-link" href="support.php">SUPPORT</a>  
                            </li>
                          </ul>
                        </div>
                      </nav>
					  
        </section>
		
		<section id="banner">
		
            <div class="container">
			
                <div class="row">
				
				
                    <div class="col-md-6 text-center">
                        <img src="images/home3.png" class="img-fluid"> 
                    </div>

					<div class="col-md-6">
					<div class ="">
					</div>
                        <p class="promo-title">AGAMI </p>
						
                        <h3>THE REAL SMELL OF CONNECT !</h3>
						<a href="signup.php" class="button7" style="background-color:#2979FF">SIGNUP</a>
						<a href="join.php" class="button7" style="background-color:#CCCCCC; color:#000000" onclick="openForm()">Join a Class</a>
                                                
                                                                                                                                                                               
						<a href="login.php" class="button7" style="background-color:#2979FF">LOGIN</a>
						
						<h6> <br>STUDENTS CAN CONNECT EASILY AND THEY CAN LEARN AND ALSO EXPLORE </h6>
                                                
                                                <!------------Join Meeting--------------------------------------->
                                                
                                                
                                                <!------------Join Meeting--------------------------------------->
                    </div>
                </div>

            </div>
          
        </section>
		
		
		 <!-----------------------Footer Section------------------>
        <section id="footer">
            <img src="images/wave.png" class="footer-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-box">
                        <font size="8" face="verdana" color="white">  AGAMI </font> 
                        <p>STUDENTS CAN CONNECT EASILY AND THEY CAN LEARN AND ALSO EXPLORE</p>
                    </div>
                    <div class="col-md-4 footer-box">
                       <p><b>SUPPORT US</b></p>
                       <p><i class="fa fa-map-marker"></i> BIHAR</p>
                       <p><i class="fa fa-phone"></i> +91 8873838398</p>
                       <p><i class="fa fa-envelope"></i> adityaraj19997@gmail.com</p>
                     </div>
                     <div class="col-md-4 footer-box">
                            <p><b>SUBSCRIBE NEWSLETTER</b></p>
                            <input type="email" class="form-control" placeholder="Your Email">
                            <button type="button" class="btn btn-primary">Subscribe</button>
                    </div>
                   <div>
                       <hr>
                        <p class="copyright">COPYRIGHT ©2020 ALL RIGHTS RESERVED | Website Created by AGAMI TEAM</p>
                   </div> 
                </div>
            </div>
        </section>
        
     <!----------JS FOR POPUP FORM------------------------------>
 
      <script>
      function openForm() {
        document.getElementById("popupForm").style.display="block";
      }
      
      function closeForm() {
        document.getElementById("popupForm").style.display="none";
      }
    </script>
        	
</body>
</html>
<?php
session_start();
ob_start();
?>

<html>
<head>
<title>Successful!</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">

      <link rel="stylesheet" href="css/style-footer.css">
	<link href="css/style1.css" rel="stylesheet">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
      <link href="css/style-body.css" rel="stylesheet" type="text/css" media="all"/>
      
</head>

<?php

            include('db.php');

            //Getting image3 from previous layer
            $var=$_GET['var'];
            $_SESSION['a'][5]=$_GET['var'];
            $_SESSION['layer3']=$_GET['var'];
            //End.

            //User email and phone.
            $email=$_SESSION['a'][0];
            $phone=$_SESSION['a'][1];
            //End.


            //User key matrix.
            $nums=$_SESSION['a'][2];
            //End.
            echo "<h1>$nums[0]</h1>";

            //User clicked images.
            $image1=$_SESSION['a'][3];
            $image2=$_SESSION['a'][4];
            $image3=$_SESSION['a'][5];
            //End.

            //Inserting into table.
            $query="INSERT into major_project(email,phone,m1,m2,m3,m4,m5,m6,m7,m8,m9,image1,image2,image3,userimage) 
            values('$email',$phone,'$nums[0]', '$nums[1]', '$nums[2]', '$nums[3]', '$nums[4]', '$nums[5]', '$nums[6]', '$nums[7]', '$nums[8]','$image1','$image2','$image3','../user/images/user/default.png')";
            $result=mysqli_query($con, $query);
            //End.

?>

<body>
<!--Main Header-->
<nav class="navbar navbar-default">
        <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                          aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                    </button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                          <li class="active">
                                <a href="../index.html">Home</a>
                          </li>
                          <li>
                                <a href="#">About Us</a>
                          </li>
                          <li>
                                <a href="#">Service</a>
                          </li>
                          <li>
                                <a href="#">Gallery</a>
                          </li>
                          <li>
                                <a href="#">Blog</a>
                          </li>
                          <li>
                                <a href="../contact.html">Contact Us</a>
                          </li>                                             
                    </ul>
              </div>
              <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<!--End Main Header -->

<!-- signup form -->
<div class="signupform">
	<div class="container">
		<div class="agile_info">
			<div class="login_form">
				<div class="left_grid_info">
					<h1>Manage Your User Account</h1>
					<p>This system provides high security to your account through the graphical password.</p><br>
					<img class="im1" src="../images/cover.jpg" height="270" width="370">
				</div>
			</div>
			<div class="login_info">
				<h2>Create New Account</h2>
                <p>You have succesfully registered !</p>
                <p class="account2">Click <a href="../log_in/login.html">here</a> to login</p>
			</div>
		</div>
	</div>

</div>


<!-- footer -->
<footer class="footer-distributed">
      <!-- footer left -->
      <div class="footer-left">              
            <h3>GPA<span>system</span></h3>        
            <p class="footer-links">
                  <a href="#">Home</a>
                  ·
                  <a href="#">Blog</a>
                  ·
                  <a href="#">About</a>
                  ·
                  <a href="#">Faq</a>
                  ·
                  <a href="#">Contact</a>
            </p>
            <p class="footer-company-name">GPAS &copy; 2023</p>
      </div>
      <!-- footer center-->
      <div class="footer-center">              
            <div>
                  <i class="fa fa-map-marker"></i>
                  <p><span>Kudlu gate</span> Bangalore</p>
            </div>
                    
            <div>
                  <i class="fa fa-phone"></i>
                  <p>+91 9876543210</p>
            </div>
                    
            <div>
                  <i class="fa fa-envelope"></i>
                  <p><a href="mailto:support@gpas.com">support@gpas.com</a></p>
            </div>      
      </div>
      <!-- footer right-->
      <div class="footer-right">              
          
                    
            <div class="footer-icons">
                    
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-github"></i></a>
                    
            </div>
                    
      </div>
                    
</footer>

<script src="plugins/jquery.js"></script>
<script src="plugins/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select.min.js"></script>


<script src="plugins/validate.js"></script>
<script src="plugins/wow.js"></script>
<script src="plugins/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>
</html>
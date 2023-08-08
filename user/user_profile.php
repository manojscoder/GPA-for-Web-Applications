<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Profile</title>

  <meta charset="utf-8">
  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/style-footer.css">
      <link href="css/style-header.css" rel="stylesheet">
      <link href="css/style-body.css" rel="stylesheet">
      <link href="css/style2.css" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>

<?php
include("db.php");
$email=$_SESSION['email'];

$result=mysqli_query($con,"select email,phone,userimage from major_project where email='$email'");
		if (mysqli_num_rows($result)>0)
		{
		$row=mysqli_fetch_array($result);
		$email=$row[0];
		$phone=$row[1];
            $userimage=$row[2];
		}
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
                              <a href="index.html">Home</a>
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
                              <a href="contact.html">Contact Us</a>
                        </li>                                             
                  </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
<!--End Main Header -->

<div class="signupform">
	<div class="container">
		<div class="agile_info">
			<div class="login_form">
				<center>
				<div class="left_grid_info">
					<h1><?php echo $email; ?></h1><br>
					<img class="im" src=<?php echo $userimage; ?> height="200" width="180">
				</div></center><br><br>
				<div class="left_grid_info">
					<p class="p1">Email : <?php echo $email; ?></p><br>
					<p class="p1">Phone : <?php echo $phone; ?></p><br>
				</div>
			</div>
			<div class="login_info">
				<a href="../change_graphicalpw/otp.php">Change Graphical Password</a><br><br><br>
				<a href="../change_profilepic/change_profile_pic.html">Change Profile Picture</a><br><br><br>
				<button class="btn btn-danger btn-block" type="button" onclick="window.location.href = 'logout.php'">Logout</button>
			</div>
		</div>
	</div>

</div>
<footer class="footer-distributed">

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

<div class="footer-center">

  <div>
    <i class="fa fa-map-marker"></i>
    <p><span>Kudlu gate</span>Bangalore</p>
  </div>

  <div>
    <i class="fa fa-phone"></i>
    <p>+ 91 9876543210</p>
  </div>

  <div>
    <i class="fa fa-envelope"></i>
    <p><a href="mailto:support@gpas.com">support@gpas.com</a></p>
  </div>

</div>

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
<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Change Sequence</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/style-footer.css">
    <link href="css/style1.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style-body.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
<script>
	// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDK9hzrF-tNgFxxds2nCUyZe86HN2BVkDA",
  authDomain: "yt-project-75709.firebaseapp.com",
  projectId: "yt-project-75709",
  storageBucket: "yt-project-75709.appspot.com",
  messagingSenderId: "147280594907",
  appId: "1:147280594907:web:b68a5d0da735270fde89fe",
  measurementId: "G-MLZQMSFH78"
};
	firebase.initializeApp(firebaseConfig);
render();
function render(){
	window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
	recaptchaVerifier.render();
}
	// function for send message
function phoneAuth(){
	var number = document.getElementById('number').value;
	firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult){
		window.confirmationResult = confirmationResult;
		coderesult = confirmationResult;
		document.getElementById('sender').style.display = 'none';
		document.getElementById('verifier').style.display = 'block';
	}).catch(function(error){
		alert(error.message);
	});
}
	// function for code verify
function codeverify(){
	var code = document.getElementById('verificationcode').value;
	coderesult.confirm(code).then(function(){
		document.getElementsByClassName('p-conf')[0].style.display = 'block';
		document.getElementsByClassName('n-conf')[0].style.display = 'none';
window.location.href="1.html";
	}).catch(function(){
		document.getElementsByClassName('p-conf')[0].style.display = 'none';
		document.getElementsByClassName('n-conf')[0].style.display = 'block';
window.location.href="sorry.html";
	})
}
</script>
    
</head>
<?php
            include('db.php');
		$phone=$_SESSION['phone'];	
           
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
                                <a href="../user/index.html">Home</a>
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
                                <a href="../user/contact.html">Contact Us</a>
                          </li>                                             
                    </ul>
              </div>
              <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!--End Main Header -->

<!-- check text password -->
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
                        <h2>Update Graphical Password</h2>
                        <p>Enter your text password to verify.</p>
                        <div class="container">
                              <div id="sender" class="input-group">
                              <input type="text" id="number" placeholder="+91..." value=<?php echo $phone; ?> readonly><br>
                                    <div id="recaptcha-container"></div>
                                    <input type="button" id="send" value="Send" onClick="phoneAuth()" class="btn btn-danger btn-block">
                              </div>


                              


                              <div id="verifier" style="display: none">
                                    <input type="text" id="verificationcode" placeholder="OTP Code">
                                    <input type="button" id="verify" value="Verify" onClick="codeverify()">
                                    <div class="p-conf">Number Verified</div>
                                    <div class="n-conf">OTP ERROR</div>
                              </div>
                        </div>
                        <p class="account">Click <a href="../user/user_profile.php">here</a> to go back to your profile</p>
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
                        <p><span>Kudlu gate</span>Bangalore</p>
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
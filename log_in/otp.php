<?php
session_start();
ob_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>OTP</title>
<style>
    body{
	    background-image:url(otp2.gif);
           background-size: cover;
            }
	.container {
		width: 302px;
		height: 175px;
		position: absolute;
		left: 0px;
		right: 0px;
		top: 0px;
		bottom: 0px;
		margin: auto;
	}
	#number, #verificationcode {
		width: calc(100% - 24px);
		padding: 10px;
		font-size: 20px;
		margin-bottom: 5px;
		outline: none;
	}
	#recaptcha-container {
		margin-bottom: 5px;
	}
	#send, #verify {
		width: 100%;
		height: 40px;
		outline: none;
	}
	.p-conf, .n-conf {
		width: calc(100% - 22px);
		border: 2px solid green;
		border-radius: 4px;
		padding: 8px 10px;
		margin: 4px 0px;
		background-color: rgba(0, 249, 12, 0.5);
		display: none;
	}
	.n-conf {
		border-color: red;
		background-color: rgba(255, 0, 4, 0.5);
	}
</style>
</head>

<body>
<?php
        include('db.php');
		$phone=$_SESSION['phone'];
		$start="+91".$phone;
           
      ?>
	<div class="container">
		<div id="sender">
			<input type="text" id="number" placeholder="+91..." value=<?php echo $start; ?> readonly>
			<div id="recaptcha-container"></div>
			<input type="button" id="send" value="Send" onClick="phoneAuth()">
		</div>
		<div id="verifier" style="display: none">
			<input type="text" id="verificationcode" placeholder="OTP Code">
			<input type="button" id="verify" value="Verify" onClick="codeverify()">
			<div class="p-conf">Number Verified</div>
			<div class="n-conf">Invalid OTP</div>
		</div>
	</div>
<!--	add firebase SDK-->
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
		window.location.href="changeKey.html";
	}).catch(function(){
		document.getElementsByClassName('p-conf')[0].style.display = 'none';
		document.getElementsByClassName('n-conf')[0].style.display = 'block';
	})
}
</script>
</body>
</html>

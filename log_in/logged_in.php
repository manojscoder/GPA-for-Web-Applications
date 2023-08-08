<?php
session_start();
ob_start();
?>

<html>
<head>
	<title>Successful!</title>
</head>

<body>

<?php

		include('db.php');	
		
		//Storing layer3 image for verification.
		$var=$_GET['var'];
		$_SESSION['a'][7]=$_GET['var'];	
		$_SESSION['layer3']=$_GET['var'];
		//End.

		//User email and phone.
		$email=$_SESSION['email'];
		$phone=$_SESSION['phone'];
		//End.


		//Layer1 user clicked image(layer1) and exact image1(layer1_a) from db.
		$layer1_a=$_SESSION['layer1_a'];
		$layer1=$_SESSION['layer1'];
		//End.


		//Layer2 user clicked image(layer2) and exact image2(layer2_a) from db.
		$layer2_a=$_SESSION['layer2_a'];
		$layer2=$_SESSION['layer2'];
		//End.


		//Layer3 user clicked image(layer3) and exact image3(layer3_a) from db.
		$layer3_a=$_SESSION['layer3_a'];
		$layer3=$_SESSION['layer3'];
		//End.


		//Verifying whether the user is authorized user or not.
		$result=mysqli_query($con,"select image1, image2, image3 from major_project where email='$email'");
		if (mysqli_num_rows($result)>0)
		{
			$row=mysqli_fetch_array($result);

			if($layer1==$layer1_a && $layer2==$layer2_a && $layer3==$layer3_a)
			{
			header('Location:../user/user_profile.php');
			}
			// invaid login details
			else 
			{
			header('Location:invalid_textpw.html');
			$_SESSION['selectagain']=1;
			}
		}
		//End.
		
		
?>

</body>
</html>
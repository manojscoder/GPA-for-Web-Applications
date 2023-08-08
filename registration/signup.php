<?php
session_start();
ob_start();

	include("db.php");

	//Getting email,phone and key matrix from signup form.
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$nums=$_POST['num'];
	//End.
	if(strlen((string)$phone)>10)
	{
		header('Location:phone_failed.html');
		exit;
		return;
	}
	//Checking whether user used all 1 to 9 numbers in the keymatrix and finding if any duplicates are present in key matrix.
	$unique_nums = array_unique($nums);
	if (count($unique_nums) != 9) {
		//echo "Please enter only unique numbers 1 to 9 in the grid. Duplicate values are not allowed";
		header('Location:KeyMatrix_failed.html');
		exit;
		return;
	}
	//End.
  

	//Checking whether email already used or not.
	$result=mysqli_query($con,"select * from major_project where email='$email'");
	if (mysqli_num_rows($result)>0)
	{
		header('Location:email_failed.html');
		exit;
		return;
	}
	//End.
	
	
	//Checking whether phone already used or not.
	$result=mysqli_query($con,"select * from major_project where phone=$phone");
	if (mysqli_num_rows($result)>0)
	{
		header('Location:phone_failed.html');
		exit;
		return;
	}
	//End.
	
	
	//Stroring the email, phone , and key matrix for storing in DB.
	$_SESSION['a'][0]=$email;
	$_SESSION['a'][1]=$phone;
	$_SESSION['a'][2]=$nums;
	//End.


	header('Location:registration_img1.php');

?>
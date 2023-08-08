<?php
session_start();
ob_start();

	include("db.php");

	//Getting key matrix from signup form.
	$nums=$_POST['num'];
	//End.

	
	//Checking whether user used all 1 to 9 numbers in the keymatrix and finding if any duplicates are present in key matrix.
	$unique_nums = array_unique($nums);
	if (count($unique_nums) != 9) {
		//echo "Please enter only unique numbers 1 to 9 in the grid. Duplicate values are not allowed";
		header('Location:KeyMatrix_failed.html');
		exit;
		return;
	}
	//End.
  

	
	
	//Stroring the email, phone , and key matrix for storing in DB.
	$_SESSION['b'][0]=$nums;
	$_SESSION['nums']=$nums;
	//End.


	header('Location:reg_new_img1.php');

?>
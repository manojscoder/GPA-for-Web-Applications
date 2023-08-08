
<?php
session_start();
session_destroy();
session_start();
ob_start();

include("db.php");

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

//Getting email and phone from login form.
$email=$_POST['email'];
$phone=$_POST['phone'];
//End.


$query="select * from major_project where email='$email' and phone='$phone'" ;
$result=mysqli_query($con,$query);			
if($result)
{
	$rows=mysqli_num_rows($result);
	if($rows>0)
	{ 				
		$row=mysqli_fetch_array($result);
		$_SESSION['c'][0]=$email;
        $_SESSION['c'][1]=$phone;
		$_SESSION['email']=$email;
		$_SESSION['phone']=$phone;
		header('Location: otp.php');				
	}
	else
	{	
		if($rows==0)
			header('Location:invalid_textpw.html');			
	}
}
		
?>
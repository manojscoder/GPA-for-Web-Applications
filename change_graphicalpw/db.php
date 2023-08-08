<?php 
		$server="localhost";
		$user="root";
		$password="";
		$database="major";
		$con=mysqli_connect($server,$user,$password,$database);
		if(!$con)
		echo 'Connection failed !';
?>	
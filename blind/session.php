<?php
	session_start();


	$con=mysqli_connect('localhost','root');
	/*if($con){
		echo "connection successful";
	}

	else{
		echo "no connection";
	}*/

	mysqli_select_db($con,'blind');
	$mail=$_POST['vmail'];
	$psd=$_POST['vpsd'];

	$q= "select * from user where name='$mail' && password='$psd'";
	$result=mysqli_query($con,$q);

	$num=mysqli_num_rows($result);
	if($num == 1){
		$_SESSION['vmail']=$mail;
		header('location:mail.php');
	} 
	else{
		header('location:error.php');
	}
	
?>
<?php
	session_start();
	$con=mysqli_connect('localhost','root');
	/*if($con){
		echo "connection successful";
	}else{
		echo "no connection";
	}*/
	mysqli_select_db($con,'blind');
	$vmail=$_POST['vmail'];
	$vpsd=$_POST['vpsd'];

	$q="select * from userdata where vmail='$vmail' and vpsd='$vpsd'";
	$result=mysqli_query($con,$q);

	$num=mysqli_num_rows($result);
	if($num==1){
		$_session['vmail']=$vmail;
		header('location:mail.php');
	}else{
		header('location:error.php');
	}
?>
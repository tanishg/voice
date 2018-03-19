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


 if (isset($_POST['name']) && isset($_POST['sub']) && isset($_POST['msg']));{
if (!empty($_POST['name']) && !empty($_POST['sub']) && !empty($_POST['msg'])){
    $name=$_POST['name'];
    $sub=$_POST['sub'];
    $msg=$_POST['msg'];
 		
 	$q=" select * from user where name='$name'  ";
	$result=mysqli_query($con,$q);

	$num=mysqli_num_rows($result);
	if($num == 1){
		$qy=" INSERT INTO mail (receiver,subject,message) values('$name','$sub','$msg') ";

	$res=mysqli_query($con,$qy);
	if($res == TRUE){
	$_SESSION['name']=$name;
	header('location:mail.php');
}

	}
			
		
	else{
		
		header('location:compose.php');
	}


} else {
	echo 'all fields are required';
}
 } 
 ?> 
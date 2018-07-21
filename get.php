<?php
$u_id=$_POST["user_id"];
$u_name=$_POST["user_name"];
$u_password=$_POST["user_password"];
$u_email=$_POST["user_email"];
include('DBcon.php');
if(!empty($u_name)){
	$query="INSERT INTO user(name,password,email,id) values('$u_name','$u_password','$u_email','$u_id')";
	mysql_query($query);
	echo"DONE";
	
	
}
?>

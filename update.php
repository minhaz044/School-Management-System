<?php
include('DBcon.php');
include('session.php');
$fname=$_POST["fname"];
$mname=$_POST["mname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];
$religion=$_POST["religion"];
$faname=$_POST["faname"];
$moname=$_POST["moname"];
$bdate=$_POST["bdate"];
$address=$_POST["address"];
$contact=$_POST["contact"];
$email=$_POST["email"];
$opassword=$_POST["opassword"];
$npassword=$_POST["npassword"];
$copassword=$_POST["copassword"];

$table_name=null; 
if(($npassword!=$copassword)){
?>
		<script type="text/javascript">
				alert("New Password And Confarm Password Must be match");window.location.href='updateinfo.php';
		</script>
<?php		
}

else if($opassword!=$login_password){
	?>
		<script type="text/javascript">
				alert("Wrong Password   ");window.location.href='updateinfo.php';
		</script>
<?php
}
else{
	
	
		
if($login_role=="Teacher" || $login_role=="Clark" ||$login_role=="Administator"){
	$query="UPDATE  teachersinfo SET fname='$fname',mname='$mname',lname='$lname',gender='$gender',religion='$religion',faname='$faname',moname='$moname',bdate='$bdate',address='$address',contact='$contact' WHERE id='$login_session'";
	
	
	}
else if($login_role=="Student" ){
	$query="UPDATE  teachersinfo SET fname='$fname',mname='$mname',lname='$lname',gender='$gender',religion='$religion',faname='$faname',moname='$moname',bdate='$bdate',address='$address',contact='$contact' WHERE id='$login_session'";
}
else {
	$table_name=null;
	echo "Wrong input";
}
$result=mysqli_query($con,$query);
$query2="UPDATE  signup SET password='$copassword' WHERE  id='$login_session'";
$result2=mysqli_query($con,$query2);
if($result && $result2){
	?>
		<script type="text/javascript">
				alert("Information Update Successfull.\n Back To Homepage");window.location.href='homepage.php';
		</script>
<?php
}
else{
	?>
		<script type="text/javascript">
				alert("Information Update Failed.\n Try Again");window.location.href='updateinfo.php';
		</script>
<?php
	
}	
	
}	

?>


























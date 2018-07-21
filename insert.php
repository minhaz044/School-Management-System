<?php
$fname=$_POST["fname"];
$mname=$_POST["mname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];
$religion=$_POST["religion"];
$cls=$_POST["cls"];
$serialno=$_POST["serialno"];
$faname=$_POST["faname"];
$moname=$_POST["moname"];
$bdate=$_POST["bdate"];
$address=$_POST["address"];
$contact=$_POST["contact"];
$email=$_POST["email"];
$crpassword=$_POST["crpassword"];
$copassword=$_POST["copassword"];
$role="Student";
/*****************************************password generation part****************************/


/*
/*****************************************ID  generation part****************************/

$year= (string) date("y");
if(strlen($serialno)==1){
	$id=$year.$cls."00".$serialno;
}
else if(strlen($serialno)==2){
	$id=$year.$cls."0".$serialno;
}
else if(strlen($serialno)==3){
	$id=$year.$cls.$serialno;
}
else {
 echo"Wrong Input";
}




/**************************************A fuction to generate Auto ID*********************************/


if($crpassword==$copassword){
	
	include('DBcon.php');
	$password=$crpassword;

	$query="INSERT INTO studentinfo(id,fname,mname,lname,gender,religion,sclass,faname,moname,bdate,address,contact) values ('$id','$fname','$mname','$lname','$gender','$religion','$cls','$faname','$moname','$bdate','$address','$contact')";

	$execute=mysqli_query($con,$query);
	if($execute)echo"DONE";
	else echo " Data insertion failed! </br> Try Again!";
	
	
	
	
	$query2="INSERT INTO signup(id,password,email,role) values ('$id','$password','$email','$role')";

	$execute2=mysqli_query($con,$query2);
	
	if($execute && $execute2){
	?>		
			<script type="text/javascript">
				alert("Add Student Sucessfully .\n Goto Homepage");window.location.href='homepage.php';
			</script>
<?php			
	}
	else {
?>
			<script type="text/javascript">
				alert("Data insertion for Add student is failed.\n Plz try again");window.location.href='homepage.php';
			</script>
<?php
	}	
	

	
	
	

	
	
}
else {
	?>
			<script type="text/javascript">
				alert("Password Doen Not match.\n Plz try again");window.location.href='ApplyOnline.php';
			</script>
<?php
}




?>

<?php
include('DBcon.php');
$fname=$_POST["fname"];
$mname=$_POST["mname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];
$religion=$_POST["religion"];
$serialno=$_POST["serialno"];
$faname=$_POST["faname"];
$moname=$_POST["moname"];
$bdate=$_POST["bdate"];
$address=$_POST["address"];
$contact=$_POST["contact"];
$email=$_POST["email"];
$crpassword=$_POST["crpassword"];
$copassword=$_POST["copassword"];
$role=$_POST["role"];
/*****************************************password generation part****************************/

if($crpassword==$copassword){
	
	$year= (string) date("y");
if(strlen($serialno)==1){

	$id=$year."00"."00".$serialno;
}
else if(strlen($serialno)==2){
	$id=$year."00"."0".$serialno;
}
else if(strlen($serialno)==3){
	$id=$year."00".$serialno;
}
else {
 echo"Wrong Input";
}







{
	$query="INSERT INTO teachersinfo(id,fname,mname,lname,gender,religion,faname,moname,bdate,address,contact) values ('$id','$fname','$mname','$lname','$gender','$religion','$faname','$moname','$bdate','$address','$contact')";

	$execute=mysqli_query($con,$query);
	if($execute){echo"DONE";}
	else {echo " Data insertion failed! </br> Try Again!";}
	
	
	
	
	$query2="INSERT INTO signup(id,password,email,role) values ('$id','$password','$email','$role')";

	$execute2=mysqli_query($con,$query2);
	if($execute2 && $execute){
		
?>		
			<script type="text/javascript">
				alert("Add Teacher Sucessfully .\n Goto Homepage");window.location.href='homepage.php';
			</script>
<?php			
	}
	else {
?>
			<script type="text/javascript">
				alert("Data insertion for add teacher is failed.\n Plz try again");window.location.href='homepage.php';
			</script>
<?php
	};
	
	

	
	
	
}
	
	
	
	
}
else {
	
?>
			<script type="text/javascript">
				alert("Create Password And Confarm Password Must be match.\n Plz try again");window.location.href='homepage.php';
			</script>
<?php
}


?>

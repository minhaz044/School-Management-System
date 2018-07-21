<?php
include("backtohomepage.php");
include("session.php");
?>
<html>

<head>
<title>Add Fees Type</title>
</head>
<body>

   

<form style=" margin-left: 350px; margin-top: 80px;"action="" method="POST">

<!--------------------Add Subject------------------->
 

 <p> Fees Type Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="text" name="feestypename" required ></br>
 </p>


 
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="addfeestype" value="Add Fees Type"></p>

</form>


</body>
</html>




<?php

if(isset($_POST["addfeestype"])){
	include("DBcon.php");
	$feestypename=$_POST["feestypename"];
	
	$query="INSERT INTO feesdescription(feestypename) values('$feestypename')";
	$execute=mysqli_query($con,$query) or die(mysqli_error($con));
	if($execute){
?>
		<script type="text/javascript">
				alert("Add Fees Type Successfull.\n Plz try again");window.location.href='addfeestype.php';
		</script>
<?php
	}
	else{
?>
		<script type="text/javascript">
				alert("Data INsertion Failed.\n Plz try again");window.location.href='addfeestype.php';
		</script>
<?php
	}


}

?>
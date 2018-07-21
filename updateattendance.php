<?php
include("backtohomepage.php");
include('session.php');
?>
<html>

<head>
<title>Remove Class Room</title>
</head>
<body>

   



<!--------------------Online apply------------------->
 


<form style=" margin-left: 350px; margin-top: 80px;"action="" method="POST">
<p>Student Id:&nbsp;
<input type="number" name ="id" required>
 </p>

<p>Date:&nbsp;
<input type="date" name ="date" required>
 </p>
 <p>Attendance:&nbsp;
 <select name="attendance" required>
 <option value="">Select Attendance </option>
    <option value=""> ---------------</option>
    <option value="P">Present </option>
    <option value="A"> Absent</option>
	</select>

 </p>

 
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name ="updateattendance"value="Apply">

</form>
</body>
</html>
<?php 
if(isset($_POST["updateattendance"])){
	include("DBcon.php");
	
	$id=$_POST["id"];
	//$cls=$_POST["cls"];
	$date=$_POST["date"];
	$attendance=$_POST["attendance"];
	
	
	$query="UPDATE attandance SET remark='$attendance' WHERE id='$id' AND date='$date'";
	
	
	
	$execute=mysqli_query($con,$query) or die(mysqli_error($con));
	if($execute && mysql_affected_rows()!=0){
?>
		<script type="text/javascript">
				alert("Attendance UpdateSuccessfull.\n Back To Previous Page");window.location.href='updateattendance.php';
		</script>
<?php
	}
	else{
?>
		<script type="text/javascript">
				alert("Data Update Failed.\n Plz try again");window.location.href='updateattendance.php';
		</script>
<?php
	}
}




?>